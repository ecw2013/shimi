@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="pull-right" style="font-weight: bolder; font-size: 20px;">لیست تماس ها</span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover table-striped" style="direction: rtl">
                            <thead>
                            <tr>
                                <td>نام</td>
                                <td>موضوع</td>
                                <td class="text-left">عملیات</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr class="{{ $contact->is_viewed ? 'success' : 'danger' }}">
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td class="text-left">
                                        <a href="{{ route('admin.contact.show', ['contact' => $contact]) }}"
                                           class="btn btn-default">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer text-center">
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection