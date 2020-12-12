@extends('base')

@section('content')
    <div class="modal fade" id="deleteInstructorModal" tabindex="-1" aria-labelledby="deleteInstructorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteInstructorModalLabel">Delete Instructor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Delete Instructor</button>
            </div>
        </div>
        </div>
    </div>

    <h1>Edit User {{ $instructor->user_id }}, {{ $instructor->aoe }}</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::model($instructor, ['url'=>"/instructors/$instructor->id", 'method'=>'patch']) !!}

            @include('instructors._form')

            <div class="form-group">
                 <!-- Button trigger modal -->
                 <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteInstructorModal">
                    Launch demo modal
                </button>
                <button class="btn btn-primary float-right">
                    Update Instructor
                </button>
            </div>

            {!! Form::close() !!}

        </div>

        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

@endsection
