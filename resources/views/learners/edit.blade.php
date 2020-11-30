@extends('base')

@section('content')
    <h1>Edit User {{ $learner->user_id }}, {{ $learner->levels }}</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::model($learner, ['url'=>"/learners/$learner->id", 'method'=>'patch']) !!}

            @include('learners._form')

            <div class="form-group">
                <button class="btn btn-primary float-right">
                    Update Learner
                </button>
            </div>

            {!! Form::close() !!}

        </div>

        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

@endsection
