@extends('layouts.app')

@section('content')



    <div class="row">
        <div class="col-md-8">
            <h2>Book reviews</h2>
        </div>
        @if(Auth::user())
            <div class="col-md-4">
                <a href="/reviews/create" class="btn btn-primary">Create</a>
            </div>
        @endif
    </div>

    <div id="app-holder">
        <div id="review-app"></div>
    </div>

@stop

@section('scripts')
    <script   src="http://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="/js/reviews/reviews-bundle.js"></script>

@stop
