@extends('appwelcome')
 
 @section('content')

   
 
 <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">CONNEXION</h3>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                @csrf
                  <!-- Email Address -->
                  <div class="form-group">
                    <div>
                        <x-input-label for="email" :value="__('Email *')" />
                        <x-text-input id="email" class="block mt-1 w-full form-control p_input" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                  </div>

                    <!-- Password -->
                  <div class="form-group">
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password *')" />
                        <x-text-input id="password" class="block mt-1 w-full form-control p_input"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 " />
                    </div>
                  </div>

                  <!--
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  -->

                  <div class="text-center">
                    <div class="flex items-center justify-end mt-4">

                        <x-primary-button class="btn btn-primary btn-block enter-btn">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                  </div>
                  <!--<p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>-->
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>

 @endsection