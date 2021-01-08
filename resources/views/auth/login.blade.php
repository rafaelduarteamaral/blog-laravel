<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="container">
            <div class="boxLogin">
                <form method="POST" action="{{ route('login') }}" >
                    @csrf

                    <!-- Email Address -->
                    <div class="BoxInputsLogin">
                        <div style="display: flex; justify-content: center; margin-bottom: 20px">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4" style="display: flex; justify-content: center">
                            <x-label for="password" :value="__('Senha')" />
                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar de mim') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4"  style="display: flex; justify-content: center; flex-direction: column">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha?') }}
                            </a>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="/register">
                                Ainda não é cadastrado?
                            </a>
                        @endif

                        <x-button class="buttonLogar">
                            {{ __('Login') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
    }

    .boxLogin {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40%;
        height: 50%;
        border-radius: 10px;
        background: #FFDB87;
    }
</style>