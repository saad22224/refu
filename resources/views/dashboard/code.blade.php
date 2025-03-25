<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Remos eCommerce Admin Dashboard HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">


    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('admin/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('admin/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png">

</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <!--   <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div> -->
                <!-- /preload -->
                <!-- section-menu-left -->
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="{{ route('dashboard') }}" id="site-logo-inner">
                            <img class="" alt="" src="" data-light="" data-dark="">
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div>
                    <div class="section-menu-left-wrap">
                        <div class="center">
                            <div class="center-item">
                                <div class="center-heading">الرئيسية </div>
                                <ul class="menu-list">
                                    <li class="menu-item has-children active">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-grid"></i></div>
                                            <div class="text">لوحة التحكم </div>
                                        </a>
                                        <ul class="sub-menu" style="display: block;">
                                            <li class="sub-menu-item">
                                                <a href="{{ route('dashboard') }}" class="active">
                                                    <div class="text">الرئيسية</div>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="center-item">
                                <div class="center-heading">التحكمات</div>
                                <ul class="menu-list">
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-shopping-cart"></i></div>
                                            <div class="text">الصفحات</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="{{ url('admincode') }}" class="">
                                                    <div class="text"> اضافة كود </div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="{{ route('codes.index') }}" class="">
                                                    <div class="text">قائمة الرحلات</div>
                                                </a>
                                            </li>
                                            {{-- <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text">ادارة حسابات التواصل الاجتماعي</div>
                                                </a>
                                            </li>

                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text">السيو</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text">كتابة المحتوي</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text">الحملات الاعلانية</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text">تصميم الفيديوهات الاعلانية</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text">تصميم مواقع الويب</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text">تصميم المتاجر الالكترونية</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text"> تصوير المنتجات</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text"> تصميم الهوية البصرية</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text"> تصميم الجرافيك</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="" class="">
                                                    <div class="text">GTM</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> --}}


                                        </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">

                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>
                                <form class="form-search flex-grow">


                                </form>
                            </div>
                            <div class="header-grid">
                                <div class="header-item button-dark-light">
                                    <i class="icon-moon"></i>
                                </div>

                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>
                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="images/avatar/user-1.png" alt="">
                                                </span>
                                                <span class="flex flex-column">
                                                    {{-- <span class="body-title mb-2">shiny</span> --}}
                                                    <span class="text-tiny">{{auth()->user()->name}} مرحبا</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton3">
                                            <li>
                                                <form action="{{ route('admin.logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="user-item">
                                                        <div class="icon">
                                                            <i class="icon-log-out"></i>
                                                        </div>
                                                        <div class="body-title-2">Log out</div>
                                                    </button>
                                                </form>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->

                        <link rel="stylesheet"
                            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
                        <script>
                            function addCompanionField() {
                                var container = document.getElementById("companionsContainer");
                                var newInput = document.createElement("div");
                                newInput.classList.add("input-group", "mb-2");
                                newInput.innerHTML = `
                                        <input type="text" name="companions[]" class="form-control" placeholder="أدخل اسم المرافق">
                                        <button type="button" class="btn btn-danger" onclick="removeField(this)">حذف</button>
                                    `;
                                container.appendChild(newInput);
                            }

                            function removeField(button) {
                                button.parentElement.remove();
                            }
                        </script>
                        </head>

                        <body class="container mt-4">
                            <h2 class="text-center mb-4">إدارة بيانات الرحلة</h2>
                            <form method="POST" action="{{ route('codes.store') }}" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>{{ __('messages.program') }}</th>
                                            <th>{{ __('messages.resettlement_canada') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>النص</td>
                                            <td><input type="text" name="text" class="form-control"
                                                    value="{{ old('text') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>الصور</td>
                                            <td>
                                                <input type="file" name="images[]" class="form-control" multiple>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>الكود</td>
                                            <td><input type="text" name="code" class="form-control"
                                                    value="{{ old('code') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('messages.desc') }}</td>
                                            <td><input type="text" name="desc" class="form-control"
                                                    value="{{ old('desc') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>طول الرحلة</td>
                                            <td><input type="text" name="long" class="form-control"
                                                    value="{{ old('long') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>تاريخ المغادرة</td>
                                            <td><input type="date" name="date" class="form-control"
                                                    value="{{ old('date') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>شركة الطيران المغادرة</td>
                                            <td><input type="text" name="company" class="form-control"
                                                    value="{{ old('company') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>خطوط الطيران الكندية</td>
                                            <td><input type="text" name="canada" class="form-control"
                                                    value="{{ old('canada') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>رقم رحلة المغادرة</td>
                                            <td><input type="text" name="number" class="form-control"
                                                    value="{{ old('number') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>وقت الوصول</td>
                                            <td><input type="time" name="time" class="form-control"
                                                    value="{{ old('time') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>مدة الرحلة</td>
                                            <td><input type="text" name="duration" class="form-control"
                                                    value="{{ old('Arrival') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>الانطلاق</td>
                                            <td><input type="text" name="from" class="form-control"
                                                    value="{{ old('from') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>الاستقبال</td>
                                            <td><input type="text" name="to" class="form-control"
                                                    value="{{ old('to') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>المستقبل</td>
                                            <td><input type="text" name="Receiver" class="form-control"
                                                    value="{{ old('Receiver') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>الفندق</td>
                                            <td><input type="text" name="hotel" class="form-control"
                                                    value="{{ old('hotel') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>جهة الاتصال الرئيسية</td>
                                            <td><input type="text" name="contact" class="form-control"
                                                    value="{{ old('contact') }}"></td>
                                        </tr>
                                        <tr>
                                            <td>المرافقون</td>
                                            <td>
                                                <div id="companionsContainer">
                                                    @if (old('companions'))
                                                        @foreach (old('companions') as $companion)
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="companions[]"
                                                                    class="form-control" value="{{ $companion }}">
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="removeField(this)">حذف</button>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="input-group mb-2">
                                                            <input type="text" name="companions[]"
                                                                class="form-control" placeholder="أدخل اسم المرافق">
                                                            <button type="button" class="btn btn-danger"
                                                                onclick="removeField(this)">حذف</button>
                                                        </div>
                                                    @endif
                                                </div>
                                                <button type="button" class="btn btn-success mt-2"
                                                    onclick="addCompanionField()">إضافة مرافق</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary w-100">حفظ البيانات</button>
                            </form>


                        </body>

</html>

<!-- /main-content-wrap -->
<!-- bottom-page -->
<!-- /bottom-page -->
</div>
<!-- /main-content -->
</div>
<!-- /section-content-right -->
</div>
<!-- /layout-wrap -->
</div>
<!-- /#page -->
</div>
<!-- /#wrapper -->

<!-- Javascript -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin/js/zoom.js') }}"></script>
<script src="{{ asset('admin/js/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('admin/js/apexcharts/line-chart-1.js') }}"></script>
<script src="{{ asset('admin/js/apexcharts/line-chart-2.js') }}"></script>
<script src="{{ asset('admin/js/apexcharts/line-chart-3.js') }}"></script>
<script src="{{ asset('admin/js/apexcharts/line-chart-4.js') }}"></script>
<script src="{{ asset('admin/js/apexcharts/line-chart-5.js') }}"></script>
<script src="{{ asset('admin/js/apexcharts/line-chart-6.js') }}"></script>
<!-- <script src="{{ asset('admin/js/switcher.js') }}"></script> -->
<script src="{{ asset('admin/js/theme-settings.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
</body>

</html>
