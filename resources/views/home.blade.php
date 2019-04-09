@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center" style="margin-bottom: 1rem;">
        <div class="col-md-10">
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
</div>

<div class="friend-section">
  <div class="card-header" style="margin-bottom:10px; border-radius:10rem;">Potential friends</div>
  @foreach ($friends as $friend)
  <article class="post" data-postid="{{ $friend->id }}">
      <div class="post-header">{{ $friend->name }}</div>
      <form action="{{ route('user.befriend') }}" method="post">
          <input type="hidden" name="requested_friend_id" value="{{ $friend->id }}">
          <input type="hidden" value="{{ Session::token()}}" name="_token">
          <button type="submit" class="btn" style="text-align:center;">Make a new friend<br><img src="img/friend.png" height="30px" width="30px" /></button>
      </form>
  </article>
  @endforeach
  @if ($friends->count() == 0)
  <article class="post">
    <p class="post-body">
      You're pretty much famous.
    </p>
    <p class="post-body">
      There's no one here you don't know.
    </p>
  </article>
  @endif
</div>

<div class="post-section">
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
@endsection
