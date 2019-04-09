@extends('layouts.app')

@section('content')

  @foreach ($friends as $friend)
  <article class="post" style="margin-left:5%; margin-right:5%; margin-bottom:5%;" data-postid="{{ $friend->id }}">
      <div class="post-header">{{ $friend->name }}</div>
      <form action="{{ route('user.dropFriend') }}" method="post">
          <input type="hidden" name="requested_friend_id" value="{{ $friend->id }}">
          <input type="hidden" value="{{ Session::token()}}" name="_token">
          <button type="submit" class="btn" style="text-align:center;">Take a break<br><img src="img/broken-heart.png" height="30px" width="30px" /></button>
      </form>
  </article>
@endforeach
@endsection
