@extends('frontend.views.layout')

@section('content')

<div class="error-wrapper text-center">
    <div class="container">
        <img class="mb-50" src="assets/img/normal/404.png" alt="error">
        <h2>Look Like You’re Lost</h2>
        <p class="sec-text mb-30">The link you followed probably broken or the page has been removed</p>
        <a href="index.html" class="link-btn">
            <span class="link-effect">
                <span class="effect-1">back to home</span>
                <span class="effect-1">back to home</span>
            </span>
            <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
        </a>
    </div>
</div>


@stop