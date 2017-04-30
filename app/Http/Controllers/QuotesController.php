<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function getIndex(){
        return view('quotes.index');
    }
    public function getCategories(){
        return view('quotes.categories');
    }
    public function getCustomSearch(){
        return view('quotes.custom_search');
    }
    public function getSubmitQuote(){
        return view('quotes.submit_quote');
    }
    public function getTimePeriods(){
        return view('quotes.time_periods');
    }
    public function getAuthors(){
    return view('quotes.authors');
}
}
