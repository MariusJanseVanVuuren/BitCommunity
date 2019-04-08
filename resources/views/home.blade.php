@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <form action="{{ route('post.create') }}" method="post">
                    <div class="form-group">
                      <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="What's on your mind?"></textarea>
                      <button type="submit" class="btn btn-primary">Create Post</button>
                      <input type="hidden" value="{{ Session::token()}}" name="_token">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
