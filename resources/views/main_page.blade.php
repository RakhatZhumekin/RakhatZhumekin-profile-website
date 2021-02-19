<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title> 
    <link rel="stylesheet" href= "{{ asset('main_page.css') }}" />
    <script src="{{ asset('main_page.js') }}"></script>
</head>
<body>
    <div class="header">
        <div id="main" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('main_page') }}">Main</a></div>
        <div id="about" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('about') }}">About</a></div>
        <div id="contacts" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('contacts') }}">Contacts</a></div>
    </div>
    <h1 id="hello">Hello! My name is Rakhat, and this is a website about myself.</h1>
    <h1>Continue on to the <a href="{{ URL::route('about') }}">About</a> section or
    the <a href="{{ URL::route('contacts') }}">Contacts</a> section.</h1>
</body>
</html>