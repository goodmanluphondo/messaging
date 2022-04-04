<x-base-layout>
    <div class="min-h-full flex items-center justify-center bg-gray-100 px-8 md:px-6 lg:px-4">
        <div class="mx-auto space-y-8 text-center">
            <div class="mx-auto flex items-center justify-center h-20 w-20 bg-cyan-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-600 lg:w-20">
                <span class="font-extrabold text-white text-4xl">{{__('m')}}</span>
            </div>
            @include('welcome._partials.greetings.welcome')
            <div class="flex space-x-8 items-center justify-center">
                @include('welcome._partials.links.login')
                @include('welcome._partials.links.register')
            </div>
        </div>
    </div>
</x-base-layout>
