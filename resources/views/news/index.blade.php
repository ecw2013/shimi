@extends('layouts.app')

@section('body')
    <div class="clear clear30"></div>
    <div class="container ">
        <div class="main_title"><h3>اخبار</h3></div>
        <div class='text'>

        </div>
        @foreach($newses as $index => $news)
            <a href="{{ route('news.show', ['news' => $news ]) }}"
               class="blog_boxes {{ $index % 2 == 0 ? '' : 'anti_blog_boxes' }}">
                <img src="{{ asset('files/' . $news->picture_path ) }}" alt="Picture path"/>
                <div class="readall_black70">مشاهده بیشتر ...</div>
                <div class="title">{{ $news->title }}</div>
            </a>
        @endforeach
    </div>
    <div class="clear"></div>
    {{ $newses->links() }}
    <br>
    <br>
@endsection

@section('script')

    <script type="text/javascript">
        $(document).ready(function () {
            $(".blog_boxes").hover(function () {
                $(this).find(".readall_black70").stop().fadeIn(300);
            }, function () {
                $(this).find(".readall_black70").stop().fadeOut(300);
            });
            header_height = $(".header").height();
            nav_height = $(".navigator").height();
            $(window).scrollTop(nav_height + header_height);
        });
    </script>
@endsection