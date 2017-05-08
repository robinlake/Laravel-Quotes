@extends('layouts.master')
@section('title')
    Online quotes api
@endsection
@section('header')
    <h1>Quotes To Go</h1>
    <h2>Submit a custom quote</h2>
@endsection
@section('content')

<h3>Select one or more options from the choices below</h3>

<form  method="post" action="submitQuote">
  <div class="form-group">
    <label for="author">Author Name</label>
    <input type="text" name="author" class="form-control" id="authorInput"
     aria-describedby="emailHelp" placeholder="Enter author name">
  </div>
  <div class="form-group">
    <label for="endTime">Date</label>
    <input type="number" class="form-control" name="dateHigh" id="exampleInputPassword1" placeholder="Quote date">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="dateHighBC" id="optionsRadios1" value="option1" checked>
        BC
      </label>
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="dateHighAD" id="optionsRadios2" value="option2">
        AD
      </label> 
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="category" name="category">
      <option>Scientific</option>
      <option>Political</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Text</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="text"
    placeholder="Submit quote text"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  {{ csrf_field()}}
</form>

@endsection

