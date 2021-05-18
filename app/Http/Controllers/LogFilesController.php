<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogFilesController extends Controller
{


    public function index(){
        if (!file_exists(storage_path('logs'))) {
            return [];
        }

        $logFiles = \File::allFiles(storage_path('logs'));

        // Sort files by modified time DESC
        usort($logFiles, function ($a, $b) {
            return -1 * strcmp($a->getMTime(), $b->getMTime());
        });

        return view('log-files', compact('logFiles'));
    }

    public function show($fileName){
        if (file_exists(storage_path('logs/'.$fileName))) {
            $path = storage_path('logs/'.$fileName);

            return response()->file($path, ['content-type' => 'text/plain']);
        }

        return 'Invalid file name.';
    }

    
}
