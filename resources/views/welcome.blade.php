@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="/css/hackathon.css"/>

    @include('_partials/splash-nav')

@section('content')
    <div class="container">
        <form id="search-bar" action="/gallery">
            <div class = "form-group">
                <label for="search">
                    <h2 class = "search-text">
                        <i class="fas fa-frog"></i>
                        Poopscoop
                    </h2></label>
                <input id="search-bar-input" type="text" name="search" placeholder="Animal name here..." class ="form-control mx-sm-3">
            </div>
            <input type="submit" class="btn btn-lg btn-outline-light" placeholder="Search">
        </form>
    </div>
@endsection
