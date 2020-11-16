@extends('layouts.app')

@section('content')

    <h2>Skills</h2>
        @foreach ($skills as $e )

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> {{$e->name}} {{$e->rating}}</h4>

                    <a href="{{route('skill.edit', $e)}}" class="btn btn-sm btn-primary" role="button">Edit</a>


                    <form action="{{route('skill.destroy', $e)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" method="POST" value="DELETE" class="btn btn-sm btn-danger" style="display: inline">
                    </form>
                </div>
            </div>

        @endforeach

        <a href="{{route('skill.create')}}" class="btn btn-sm btn-primary">Add Another SKill</a>

@endsection
