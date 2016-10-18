@extends('layouts.app')

@section('content')



    <h2>Create review</h2>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/reviews/save') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email" class="col-md-4 control-label">Type</label>
            <div class="col-md-6">
                <select name="type">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-md-4 control-label">Body</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>
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
