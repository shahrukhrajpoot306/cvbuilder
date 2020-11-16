@extends('layouts.app')

@section('content')


<div class="container">
    <h2>Update Education</h2>

<div>
    @if(session()->has('errors'))

    @foreach ( $errors->all() as $e )


<div class="alert alert-danger" role="alert">
    <p>{{$e}}</p>
</div>

    @endforeach

    @endif
</div>

<form action="{{route('education.update', $education)}}" method="POST">

    @csrf
    @method('PUT')
<input type="text" name="schoolname" placeholder="schoolname" value="{{$education->schoolname}}">
    <input type="text" name="degree" placeholder="degree" value="{{$education->degree}}">
    <input type="date" name="graduation_start_date" placeholder="graduation_start_date" value="{{$education->graduation_start_date}}">
    <input type="date" name="graduation_end_date" placeholder="graduation_end_date" value="{{$education->graduation_end_date}}" >
    <input type="submit" value="submit">


</form>
</div>

@endsection
