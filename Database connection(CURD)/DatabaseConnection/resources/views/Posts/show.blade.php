@extends("Layouts.layout")
@section("title","show")
@section("sidebar")
<div class="card container mt-5">
  <h5 class="card-header"> {{$post['posted_by']}}</h5>
  <div class="card-body">
    <h5 class="card-title">{{$post['year']}}</h5>
    <p class="card-text">{{$post["Descripation"]}}</p>
  </div>
</div>
@endsection