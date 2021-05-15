@extends('welcome')

@section('content')
    
<h2>Update Post</h2>
<div class="card">
	<div class="card-body">
		 <form action="{{route('post.update',$post->id)}}" method="post">
		 	@csrf
  <div class="form-group">
    <label for="title">title:</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="title" id="title" value="{{$post->title}}" name="title">
    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div class="form-group">
    <label for="body">Body:</label>
    <input type="text" class="form-control @error('body') is-invalid @enderror" placeholder="body" id="body" value="{{ $post->body }}" name="body">
      @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
	</div>
</div>
@endsection