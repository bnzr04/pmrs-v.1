<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img src="{{url('img/logo.png')}}" width="70" style="margin:auto;filter:invert(100%)">
            <a href="/">
                <h1 style="letter-spacing:5px;font-size:25px" class="text-white"><strong>DOCTOR LOGIN</strong></h1>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Username -->
            <div class="mt-4">
                <x-input-label for="username" :value="__('USERNAME')" style="letter-spacing: 3px;" />

                <x-text-input id="username" class="block mt-1 w-full hover:bg-gray-200 focus:bg-white" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('PASSWORD')" style="letter-spacing: 3px;" />

                <x-text-input id="password" class="block mt-1 w-full hover:bg-gray-200 focus:bg-white" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <!-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> -->

            <div class="flex items-center justify-end mt-4">
                <!-- @if (Route::has('password.request') == false)
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif -->

                <x-primary-button class="ml-4 bg-purple-500 hover:bg-purple-700">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>