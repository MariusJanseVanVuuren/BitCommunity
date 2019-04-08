@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-bottom: 1rem;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">What's on your mind</div>
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
    <div cl ass="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">New ideas from cool people</div>
                  <div class="card-body">
                    <section class="Posts">
                        @foreach ($posts as $post)
                        <article class="post" data-postid="{{ $post->id }}">
                            <div class="post-header">{{ $post->user->name }} </div>
                            <p class="post-body">{{ $post->body }}</p>
                        </article>
                        @endforeach
                    </section>
                  </div>
              </div>
            </div>
      </div>
    </div>
</div>
@endsection
