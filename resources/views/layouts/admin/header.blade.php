@if(Auth::check())
    <div class="container" id="top">
        <div class="right">
            فضای مدیریت وبسایت
        </div>
        <div class="icons">
            <a href="contacts.php" class="contacts"></a>
            <a href="user_settings.php" class="user_settings"></a>
            <a href="JavaScript:();" class="upload"
               onclick="javascript:window.open('uploader.php','Uploader','left=100,top=100,status=no,scrollbars=yes,toolbar=no,menubar=no,location=no,width=400px,height=210px')"></a>

        </div>
        <div class="left">
            <a target="_blank" href="{{ route('home') }}">مشاهده ی وب سایت</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                خروج
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endif