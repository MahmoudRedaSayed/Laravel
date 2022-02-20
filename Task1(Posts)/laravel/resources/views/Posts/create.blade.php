@extends("Layouts.layout")
@section("title","create")
@section("sidebar")
<form action="#">
    
  <div class="mb-3">
    <label for="lang" class="form-label">lang</label>
    <input type="text" class="form-control" id="lang" >
  </div>
  <div class="mb-3">
    <label for="year" class="form-label">year</label>
    <input type="date" class="form-control" id="year">
  </div>
  <div class="mb-3">
    <label for="id" class="form-label">id</label>
    <input type="number" class="form-control" id="id">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection