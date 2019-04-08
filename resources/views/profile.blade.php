@extends('layouts.app')

@section('content')
<div class="card" style="margin:1rem;">
    <div class="card-header">Hello {{ Auth::user()->name }}</div>
    <div class="card-body">
        <p class="sub-title">We know you as:<p>
        <p>{{ Auth::user()->name }}<p>
        <p class="sub-title">You've set your email address as:<p>
        <p>{{ Auth::user()->email }}<p>

        <a class="href-primary" style="text-transform: none; margin:1rem;" href='{{ route('profile.edit') }}'>Edit your profile</a>
        <!-- <br><br> -->
        <!-- <a class="href-primary" style="text-transform: none; margin:1rem;" href='{{ route('profile.change_password') }}'>Change your password</a> -->
    </div>
</div>
@endsection
