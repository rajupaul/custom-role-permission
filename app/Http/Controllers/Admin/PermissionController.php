<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
class PermissionController extends Controller
{
     public function index(){
     $data['permissions']=Permission::get();
     return view('admin.permissions.index',$data);
    }
}
