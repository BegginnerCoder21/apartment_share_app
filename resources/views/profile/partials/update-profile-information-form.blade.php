
   

<section>
    
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informations du profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Mettez à jour les informations votre profil.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="firstname" :value="__('Nom')" />
            <x-text-input id="firstname" name="firstname" type="text" class="mt-1 block w-full" :value="old('firstname', $user->firstname)" required autofocus autocomplete="firstname" />
            <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
        </div>
        <div>
            <x-input-label for="lastname" :value="__('Prenom')" />
            <x-text-input id="lastname" name="lastname" type="text" class="mt-1 block w-full" :value="old('lastname', $user->lastname)" required autofocus autocomplete="lastname" />
            <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
        </div>

        
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="login" name="login" type="email" class="mt-1 block w-full" :value="old('login', $user->login)" required autocomplete="login" />
                <x-input-error class="mt-2" :messages="$errors->get('login')" />
                    
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __("Votre adresse e-mail n'est pas vérifiée.") }}
                            
                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __("Cliquez ici pour renvoyer l'e-mail de vérification.") }}
                                
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse électronique.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="phone_number" :value="__('Numero de telephone')" />
            <x-text-input id="phone_number" name="phone_number" type="number" class="mt-1 block w-full" :value="old('phone_number', $user->phone_number)" required autofocus autocomplete="phone_number" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>

        <div>
            <x-input-label for="dateOfBirth" :value="__('Date de naissance')" />
            <x-text-input id="dateOfBirth" name="dateOfBirth" type="date" class="mt-1 block w-full" :value="old('dateOfBirth', $user->dateOfBirth)" required autofocus autocomplete="dateOfBirth" />
            <x-input-error class="mt-2" :messages="$errors->get('dateOfBirth')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Descrivez-vous')" />
            {{-- <textarea id="description" name="description" type="number" class="mt-1 block w-full" :value="old('description', $user->name)" required autofocus autocomplete="description"></textarea> --}}
            <textarea name="description" id="description"class="rounded-lg w-full" required autofocus autocomplete="description">{{ $user->description }} </textarea>
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
