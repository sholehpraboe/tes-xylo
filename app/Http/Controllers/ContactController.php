<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::where('status_assign', '0')->orWhere('status_assign', null)->paginate(5);
        return view ('contact', compact('contacts'));
    }

    public function detail($id){
        $contacts = Contact::where('id', $id)->get();
        return view('detailContact', compact('contacts'));
    }

    public function assign(Request $request, $id){
        $update = Contact::where('id', $id)->update([
                            'status_assign' => '1'
                        ]);
           
        return redirect('contact');
    }

    public function create(){
        return view('addContact');
    }

    public function store(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        
        $create = Contact::insert([
                        'name' => $name,
                        'phone' => $phone,
                        'email' => $email,
                        'status_assign' => '0'
                     ]);
        
        return redirect('contact');

    }
    
    public function edit($id){
        $contacts = Contact::where('id', $id)->get();
        return view('editContact', compact('contacts'));
    }

    public function update(Request $request, $id){
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        
        $update = Contact::where('id', $id)->update([
                            'name' => $name,
                            'phone' => $phone,
                            'email' => $email
                        ]);
           
        return redirect('contact');
    }

    public function destroy($id){
        $contacts = Contact::where('id', $id)->delete();

        return redirect('contact');
    }

    


}
