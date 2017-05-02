<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use DB;

class QuotesController extends Controller
{
    /*
    * Get Functions
    */
    public function getIndex(){
        return view('quotes.index');
    }
    public function getCategories($category){
        $data['category'] = $category;
        if($category == 'all'){
            $quotes = DB::table('quotes')->get();
        } else{
        $quotes = DB::table('quotes')->where('category', $category)->get();
        }
        return view('quotes.categories', ['quotes' => $quotes]);
    }
    public function getCustomSearch(){
        return view('quotes.custom_search');
    }
    public function getSubmitQuote(){
        return view('quotes.submit_quote');
    }
    public function getTimePeriods($period1, $period2){
        $data['period1'] = $period1;
        $data['period2'] = $period2;
            $quotes = DB::table('quotes')->where([
                ['date', '>', $period1],
                ['date', '<', $period2]
            ])->get();
        return view('quotes.time_periods', ['quotes' => $quotes]);
    }
    /*
    * Post Functions
    */
    public function postAuthors(){
        var_dump($_POST);
    return view('quotes.authors');
}
}
