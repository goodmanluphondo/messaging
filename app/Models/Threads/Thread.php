<?php

namespace App\Models\Threads;

use App\Models\Messages\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Thread extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * Thread participants
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->oldest('created_at')
            ->withPivot('seen_at')
            ->withTimestamps();
    }

    /**
     * Other thread participants
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function others(): BelongsToMany
    {
        return $this->users()->where('id', '!=', Auth::id());
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class)->latest();
    }
}
