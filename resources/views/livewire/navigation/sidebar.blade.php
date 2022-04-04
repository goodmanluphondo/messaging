<nav aria-label="Sidebar" class="hidden lg:block lg:flex-shrink-0 lg:bg-gray-800 lg:overflow-y-auto">
    <div class="relative w-20 flex flex-col p-3 space-y-3">
        <x-nav.item href="{{ route('threads.create') }}" :active="request()->routeIs('threads.create')">
            <span class="sr-only">Compose</span>
            <x-icon.pencil-alt />
        </x-nav.item>

        <x-nav.item href="{{ route('threads.index') }}" :active="request()->routeIs('threads.index')">
            <span class="sr-only">Inbox</span>
            <x-icon.inbox />
        </x-nav.item>
    </div>
</nav>
