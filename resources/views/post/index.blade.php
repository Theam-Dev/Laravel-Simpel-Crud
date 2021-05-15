@extends('welcome')

@section('content')
    

<h2>Post</h2>
<div class="card">
	<div class="card-body">
		 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($post as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->body}}</td>
        <td>
          <a href="{{route('post.edit',$item->id)}}" class="btn btn-info btn-sm">Edit</a>
          <a href="{{route('post.delete',$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
  <div class="float-right">{{ $post->links() }}</div>
	</div>
</div>
@endsection