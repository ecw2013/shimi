@extends('layouts.app')

@section('body')
    <div class="clear clear30"></div>
    <div class="container ">
        <div class="main_title"><h3>محصولات</h3></div>
        <div class='text'>واردات انواع محیط کشت میکروبی و سلولی و محیط کشت خون و کروموژنیک ، انواع آنتی بادی و آنتی سرم
            ها پانواع کیت آلایزه و ژنتیک و مولکولی و رنگ آمیزی در کمترین زمان ممکن و رعایت زنجیره سرد و دریافت مجوز
            بهداشت
        </div>
        @foreach($products as $index => $product)
            <a href="{{ route('product.show', ['product' => $product ]) }}"
               class="blog_boxes {{ $index % 2 == 0 ? '' : 'anti_blog_boxes' }}">
                <img src="{{ asset('files/' . $product->picture_path ) }}" alt="Picture path"/>
                <div class="readall_black70">مشاهده بیشتر ...</div>
                <div class="title">{{ $product->title }}</div>
            </a>
        @endforeach
    </div>
    <div class="clear"></div>
    {{ $products->links() }}
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