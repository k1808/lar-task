<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index()
    {
        return redirect()->route('post-admin.index');
    }
}
