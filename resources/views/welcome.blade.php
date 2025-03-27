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
            width: 90%;
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

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: right;
        }

        th {
            background: #2d5d9f;
            color: white;
        }

        .logo {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
            background-color: #005bbb;
            color: white;
        }

        .logo {
            text-align: center;
            /* توسيط الصورة */
            margin: 20px 0;
            /* إضافة مسافة حول الشعار */
            background-color: #005bbb;
        }

        .logo img {
            width: 150px;
            /* تعديل الحجم */
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .loader {
            width: 48px;
            height: 48px;
            border: 3px dotted #FFF;
            border-style: solid solid dotted dotted;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            box-sizing: border-box;
            animation: rotation 2s linear infinite;
            transform: translateY(500%);
        }

        .loader::after {
            content: '';
            box-sizing: border-box;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            border: 3px dotted #FF3D00;
            border-style: solid solid dotted;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            animation: rotationBack 1s linear infinite;
            transform-origin: center center;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes rotationBack {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(-360deg);
            }
        }

        #imagesContainer {
            max-height: 200px;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
        }

        #imagesContainer img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 10px;
            border-radius: 10px;
            /* اختياري لإضافة حواف مستديرة */
        }

        /* #textAndImages{
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        } */


        #textAndImages #text{
            color: red;
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
        <a href="{{ url('/') }}">{{ __('messages.rsd') }}</a>
        <a href="{{ url('/forms') }}">{{ __('messages.forms') }}</a>
        {{-- <a href="#">Relevant Links</a> --}}
    </div>
    <div class="container">
        <h2>{{ __('messages.egypt') }}</h2>
        {{-- <div class="input-group">
            <label for="dob">Date of birth</label>
            <input type="date" id="dob">
        </div> --}}
        <div class="input-group">
            <label for="case">{{ __('messages.unhcr') }}</label>
            <input type="text" id="case">
        </div>
        <button id="searchBtn">{{ __('messages.search') }}</button>
        <p id="errorMsg" style="color: red; display: none;"></p>


        {{-- <div class="message-box">نص ساررسله لإضافته مع صورة</div> --}}

        <table id="resultTable" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" style="display: none">
            <thead>
                <tr>
                    <th>{{ __('messages.program') }}</th>
                    <th>{{ __('messages.resettlement_canada') }}</th>
                </tr>
            </thead>
            <tr>
                <td> {{ __('messages.desc') }}</td>
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
            <tr>
                <td>المرافقون</td>
                <td>+201145691406</td>
            </tr>
        </table>

        <!-- حاوية النص والصور -->
        <div id="textAndImages" style="display: none; margin-top: 20px;">
            <p id="text"></p>
            <div id="imagesContainer" style="max-height: 200px"></div>
        </div>
    </div>
    <span class="loader" style="display: none"></span>
    <div class="hometext"
        style="font-size: 16px; font-weight: bold; text-align: center; padding: 10px; background-color: #f8f9fa; border-radius: 5px;">
        {{ __('messages.description') }}
    </div>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("searchBtn").addEventListener("click", function() {
                let code = document.getElementById("case").value;
                let errorMsg = document.getElementById("errorMsg");
                let resultTable = document.getElementById("resultTable");

                errorMsg.style.display = "none"; // إخفاء رسالة الخطأ
                resultTable.style.display = "none"; // إخفاء الجدول

                fetch("/api/search", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                                .getAttribute("content")
                        },
                        body: JSON.stringify({
                            code: code
                        })
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
    </script> --}}

    <script>
        var translations = {
            desc: "{{ __('messages.desc') }}",
            long: "{{ __('messages.long') }}",
            canada: "{{ __('messages.canada') }}",
            date: "{{ __('messages.date') }}",
            company: "{{ __('messages.company') }}",
            number: "{{ __('messages.number') }}",
            arrival: "{{ __('messages.arrival') }}",
            duration: "{{ __('messages.duration') }}",
            from: "{{ __('messages.from') }}",
            to: "{{ __('messages.to') }}",
            receiver: "{{ __('messages.receiver') }}",
            hotel: "{{ __('messages.hotel') }}",
            contact: "{{ __('messages.contact') }}",
            companions: "{{ __('messages.companions') }}"
        };

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("searchBtn").addEventListener("click", function() {
                let loader = document.querySelector(".loader");
                document.querySelector('.hometext').style.display = "none";
                loader.style.display = "inline-block"; // عرض الرمز التحميل
                let code = document.getElementById("case").value;
                let errorMsg = document.getElementById("errorMsg");
                let resultTable = document.getElementById("resultTable");
                let tableBody = resultTable.querySelector("tbody");

                errorMsg.style.display = "none"; // إخفاء رسالة الخطأ
                resultTable.style.display = "none"; // إخفاء الجدول
                tableBody.innerHTML = ""; // مسح أي بيانات سابقة

                // إخفاء حاوية النص والصور
                document.getElementById("textAndImages").style.display = "none";

                fetch("/api/search", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                                .getAttribute("content")
                        },
                        body: JSON.stringify({
                            code: code
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === "success") {
                            let details = data.data;
                            setTimeout(() => {
                                loader.style.display = "none"; // إخفاء الرمز التحميل
                            }, 5000);
                            //    loader.style.display = "none"; // إخفاء الرمز التحميل
                            console.log(details)
                            let companionsArray = [];

                            if (typeof details.companions === "string") {
                                try {
                                    companionsArray = JSON.parse(details.companions);
                                } catch (e) {
                                    console.error("خطأ في تحويل تفاصيل المرافقين:", e);
                                    companionsArray = [];
                                }
                            } else if (Array.isArray(details.companions)) {
                                companionsArray = details.companions;
                            }

                            let companionsText = companionsArray.length > 0 ? companionsArray.join(
                                "<br>") : "لا يوجد مرافقون";

                            // إضافة البيانات إلى الجدول ديناميكيًا
                            let rows = [
                                [translations.desc, details.desc],
                                [translations.long, details.long + " ساعة"],
                                [translations.date, details.date],
                                [translations.company, details.company],
                                [translations.canada, details.canada],
                                [translations.number, details.number],
                                [translations.arrival, details.time],
                                [translations.duration, details.duration],
                                [translations.from, details.from],
                                [translations.to, details.to],
                                [translations.receiver, details.Receiver],
                                [translations.hotel, details.hotel],
                                [translations.contact, details.contact],
                                [translations.companions, companionsText]
                            ];

                            rows.forEach(row => {
                                let tr = document.createElement("tr");
                                tr.innerHTML = `<td>${row[0]}</td><td>${row[1]}</td>`;
                                tableBody.appendChild(tr);
                            });
                            setTimeout(() => {
                                resultTable.style.display = "table"; // عرض الجدول
                            }, 5000);


                            // عرض النص تحت الجدول
                            document.getElementById("text").innerText = details.text || "";

                            // معالجة الصور من JSON (قد تكون سلسلة أو مصفوفة)
                            let imagesArray = [];
                            if (details.images) {
                                if (typeof details.images === "string") {
                                    try {
                                        imagesArray = JSON.parse(details.images);
                                    } catch (e) {
                                        console.error("خطأ في تحويل بيانات الصور:", e);
                                        imagesArray = [];
                                    }
                                } else if (Array.isArray(details.images)) {
                                    imagesArray = details.images;
                                }
                            }

                            // تعبئة حاوية الصور
                            let imagesContainer = document.getElementById("imagesContainer");
                            imagesContainer.innerHTML = ""; // مسح المحتوى السابق
                            imagesArray.forEach(url => {
                                let img = document.createElement("img");
                                img.src = url;
                                img.style.width = "150px"; // تعديل الحجم حسب الحاجة
                                img.style.margin = "10px";
                                imagesContainer.appendChild(img);
                            });

                            setTimeout(() => {
                                document.getElementById("textAndImages").style.display =
                                    "block";
                            }, 5000);
                            // document.getElementById("textAndImages").style.display = "block";

                        } else {
                            errorMsg.textContent = "{{ __('messages.noresult') }}  ";
                            errorMsg.style.display = "block";
                            loader.style.display = "none";
                            document.querySelector('.hometext').style.display = "block";
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
