@extends('layout.app')

@section('title', $title ?? '')

@section('after_styles')

<style>
    html, body {
        background-color: #fff;
        /*color: #636b6f;*/
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .title-header {

    }

    #main-content h1,
    #main-content h2,
    #main-content h3,
    #main-content h4,
    #main-content h5,
    #main-content h6 {
        color: #4582ec;
    }

</style>
@endsection

@php
    $carousel = json_decode($page->extras)->carousel;
    $carousel = json_decode($page->extras)->carousel;
@endphp

@section('content')
    <div class="col-md-8 shadow p-0 mx-auto my-5">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($carousel as $key => $image)
                <li data-target="#carousel" data-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($carousel as $key => $image)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img class="d-block w-100" src="{{ asset($image) }}" alt="Image {{ $key }}">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="my-5 p-5" id="main-content">
            
            <div class="content">
                {!! $page->content !!}
                {{-- <div class="title-header">
                    <h4>LOREM IPSUM</h4>
                </div>
                <div class="text-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div> --}}
            </div>

        </div>
    </div>


@endsection