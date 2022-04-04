<div x-data="{open: false}" class="flex items-center space-x-8">
    <div class="relative inline-block text-left">
        <button x-on:click.prevent="open = ! open" type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600" id="menu-1-button" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">{{ __('Open user menu') }}</span>
            <x-user.avatar />
        </button>

        <div
            x-cloak
            x-show="open"
            x-on:click.away="open = false"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="origin-top-right absolute z-30 right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu"
            aria-orientation="vertical"
            aria-labelledby="menu-1-button"
            tabindex="-1"
        >
            <div class="py-1" role="none">
                <x-context-menu.item :href="route('profile.show')" :active="request()->routeIs('profile.show')">
                    {{__('Profile')}}
                </x-context-menu.item>

                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <x-context-menu.item
                        onclick="
                        event.preventDefault();
                        this.closest('form').submit();"
                        :href="route('logout')"
                        :active="false"
                    >
                        {{__('Sign Out')}}
                    </x-context-menu.item>
                </form>
            </div>
        </div>
    </div>
</div>
