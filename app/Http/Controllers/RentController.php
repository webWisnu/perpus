<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
{
    public function index()
    {
        $rentlog = RentLogs::with(['user', 'book'])->where('user_id', Auth::user()->id)->get();
        return view('detail-pinjam', ['rentlog' => $rentlog]);
    }
}
