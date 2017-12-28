<div class="navigator">
    <div class="container">
        <ul>
            @php
                $page = $page ?? 'home';
            @endphp
            <li>
                <a href="{{ route('home') }}" class="{{ $page == 'home' ? 'selected' : '' }}">صفحه نخست</a>
            </li>
            <li>
                <a href="{{ route('news.index') }}" class="{{ $page == 'news' ? 'selected' : '' }}">اخبار</a>
            </li>
            <li>
                <a href="{{ route('product.index') }}" class="{{ $page == 'products' ? 'selected' : '' }}">محصولات</a>
            </li>
            <li>
                <a href="{{ route('about-us') }}" class="{{ $page == 'about_us' ? 'selected' : '' }}">درباره‌ ما</a>
            </li>
            <li>
                <a href="{{ route('contact-us') }}" class="{{ $page == 'contact_us' ? 'selected' : '' }}">ارتباط با ما</a>
            </li>
        </ul>
        <div class="sharing">
            <a class="fb" href="https://www.facebook.com/sharer/sharer.php?u={{ url(Route::current()->uri) }}"></a>
            <a class="gp" href="https://twitter.com/home?status={{ url(Route::current()->uri) }}"></a>
            <a class="tg" href="https://telegram.me/share/url?url={{ url(Route::current()->uri) }}"></a>
            <span>اشتراک صفحه</span>
        </div>
    </div>
</div>