@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="pull-right" style="font-weight: bolder; font-size: 20px;">لیست اخبار</span>
                        <span>
                            <a href="{{ route("admin.news.create") }}" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        @foreach($newses as $news)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-right">
                                <div class="panel panel-default" style="height: 400px; direction: rtl">
                                    <div class="panel-body">
                                        <div style="height: 260px">
                                            @if(!is_null($news->picture_path))
                                                <img alt="{{ $news->title }}"
                                                     src="{{ asset('files/' . $news->picture_path ) }}"
                                                     style="width: 100%; height: 250px;"/>
                                            @endif
                                        </div>
                                        <div class="card-block">
                                            <h4 class="card-title" style="height: 20px; overflow-y: hidden;">
                                                {{ $news->title }}
                                            </h4>
                                            <p class="card-text" style="height: 23px; overflow-y: hidden;">
                                                {{ substr($news->text, 0, 30) }} ...
                                            </p>
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.news.edit', ['news' => $news->id]) }}"
                                               class="btn btn-primary form-control">ویرایش</a>
                                        </div>
                                        <div>
                                            @can('delete', $news)
                                                <form method="post"
                                                      action="{{ route('admin.news.destroy', ['news' => $news]) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-sm btn-danger form-control">حذف</button>
                                                </form>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="panel-footer text-center">
                        {{ $newses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection