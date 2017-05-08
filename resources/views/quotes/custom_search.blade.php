@extends('layouts.master')
@section('title')
    Online quotes api
@endsection
@section('header')
    <h1>Quotes To Go</h1>
    <h2>Find quotes with custom search terms</h2>
@endsection
@section('content')

<h3>Select one or more options from the choices below</h3>

<form  method="post" action="customSearchResults">
  <div class="form-group">
    <label for="author">Author Name</label>
    <input type="text" name="author" class="form-control" id="authorInput"
     aria-describedby="emailHelp" placeholder="Enter author name">
    <small id="authorHelp" class="form-text text-muted">Partial names will be searched</small>
  </div>
  <div class="form-group">
    <label for="startTime">Earliest Date</label>
    <input type="number" name="dateLow" class="form-control" id="exampleInputPassword1" placeholder="Quotes starting from">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="dateLowBC" id="optionsRadios1" value="option1" checked>
        BC
      </label>
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="dateLowAD" id="optionsRadios2" value="option2">
        AD
      </label><br>
    <label for="endTime">Latest Date</label>
    <input type="number" class="form-control" name="dateHigh" id="exampleInputPassword1" placeholder="Quotes going until">
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
    <label for="exampleSelect2">Category</label>
    <select multiple class="form-control" id="category" name="category">
      <option>Science</option>
      <option>Inspirational</option>
      <option>Religious</option>
      <option>Humour</option>
      <option>Political</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Text Containing</label>
    <textarea class="form-control" id="textContaining" name="textContaining" rows="3" 
    placeholder="search for quotes containing specific text"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  {{ csrf_field()}}
</form>

@endsection
