<x-guest-layout>
    <div class="">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    {{-- <x-auth-session-status class="" :status="session('status')" /> --}}

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Email</label>
            <input id="email" class="" type="email" name="email" :value="old('email')" required autofocus />
            <div>
                {{ implode('', $errors->get('email')) }}
            </div>
        </div>

        <div class="">
            <button>
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</x-guest-layout>
