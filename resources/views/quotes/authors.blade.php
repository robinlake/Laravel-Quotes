@extends('layouts.master')
@section('title')
    Online quotes api
@endsection
@section('header')
    <h1>Quotes To Go</h1>
    <h2>Find quotes by author</h2>
@endsection
@section('content')
@foreach($quotes as $quote)
<li><b>{{ $quote->author}}</b> - {{ $quote->date }}<br> {{ $quote->text }}</li>
@endforeach
@endsection
