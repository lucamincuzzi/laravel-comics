@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="comic-card">
                            <img src="{{ $comic["thumb"] }}" alt="">
                            <div class="comic-title text-uppercase text-center">
                                <h4>{{ $comic["series"] }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="load">
                <button><span>LOAD MORE</span></button>
            </div>
        </div>
    </div>
@endsection
