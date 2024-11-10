<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show(User $user)
    {
        return inertia('ExamplePage', [
            'user' => $user
        ]);
    }
}
