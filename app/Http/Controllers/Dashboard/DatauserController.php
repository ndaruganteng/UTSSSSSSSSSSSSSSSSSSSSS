<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class DatauserController extends Controller
{

    // view data user
    public function index()
    {   
    	$users = DB::table('users')->get();
        return view('dashboard.data-user',['users' => $users]);
    }
    
    // hapus user
    public function hapus_user($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'Data user berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data user. Data tidak ditemukan.');
        }
    }
    

}