@extends('layouts.app')

@section('content')

    <h2>Basic Information</h2>


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> {{$details->fullname}} {{$details->email}} {{$details->phone}} {{$details->address}} </h4>

                    <a href="{{route('user-detail.edit', $details)}}" class="btn btn-sm btn-primary" role="button">Edit</a>


                    <form action="{{route('user-detail.destroy', $details)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" method="POST" value="DELETE" class="btn btn-sm btn-danger" style="display: inline">
                    </form>
                </div>
            </div>

            <a name="" id="" class="btn btn-primary" href="{{route('education.index')}}}}" role="button">Education</a>


@endsection
