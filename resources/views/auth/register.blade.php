<x-guest-layout>
  <x-auth-card>

    <x-slot name="logo">
      <a href="/" class="w-20 h-20 fill-current text-gray-500"><img
          src="{{ asset('images/aucaLogo.png') }}"
          alt="Auca logo" width="400"></a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Student Id -->
      <div class="mt-4">
        <x-label for="rollno" :value="__('Student Id')" />

        <x-input id="rollno" class="block mt-1 w-full" type="text" name="rollno" required autofocus />
      </div>

      <!-- Email Address -->
      <div class="mt-4">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full"
          type="password"
          name="password"
          required autocomplete="new-password" />
      </div>

      <!-- Confirm Password -->
      <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class="block mt-1 w-full"
          type="password"
          name="password_confirmation" required />
      </div>

      <x-button class="mt-2">
        {{ __('Register') }}
      </x-button>
      <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
          {{ __('Already registered?') }}
        </a>

      </div>
    </form>

  </x-auth-card>
</x-guest-layout>
