<aside class="hidden xl:block xl:flex-shrink-0 xl:order-first">
    <div class="h-full relative flex flex-col w-96 border-r border-gray-200 bg-gray-100">
        <div class="flex-shrink-0">
            <div class="h-16 bg-white px-6 flex flex-col justify-center">
                <div class="flex items-baseline space-x-3">
                    {{-- <h2 class="text-lg font-medium text-gray-900">Inbox</h2> --}}
                    <p class="text-sm font-medium text-gray-500">
                        @if ($count = $threads->count())
                            @if($count < 1 && $count > 1)
                                {{$count}} conversations
                            @else
                                {{$count}} conversation
                            @endif
                        @endif
                    </p>
                </div>
            </div>
            <div class="border-t border-b border-gray-200 bg-gray-50 px-6 py-2 text-sm font-medium text-gray-500">Sorted by date</div>
        </div>

        <nav aria-label="Message list" class="min-h-0 flex-1 overflow-y-auto">
            <ul role="list" class="border-b border-gray-200 divide-y divide-gray-200">
            @if ($threads)
                @foreach ($threads as $thread)
                <a href="{{ route('threads.show', $thread) }}">
                    <li
                    @if(!empty($current) && $current->id === $thread->id)
                        class="relative bg-cyan-100 py-5 px-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600"
                    @else
                        @if(!optional($thread->pivot)->seen_at)
                        class="relative bg-yellow-100 py-5 px-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600"
                        @else
                        class="relative bg-white py-5 px-6 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600"
                        @endif
                    @endif
                    >
                        @foreach ($thread->users as $user)
                        <span>{{ $user->present()->name() }}</span>
                        @endforeach
                        <div>{{ $thread->messages->first()->body ?? '' }}</div>
                    </li>
                </a>
                @endforeach
            @endif
            </ul>
        </nav>
    </div>
</aside>
