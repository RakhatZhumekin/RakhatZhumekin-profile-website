<!DOCTYPE html>
<html>
<head>
    <title>@lang('lang.main') @lang('lang.page')</title> 
    <link rel="stylesheet" href= "{{ asset('main_page.css') }}" />
    <script src="{{ asset('main_page.js') }}"></script>
</head>
<body>
    <div class="header">
        <div id="about" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('about', ['lang' => App::getLocale()]) }}">@lang('lang.about')</a></div>
        <div id="contacts" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('contacts', ['lang' => App::getLocale()]) }}">@lang('lang.contacts')</a></div>
    </div>
    <h1 id="hello">@lang('lang.intro')</h1>
    <h1>@lang('lang.continue') <a href="{{ URL::route('about', ['lang' => App::getLocale()]) }}">@lang('lang.about')</a> 
        @lang('lang.or') <a href="{{ URL::route('contacts', ['lang' => App::getLocale()]) }}">@lang('lang.contacts')</a> @lang('lang.section')</h1>
</body>
</html>