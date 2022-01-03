<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Auth;
use App\ServiceTransaction;

class ServiceController extends Controller
{
    public function getForm(){
        return view('service.form');
    }

    public function payment(Request $request){

        if(!Auth::check()){
            return redirect(route('login'));
        }

      
        // $rules = [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required|max:250',
        // ];
    
        // $customMessages = [
        //     'required' => 'The :attribute field is required.'
        // ];
    
        // $this->validate($request, $rules, $customMessages);
        // dd($request->service_desc);
    
        $this->validate($request, [
            'service_desc' => 'required',
        ], [
            'service_desc.required' => 'This Description field is required.'
        ]);

        $service = ([
            'user_id' => Auth::user()->id,
            'address' => $request->address,
            'type' => $request->service_type,
            'kind' => $request->service_kind,
            'desc' => $request->service_desc,
            'last_time' => $request->last_time
        ]);

       
        return view('service.detail', [
            'service' => $service
        ]);
    }

    public function bookService(Request $request){


        ServiceTransaction::create([
            'user_id' => $request->get("user_id"),
            'status' => 'Book',
            'address' => $request->get("address"),
            'type' => $request->get("type"),
            'kind' => $request->get("kind"),
            'desc' => $request->get("desc"),
            'last_time' => $request->get("last_time")
        ]);

        return redirect(route('home'));
    }

    public function serviceTransaction(){
        $user_id = Auth::user()->id;
        $services = ServiceTransaction::where('user_id', $user_id)->get();
        $index = 0;
        return view('service.transactions',[
            'index' => $index,
            'services' => $services
        ]);
    }
}
