<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Role,Permission};
class RoleController extends Controller
{
    public function index(){

     $data['roles']=Role::orderBy('id','DESC')->get();  
 
     return view('admin.roles.index',$data);
    }
    public function create(){
     return view('admin.roles.index');
    }
    public function store(Request $request){
     return view('admin.roles.index');
    }
    public function show(Role $role){

    }
    public function edit(Role $role){
     return view('admin.roles.index');
    }
    public function update(Role $role,Request $request){
     return view('admin.roles.index');
    }
    public function destroy(Role $role){

    }
}
