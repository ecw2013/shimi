@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="main_title"><h3>{{ $product->title }}</h3></div>
        <div class="text">{{ $product->text }}</div>
        <div class="clear clear60"></div>
        <img src="{{ asset('files/' . $product->picture_path ) }}" alt="Picture path">
    </div>
@endsection
