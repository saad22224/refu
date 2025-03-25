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
<style>
    .wg-table {
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .table-title,
    .table-body {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .table-title {
        display: flex;
        justify-content: space-between;
        background-color: #007bff;
        /* لون خلفية */
        color: white;
        /* لون النص */
        padding: 10px;
        border-radius: 8px;
        font-weight: bold;
    }

    .table-title li {
        flex: 1;
        text-align: center;
        padding: 8px;
        border-right: 1px solid rgba(255, 255, 255, 0.3);
    }

    /* تأكد أن العناصر مرئية */
    .table-title li {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }


    .table-body {
        background-color: #f8f9fa;
    }

    .table-row {
        display: flex;
        padding: 12px;
        border-bottom: 1px solid #ddd;
        align-items: center;
        transition: background 0.3s;
    }

    .table-row div {
        flex: 1;
        padding: 8px;
        text-align: center;
    }

    .table-row:hover {
        background: #e9ecef;
    }

    .actions {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .actions .eye,
    .actions .trash {
        cursor: pointer;
        padding: 6px;
        border-radius: 4px;
        transition: 0.3s;
    }

    .actions .eye {
        color: #007bff;
    }

    .actions .trash {
        color: #dc3545;
    }

    @media (max-width: 768px) {

        .table-title,
        .table-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            text-align: center;
        }
    }
</style>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
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
                                <div class="popup-wrap noti type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-bell"></i>
                                            </span>
                                        </button>
                                    </div>
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
                                                    <span class="body-title mb-2">Carag</span>
                                                    <span class="text-tiny">vendor</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton3">
                                            <li>
                                                <a href="login.html" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-log-out"></i>
                                                    </div>
                                                    <div class="body-title-2">Log out</div>
                                                </a>
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
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">

                                <!-- order-list -->
                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class=""
                                                        name="name" tabindex="2" value=""
                                                        aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i
                                                            class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        {{-- <a class="tf-button style-1 w208" href="oder-detail.html"><i
                                                class="icon-file-text"></i>استخراج كل الطلبات</a> --}}
                                    </div>
                                    <div class="wg-table table-all-category">
                                        <ul class="table-title"
                                            style="display: flex !important; flex-direction: row; color: black;">
                                            <li>الكود</li>
                                            <li>وصف الرحلة</li>
                                            <li>طول الرحلة</li>
                                            <li>تاريخ المغادرة</li>
                                            <li>شركة طيران المغادرة</li>
                                            <li>خطوط الطيران الكندية</li>
                                            <li>رقم الرحلة</li>
                                            <li>وقت الوصول</li>
                                            <li>مدة الرحلة</li>
                                            <li>الإنطلاق</li>
                                            <li>الاستقبال</li>
                                            <li>المستقبل</li>
                                            <li>الفندق</li>
                                            <li>الاتصال</li>
                                            <li>المرافقين</li>
                                            {{-- <li>الإضافات</li> --}}
                                        </ul>
                                        <ul class="table-body">
                                            @foreach ($codes as $code)
                                                <li class="table-row">
                                                    <div>{{ $code->code }}</div>
                                                    <div>{{ $code->desc }}</div>
                                                    <div>{{ $code->long }}</div>
                                                    <div>{{ $code->date }}</div>
                                                    <div>{{ $code->company }}</div>
                                                    <div>{{ $code->canada }}</div>
                                                    <div>{{ $code->number }}</div>
                                                    <div>{{ $code->arrival }}</div>
                                                    <div>{{ $code->time }}</div>
                                                    <div>{{ $code->duration }}</div>
                                                    <div>{{ $code->from }}</div>
                                                    <div>{{ $code->to }}</div>
                                                    <div>{{ $code->Receiver }}</div>
                                                    <div>{{ $code->hotel }}</div>
                                                    <div>{{ $code->contact }}</div>
                                                    @php
                                                        $companions = is_string($code->companions)
                                                            ? json_decode($code->companions, true)
                                                            : $code->companions;
                                                    @endphp

                                                    @if (!empty($companions) && is_array($companions))
                                                        @foreach ($companions as $comp)
                                                            <div class="input-group mb-2">
                                                                {{ $comp }}
                                                            </div>
                                                        @endforeach
                                                    @endif


                                                    {{-- <div class="actions">
                                                    <a href="{{route('codes.edit' , $code->id)}}">
                                                        <div class="item edit" style="cursor: pointer;">
                                                            <i class="icon-edit-3" style="font-size: 18px;"></i>
                                                        </div>
                                                    </a>                                                    <button class="trash"><i class="icon-trash-2"></i></button>
                                                </div> --}}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    {{ $codes->links() }}
                                    <div class="divider"></div>

                                    {{-- {{$codes->links()}} --}}
                                    {{-- <div class="flex items-center justify-between flex-wrap gap10">
                                        <div class="text-tiny">Showing 10 entries</div>
                                        <ul class="wg-pagination">
                                            <li>
                                                <a href="#"><i class="icon-chevron-left"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <!-- /order-list -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        {{-- <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 Remos. Design with</div>
                            <i class="icon-heart"></i>
                            <div class="body-text">by <a
                                    href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights
                                reserved.</div>
                        </div> --}}
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
