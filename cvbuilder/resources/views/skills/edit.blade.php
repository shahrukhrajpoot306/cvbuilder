@extends('layouts.app')

@section('content')


<div class="container">
    <h2>Update Skills</h2>

<div>
    @if(session()->has('errors'))

    @foreach ( $errors->all() as $e )


<div class="alert alert-danger" role="alert">
    <p>{{$e}}</p>
</div>

    @endforeach

    @endif
</div>

<form action="{{route('skill.update', $skill)}}" method="POST">

    @csrf
    @method('PUT')
<input type="text" name="name" placeholder="name" value="{{$skill->name}}">
    <input type="text" name="rating" placeholder="Rating" value="{{$skill->rating}}">
    <input type="submit" value="submit">


</form>
</div>

@endsection
