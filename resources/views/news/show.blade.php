@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="main_title"><h3>{{ $news->title }}</h3></div>
        <div class="text">{{ $news->text }}</div>
        <div class="clear clear60"></div>
    </div>
@endsection
