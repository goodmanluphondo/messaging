<?php

namespace App\Presenters\Users;

use App\Presenters\Presenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserPresenter extends Presenter
{
    protected  $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function name()
    {
        if($this->model->id === Auth::id()) {
            return 'Me';
        }

        return $this->model->name;
    }
}
