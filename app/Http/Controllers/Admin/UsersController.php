<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() : View {
        $users=User::paginate(3);
        return view('admin.users.index', compact('users')); 
    }

    public function show(User $user) {
        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user){
        $user->delete();
        return redirect(route('users.index'))->with('message', 'User deleted with success');
    }
}
