@extends('layouts.master')
@section('title')
    Online quotes api
@endsection
@section('header')
    <h1>Quotes To Go</h1>
    <h2>Results from your search</h2>
@endsection
@section('content')
<h1>Displaying Search Results</h1>
<a href="{{ route('quotes.custom_search_results') }}" class="button">New Search</a>
@endsection