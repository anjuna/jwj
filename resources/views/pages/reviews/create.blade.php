@extends('layouts.app')

@section('content')



    <h2>Create review</h2>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/reviews/create') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email" class="control-label">Type</label>
                    <select name="type" class="form-control">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if(Auth::user()->hasOverlordPowers())
                <div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                        <label for="email" class="control-label">Add type</label>
                        <input name="new_type" type="text" class="form-control">
                    </div>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Reviewable</label>
                    <select name="reviewable" class="form-control">
                        @foreach($reviewables as $reviewable)
                            <option value="{{ $reviewable->id }}">{{ $reviewable->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if(Auth::user()->hasJourneymanPowers())
                <div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                        <label for="email" class="control-label">Add reviewable</label>
                        <input name="new_reviewable" type="text" class="form-control">
                    </div>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="control-label">Body</label>
                    <textarea name="body" class="form-control"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                </div>
            </div>
        </div>
    </form>

@stop

@section('scripts')

@stop
