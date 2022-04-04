<x-base-layout>
    <div class="min-h-full flex items-center justify-center bg-gray-100">
        <div class="space-y-8">
            <div class="flex items-center justify-center h-20 w-20 bg-cyan-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-600 lg:w-20">
                <span class="font-extrabold text-white text-4xl">{{__('m')}}</span>
            </div>
            <h1 class="font-black text-4xl">Welcome to G-Messaging</h1>
            <div class="flex space-x-8 items-center justify-center">
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('register')}}">Register</a>
            </div>
        </div>
    </div>
</x-base-layout>
