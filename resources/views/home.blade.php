@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="first_boxes">
            <div class="icon"></div>
            <div class="title">آخرین خبر</div>

            <a class="link_title" href="{{ route('news.show',['news' => $latest_news]) }}">{{ $latest_news->title }}</a>
            <a class="more" href="{{ route('news.index') }}">مشاهده تمامی اخبار شرکت ...</a>
        </div>
        <div class="first_boxes">
            <div class="icon products_icon"></div>
            <div class="title">محصولات شرکت</div>
            <a class="link_title"
               href="{{ route('product.show',['product' => $latest_product]) }}">{{ $latest_product->title }}</a>
            <a class="more" href="{{ route('product.index') }}">مشاهده تمامی محصولات ...</a>
        </div>
        <div class="first_boxes last_first_box">
            <div class="icon contact_icon"></div>
            <div class="title">ارتباط با ما</div>
            <a class="link_title"
               href="{{ route('contact-us') }}">{{ config('app.contact_email') }}</a>
            <a class="more"
               href="{{ route('contact-us') }}">مشاهده اطلاعات کامل تماس با ما ...</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="first_text">
        <div class="container">
        <h3>
            واردات مواد شیمیایی و آزمـایشگاهی
        </h3>
            <br>
            <br>
            {{ config('app.name') }} وارد کننده انواع کیت ها ,محیط کشت ,آنتی بیوتیک ,آنزیم ها و معرف ها ,آنتی بادی ها ,آنتی سرم ها و مواد شیمیایی در زمینه های بیولوژی سلولی ,مولکولی ,بیوتکنولوژی ,کشت سلول,ایمونولوژی,بیوشیمی,میکروبیولوژی,دامپزشکی,سرطان شناسی,IVF,.... را با حفظ زنجیره دمای سرد یخچالی و فریزری منهای 20 و منهای 70 و حتی حمل با نیتروژن مایع به همره تانک از طریق مبادی قانونی کشور بصورت حمل یکسره(ترخیص در لحظه ورود کالا در گمرک با مناسبترین قیمت و کوتاهترین زمان در صورت موجود بودن در اروپا در کمتر از 1 ماه) در اختیار جامعه علمی و فرهیختگان کشور قرار میدهد. خدماتی تخصصی و نوین | در خور فرهیختگان ایران زمین
        </div>
    </div>
@endsection