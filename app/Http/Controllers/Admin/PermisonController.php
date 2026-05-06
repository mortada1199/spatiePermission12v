<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
class PermisonController extends Controller
{
 public function index(){
    $permissons = Permission::all();
        return view('admin.permissions.index', compact('permissons'));
    }

}
