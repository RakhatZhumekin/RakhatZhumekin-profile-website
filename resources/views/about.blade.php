<!DOCTYPE html>
<html>
<head>
    <title>About</title> 
    <link rel="stylesheet" href= "{{ asset('about.css') }}" />
    <script src="{{ asset('main_page.js') }}"></script>
</head>
<body>
    <div class="header">
        <div id="main" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('main_page') }}">Main</a></div>
        <div id="about" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('about') }}">About</a></div>
        <div id="contacts" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('contacts') }}">Contacts</a></div>
    </div>
    <img src="https://ertisdaryn.kz/media/img/blogs/5d53e4464bf98.jpg" alt="">
    <h1>Some info about myself:</h1>
    <ul class="information">
        <li>I'm 19 years old.</li>
        <li>I'm from Pavlodar city.</li>
        <li>I'm the alumni of BIL(KTL).</li>
        <li>I like drawing, singing, dancing and listening to music!</li>
    </ul>
</body>
</html>