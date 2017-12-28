<div class="header">
    <ul>
        <li class="first_li selected">
            <img src="{{ asset('images/slide1.jpg') }}" alt="Slider 1"/>
        </li>
    </ul>
    <div class="black50"></div>
    <a class="logo" href="{{ url('/') }}"><img src=" {{ asset('/images/logo.png') }}" alt="Logo"/></a>
    <h1>{{ config('app.name') }}</h1>
    <h2>{{ config('app.description') }}</h2>
    <a class="buttons button2" href="{{ route('about-us') }}">درباره ما</a>
    <a class="buttons button1" href="{{ route('product.index') }}">محصولات</a>
    <div class="slogan"></div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $(".rep_nav").hover(function () {
            $(this).find("ul").stop().slideDown();
        }, function () {
            $(this).find("ul").stop().slideUp();
        });
    });
</script>