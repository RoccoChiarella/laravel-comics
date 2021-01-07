@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            @foreach ($comics as $value)
                <div class="comics-card">
                    <div class="comic-image">
                        <img src="{{ $value['thumb'] }}" alt="">
                    </div>
                    <div class="comic-title">
                        <a href="#" class="text-upper">{{ $value['title'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection

@section('page-title', 'Home - Laravel DC Comics')
