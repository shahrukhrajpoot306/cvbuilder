@extends('layouts.app')

@section('content')


<div class="container">
    <h2>Skills</h2>

<div>
    @if(session()->has('errors'))

    @foreach ( $errors->all() as $e )


<div class="alert alert-danger" role="alert">
    <p>{{$e}}</p>
</div>

    @endforeach

    @endif
</div>

<form action="/skill" method="POST">

    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="rating" placeholder="Rating">
    <input type="submit" value="submit">


</form>

    <a href="{{route('skill.index')}}" class="btn btn-sm btn-primary">Next</a>

</div>

@endsection
