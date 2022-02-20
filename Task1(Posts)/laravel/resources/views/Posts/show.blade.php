@extends("Layouts.layout")
@section("title","show")
@section("sidebar")
<div class="card container mt-5">
  <h5 class="card-header">lang : {{$post['lang']}}</h5>
  <div class="card-body">
    <h5 class="card-title">year:  {{$post['year']}}</h5>
    <p class="card-text">id: {{$post['id']}}</p>
  </div>
</div>
@endsection