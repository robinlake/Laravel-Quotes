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

    public function getCustomSearchResults(){
        return view('quotes.custom_search_results');
    }

    public function getSubmitQuote(){
        return view('quotes.submit_quote');
    }
    public function getApiDescription(){
        return view('quotes.api_description');
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
        $author = $_POST['author'];
        $quotes = DB::table('quotes')->where('author', 'LIKE', '%'.$author.'%')->get();
    return view('quotes.authors', ['quotes' => $quotes]);
    }

    public function postCustomSearchResults(){
        $author = $_POST['author'];
        $dateLow = $_POST['dateLow'];
        $dateHigh = $_POST['dateHigh'];
        $category = $_POST['category'];
        $textContaining = $_POST['textContaining'];
         $quotes = DB::table('quotes')->where([
             ['author', 'LIKE', '%'.$author.'%'],
             ['date', '<', $dateHigh],
             ['date', '>', $dateLow],
             ['text', 'LIKE', '%'.$textContaining.'%'],
         ])->get();
        echo $author.$dateLow.$dateHigh.$textContaining.$category;

        return view('quotes.custom_search_results', ['quotes' => $quotes]);
    }

    public function postSubmitQuote(){
        $author = $_POST['author'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $text = $_POST['text'];

        $quote = DB::table('quotes')->insert([
            'author' => $author,
            'date' => $date,
            'category' => $category,
            'text' => $text,
        ]);
        return view('quotes.submit_quote');
    }
}
