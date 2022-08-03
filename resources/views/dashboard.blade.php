<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section>
            <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

                <div class="bg-gray-800 pt-3">
                    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-red-800 p-4 shadow text-2xl text-white">
                        <h1 class="font-bold pl-2">Donations/Products</h1>
                    </div>
                </div>

                <div class="flex flex-wrap "> 
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <a href="/clothing">
                            <div class="hover:bg-blue-400 hover:shadow-xl bg-blue-300 border-b-4 border-blue-600 rounded-lg shadow-lg p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-1 text-right md:text-center">
                                    <p class="font-bold text-3xl"> Clothing </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <a href="/homewares">
                            <div class="bg-red-300 hover:bg-red-400 hover:shadow-xl border-b-4 border-red-500 rounded-lg shadow-lg p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-1 text-right md:text-center">
                                        <p class="font-bold text-3xl"> Homewares </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <a href="/accessories">
                            <div class="bg-red-300 hover:bg-red-400 hover:shadow-xl border-b-4 border-red-500 rounded-lg shadow-lg p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-1 text-right md:text-center">
                                        <p class="font-bold text-3xl"> Accessories </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <a href="/toys">
                            <div class="hover:bg-blue-400 hover:shadow-xl bg-blue-300 border-b-4 border-blue-600 rounded-lg shadow-lg p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-1 text-right md:text-center">
                                    <p class="font-bold text-3xl"> Toys </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <a href="/shoes">
                            <div class="hover:bg-blue-400 hover:shadow-xl bg-blue-300 border-b-4 border-blue-600 rounded-lg shadow-lg p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-1 text-right md:text-center">
                                    <p class="font-bold text-3xl"> Shoes </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <a href="/books">
                            <div class="bg-red-300 hover:bg-red-400 hover:shadow-xl border-b-4 border-red-500 rounded-lg shadow-lg p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-1 text-right md:text-center">
                                        <p class="font-bold text-3xl"> Books </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <a href="/linen">
                            <div class="bg-red-300 hover:bg-red-400 hover:shadow-xl border-b-4 border-red-500 rounded-lg shadow-lg p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-1 text-right md:text-center">
                                        <p class="font-bold text-3xl"> Linen </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <a href="/miscellaneous">
                            <div class="hover:bg-blue-400 hover:shadow-xl bg-blue-300 border-b-4 border-blue-600 rounded-lg shadow-lg p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-1 text-right md:text-center">
                                    <p class="font-bold text-3xl"> Miscellaneous </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
