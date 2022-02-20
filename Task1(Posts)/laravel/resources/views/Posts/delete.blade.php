@extends("Layouts.layout")
@section('title', 'index')
@section('sidebar')
<a class="btn btn-success" href="{{route('posts.create')}}">create post</a>
    <a class="btn btn-success" href="/Posts/Create">create post</a>
<table class="table container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Lang</th>
      <th scope="col">year</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($Posts as $Post)
    <tr>
      <th scope="row">{{$Post["id"]}}</th>
      <td>{{$Post["lang"]}}</td>
      <td>{{$Post["year"]}}</td>
      <td>
        <a class="btn btn-danger" href="{{route('posts.delete',['Post'=>$Post['id']])}}">Delete</a>
        <a class="btn btn-primary"href="{{route('posts.edit',['Post'=>$Post['id']])}}">Edit</a>
        <a class="btn btn-info"href="{{route('posts.show',['Post'=>$Post['id']])}}">view</a>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>
@endsection
