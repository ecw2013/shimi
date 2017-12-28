@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="contact">
            <div class="contact_title">فرم ارتباط سریع</div>
            <div class="message" onclick="$(this).fadeOut();">نام خود را وارد نمایید</div>
            <div class="clear"></div>
            <div id="trans"></div>
            <div class="load"></div>
            <div class="clear"></div>
            <form onsubmit="send_form();" method="post" action="JavaScript:();">
                <div class="full_box have_float">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text" id="name" name="name"/>
                </div>
                <div class="full_box have_float left">
                    <label for="phone_number">شماره تماس</label>
                    <input type="text" id="phone_number" name="phone_number"/>
                    <div class="clear"></div>
                </div>
                <div class="full_box have_float">
                    <label for="email">پست الکترونیک</label>
                    <input type="text" id="email" name="email"/>
                </div>
                <div class="full_box have_float left">
                    <label for="subject">موضوع پیام</label>
                    <input type="text" id="subject" name="subject"/>
                </div>
                <div class="clear"></div>
                <div class="full_box">
                    <label for="text">متن پیام</label>
                    <textarea name="text" id="text"></textarea>
                </div>
                <div class="clear"></div>
                <div class="full_box" style="margin-top: 12px;">
                    <input type="submit" class="submit" name="submit" value="ارسال پیام"/>
                    <div class="clear"></div>
                </div>
            </form>
        </div>
        <div class="contact_details">
            <div class="contact_title">اطلاعات تماس با شرکت</div>
            <div class="clear"></div>
            <div class="icons email">پست الکترونیک: contact@shimi.com</div>
            <div class="icons mobile"> تلفن همراه: 77158745</div>
            <div class="icons tel">شماره تماس: 0919785360</div>
            <div class="icons address">آدرس: میدان امام حسین (ع) - ابتدای خیابان دماوند - روبروی خیابان شهید منتظری پلاک
                1343 - دانشکده فنی و حرفه ای شهید شمسی پور
            </div>
        </div>
        <div class="clear"></div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12959.625645724727!2d51.4527082!3d35.7039206!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41b23deefbb9c666!2sShamsipour+Technical+College!5e0!3m2!1sen!2s!4v1514476149371" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function send_form() {
            $("input[type=text]").css("border-color", "#ddd");
            $(".message").fadeOut(100);
            $("#trans").fadeIn();
            $('.load').attr('background-image', '{{ asset('images/load.gif') }}');
            $(".load").fadeIn();
            var name = $("#name").val();
            var phone_number = $("#phone_number").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var text = $("#text").val();
            if (!(name)) {
                $("#trans").fadeOut();
                $(".load").fadeOut();
                $("#name").focus();
                $(".message").css("background-color", "#aa0000").html("لطفا نام خود را وارد نمایید").fadeIn(100);
            } else if (!(email)) {
                $("#trans").fadeOut();
                $(".load").fadeOut();
                $("#email").focus();
                $(".message").css("background-color", "#aa0000").html("لطفا پست الکترونیک خود را وارد نمایید").fadeIn(100);
            } else if (!(subject)) {
                $("#trans").fadeOut();
                $(".load").fadeOut();
                $("#title").focus();
                $(".message").css("background-color", "#aa0000").html("لطفا عنوان پیام خود را وارد نمایید").fadeIn(100);
            } else if (!(text)) {
                $("#trans").fadeOut();
                $(".load").fadeOut();
                $("#text").focus();
                $(".message").css("background-color", "#aa0000").html("لطفا متن پیام خود را وارد نمایید").fadeIn(100);
            } else {
                $.ajax({
                    type: 'POST',
                    headers: {
                        "Accept": "application/json",
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },

                    data: {
                        name: name,
                        phone_number: phone_number,
                        email: email,
                        subject: subject,
                        text: text
                    },
                    cache: false,
                    url: '{{ route('contact-us') }}',
                    success: function (html) {
                        $("#trans").fadeOut();
                        $(".load").fadeOut(function () {
                            $(".message")
                                .css("background-color", "#669900")
                                .html("پیام شما با موفقیت ارسال شد")
                                .fadeIn(100);
                            $("#name").val("");
                            $("#phone_number").val("");
                            $("#email").val("");
                            $("#subject").val("");
                            $("#text").val("");

                        });
                    },
                    error: function (error) {
                        $("#trans").fadeOut();
                        $(".load").fadeOut();
                        $(".message").css("background-color", "#aa0000").html("لطفا ورودی های خود را کنترل نمایید").fadeIn(100);
                        var errors = error.responseJSON.errors;

                        for (var prop in errors) {
                            console.log(prop);
                            $("#" + prop).css('border-color', "#aa0000");
                        }
                    }
                });
            }
        }
    </script>
@endsection