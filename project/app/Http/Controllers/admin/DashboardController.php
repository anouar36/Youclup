<?php
namespace App\Http\Controllers\admin;

use App\Models\Club;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::all(); // Fetch all users

        return view('admin/home', compact('users')); // Pass users to the view
    }

    public function clubs(){
        $Clubs = Club::all(); // Fetch all users

        return view('admin/Clubs',compact('Clubs')); // Pass users to the view
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.dashboard');

    }
}
