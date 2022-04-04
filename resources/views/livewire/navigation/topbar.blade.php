<header class="flex-shrink-0 relative h-16 bg-white flex items-center">
    <x-topbar.logo />

    <!-- Picker area -->
    <div class="mx-auto lg:hidden">
        <div class="relative">
            <label for="inbox-select" class="sr-only">Choose inbox</label>
            <select id="inbox-select" class="rounded-md border-0 bg-none pl-3 pr-8 text-base font-medium text-gray-900 focus:ring-2 focus:ring-blue-600">
                <option value="/open">Open</option>
                <option value="/archived">Archived</option>
                <option value="/assigned">Assigned</option>
                <option value="/flagged">Flagged</option>
                <option value="/spam">Spam</option>
                <option value="/drafts">Drafts</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center justify-center pr-2">
                <x-icon.chevron-down />
            </div>
        </div>
    </div>

    <!-- Desktop nav area -->
    <div class="hidden lg:min-w-0 lg:flex-1 lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <div class="max-w-2xl relative text-gray-400 focus-within:text-gray-500">
                <label for="desktop-search" class="sr-only">Search all inboxes</label>
                <input id="desktop-search" type="search" placeholder="Search all inboxes" class="block w-full border-transparent pl-12 placeholder-gray-500 focus:border-transparent sm:text-sm focus:ring-0">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center justify-center pl-4">
                    <x-icon.search />
                </div>
            </div>
        </div>

        <div class="ml-10 pr-4 flex-shrink-0 flex items-center space-x-10">
            <x-topbar.user-menu />
        </div>
    </div>

    @livewire('navigation.mobile')
</header>
