@extends('layouts.admin.app')

@section('content')
    <div class="container" style="direction: rtl">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span style="direction: rtl; font-weight: bolder; font-size: 20px">{{ $contact->name }}</span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <p class="form-control-static text-right">{{ $contact->name }}</p>
                                </div>
                                <label class="col-sm-2 control-label" style="text-align: left">نام</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <p class="form-control-static text-right">{{ $contact->phone_number }}</p>
                                </div>
                                <label class="col-sm-2 control-label" style="text-align: left">شماره تماس</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <p class="form-control-static text-right">{{ $contact->email }}</p>
                                </div>
                                <label class="col-sm-2 control-label" style="text-align: left">ایمیل</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <p class="form-control-static text-right">{{ $contact->subject }}</p>
                                </div>
                                <label class="col-sm-2 control-label" style="text-align: left">موضوع</label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <p class="form-control-static text-right">{{ $contact->text }}</p>
                                </div>
                                <label class="col-sm-2 control-label" style="text-align: left">توضیحات</label>
                            </div>
                        </form>
                        <a href="{{ back()->getTargetUrl() }}" class="btn btn-danger">بازگشت</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection