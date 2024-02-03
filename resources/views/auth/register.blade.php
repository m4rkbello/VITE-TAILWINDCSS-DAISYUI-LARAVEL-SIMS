<x-guest-layout>

    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
          <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">Register now!</h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
          </div>
          <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <form method="POST" action="{{ route('register') }}" class="card-body">
                @csrf
                <div class="form-control">
                    <label class="label">
                        <span class="label-text" for="name">{{ __('Name') }}</span>
                    </label>
                    <input id="name" class="input input-bordered" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    @error('name')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text" for="email">{{ __('Email') }}</span>
                    </label>
                    <input id="email" class="input input-bordered" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    @error('email')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-control">
                    <label class="label" for="password">{{ __('Password') }}</label>
                    <input id="password" class="input input-bordered"type="password" name="password" required autocomplete="new-password" />
                    @error('password')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-control">
                    <label class="label" for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="input input-bordered" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-primary">{{ __('Register') }}</button>
                </div>
                <div class="form-control mt-4">
                    <label class="label">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </label>
                </div>
            </form>
          </div>
        </div>
      </div>

</x-guest-layout>
