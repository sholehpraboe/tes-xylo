<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AgentController extends Controller
{


    public function index(){
        $contacts = Contact::where('status_assign', '1')->paginate(5);
        return view ('agent', compact('contacts'));
    }

    public function edit($id){
        $contacts = Contact::where('id', $id)->get();
        return view('editAgent', compact('contacts'));
    }

    public function update(Request $request, $id){
        $update_status = $request->input('update_status'); 
        $update = Contact::where('id', $id)->update([
                            'update_status' => $update_status
                        ]);
        if($update){
            Log::info('Update Status for ID: '.$id. ' && Update Status = '.$update_status);
        }
           
        return redirect('agent');
    }

    public function remarks($id){
        $contacts = Contact::where('id', $id)->get();
        return view('remarksAgent', compact('contacts'));
    }

    public function addRemarks(Request $request, $id){
        $remarks = $request->input('remarks'); 
        $update = Contact::where('id', $id)->update([
                            'remarks' => $remarks
                        ]);
        if($update){
            Log::info('Add Remarks for ID: '.$id. ' && Add Remarks = '.$remarks);
        }
           
        return redirect('agent');
    }

    
}
