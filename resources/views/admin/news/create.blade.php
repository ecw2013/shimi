@extends('layouts.admin.app')

@section('content')
    <div class="container" style="direction: rtl">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">افزودن خبر</div>
                    <div class="panel-body">
                        <form class="form-horizontal"
                              method="post"
                              action="{{ route("admin.news.store") }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-push-1">
                                    <input class="form-control"
                                           id="title"
                                           name="title"
                                           placeholder="نام خبر"
                                           value="{{ old('title') }}">
                                </div>
                                <label for="title" class="col-sm-2 control-label hidden-xs">نام خبر</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-push-1">
                                    <textarea name="text"
                                              class="form-control"
                                              id="text" rows="5">{{ old('text') }}</textarea>
                                </div>
                                <label for="text" class="col-sm-2 control-label hidden-xs">متن</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-push-1">
                                    <input class="form-control"
                                           id="keywords"
                                           name="keywords"
                                           placeholder="کلمات کلیدی"
                                    value="{{ old('keywords') }}">
                                </div>
                                <label for="keywords" class="col-sm-2 control-label hidden-xs">کلمات کلیدی</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-push-1">
                                    <input class="form-control"
                                           id="description"
                                           name="description"
                                           placeholder="توضیحات"
                                           value="{{ old('description') }}">
                                </div>
                                <label for="description" class="col-sm-2 control-label hidden-xs">توضیحات</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-push-1">
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                                <label for="image" class="col-sm-2 control-label hidden-xs">تصویر</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">ذخیره</button>
                                    <a href="{{ back()->getTargetUrl() }}" class="btn btn-danger">انصراف</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
