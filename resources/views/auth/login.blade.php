<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-application-logo />
        </x-slot>
        <x-form-errors></x-form-errors>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
             <button class=" mt-2 block w-full px-4 py-2 bg-blue-500 hover:bg-blue-700 rounded font-semibold text-xs text-white uppercase tracking-widest focus:outline-none disabled:opacity-25 transition mb-2">
                    {{ __('Log in') }}
            </button>
            <a class="underline block mt-3 text-sm text-blue-600 hover:text-blue-900" href="{{ route('password.request') }}">
                    {{ __("Forgot Password?") }}
            </a>
            <a class="underline block mt-3 text-sm text-blue-600 hover:text-blue-900" href="{{ route('register') }}">
                    {{ __("Don't have an account? Register") }}
            </a>

        </form>
    </x-jet-authentication-card>
</x-guest-layout>
