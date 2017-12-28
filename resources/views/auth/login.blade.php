@extends('layouts.admin.app')

@section('body')
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'/>
    <div id="login_body">
        <div class="error" onclick="$(this).slideUp();"></div>
        <img src="{{ asset('images/admin/bg.jpg') }}" class="myBackgroundImage" alt="mybackground"/>
        <div id="login_box">
            <div class="title">STM Lab Administrator Panel</div>
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="full_box">
                    <label for="email">Username:</label>
                    <input class="ltr" type="text" name="email" id="email"/>
                    <label for="password">Password:</label>
                    <input class="ltr" type="password" name="password" id="password"/>
                    <input type="submit" name="submit" class="submit" value="Login"/>
                </div>
                <div class="clear"></div>
            </form>
        </div>
        @if ($errors->has('email'))
            <script>
                $(document).ready(function () {
                    $(".error").html("{{ $errors->get('email')[0] }}").slideDown();
                });
            </script>
        @endif
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".myBackgroundImage").cover({
                backgroundPosition: "center",
                checkWindowResize: true,
                loadHidden: true
            });
        });
    </script>
@endsection