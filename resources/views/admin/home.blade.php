@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ route('admin.product.index') }}" class="btn btn-default btn-lg btn-block">محصولات</a>
                        <a href="{{ route('admin.news.index') }}" class="btn btn-default btn-lg btn-block">اخبار</a>
                        <a href="{{ route('admin.contact.index') }}" class="btn btn-default btn-lg btn-block">تماس ها</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
