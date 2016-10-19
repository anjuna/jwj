@extends('layouts.app')

@section('content')



    <h2>Create review</h2>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/reviews/create') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email" class="col-md-4 control-label">Type</label>
            <div class="col-md-6">
                <select name="type" class="form-control">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-md-4 control-label">Reviewable</label>
            <div class="col-md-6">
                <select name="reviewable" class="form-control">
                    @foreach($reviewables as $reviewable)
                        <option value="{{ $reviewable->id }}">{{ $reviewable->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-md-4 control-label">Body</label>
            <div class="col-md-6">
                <textarea name="body" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </div>
    </form>

@stop

@section('scripts')

@stop
