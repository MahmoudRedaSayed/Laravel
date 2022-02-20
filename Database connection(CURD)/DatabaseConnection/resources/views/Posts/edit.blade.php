@extends("Layouts.layout")
@section("title","edit")
@section("sidebar")
<form action="{{route('posts.update',$post['id'])}}" method='Post' class="container">
    @csrf
    <input type="hidden" class="form-control" id="lang" name="id" value="{{$post['id']}}" >

  <div class="mb-3">
    <label for="lang" class="form-label">Descripation</label>
    <input type="text" class="form-control" id="lang" name="Descripation" value="{{$post['Descripation']}}" >
  </div>
  <div class="mb-3">
    <label for="year" class="form-label">year</label>
    <input type="text" class="form-control" id="year" name="year"value="{{$post['year']}}">
  </div>
  <div class="mb-3">
    <label for="id" class="form-label">Posted by</label>
    <input type="text" class="form-control" id="id" name="posted_by" value="{{$post['posted_by']}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection