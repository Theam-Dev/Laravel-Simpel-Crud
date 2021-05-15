@extends('welcome')

@section('content')
    
<h2>Create Post</h2>
<div class="card">
	<div class="card-body">
		 <form action="{{route('post.store')}}" method="post">
		 	@csrf
  <div class="form-group">
    <label for="title">title:</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="title" id="title" value="{{ old('title') }}" name="title">
    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
  <div class="form-group">
    <label for="body">Body:</label>
    <input type="text" class="form-control @error('body') is-invalid @enderror" placeholder="body" id="body" value="{{ old('body') }}" name="body">
      @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>
	</div>
</div>
@endsection