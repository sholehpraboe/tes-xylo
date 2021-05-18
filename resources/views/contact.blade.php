@extends('layouts.app')
@section('content')
    <div class="my-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <!-- component -->
                <div class="table w-full p-2">
                    <h3 class="text-gray-500 mb-1 text-xl font-bold uppercase my-4">Contact Management</h3>
                    <a href="/contact/create">
                    <button class="bg-green-500 px-4 py-2 text-xs font-semibold tracking-wider text-white rounded hover:bg-green-600">Add</button>
                    </a>
                
                    <table class="w-full border my-4">
                        <thead>
                            <tr class="bg-gray-50 border-b">
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">ID</div>
                                </th>
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">Name</div>
                                </th>
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">Phone</div>
                                </th>
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">Email</div>
                                </th>
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">Action</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                                <td class="p-2 border-r">{{ $contact->id }}</td>
                                <td class="p-2 border-r">{{ $contact->name }}</td>
                                <td class="p-2 border-r">{{ $contact->phone }}</td>
                                <td class="p-2 border-r">{{ $contact->email }}</td>
                                <td>
                                    <a href="/contact/{{$contact->id}}/detail" class="bg-blue-500 p-2 rounded text-white hover:bg-blue-600 text-xs font-thin">View</a>
                                    <a href="/contact/{{$contact->id}}/assign" class="bg-purple-500 p-2 rounded text-white hover:bg-purple-600 text-xs font-thin">Assign</a>
                                    <a href="/contact/{{$contact->id}}/edit" class="bg-yellow-500 p-2 rounded text-white hover:bg-yellow-600 text-xs font-thin">Edit</a>
                                    <a href="/contact/{{$contact->id}}/destroy" class="bg-red-500 p-2 rounded text-white hover:bg-red-600 text-xs font-thin">Delete</a>
                                </td>
                            </tr>
                            @endforeach     
                        </tbody>
                    </table>
                    {{$contacts->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection


