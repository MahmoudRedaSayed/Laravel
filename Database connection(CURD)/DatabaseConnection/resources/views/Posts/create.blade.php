
@extends("Layouts.layout")
@section("title","create")
@section("sidebar")
<form action="{{route('posts.store')}}" method="Post" class="container">
    @csrf
  <div class="mb-3">
    <label for="Descripation" class="form-label">Descripation</label>
    <input type="text" class="form-control" name="Descripation" id="Descripation"  >
  </div>
  <div class="mb-3">
    <label for="year" class="form-label">year</label>
    <input type="text" class="form-control" name="year" id="year">
  </div>
  <div class="mb-3">
    <label for="posted by" class="form-label">Posted by</label>
    <input type="text" class="form-control" name="posted_by" id="Posted by" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection