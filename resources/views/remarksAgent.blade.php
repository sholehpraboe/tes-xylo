@extends('layouts.app')
@section('content')
    <div class="my-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="table w-full p-2">
                     <!-- component -->
                    <h3 class="text-gray-500 mb-1 text-xl font-bold uppercase my-4 pl-6">Add Remarks</h3>
                    @foreach($contacts as $value)
                    <form action="/agent/{{ $value->id }}/addRemarks" method="post">
                        @csrf
                        @method('PUT')
                        <div class="bg-white shadow rounded-lg p-6">
                            <div class="grid lg:grid-cols-2 gap-6 my-4">
                                <div class="focus-within:text-blue-500 transition-all duration-500 relative ">
                                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                    <label for="id" class="bg-white text-gray-600 px-1">ID *</label>
                                    </div>
                                    <input id="id" name="id" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 block h-full w-full" value="{{ $value->id }}"  readonly>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-6 my-6">
                                <div class="focus-within:text-blue-500 transition-all duration-500 relative ">
                                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                                    <label for="update_status" class="bg-white text-gray-600 px-1">Remarks</label>
                                    </div>
                                    <textarea name="remarks" id="remarks" class="resize border rounded-md"></textarea>
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
    @endforeach    
@endsection
    
