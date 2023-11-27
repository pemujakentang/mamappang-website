<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\form;
use function Livewire\Volt\layout;

layout('layouts.guest');

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirect(session('url.intended', RouteServiceProvider::HOME), navigate: true);
};

?>

<div class="font-averialibre">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label class="font-averialibre text-[#992300] text-xl" for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email"
                class="block mt-1 w-full border-2 border-[#992300] bg-[#FFDBA3]" type="email" name="email" autofocus
                autocomplete="username" />
            {{-- <x-input-error :messages="$errors->get('form.email')" class="mt-2" /> --}}
            @error('form.email')
                <x-input-error :messages="$message" class="mt-2" />
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-4 relative">
            <x-input-label class="font-averialibre text-[#992300] text-xl" for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password"
                class="block mt-1 w-full border-2 border-[#992300] bg-[#FFDBA3]" type="password" name="password"
                autocomplete="current-password" />
            <div class="absolute end-0 top-1/2 mt-1 pr-3 flex items-center text-sm leading-5 hover:cursor-pointer">
                <svg class="h-6 text-orange-800" fill="none" onclick="togglePasswordVisibility()" id="showIcon"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor"
                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                    </path>
                </svg>

                <svg class="h-6 text-orange-800 hidden" fill="none" onclick="togglePasswordVisibility()"
                    id="hideIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path fill="currentColor"
                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07a32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                    </path>
                </svg>
            </div>
            {{-- <x-input-error :messages="$errors->get('form.password')" class="mt-2" /> --}}

        </div>
        @error('form.password')
            <x-input-error :messages="$message" class="mt-2" />
        @enderror
        <div class="relative w-full min-w-[200px] text-center">
            <a class="font-averialibre text-lg text-orange-700">Tidak punya akun?</a>
            <a class="text-blue-600 hover:text-blue-500 font-averialibre text-lg" href="/register">SIGN UP</a>
        </div>
        <script>
            function togglePasswordVisibility() {
                const passwordInput = document.getElementById('password');
                const showIcon = document.getElementById('showIcon');
                const hideIcon = document.getElementById('hideIcon');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    showIcon.style.display = 'none';
                    hideIcon.style.display = 'block';
                } else {
                    passwordInput.type = 'password';
                    showIcon.style.display = 'block';
                    hideIcon.style.display = 'none';
                }
            }
        </script>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit"
                class="inline-flex items-center px-4 py-2 rounded-md font-semibold text-sm transition ease-in-out duration-150 ms-3 text-white bg-[#E16F25] border-2 border-[#B9480F]">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</div>
