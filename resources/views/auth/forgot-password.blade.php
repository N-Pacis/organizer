<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-application-logo />
        </x-slot>

        <div class="mb-4 text-lg font-semibold text-center text-gray-600">
            {{ __('Enter your email to reset your password') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-form-errors></x-form-errors>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
            <button class=" mt-2 block w-full px-4 py-2 bg-blue-500 hover:bg-blue-700 rounded font-semibold text-xs text-white uppercase tracking-widest focus:outline-none disabled:opacity-25 transition mb-2">
                    {{ __('Email Password Reset Link') }}
            </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
