<?php

use App\Livewire\Actions\Logout;

$logout = function (Logout $logout) {
    $logout();

    $this->redirect('/', navigate: true);
};

?>

<nav x-data="{ open: false }" class="font-averialibre">
    <!-- Primary Navigation Menu -->
    <div class="">
        <div class="flex justify-center">
            <div class="hidden md:flex justify-center w-full h-16 pt-3 pr-5 items-center z-10 mt-2">
                <!-- Logo -->
                <div class="items-center justify-center z-10 hidden md:flex">
                    <a href="{{ route('home') }}">
                        <img class="object-cover h-16" src="/images/logo.webp" alt="Logo">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div
                    class="hidden gap-2 sm:flex w-[75%] h-full px-10 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-between z-10">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('bulk-order')" :active="request()->routeIs('bulk-order')" wire:navigate>
                        {{ __('Bulk Order') }}
                    </x-nav-link>
                    <x-nav-link :href="route('franchise')" :active="request()->routeIs('franchise')" wire:navigate>
                        {{ __('Franchise') }}
                    </x-nav-link>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                        {{ __('About Us') }}
                    </x-nav-link>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                        {{ __('My Dashboard') }}
                    </x-nav-link>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center h-16">
                    <x-dropdown align="top" class="">
                        <x-slot name="trigger">
                            <button
                                class="hover:scale-[1.2] duration-75 flex ml-3 rounded-full border-2 border-yellow-800 bg-orange-300 items-center justify-center h-12 px-2">
                                <div class="w-8 flex items-center justify-center">
                                    <img class="object-cover invert" src="/images/avatar.webp" alt="Logo">
                                </div>
                                @auth
                                    <div x-data="{ name: '{{ auth()->user()->firstname }}' }" x-text="name"
                                        x-on:profile-updated.window="name = $event.detail.firstname"
                                        class="text-white mx-1"></div>
                                @else
                                    <div class="text-white mx-1">Login/Register</div>
                                @endauth

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content" class="rounded-sm bg-orange-800 text-white">
                            @auth
                                <div class="">
                                    <a class="block w-full px-4 py-2 text-start text-sm leading-5 transition duration-150 ease-in-out hover:cursor-pointer"
                                        href="/profile">
                                        {{ __('Profile') }}
                                    </a>

                                    <!-- Authentication -->
                                    <a wire:click="logout"
                                        class="block w-full px-4 py-2 text-start text-sm leading-5 transition duration-150 ease-in-out hover:cursor-pointer">
                                        {{ __('Log Out') }}
                                    </a>
                                </div>
                            @else
                                <div class="">
                                    <a class="block w-full px-4 py-2 text-start text-sm leading-5 transition duration-150 ease-in-out hover:cursor-pointer"
                                        href="/login">
                                        {{ __('Login') }}
                                    </a>

                                    <!-- Authentication -->
                                    <a
                                        class="block w-full px-4 py-2 text-start text-sm leading-5 transition duration-150 ease-in-out" href="/register">
                                        {{ __('Register') }}
                                    </a>
                                </div>
                            @endauth

                        </x-slot>
                    </x-dropdown>
                </div>
            </div>


        </div>
    </div>

    <div class="w-full fixed flex md:hidden justify-center z-40">
        <!-- Hamburger -->
        <div class="md:hidden fixed rounded-b-2xl border-x-2  border-orange-300  bg-orange-700  justify-center z-40 w-[97%] flex items-center flex-col"
            :class="{ 'rounded-b-2xl border-b-2': !open, 'rounded-none': open }">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-md text-orange-300 transition duration-150 ease-in-out w-full">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }"
            class="hidden left-0 w-[97%] px-3 pt-10 bg-orange-300 rounded-b-xl">
            <div class="pt-2 pb-3">
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('bulk-order')" :active="request()->routeIs('bulk-order')" wire:navigate>
                    {{ __('Bulk Order') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('franchise')" :active="request()->routeIs('franchise')" wire:navigate>
                    {{ __('Franchise') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    {{ __('About Us') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    {{ __('My Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-orange-600 dark:border-gray-600">
                @auth
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200" x-data="{ name: '{{ auth()->user()->name }}' }"
                            x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                        <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-responsive-nav-link>
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </button>
                    </div>
                @else
                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('login')" wire:navigate>
                            {{ __('Login') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <a href="/register" class="w-full text-start">
                            <x-responsive-nav-link>
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
