    @extends('layouts.app')

    @section('content')


    <div class="container">
        <h2>Basic Information</h2>

    <div>
        @if(session()->has('errors'))

        @foreach ( $errors->all() as $e )


    <div class="alert alert-danger" role="alert">
        <p>{{$e}}</p>
    </div>

        @endforeach

        @endif
    </div>

    <form action="/user-detail" method="POST">

        @csrf
        <input type="text" name="fullname" placeholder="fullname">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="phone" placeholder="phone">
        <input type="text" name="address" placeholder="address">
        <input type="text" name="linkedin" placeholder="linkedin">
        <input type="text" name="summary" placeholder="summary">
        <input type="submit" value="submit">


    </form>
    </div>

    @endsection
