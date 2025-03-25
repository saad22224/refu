<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<?php
App::setLocale(session('locale', 'ar'));
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>صفحة مشابهة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        .header {
            background-color: #003366;
            color: white;
            padding: 15px;
            font-size: 18px;
        }

        .logo {
            font-size: 30px;
            font-weight: bold;
            margin: 10px 0;
        }

        .nav {
            background-color: #1f4b7a;
            padding: 10px;
        }

        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        .container {
            background-color: white;
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            margin: 15px 0;
            text-align: right;
        }

        label,
        input {
            display: block;
            width: 100%;
            padding: 10px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .message-box {
            margin: 20px auto;
            padding: 20px;
            background: white;
            border: 2px solid black;
            font-size: 20px;
            width: 60%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: right;
        }
        th {
            background: #2d5d9f;
            color: white;
        }
    </style>
</head>

<body>
    <div class="header">{{ __('messages.language') }}: <a style="color: white" href="{{ route('locale', 'ar') }}">
            {{ __('messages.arabic') }}</a> | <a style="color: white" href="{{ route('locale', 'en') }}">
            {{ __('messages.english') }}</a></div>
    <div class="logo">UNHCR</div>
    <div class="nav">
        <a href="{{url('/')}}">{{__('messages.home')}}</a>
        <a href="#">{{__('messages.rsd')}}</a>
        <a href="#">{{__('messages.forms')}}</a>
        {{-- <a href="#">Relevant Links</a> --}}
    </div>
    <div class="container">
        <h2>{{__('messages.egypt')}}</h2>
        {{-- <div class="input-group">
            <label for="dob">Date of birth</label>
            <input type="date" id="dob">
        </div> --}}
        <div class="input-group">
            <label for="case">{{__('messages.unhcr')}}</label>
            <input type="text" id="case">
        </div>
        <button id="searchBtn">{{__('messages.search')}}</button>
        <p id="errorMsg" style="color: red; display: none;"></p>
        
    
    {{-- <div class="message-box">نص ساررسله لإضافته مع صورة</div> --}}

    <table id="resultTable" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"  style="display: none">
        <tr>
            <th>برنامج الرحلة</th>
            <th>إعادة التوطين كندا</th>
        </tr>
        <tr>
            <td> {{__('messages.desc')}}</td>
            <td>إعادة التوطين</td>
        </tr>
        <tr>
            <td>طول الرحلة</td>
            <td>15 ساعة</td>
        </tr>
        <tr>
            <td>تاريخ المغادرة</td>
            <td>27-03-1441</td>
        </tr>
        <tr>
            <td>شركة الطيران المغادرة</td>
            <td>المصرية للطيران</td>
        </tr>
        <tr>
            <td>خطوط الطيران الكندية</td>
            <td>Air Canada</td>
        </tr>
        <tr>
            <td>رقم رحلة المغادرة</td>
            <td>EGY 4610484477</td>
        </tr>
        <tr>
            <td>وقت الوصول</td>
            <td>10:00AM</td>
        </tr>
        <tr>
            <td>مدة الرحلة</td>
            <td>نصف يوم وثلاث ساعات</td>
        </tr>
        <tr>
            <td>الانطلاق</td>
            <td>مطار القاهرة الدولي</td>
        </tr>
        <tr>
            <td>الاستقبال</td>
            <td>مطار مونتريال</td>
        </tr>
        <tr>
            <td>المستقبل</td>
            <td>المفوضية السامية لشؤون اللاجئين في كندا</td>
        </tr>
        <tr>
            <td>الفندق</td>
            <td>هيلتون جاردن مونتريال كندا</td>
        </tr>
        <tr>
            <td>جهة الاتصال الرئيسية</td>
            <td>+201145691406</td>
        </tr>
    </table>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("searchBtn").addEventListener("click", function () {
            let code = document.getElementById("case").value;
            let errorMsg = document.getElementById("errorMsg");
            let resultTable = document.getElementById("resultTable");
    
            errorMsg.style.display = "none"; // إخفاء رسالة الخطأ
            resultTable.style.display = "none"; // إخفاء الجدول
    
            fetch("/api/search", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: JSON.stringify({ code: code })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    resultTable.style.display = "table"; // إظهار الجدول إذا كان الكود صحيحًا
                } else {
                    errorMsg.textContent = "  لا يوجد نتيجه "; // عرض رسالة خطأ
                    errorMsg.style.display = "block";
                }
            })
            .catch(error => {
                console.error("Error:", error);
                errorMsg.textContent = "حدث خطأ أثناء الاتصال بالخادم";
                errorMsg.style.display = "block";
            });
        });
    });
    </script>
    
</body>

</html>


