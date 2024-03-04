<x-guest-layout>


{{-- navbar --}}
@include('components.header')
<div class="flex flex-row gap-6 mx-16 justify-around items-center">
    <div class="space-y-14">
        <div class="w-64 space-y-4 -mt-20">
            <h1 class="font-bold text-3xl">BabiColoc</h1>
            <p class="text-wrap">Trouver le compagnon idéal pour partager bien plus qu'un toit découvrez notre application de colocation dès maintenant !</p>
        </div>
        <div class="flex flex-row space-x-3">
            <div>
                <button class="py-2 px-4 bg-transparent text-indigo-500 font-semibold border border-indigo-500 rounded hover:bg-indigo-500 hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <a href="">Proposer un appartement </a>
                </button>
            </div>
            <div>
                <button class="py-2 px-4 text-indigo-500 font-semibold border border-indigo-500 rounded hover:bg-[#fdb414] hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <a href="{{ route('post.search.appartment') }}">Se proposer pour colocation</a>
                    
                </button>
            </div>
        </div>
    </div>
    <div class="">
        <img src="{{ asset('build/assets/coloc4.jpg') }}" class=" h-[450px] " alt="">
    </div>
</div>
<div class="flex justify-center w-[70%]  mx-auto">
	<div class="container mx-auto  rounded-lg p-14">
        {{-- Search bar --}}
		<form id="recherche">

			<div class="sm:flex items-center bg-indigo-500 rounded-lg overflow-hidden px-2 py-1 justify-between">
					<input class="text-base w-[400px] text-gray-400 flex-grow outline-none px-2 " type="text" placeholder="Entrer une commune..." />
				<div class="ms:flex items-center px-2 rounded-lg space-x-4 mx-auto ">
                    <select id="type" name="type" class="text-base w-[135px] text-gray-800 outline-none px-4 py-2 rounded-lg">
                        <option value="1" selected>Colocation</option>
                        <option value="2">Colocataire</option>
                    </select>
                    <button class="bg-white hover:bg-indigo-400 hover:text-white  text-indigo-500 text-base rounded-lg px-4 py-2 font-thin">Rechercher</button>
                </div>
			</div>
		</form>
	</div>
