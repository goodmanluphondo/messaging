<x-page.container>
    <form x-data="{open: false}" action="#" class="space-y-6" wire:submit.prevent="start">
        <div x-cloak x-show="open">
            <div class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20" role="dialog" aria-modal="true">
                <div
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity" aria-hidden="true"
                ></div>

                <div
                    x-data="{
                        users: [],
                        search(e) {
                            fetch(`/api/users/find?q=${e.target.value}`)
                                .then(res => res.json())
                                .then(res => {
                                    this.users = res;
                                });
                        },
                        attachUser(user) {
                            @this.call('attachUser', user);
                            this.$refs.search.value = '';
                            this.users = [];
                            open = false;
                        }
                    }"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="mx-auto max-w-xl transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all"
                >
                    <div class="relative">
                        <svg class="pointer-events-none absolute top-3.5 left-4 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                        <input type="text" class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-800 placeholder-gray-400 focus:ring-0 sm:text-sm" placeholder="Find user" role="combobox" aria-expanded="false" aria-controls="options" autocomplete="off" x-on:input.debounce.500="search" x-ref="search">
                    </div>

                    <ul class="max-h-72 scroll-py-2 overflow-y-auto py-2 text-sm text-gray-800" id="options" role="listbox">
                        <template x-for="user in users" x-key="user.id">
                            <li class="hover:bg-cyan-600 hover:text-white cursor-pointer select-none px-4 py-2">
                                <a href="#" x-on:click="attachUser(user)" x-text="user.name" class="hover:bg-cyan-600 hover:text-white cursor-default select-none px-4 py-2"></a>
                            </li>

                        </template>
                    </ul>

                    <template x-if="!users.length">
                        <p  class="p-4 text-sm text-gray-500">No people found.</p>
                    </template>
                </div>
            </div>
        </div>

        {{-- <div x-data="{
            users: [],
            search(e) {
                fetch(`/api/users/find?q=${e.target.value}`)
                    .then(res => res.json())
                    .then(res => {
                        this.users = res;
                    });
            },
            attachUser(user) {
                @this.call('attachUser', user);
                this.$refs.search.value = '';
                this.users = [];
            }
        }">
            <div>
                <label for="user" class="sr-only">User</label>
                <input type="text" autocomplete="off" placeholder="Find user" x-on:input.debounce.500="search" x-ref="search">
            </div>

            <template x-for="user in users" x-key="user.id">
                <a href="#" x-on:click="attachUser(user)" x-text="user.name" class="block"></a>
            </template>
        </div> --}}

        <div>
            <div class="md:flex md:space-x-8 md:items-start md:justify-between">
                <div class="flex flex-wrap space-x-2">
                    @foreach ($users as $index => $user)
                    <span class="py-1 px-3 rounded-full bg-cyan-600 font-medium text-xs text-white uppercase">
                        {{ $user['name'] }}
                    </span>
                    @endforeach
                </div>
                <x-button.primary x-on:click.prevent="open = true">
                    Add Recipient
                </x-button.primary>
            </div>
        </div>

        <div>
            <div class="flex items-center" aria-orientation="horizontal" role="tablist">
                <button id="tabs-1-tab-1" class="text-gray-900 bg-gray-100 hover:bg-gray-200 px-3 py-1.5 border border-transparent text-sm font-medium rounded-md" aria-controls="tabs-1-panel-1" role="tab" type="button">Compose</button>
            </div>
            <div class="mt-2">
                <div id="tabs-1-panel-1" class="p-0.5 -m-0.5 rounded-lg" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                    <label for="comment" class="sr-only">Message</label>
                    <div>
                        <textarea rows="5" name="comment" id="comment" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Type a message" wire:model="body"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end">
            <x-button.primary type="submit">
                {{__('Start Conversation')}}
            </x-button.primary>
        </div>
    </form>
</x-page.container>
