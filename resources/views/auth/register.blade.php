<x-guest-layout>
    @include('components.header')
    <div class="container mx-auto h-[50px]">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url({{ asset('build/assets/home2.jpeg')}})"
                ></div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Creation de compte!</h3>
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        @csrf
                        @foreach ($errors->all() as $error)
                            <div class="text-red-500 mt-2xx">
                                {{$error}}
                            </div>
                        @endforeach
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label for="firstname" class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Nom
                                </label>
                                <input
                                    class="w-[250px] px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="firstname"
                                    name="firstname"
                                    type="text"
                                    placeholder="Nom"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label for="lastname" class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Prenom
                                </label>
                                <input
                                    class="w-[250px] px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastname"
                                    name="lastname"
                                    type="text"
                                    placeholder="Prenom"
                                />
                            </div>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label for="phone_number" class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Login
                                </label>
                                <input
                                    class="w-[250px] px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="login"
                                    name="login"
                                    type="email"
                                    placeholder=" Email ou Numéro"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label for="phone_number" class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Date de naissance
                                </label>
                                <input
                                    class="w-[250px] px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="dateOfBirth"
                                    name="dateOfBirth"
                                    type="date"
                                />
                            </div>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label for="phone_number" class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Numero telephone
                                </label>
                                <input
                                    class="w-[250px] px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="phone_number"
                                    type="number"
                                    name="phone_number"
                                    placeholder="Numero"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label for="gender" class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Genre
                                </label>
                                <select name="gender" id="gender" class="w-[250px] px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                    <option value="M">Masculin</option>
                                    <option value="F">Feminin</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Decrivez-vous <span class="text-gray-400 text-sm font-normal">(Optionnelle)</span>
                            </label>
                            <textarea id="description" name="description" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="description" id="description" cols="55" rows="3"></textarea>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label for="password" class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                    Mot de passe
                                </label>
                                <input
                                    class="w-[250px] px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password"
                                    name="password"
                                    type="password"
                                    placeholder="******************"
                                />
                                <p class="text-xs italic hidden text-red-500">Please choose a password.</p>
                            </div>
                            <div class="md:ml-2">
                                <label for="password_confirmation" class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                    Confirmer mot de passe
                                </label>
                                <input
                                    class="w-[250px] px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    type="password"
                                    placeholder="******************"
                                />
                            </div>
                        </div>
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-indigo-500 rounded-full hover:bg-indigo-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Enregistrer
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        {{-- <div class="text-center">
                            <a
                                class="inline-block text-sm text-indigo-500 align-baseline hover:text-indigo-800"
                                href="#"
                            >
                                Forgot Password?
                            </a>
                        </div> --}}
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-indigo-500 align-baseline hover:text-indigo-800"
                                href="{{route('login')}}"
                            >
                            Vous avez déjà un compte ? Se connecter !
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</x-guest-layout>
