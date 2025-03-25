<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<?php
App::setLocale(session('locale', 'ar'));
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNHCR Canada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #003366;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .header a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        .logo {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
            background-color: #005bbb;
            color: white;
        }

        .nav {
            text-align: center;
            padding: 10px;
            background-color: #ddd;
        }

        .nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .content {
            padding: 20px;
            background: white;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            /* توسيط الصورة */
            margin: 20px 0;
            /* إضافة مسافة حول الشعار */
        }

        .logo img {
            width: 150px;
            /* تعديل الحجم */
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="header">{{ __('messages.language') }}: <a style="color: white" href="{{ route('locale', 'ar') }}">
            {{ __('messages.arabic') }}</a> | <a style="color: white" href="{{ route('locale', 'en') }}">
            {{ __('messages.english') }}</a></div>
    {{-- <div class="logo">UNHCR</div> --}}
    <div class="logo">
        <img src="{{ asset('assets\HCR.png') }}" alt="UNHCR Logo">
    </div>

    <div class="nav">
        <a href="{{ url('/') }}">{{ __('messages.home') }}</a>
        <a href="#">{{ __('messages.rsd') }}</a>
        <a href="{{ url('/forms') }}">{{ __('messages.forms') }}</a>
        {{-- <a href="#">Relevant Links</a> --}}
    </div>
    <div class="content" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
        <h2>{{ __('messages.title') }}</h2>
        <p>{{ __('messages.description') }}</p>
        <p>{{ __('messages.info') }}</p>

        <h3>{{ __('messages.rep_title') }}</h3>
        <p><strong>{{ __('messages.address') }}</strong><br>
            {{ __('messages.address_details') }}</p>
        <p><strong>{{ __('messages.phone') }}</strong></p>
        <p><strong>{{ __('messages.email') }}</strong> <a href="mailto:canot@unhcr.org">canot@unhcr.org</a></p>
        <p><strong>{{ __('messages.time_zone') }}</strong></p>

        <h3>{{ __('messages.working_hours') }}</h3>
        <ul>
            <li>{{ __('messages.monday') }}</li>
            <li>{{ __('messages.tuesday') }}</li>
            <li>{{ __('messages.wednesday') }}</li>
            <li>{{ __('messages.thursday') }}</li>
            <li>{{ __('messages.friday') }}</li>
            <li>{{ __('messages.saturday') }}</li>
            <li>{{ __('messages.sunday') }}</li>
        </ul>
    </div>

</body>

</html>
