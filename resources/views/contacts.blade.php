<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title> 
    <link rel="stylesheet" href= "{{ asset('contacts.css') }}" />
    <script src="{{ asset('main_page.js') }}"></script>
</head>
<body>
    <div class="header">
        <div id="main" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('main_page') }}">Main</a></div>
        <div id="about" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('about') }}">About</a></div>
        <div id="contacts" onmouseover="big(this)" onmouseout="small(this)"><a href="{{ URL::route('contacts') }}">Contacts</a></div>
    </div>    
    <h1>My contact information:</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Phone_icon.png" alt="Phone" id="Phone">
    <p>+77477900967</p>
    <img src="https://img.icons8.com/pastel-glyph/2x/whatsapp.png" alt="WhatsApp" id="WhatsApp">
    <img src="https://img.icons8.com/ios/452/telegram-app.png" alt="Telegram" id="Telegram">
    <p>+77477900967</p>
    <img src="http://simpleicon.com/wp-content/uploads/mail-5.png" alt="Mail" id="Mail">
    <p>zhumekinrakhat@gmail.com, 190103441@stu.sdu.edu.kz</p>
</body>
</html>