</div>
<div class="mx-4">
    <div id="apartment">
        <h1 class="text-4xl text-center font-semibold ">Les appartements proposés en colocation</h1>  
        <div class="grid w-full mb-14 gap-y-6 grid-cols-1 mt-10  sm:grid-cols-2 lg:grid-cols-3">
            <div class="relative mx-auto w-[80%]">
                    <a href="#" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div class="rounded-lg bg-white p-4 shadow">
                        <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                        <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-80">
                            <img src="{{ asset('build/assets/home.jpeg') }}" alt="" />
                            </div>
                        </div>
    
                        <div class="absolute bottom-0 left-5 mb-3 flex">
                            <p class="flex items-center font-medium text-white shadow-sm">
                            <i class="fa fa-camera mr-2 text-xl text-white"></i>
                            10
                            </p>
                        </div>
                        <div class="absolute bottom-0 right-5 mb-3 flex">
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-heart mr-2 text-2xl text-white"></i>
                            </p>
                        </div>
    
                        <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-[#1f93ff] px-2 py-1 text-xs font-semibold text-white"> Treichville </span>
                        <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-lg bg-transparent px-3 py-2 text-lg font-medium text-white"> <i class="fa fa-star"></i> </span>
                        </div>
    
                        <div class="mt-4">
                        <h2 class="line-clamp-1 text-2xl font-medium text-gray-800 md:text-lg" title="New York">1000 yards (Brand New) Bungalow Available in...</h2>
    
                        <p class="text-primary mt-2 inline-block whitespace-nowrap rounded-xl font-semibold leading-tight">
                            <span class="text-sm uppercase"> PKR </span>
                            <span class="text-2xl">3,200,000,000</span>/Sqft
                        </p>
                        </div>
                        <div class="mt-4">
                        <p class="line-clamp-1 mt-2 text-lg text-gray-800">6 bedrooms Architect designed Imported fixtures and fittings Full basement Top of the [more]</p>
                        </div>
                        <div class="justify-center">
                        <div class="mt-4 flex space-x-3 overflow-hidden rounded-lg px-1 py-1">
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bed mr-2 text-blue-900"></i>
                            2
                            </p>
    
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bath mr-2 text-blue-900"></i>
                            3
                            </p>
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-home mr-2 text-blue-900"></i>
                            2000 Yd<sup>2</sup>
                            </p>
                        </div>
                        </div>
                        <div class="mt-8 grid grid-cols-2">
                        <div class="flex items-center">
                            <div class="relative">
                            <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                            <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                            </div>
    
                            <p class="line-clamp-1 ml-2 text-gray-800">Salman Ghouri Dev</p>
                        </div>
    
                        
                        </div>
                    </div>
                    </a>
            </div>
            <div class="relative mx-auto w-[80%]">
                    <a href="#" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div class="rounded-lg bg-white p-4 shadow">
                        <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                        <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-80">
                            <img src="{{ asset('build/assets/home2.jpeg') }}" alt="" />
                            </div>
                        </div>
    
                        <div class="absolute bottom-0 left-5 mb-3 flex">
                            <p class="flex items-center font-medium text-white shadow-sm">
                            <i class="fa fa-camera mr-2 text-xl text-white"></i>
                            10
                            </p>
                        </div>
                        <div class="absolute bottom-0 right-5 mb-3 flex">
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-heart mr-2 text-2xl text-white"></i>
                            </p>
                        </div>
    
                        <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-[#1f93ff] px-2 py-1 text-xs font-semibold text-white"> Koumassi </span>
                        <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-lg bg-transparent px-3 py-2 text-lg font-medium text-white"> <i class="fa fa-star"></i> </span>
                        </div>
    
                        <div class="mt-4">
                        <h2 class="line-clamp-1 text-2xl font-medium text-gray-800 md:text-lg" title="New York">1000 yards (Brand New) Bungalow Available in...</h2>
    
                        <p class="text-primary mt-2 inline-block whitespace-nowrap rounded-xl font-semibold leading-tight">
                            <span class="text-sm uppercase"> PKR </span>
                            <span class="text-2xl">3,200,000,000</span>/Sqft
                        </p>
                        </div>
                        <div class="mt-4">
                        <p class="line-clamp-1 mt-2 text-lg text-gray-800">6 bedrooms Architect designed Imported fixtures and fittings Full basement Top of the [more]</p>
                        </div>
                        <div class="justify-center">
                        <div class="mt-4 flex space-x-3 overflow-hidden rounded-lg px-1 py-1">
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bed mr-2 text-blue-900"></i>
                            2
                            </p>
    
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bath mr-2 text-blue-900"></i>
                            3
                            </p>
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-home mr-2 text-blue-900"></i>
                            2000 Yd<sup>2</sup>
                            </p>
                        </div>
                        </div>
                        <div class="mt-8 grid grid-cols-2">
                        <div class="flex items-center">
                            <div class="relative">
                            <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                            <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                            </div>
    
                            <p class="line-clamp-1 ml-2 text-gray-800">Salman Ghouri Dev</p>
                        </div>
    
                        
                        </div>
                    </div>
                    </a>
            </div>
            <div class="relative mx-auto w-[80%]">
                    <a href="#" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div class="rounded-lg bg-white p-4 shadow">
                        <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                        <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                            <div class="absolute inset-0 bg-black bg-opacity-80">
                            <img src="{{ asset('build/assets/home3.jpeg') }}" alt="" />
                            </div>
                        </div>
    
                        <div class="absolute bottom-0 left-5 mb-3 flex">
                            <p class="flex items-center font-medium text-white shadow-sm">
                            <i class="fa fa-camera mr-2 text-xl text-white"></i>
                            10
                            </p>
                        </div>
                        <div class="absolute bottom-0 right-5 mb-3 flex">
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-heart mr-2 text-2xl text-white"></i>
                            </p>
                        </div>
    
                        <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-[#1f93ff] px-2 py-1 text-xs font-semibold text-white"> Marcory </span>
                        <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-lg bg-transparent px-3 py-2 text-lg font-medium text-white"> <i class="fa fa-star"></i> </span>
                        </div>
    
                        <div class="mt-4">
                        <h2 class="line-clamp-1 text-2xl font-medium text-gray-800 md:text-lg" title="New York">1000 yards (Brand New) Bungalow Available in...</h2>
    
                        <p class="text-primary mt-2 inline-block whitespace-nowrap rounded-xl font-semibold leading-tight">
                            <span class="text-sm uppercase"> PKR </span>
                            <span class="text-2xl">3,200,000,000</span>/Sqft
                        </p>
                        </div>
                        <div class="mt-4">
                        <p class="line-clamp-1 mt-2 text-lg text-gray-800">6 bedrooms Architect designed Imported fixtures and fittings Full basement Top of the [more]</p>
                        </div>
                        <div class="justify-center">
                        <div class="mt-4 flex space-x-3 overflow-hidden rounded-lg px-1 py-1">
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bed mr-2 text-blue-900"></i>
                            2
                            </p>
    
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bath mr-2 text-blue-900"></i>
                            3
                            </p>
                            <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-home mr-2 text-blue-900"></i>
                            2000 Yd<sup>2</sup>
                            </p>
                        </div>
                        </div>
                        <div class="mt-8 grid grid-cols-2">
                        <div class="flex items-center">
                            <div class="relative">
                            <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                            <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                            </div>
    
                            <p class="line-clamp-1 ml-2 text-gray-800">Salman Ghouri Dev</p>
                        </div>
    
                        
                        </div>
                    </div>
                    </a>
            </div>
           
        </div>

    </div>
    {{-- Carte d'appartement --}}

    {{-- carte de colocataire --}}
    <div id="colocataire">
        <h1 class="text-4xl text-center font-semibold ">Les personnes recherchants une colocation</h1>
        <div class="grid w-full mb-14 gap-y-6 grid-cols-1 mt-10  sm:grid-cols-2 lg:grid-cols-3">
            <div class="relative mx-auto w-[80%]">
                <a href="#" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                <div class="rounded-lg bg-white p-4 shadow">
                    <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                    <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-80">
                        <img src="{{ asset('build/assets/home.jpeg') }}" alt="" />
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-5 mb-3 flex">
                        <p class="flex items-center font-medium text-white shadow-sm">
                        <i class="fa fa-camera mr-2 text-xl text-white"></i>
                        10
                        </p>
                    </div>
                    <div class="absolute bottom-0 right-5 mb-3 flex">
                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-heart mr-2 text-2xl text-white"></i>
                        </p>
                    </div>

                    <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-[#1f93ff] px-2 py-1 text-xs font-semibold text-white"> Treichville </span>
                    <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-lg bg-transparent px-3 py-2 text-lg font-medium text-white"> <i class="fa fa-star"></i> </span>
                    </div>

                    <div class="mt-4">
                    <h2 class="line-clamp-1 text-2xl font-medium text-gray-800 md:text-lg" title="New York">1000 yards (Brand New) Bungalow Available in...</h2>

                    <p class="text-primary mt-2 inline-block whitespace-nowrap rounded-xl font-semibold leading-tight">
                        <span class="text-sm uppercase"> PKR </span>
                        <span class="text-2xl">3,200,000,000</span>/Sqft
                    </p>
                    </div>
                    <div class="mt-4">
                    <p class="line-clamp-1 mt-2 text-lg text-gray-800">6 bedrooms Architect designed Imported fixtures and fittings Full basement Top of the [more]</p>
                    </div>
                    <div class="justify-center">
                    <div class="mt-4 flex space-x-3 overflow-hidden rounded-lg px-1 py-1">
                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-bed mr-2 text-blue-900"></i>
                        2
                        </p>

                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-bath mr-2 text-blue-900"></i>
                        3
                        </p>
                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-home mr-2 text-blue-900"></i>
                        2000 Yd<sup>2</sup>
                        </p>
                    </div>
                    </div>
                    <div class="mt-8 grid grid-cols-2">
                    <div class="flex items-center">
                        <div class="relative">
                        <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                        <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                        </div>

                        <p class="line-clamp-1 ml-2 text-gray-800">Salman Ghouri Dev</p>
                    </div>

                    
                    </div>
                </div>
                </a>
            </div>
            <div class="relative mx-auto w-[80%]">
                <a href="#" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                <div class="rounded-lg bg-white p-4 shadow">
                    <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                    <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-80">
                        <img src="{{ asset('build/assets/home.jpeg') }}" alt="" />
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-5 mb-3 flex">
                        <p class="flex items-center font-medium text-white shadow-sm">
                        <i class="fa fa-camera mr-2 text-xl text-white"></i>
                        10
                        </p>
                    </div>
                    <div class="absolute bottom-0 right-5 mb-3 flex">
                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-heart mr-2 text-2xl text-white"></i>
                        </p>
                    </div>

                    <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-[#1f93ff] px-2 py-1 text-xs font-semibold text-white"> Plateau </span>
                    <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-lg bg-transparent px-3 py-2 text-lg font-medium text-white"> <i class="fa fa-star"></i> </span>
                    </div>

                    <div class="mt-4">
                    <h2 class="line-clamp-1 text-2xl font-medium text-gray-800 md:text-lg" title="New York">1000 yards (Brand New) Bungalow Available in...</h2>

                    <p class="text-primary mt-2 inline-block whitespace-nowrap rounded-xl font-semibold leading-tight">
                        <span class="text-sm uppercase"> PKR </span>
                        <span class="text-2xl">3,200,000,000</span>/Sqft
                    </p>
                    </div>
                    <div class="mt-4">
                    <p class="line-clamp-1 mt-2 text-lg text-gray-800">6 bedrooms Architect designed Imported fixtures and fittings Full basement Top of the [more]</p>
                    </div>
                    <div class="justify-center">
                    <div class="mt-4 flex space-x-3 overflow-hidden rounded-lg px-1 py-1">
                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-bed mr-2 text-blue-900"></i>
                        2
                        </p>

                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-bath mr-2 text-blue-900"></i>
                        3
                        </p>
                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-home mr-2 text-blue-900"></i>
                        2000 Yd<sup>2</sup>
                        </p>
                    </div>
                    </div>
                    <div class="mt-8 grid grid-cols-2">
                    <div class="flex items-center">
                        <div class="relative">
                        <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                        <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                        </div>

                        <p class="line-clamp-1 ml-2 text-gray-800">Salman Ghouri Dev</p>
                    </div>

                    
                    </div>
                </div>
                </a>
            </div>
            <div class="relative mx-auto w-[80%]">
                <a href="#" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                <div class="rounded-lg bg-white p-4 shadow">
                    <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                    <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-80">
                        <img src="{{ asset('build/assets/home.jpeg') }}" alt="" />
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-5 mb-3 flex">
                        <p class="flex items-center font-medium text-white shadow-sm">
                        <i class="fa fa-camera mr-2 text-xl text-white"></i>
                        10
                        </p>
                    </div>
                    <div class="absolute bottom-0 right-5 mb-3 flex">
                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-heart mr-2 text-2xl text-white"></i>
                        </p>
                    </div>

                    <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-[#1f93ff] px-2 py-1 text-xs font-semibold text-white"> Treichville </span>
                    <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-lg bg-transparent px-3 py-2 text-lg font-medium text-white"> <i class="fa fa-star"></i> </span>
                    </div>

                    <div class="mt-4">
                    <h2 class="line-clamp-1 text-2xl font-medium text-gray-800 md:text-lg" title="New York">1000 yards (Brand New) Bungalow Available in...</h2>

                    <p class="text-primary mt-2 inline-block whitespace-nowrap rounded-xl font-semibold leading-tight">
                        <span class="text-sm uppercase"> PKR </span>
                        <span class="text-2xl">3,200,000,000</span>/Sqft
                    </p>
                    </div>
                    <div class="mt-4">
                    <p class="line-clamp-1 mt-2 text-lg text-gray-800">6 bedrooms Architect designed Imported fixtures and fittings Full basement Top of the [more]</p>
                    </div>
                    <div class="justify-center">
                    <div class="mt-4 flex space-x-3 overflow-hidden rounded-lg px-1 py-1">
                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-bed mr-2 text-blue-900"></i>
                        2
                        </p>

                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-bath mr-2 text-blue-900"></i>
                        3
                        </p>
                        <p class="flex items-center font-medium text-gray-800">
                        <i class="fa fa-home mr-2 text-blue-900"></i>
                        2000 Yd<sup>2</sup>
                        </p>
                    </div>
                    </div>
                    <div class="mt-8 grid grid-cols-2">
                    <div class="flex items-center">
                        <div class="relative">
                        <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                        <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                        </div>

                        <p class="line-clamp-1 ml-2 text-gray-800">Salman Ghouri Dev</p>
                    </div>

                    
                    </div>
                </div>
                </a>
            </div>
        </div>

    </div>
    
    {{-- A propos de nous --}}
    <div id="apropos" class=" flex flex-row gap-10 mx-6 justify-center items-start mb-16">
        <div class="justify-center max-w-[27%] flex flex-col items-center">
            <div class=" text-indigo-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  
            </div>
            <h2 class="text-xl font-semibold ">Trouver une chambre</h2>
            <div class="text-center text-sm">
                Pour votre sécurité, nous vérifions manuellement chaque annonce postée sur notre site. Trouvez votre colocation idéale, rencontrez les colocataires qui y habitent et organisez des visites.
            </div>
        </div>
        <div class="justify-center max-w-[27%]  flex flex-col items-center">
            <div class=" text-indigo-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                  </svg>
                  
                  
            </div>
            <h2 class="text-xl font-semibold ">Trouver une chambre</h2>
            <div class="text-center text-sm">
                Consultez les colocataires cherchant une chambre dans votre région et trouver la personne idéale pour votre colocation. Offrez leur votre chambre directement ou attendez qu'ils vous contactent, c'est votre choix!
            </div>
        </div>
        <div class="justify-center max-w-[27%] flex flex-col items-center">
            <div class=" text-indigo-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                  </svg>
                  
                  
            </div>
            <h2 class="text-xl font-semibold ">Trouver une chambre</h2>
            <div class="text-center text-sm">
                Grâce à son expertise dans la colocation, BabiColoc vous apporte son aide afin que vous puissiez trouver votre colocation idéale.
            </div>
        </div>
    </div>

    
    <div class="flex flex-row gap-32 mb-16 justify-center items-center">
        
        <div>
            <button class="py-2 px-4 bg-transparent text-indigo-500 font-semibold border border-indigo-500 rounded hover:bg-indigo-500 hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                Trouver une chambre
            </button>
        </div>
        <div>
            <button class="py-2 px-4 bg-indigo-500 text-white font-semibold border border-white rounded hover:bg-white hover:text-indigo-500 hover:border-indigo-500 transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                Publier votre chambre
            </button>
        </div>
    </div>

    {{-- Footer --}}
    <footer id="footer" class="bg-gradient-to-r from-gray-100 via-indigo-300 to-gray-100">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div>
            <img src="{{ asset('build/assets/logoipsum-292.svg') }}" class="mr-5 h-6 sm:h-9" alt="logo" />
            <p class="max-w-xs mt-4 text-sm text-gray-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, accusantium.
            </p>
            <div class="flex mt-8 space-x-6 text-gray-600">
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                <span class="sr-only"> Facebook </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
                </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                <span class="sr-only"> Instagram </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
                </svg>
                </a>
                <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                <span class="sr-only"> Twitter </span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
                </a>
               
            </div>
            </div>
            <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
            <div>
                <p class="font-medium">
                Options
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                    <a class="hover:opacity-75" href> Recherche </a>
                    <a class="hover:opacity-75" href> Appartement </a>
                    <a class="hover:opacity-75" href> Colocataires </a>
                    <a class="hover:opacity-75" href> A Propos </a>
                </nav>
            </div>
            <div>
                <p class="font-medium">
                Services
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                    <a class="hover:opacity-75" href> Assistance </a>
                    <a class="hover:opacity-75" href> Mise en relation </a>
                </nav>
            </div>
            <div>
                <p class="font-medium">
                Liens d'aide
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                <a class="hover:opacity-75" href> Contact </a>
                <a class="hover:opacity-75" href> FAQs </a>
                </nav>
            </div>
            <div>
                <p class="font-medium">
                Legal
                </p>
                <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                <a class="hover:opacity-75" href> Politique de confidentialité</a>
                <a class="hover:opacity-75" href> Conditions générales </a>
                <a class="hover:opacity-75" href> Accessibilité </a>
                </nav>
            </div>
            </div>
        </div>
        <p class="mt-8 text-xs text-gray-800">
            © 2024 BabiColoc
        </p>
        </div>
    </footer>
            
    </div>
    
</x-guest-layout>