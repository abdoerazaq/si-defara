<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
       public function index(){
        $member = Member::count();
        $pembayaran = Pembayaran::count();
        return view('dashboard',compact('member','pembayaran'));
       }
}
