@extends('layouts.app')

@section('content')

    <h2>Career</h2>
        @foreach ($careers as $e )

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> {{$e->job_title}} {{$e->start_date}} {{$e->end_date}} </h4>

                    <ul>
                        <li> {{$e->company}} </li>
                        <li> {{$e->city}} </li>
                    </ul>

                    <a href="{{route('career.edit', $e)}}" class="btn btn-sm btn-primary" role="button">Edit</a>


                    <form action="{{route('career.destroy', $e)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" method="POST" value="DELETE" class="btn btn-sm btn-danger" style="display: inline">
                    </form>
                </div>
            </div>

        @endforeach

        <a href="{{route('career.create')}}" class="btn btn-sm btn-primary">Add Another Education</a>
        <a href="{{route('skill.index')}}" class="btn btn-sm btn-primary">Skills</a>
@endsection
