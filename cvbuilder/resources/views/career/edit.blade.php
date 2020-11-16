@extends('layouts.app')

@section('content')


<div class="container">
    <h2>Update Career</h2>

<div>
    @if(session()->has('errors'))

    @foreach ( $errors->all() as $e )


<div class="alert alert-danger" role="alert">
    <p>{{$e}}</p>
</div>

    @endforeach

    @endif
</div>

<form action="{{route('career.update', $career)}}" method="POST">

    @csrf
    @method('PUT')
<input type="text" name="job_title" placeholder="Job" value="{{$career->job_title}}">
    <input type="text" name="company" placeholder="company" value="{{$career->company}}">
    <input type="date" name="start_date" placeholder="start_date" value="{{$career->start_date}}">
    <input type="date" name="end_date" placeholder="end_date" value="{{$career->end_date}}" >
    <input type="submit" value="submit">


</form>
</div>

@endsection
