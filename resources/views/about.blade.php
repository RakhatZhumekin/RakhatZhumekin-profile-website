<!DOCTYPE html>
<html>
<head>
    <title>@lang('lang.about')</title> 
    <link rel="stylesheet" href= "{{ asset('about.css') }}" />
    <script src="{{ asset('main_page.js') }}"></script>
</head>
<body>
    <div class="header">
        <div id="main" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('main_page', ['lang' => App::getLocale()]) }}">@lang('lang.main')</a></div>
        <div id="contacts" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('contacts', ['lang' => App::getLocale()]) }}">@lang('lang.contacts')</a></div>
    </div>
    <img src="https://ertisdaryn.kz/media/img/blogs/5d53e4464bf98.jpg" alt="">
    <h1>@lang('lang.info')</h1>
    <ul class="information">
        <li>@lang('lang.old')</li>
        <li>@lang('lang.from')</li>
        <li>@lang('lang.alumni')</li>
        <li>@lang('lang.hobbies')</li>
    </ul>
</body>
</html>