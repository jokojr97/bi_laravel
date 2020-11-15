<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gate;

class HomeController extends Controller
{
    public function index(){
    	if (Gate::allows('role-kader')) {
    		return redirect(route('kader.dashboard.index'));
    	}
    	else if (Gate::allows('role-admin')) {
    		return redirect(route('admin.dashboard.index'));
    	}
    	else if (Gate::allows('role-user')) {
    		return redirect(route('user.dashboard.index'));
    	}else {
			echo 'halaman tidak ada';
		}
    }
    
    public function logout(Request $request) {
      Auth::logout();
      return redirect('/login');
    }
}
