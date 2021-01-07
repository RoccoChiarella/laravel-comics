@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            @foreach ($comics as $value)
                <img src="{{ $value['thumb'] }}" alt="">
                <p>{{ $value['title'] }}</p>
            @endforeach
        </div>
    </main>
@endsection

@section('page-title', 'Home - Laravel DC Comics')
