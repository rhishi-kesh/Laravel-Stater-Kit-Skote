<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Blog;

class AdminController extends Controller
{
    public function index(Request $request){
        $cards = Card::where('type','gift_card')->count();
        $vouchers = Card::where('type','voucher')->count();
        $blogs = Blog::count();
        return view('backend.layouts.index',compact('cards','vouchers','blogs'));
    }
}






