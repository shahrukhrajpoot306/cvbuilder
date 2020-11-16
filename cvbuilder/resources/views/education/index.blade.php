@extends('layouts.app')

@section('content')

    <h2>Education</h2>
        @foreach ($education as $e )

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$e->schoolname}} {{$e->degree}} ({{$e->graduation_start_date}}
                        {{$e->graduation_end_date}})</h4>
                    <a href="{{route('education.edit', $e)}}" class="btn btn-sm btn-primary" role="button">Edit</a>


                    <form action="{{route('education.destroy', $e)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" method="POST" value="DELETE" class="btn btn-sm btn-danger" style="display: inline">
                    </form>
                </div>
            </div>

        @endforeach

        <a href="{{route('education.create')}}" class="btn btn-sm btn-primary">Add Another Education</a>
        <a href="{{route('career.index')}}" class="btn btn-sm btn-primary">Work Experience</a>

@endsection
