@extends('layouts.app')

@section('content')
<div class="card-header" style="margin-left:5%; margin-right:5%; margin-bottom:10px; border-radius:10rem;">Your awesome friends so far</div>
  @foreach ($friends as $friend)
  <article class="post" style="margin-left:5%; margin-right:5%; margin-bottom:10px;" data-postid="{{ $friend->id }}">
      <div class="post-header">{{ $friend->name }}</div>
      <form action="{{ route('user.dropFriend') }}" method="post">
          <input type="hidden" name="requested_friend_id" value="{{ $friend->id }}">
          <input type="hidden" value="{{ Session::token()}}" name="_token">
          <button type="submit" class="btn" style="text-align:center;">Take a break<br><img src="img/broken-heart.png" height="30px" width="30px" /></button>
      </form>
  </article>
@endforeach
@if ($friends->count() == 0)
<article class="post" style="margin-left:5%; margin-right:5%;">
  <p class="post-body">
    Reach out to some folks and get to know the cool people you work with
  </p>
</article>
@endif
<div class="card-header" style="margin-left:5%; margin-right:5%; margin-bottom:10px; border-radius:10rem;">potential friends</div>
@foreach ($potential_friends as $potential_friend)
<article class="post" style="margin-left:5%; margin-right:5%; margin-bottom:10px;" data-postid="{{ $potential_friend->id }}">
    <div class="post-header">{{ $potential_friend->name }}</div>
    <form action="{{ route('user.befriend') }}" method="post">
        <input type="hidden" name="requested_friend_id" value="{{ $potential_friend->id }}">
        <input type="hidden" value="{{ Session::token()}}" name="_token">
        <button type="submit" class="btn" style="text-align:center;">Make a new friend<br><img src="img/friend.png" height="30px" width="30px" /></button>
    </form>
</article>
@endforeach
@if ($potential_friends->count() == 0)
<article class="post" style="margin-left:5%; margin-right:5%;">
  <p class="post-body">
    You're pretty much famous.
  </p>
  <p class="post-body">
    There's no one here you don't know.
  </p>
</article>
@endif

@endsection
