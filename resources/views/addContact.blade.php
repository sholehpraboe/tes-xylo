@extends('layouts.app')
@section('content')
    <div class="my-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="table w-full p-2">
                     <!-- component -->
                    <h3 class="text-gray-500 mb-1 text-xl font-bold uppercase my-4 pl-6">Add Contact</h3>
                    <form action="/contact" method="post">
                        @csrf
                       
                        <div class="bg-white shadow rounded-lg p-6">
                            <div class="grid lg:grid-cols-2 gap-6 my-4">
                                <div class="focus-within:text-blue-500 transition-all duration-500 relative ">
                                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                    <label for="name" class="bg-white text-gray-600 px-1">Name *</label>
                                    </div>
                                    <input id="name" name="name" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 block h-full w-full">
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-6 my-6">
                                <div class="focus-within:text-blue-500 transition-all duration-500 relative ">
                                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                    <label for="phone" class="bg-white text-gray-600 px-1">Phone *</label>
                                    </div>
                                    <input id="phone" name="phone" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 block h-full w-full">
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-6 my-6">
                                <div class="focus-within:text-blue-500 transition-all duration-500 relative ">
                                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                    <label for="email" class="bg-white text-gray-600 px-1">Email *</label>
                                    </div>
                                    <input id="email" name="email" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 block h-full w-full">
                                </div>
                            </div>
                            <div class="border-t mt-6 pt-3">
                            <button type="submit" class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                                Save
                            </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
    
