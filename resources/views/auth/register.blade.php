@extends('appwelcome')
 
@section('content')
   
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">NOUVEAU UTILISATEUR</h3>
                <form method="POST" action="{{ route('register') }}">
                @csrf

        <!-- Name -->
                  <div class="form-group">    
                    <x-input-label for="name" :value="__('Nom')" />
                    <x-text-input id="name" class="block mt-1 w-full form-control p_input" type="text" name="name" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />  
                  </div>
                  
        <!-- second Name -->
                  <div class="form-group">      
                    <x-input-label for="prenom" :value="__('Prénom(s)')" />
                    <x-text-input id="prenom" class="block mt-1 w-full form-control p_input" type="text" name="prenom" :value="old('prenom')" required autofocus />
                    <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                  </div>
                  
                  
        <!-- fonction -->
        <div class="form-group">      
                    <x-input-label for="fonction" :value="__('Fonction')" />
                    <select id="fonction" class="form-control" name="fonction" :value="old('fonction')" required autofocus>
                        <option></option>
                        <option>Administrateur</option>
                        <option>Sce Informatique</option>
                        <option>Sce Contr$ole</option>
                        <option>Sce Livraison</option>
                        <option>Sce Production</option>
                        <option>Sce Commerciale</option>
                    </select>
                  </div>

        <!-- Autorisation -->
        <div class="form-group">      
                    <x-input-label for="autorisation" :value="__('Autorisation')" />
                    <select id="autorisation" class="form-control" name="autorisation" :value="old('autorisation')" required autofocus>
                        <option></option>
                        <option>Admin</option>
                        <option>Livre</option>
                        <option>Contrôle</option>
                        <option>Stock</option>
                    </select>
                  </div>

        <!-- Email Address -->
                  <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full form-control p_input" type="email" name="email" :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>

        <!-- Password -->
                  <div class="form-group">
                    <x-input-label for="password" :value="__('Mot de passe')" />

                    <x-text-input id="password" class="block mt-1 w-full form-control p_input"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2 form-control p_input" />
                  </div>

        <!-- Confirm Password -->
                  <div class="form-group">
                    <x-input-label for="password_confirmation" :value="__('Confirmer votre mot de passe')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full form-control p_input"
                                    type="password"
                                    name="password_confirmation" required />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 form-control p_input" />
                  </div>

                  <div class="d-flex">
                    <button class="btn btn-facebook col mr-2"> Valider </button>
                    <a href="{{ route('login') }}" class="btn btn-google col">Annuler </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
 

 
@endsection