<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $items = user::all();

        return view('pages.admin.user.index', [
            'items' => $items 
        ]);
    }
}
