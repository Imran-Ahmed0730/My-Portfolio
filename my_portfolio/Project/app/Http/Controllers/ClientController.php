<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;

class ClientController extends Controller
{
    public function index(){
        return view('admin.client.add', [
            'projects'=>Project::all()
        ]);
    }
    public function add(Request$request){
//        return $request;
        Client::addOrUpdate($request);
        return redirect('client/manage')->with('message', 'Client Added Successfully');
    }
    public function manage(){
        return view('admin.client.manage', [
            'clients'=>Client::all()
        ]);
    }
    public function edit($id){
        return view('admin.client.edit', [
            'client'=>Client::find($id)
        ]);
    }
    public function update(Request $request){
        Client::addOrUpdate($request);
        return redirect('client/manage')->with('message', 'Client Info Updated Successfully');
    }
    public function remove(Request $request){
        Client::remove($request->id);
        return back()->with('message', 'Client Removed Successfully');
    }
}
