<div>
    <label for="name" class="block text-sm font-medium text-gray-700">
        {{__('Name')}}
    </label>
    <div class="mt-1">
    <input id="name" name="name" type="text" autocomplete="name" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
    </div>
</div>

<div>
    <label for="email" class="block text-sm font-medium text-gray-700">
        {{__('Email address')}}
    </label>
    <div class="mt-1">
    <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
    </div>
</div>

<div>
    <label for="password" class="block text-sm font-medium text-gray-700">
        {{__('Password')}}
    </label>
    <div class="mt-1">
    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
    </div>
</div>

<div>
    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
        {{__('Password')}}
    </label>
    <div class="mt-1">
    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
    </div>
</div>

<div class="flex items-center justify-between">
    <div class="flex items-center">
    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-cyan-600 focus:ring-cyan-500 border-gray-300 rounded">
    <label for="remember-me" class="ml-2 block text-sm text-gray-900">
        {{__('Remember me')}}
    </label>
    </div>

    <div class="text-sm">
    <a href="#" class="font-medium text-cyan-600 hover:text-cyan-500">
        {{__('Forgot your password?')}}
    </a>
    </div>
</div>

<div>
    <x-button.primary type="submit">
        {{__('Sign up')}}
    </x-button.primary>
</div>
