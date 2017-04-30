<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function getIndex(){
        return view('quotes.index');
    }
}
