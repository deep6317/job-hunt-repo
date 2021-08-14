<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img class="mt-5" src="{{asset('assets/images/newlogopng.png')}}" height="120" width="120" alt="" srcset="">
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">
                <!-- Name -->
                <div class="col-md-6">
                    <x-label for="name" :value="__('Name')" />
    
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>
    
                <!-- Email Address -->
                <div class="mt-4 col-md-6">
                    <x-label for="email" :value="__('Email')" />
    
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
    
                <!-- Password -->
                <div class="mt-4 col-md-6">
                    <x-label for="password" :value="__('Password')" />
    
                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>
    
                <!-- Confirm Password -->
                <div class="mt-4 col-md-6">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
    
                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
                </div>
                <!-- Mobile Number -->
                <div class="mt-4 col-md-6">
                <x-label for="mobile_number" :value="__('Mobile Number')" />
    
                <x-input id="mobile_number" class="block mt-1 w-full"
                                type="text"
                                name="mobile_number" required />
                </div>
                <!-- Address -->
                <div class="mt-4 col-md-6">
                    <x-label for="address" :value="__('Address')" />
        
                    <x-input id="address" class="block mt-1 w-full"
                                    type="text"
                                    name="address" required />
                </div>
                     <!-- Country -->
                <div class="mt-4 col-md-6">
                    <x-label for="country" :value="__('Country')" />
        
                    <x-input id="country" class="block mt-1 w-full"
                                    type="text"
                                    name="country" required />
                </div>
                <div class="row mt-4">
                    <label class="form-check-label p-2" for="inlineRadio1">Are you currently employee?</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ce" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="ce" id="inlineRadio2" value="0"
                            checked="checked">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="/">
                        {{ __('Back to Home') }}
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
