<x-guest-layout>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        @include('auth._partials.logo.complete')
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            {{__('Create a new account')}}
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
            Or
            <a href="{{route('login')}}" class="font-medium text-cyan-600 hover:text-cyan-500">
                {{__('sign in')}}
            </a>
        </p>
    </div>

    @include('auth._partials.errors.validation')

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" action="{{route('register')}}" method="POST">
                @csrf
                @include('auth._partials.forms.register')
            </form>
        </div>
    </div>
</x-guest-layout>
