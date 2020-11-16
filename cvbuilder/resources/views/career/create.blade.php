@extends('layouts.app')

@section('content')


<div class="container">
    <h2>Career</h2>

<div>
    @if(session()->has('errors'))

    @foreach ( $errors->all() as $e )


<div class="alert alert-danger" role="alert">
    <p>{{$e}}</p>
</div>

    @endforeach

    @endif
</div>

<form action="/career" method="POST">

    @csrf
    <input type="text" name="job_title" placeholder="Job">
    <input type="text" name="company" placeholder="company">
    <input type="text" name="city" placeholder="city">
    <input type="date" name="start_date" placeholder="start_date">
    <input type="date" name="end_date" placeholder="end_date">
    <input type="submit" value="submit">


</form>
</div>

@endsection
