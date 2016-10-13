@extends('layouts.app')

@section('content')



    <h2>Book reviews</h2>

    <div id="app-holder">
        <div id="review-app"></div>
    </div>

@stop

@section('scripts')
    <script   src="http://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="/js/reviews/reviews-bundle.js"></script>

@stop
