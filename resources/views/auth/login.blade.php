<x-guest-layout>
    <!-- component -->
    <div class="min-h-screen flex flex-col justify-center items-center">
      <div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative mx-4 -mt-6 mb-4 grid h-28 place-items-center overflow-hidden rounded-xl bg-gradient-to-tr from-indigo-600 to-indigo-400 bg-clip-border text-white shadow-lg shadow-indigo-500/40">
          <h3 class="block font-sans text-3xl font-semibold leading-snug tracking-normal text-white antialiased">
            Connexion
          </h3>
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        @foreach ($errors->all() as $error)
        <div class="text-red-500 mt-2xx">
          {{$error}}
        </div>
        @endforeach
        <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-y-9 gap-x-4 p-6">
          @csrf
          @if (Session::has('success'))
            <div class="w-full h-[30px] text-center font-semibold bg-green-400 text-white ">
              {{ Session::get('success') }}
            </div>
          @endif
          <div class="relative h-11 w-full min-w-[200px]">
            <input
              class="focus:ring-0 peer h-full w-full rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-indigo-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
              placeHolder=""
              name="login"
              id="login"
            />
            <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-indigo-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-indigo-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-indigo-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
              Email ou Numero
            </label>
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
          </div>
          <div class="relative h-11 w-full min-w-[200px]">
            <input
              class="focus:ring-0 focus:outline-none focus:ring-offset-0 peer h-full w-full rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-indigo-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
              placeHolder=" "
              name="password"
              id="password"
              type="password"
            />
            <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-indigo-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-indigo-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-indigo-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
              Mot de passe
            </label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          {{-- <div class="-ml-2.5">
            <div class="inline-flex items-center">
              <label
                class="relative flex cursor-pointer items-center rounded-full p-3"
                for="checkbox"
                data-ripple-dark="true"
              >
                <input
                  type="checkbox"
                  class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-indigo-500 checked:bg-indigo-500 checked:before:bg-indigo-500 hover:before:opacity-10"
                  id="checkbox"
                />
                <span class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    stroke="currentColor"
                    stroke-width="1"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </span>
              </label>
              <label
                class="mt-px cursor-pointer select-none font-light text-gray-700"
                for="checkbox"
              >
                Se souvenir de moi
              </label>
            </div>
          </div> --}}
  
          <button class="block w-full select-none rounded-lg bg-gradient-to-tr from-indigo-600 to-indigo-400 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-indigo-500/20 transition-all hover:shadow-lg hover:shadow-indigo-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="submit" data-ripple-light="true">
            Connexion
          </button>
        </form>
        <div class="p-6 pt-0">
          <p class="mt-6 flex justify-center font-sans text-sm font-light leading-normal text-inherit antialiased">
            Vous n'avez pas de compte ?
            <a
              href="{{ route('register') }}"
              class="ml-1 block font-sans text-sm font-bold leading-normal text-indigo-500 antialiased"
            >
              S'incrire
            </a>
          </p>
        </div>
      </div>
  
    </div>
  
  
  </x-guest-layout>