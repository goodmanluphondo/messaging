<div x-data="{mobile: false}">
    <div class="absolute inset-y-0 right-0 pr-4 flex items-center sm:pr-6 lg:hidden">
        <button x-on:click.prevent="mobile = true" type="button" class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-600">
            <span class="sr-only">Open main menu</span>
            <x-icon.menu />
        </button>
    </div>

    <div x-cloak x-show="mobile" class="fixed inset-0 z-40 lg:hidden" role="dialog" aria-modal="true">
        <div
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="hidden sm:block sm:fixed sm:inset-0 sm:bg-gray-600 sm:bg-opacity-75"
            aria-hidden="true"
        ></div>

        <nav
            x-transition:enter="transition ease-out duration-150 sm:ease-in-out sm:duration-300"
            x-transition:enter-start="transform opacity-0 scale-110 sm:translate-x-full sm:scale-100 sm:opacity-100"
            x-transition:enter-end="transform opacity-100 scale-100 sm:translate-x-0 sm:scale-100 sm:opacity-100"
            x-transition:leave="transition ease-in duration-150 sm:ease-in-out sm:duration-300"
            x-transition:leave-start="transform opacity-100 scale-100 sm:translate-x-0 sm:scale-100 sm:opacity-100"
            x-transition:leave-end="transform opacity-0 scale-110 sm:translate-x-full sm:scale-100 sm:opacity-100"
            class="fixed z-40 inset-0 h-full w-full flex flex-col justify-between bg-white sm:inset-y-0 sm:left-auto sm:right-0 sm:max-w-sm sm:w-full sm:shadow-lg"
            aria-label="Global"
        >
            <div class="h-16 flex items-center justify-between px-4 sm:px-6">
                <a href="{{route('threads.index')}}">
                    <x-topbar.logo />
                </a>
                <button x-on:click.prevent="open = false" type="button" class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-600">
                    <span class="sr-only">Close main menu</span>
                    <x-icon.x />
                </button>
            </div>

            <div class="mt-2 max-w-8xl mx-auto px-4 sm:px-6">
                <div class="relative text-gray-400 focus-within:text-gray-500">
                <label for="mobile-search" class="sr-only">Search all inboxes</label>
                <input id="mobile-search" type="search" placeholder="Search all inboxes" class="block w-full border-gray-300 rounded-md pl-10 placeholder-gray-500 focus:border-blue-600 focus:ring-blue-600">
                <div class="absolute inset-y-0 left-0 flex items-center justify-center pl-3">
                    <!-- Heroicon name: solid/search -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                </div>
            </div>
            <div class="border-t border-gray-200 pt-4 pb-3">
                <div class="max-w-8xl mx-auto px-4 flex items-center sm:px-6">
                <div class="flex-shrink-0">
                    <x-user.avatar />
                </div>
                <div class="ml-3 min-w-0 flex-1">
                    <div class="text-base font-medium text-gray-800 truncate">{{Auth::user()->name}}</div>
                    <div class="text-sm font-medium text-gray-500 truncate">{{Auth::user()->email}}</div>
                </div>
                </div>
                <div class="mt-3 max-w-8xl mx-auto px-2 space-y-1 sm:px-4">
                <a href="{{route('profile.show')}}" class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">
                    {{__('Your Profile')}}
                </a>

                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <a
                        onclick="
                        event.preventDefault();
                        this.closest('form').submit();"
                        href="#"
                        class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50"
                    >
                        {{__('Sign out')}}
                    </a>
                </form>
                </div>
            </div>
        </nav>
    </div>
</div>
