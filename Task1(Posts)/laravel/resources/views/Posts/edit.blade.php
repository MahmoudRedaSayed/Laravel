@extends("Layouts.layout")
@section("title","edit")
@section("sidebar")
<form action="#" class="container">
    
  <div class="mb-3">
    <label for="lang" class="form-label">lang</label>
    <input type="text" class="form-control" id="lang" value="{{$post['lang']}}" >
  </div>
  <div class="mb-3">
    <label for="year" class="form-label">year</label>
    <input type="date" class="form-control" id="year"value="{{$post['year']}}">
  </div>
  <div class="mb-3">
    <label for="id" class="form-label">id</label>
    <input type="number" class="form-control" id="id" value="{{$post['id']}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection