@extends('layouts.app')
@section('title','Log Files')
@section('content')


<div class="my-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <!-- component -->
                <div class="table w-full p-2">
                    <h3 class="text-gray-500 mb-1 text-xl font-bold uppercase my-4">Application Log Files</h3>
                    <table class="w-full border my-4">
                        <thead>
                            <tr class="bg-gray-50 border-b">
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">#</div>
                                </th>
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">File Name</div>
                                </th>
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">Size</div>
                                </th>
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">Time</div>
                                </th>
                                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                    <div class="flex items-center justify-center">{{ trans('app.action') }}</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($logFiles as $key => $logFile)
                            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                                <td class="p-2 border-r">{{ $key + 1 }}</td>
                                <td class="p-2 border-r">{{ $logFile->getFilename() }}</td>
                                <td class="p-2 border-r">{{ $logFile->getSize() }}</td>
                                <td class="p-2 border-r">{{ date('Y-m-d H:i:s', $logFile->getMTime()) }}</td>
                                <td>
                                    <a href="/log-files/{{$logFile->getFilename()}}" title="Show file {{ $logFile->getFilename() }}" class="bg-blue-500 p-2 rounded text-white hover:bg-blue-600 text-xs font-thin">View Log</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No Log File Exists</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection