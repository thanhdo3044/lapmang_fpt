<!DOCTYPE html>
<html lang="vn-VN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="{{ isset($data->keywords) ? $data->keywords : '' }}">
    <meta name="description" content="{{ isset($data->meta_discription) ? $data->meta_discription : '' }}">
    <meta property="og:description" content="{{ isset($data->meta_discription) ? $data->meta_discription : '' }}">
    <link rel="icon" href="{{ asset('nguoi_dung/img/FPT_logo_2010.svg.ico') }}">
    <title>{{ isset($data->title) ? $data->title : '' }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ isset($data->meta_title) ? $data->meta_title : '' }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('nguoi_dung/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="main" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <div class="container container-main">

        <div class="row title">
            <div class="title-menu col-12 d-flex justify-content-center align-items-center" style="text-align: center">
                <h1 class="title-mobi">Website đăng ký các dịch vụ của FPT Telecom</h1>
            </div>
            <div class=" col-12 row ">
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <img class="title-mobi" src="{{ asset('nguoi_dung/img/logofptmobile.png') }}" alt="logofptmobile" width="146"
                        height="48" />
                </div>
                {{-- <span class="title-menu-img">
                        |
                    </span>  --}}
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <img class="title-mobi" src="{{ asset('nguoi_dung/img/logo_fpt_internet.png') }}" alt="logofptmobile" />
                </div>
                {{-- <span class="title-menu-img">
                        |
                    </span>  --}}
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <img class="title-mobi"  src="{{ asset('nguoi_dung/img/icoilogotruyeninhfot.png') }}" alt="logofptmobile" />
                </div>
                {{-- <span class="title-menu-img">
                        |
                    </span>  --}}
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <img class="title-mobi" src="{{ asset('nguoi_dung/img/box_103x38.png') }}" alt="logofptmobile" />
                </div>
            </div>

            <div class="col-12  d-flex justify-content-end align-items-end ">
                @auth
                    <a class="login-logout" href="#">{{ Auth::user()->name }}</a> <a class="login-logout"> | </a> <a
                        class="login-logout" href="{{ route('auth.logout') }}" onclick="return confirm('Đăng Xuất Ngay')">
                        Đăng xuất </a>
                @else
                    <a class="login-logout" href="{{ route('auth.index') }}">Đăng nhập</a> <a class="login-logout"> | </a>
                    <a class="login-logout" href="{{ route('auth.index') }}"> Đăng ký </a>

                @endauth
            </div>
        </div>

        <nav class="navbar navbar-expand-lg menu">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <img src="{{ asset('nguoi_dung/img/icon-menu.svg') }}" alt="icon menu" />
                    </span>
                </button>
                <div class="title-mobi1 d-flex justify-content-center align-items-center">
                    <img class=" img-fluid"  src="{{ asset('nguoi_dung/img/logofptmobile.png') }}" alt="logofptmobile" width="146"
                        height="48" />
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="menu_name navbar-nav me-auto  col-12 d-flex justify-content-center align-items-center ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('menu.trangchu') }}" <i
                                class="fas fa-home"></i>Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.internet') }}"><i
                                    class="fas fa-globe-europe"></i>Internet FPT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.camera') }}"><i class="fas fa-video"></i>Camera
                                FPT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('menu.truyenhinh') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-tv"></i> Truyền Hình FPT
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('menu.goicuoccb') }}">Gói Cước Cơ Bản</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('menu.goicuocmr') }}">Gói Mở Rộng</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('menu.danhsachkenh') }}">Danh Sách
                                        Kênh</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.playbox') }}"><i class="fas fa-gamepad"></i>FPT
                                Play Box</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="" role="button" data-bs-toggle="dropdown"
                                aria-expanded="true">
                                <i class="fas fa-book"></i> Hỗ Trợ FPT
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('menu.spkithuat') }}">Hỗi Trợ Kỹ
                                        Thuật</a></li>
                                <li><a class="dropdown-item" href="{{ route('menu.ttvacs') }}">Thủ Tục Và Chính
                                        Sách</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <marquee behavior="scroll" scrollamount="8" height="30" direction="left">
            <h5 style="color: red">
                <i class="fab fa-salesforce"></i>KM áp dụng khu vực Hà Nội : COMBO cả Internet wifi và Truyền hình<i
                    class="fab fa-salesforce">
            </h5>
        </marquee>
        <div class="container-fluid blog">
            <div class="row">
                <div class="col-9 col-s-12">

                    {!! isset($data->description) ? str_replace('<img', '<img class="custom-image img-fluid"', $data->description) : '' !!}

                </div>
                <div class="col-3 col-sm-12">

                    <div class="card-left-context">
                        <div class="card-left-context-header">
                            <img src="{{ asset('nguoi_dung/img/FPT_logo_2010.svg.ico') }}" class=""
                                width="26" alt="icon logo" />
                            <span style="font-size: 15px">Hotline tư vấn đăng ký mới</span>
                        </div>
                        <div class="card-left-context-body">
                            <img src="{{ asset('nguoi_dung/img/submenu_contact.png') }}" class="img-fluid"
                                width="51" alt="submenu contact" />
                            <a href="tel:0988638092">0988638092</a>
                        </div>
                    </div>
                    <div class="card-left-context">
                        <div class="card-left-context-header">
                            <img src="{{ asset('nguoi_dung/img/FPT_logo_2010.svg.ico') }}" class="img-fluid"
                                width="26" alt="icon logo" />
                            <span style="font-size: 15px">Tổng đài hỗ trợ kĩ thuật , báo hỏng</span>
                        </div>
                        <div class="card-left-context-body">
                            <img src="{{ asset('nguoi_dung/img/phone_icon.png') }}" class="img-fluid" width="48"
                                alt="submenu contact" />
                            <a href="tel:1900 6600">1900 6600</a>
                        </div>
                    </div>
                    <div class="card-left-context">
                        <div class="card-left-context-header">
                            <img src="{{ asset('nguoi_dung/img/FPT_logo_2010.svg.ico') }}" class="img-fluid"
                                width="26" alt="icon logo" />
                            <span style="font-size: 15px">Đăng ký tư vấn Online miễn phí</span>
                        </div>
                        @if (Auth::user())
                            <form action="{{ route('dangkidv') }}" method="post">
                                @csrf
                                <div class="card-left-context-body" style="text-align: start">
                                    <div class="mb-3">
                                        <label for="inputHovaten" class="form-label">Họ và tên</label>
                                        <input type="hovaten" class="form-control" required name="ten"
                                            value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputEmailorSDT" class="form-label">Số điện thoại</label>
                                        <input type="number" class="form-control" id="numberInput" name="phone"
                                            oninput="limitLength(this, 10)" value="{{ Auth::user()->phone }}">

                                        <script>
                                            function limitLength(element, maxLength) {
                                                if (element.value.length > maxLength) {
                                                    element.value = element.value.slice(0, maxLength);
                                                }
                                            }
                                        </script>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputDiaChia" class="form-label">Đia chỉ</label>
                                        <input type="diachia" class="form-control" name="diachi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Dịch vụ tư vấn</label>
                                        <select class="form-select form-select-mb" name="dichvu" id=""
                                            required>
                                            <option value="Đăng kí internet" selected>Đăng kí internet fpt</option>
                                            <option value="Combo internet và truyền hình fpt">Combo internet và truyền hình fpt</option>
                                            <option value="FPT PlayBox">FPT play box</option>
                                        </select>
                                    </div>
                                    <div class="mb-3" style="display: none;">
                                        <label for="" class="form-label">Ngày đăng kí</label>
                                        <input type="datetime-local" class="form-control" name="datenow"
                                            id="currentDateTime" />
                                        <script>
                                            // Lấy ngày và giờ hiện tại
                                            var currentDate = new Date();

                                            // Thêm 7 giờ (7 * 60 * 60 * 1000 milliseconds) cho múi giờ
                                            currentDate.setTime(currentDate.getTime() + (7 * 60 * 60 * 1000));

                                            // Format ngày và giờ hiện tại dưới dạng chuỗi
                                            var formattedDate = currentDate.toISOString().slice(0, 16);

                                            // Đặt giá trị cho input datetime-local
                                            document.getElementById("currentDateTime").value = formattedDate;
                                        </script>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary" style="width: 92%;">Đăng
                                        ký</button>
                                </div>
                            </form>
                        @else
                            <form action="{{ route('dangkidv') }}" method="post">
                                @csrf
                                <div class="card-left-context-body" style="text-align: start">
                                    <div class="mb-3">
                                        <label for="inputHovaten" class="form-label">Họ và tên</label>
                                        <input type="hovaten" class="form-control" required name="ten"
                                            value="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputEmailorSDT" class="form-label">Số điện thoại</label>
                                        <input type="number" class="form-control" id="numberInput" name="phone"
                                            oninput="limitLength(this, 10)" value="" required>

                                        <script>
                                            function limitLength(element, maxLength) {
                                                if (element.value.length > maxLength) {
                                                    element.value = element.value.slice(0, maxLength);
                                                }
                                            }
                                        </script>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputDiaChia" class="form-label">Đia chỉ</label>
                                        <input type="diachia" class="form-control" name="diachi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Dịch vụ tư vấn</label>
                                        <select class="form-select form-select-mb" name="dichvu" id=""
                                            required>
                                            <option value="Đăng kí internet fpt" selected>Đăng kí internet fpt</option>
                                            <option value="Combo internet và truyền hình fpt">Combo internet và truyền hình fpt</option>
                                            <option value="FPT play box">FPT play box</option>
                                        </select>
                                    </div>
                                    <div class="mb-3" style="display: none;">
                                        <label for="" class="form-label">Ngày đăng kí</label>
                                        <input type="datetime-local" class="form-control" name="datenow"
                                            id="currentDateTime" />
                                        <script>
                                            // Lấy ngày và giờ hiện tại
                                            var currentDate = new Date();

                                            // Thêm 7 giờ (7 * 60 * 60 * 1000 milliseconds) cho múi giờ
                                            currentDate.setTime(currentDate.getTime() + (7 * 60 * 60 * 1000));

                                            // Format ngày và giờ hiện tại dưới dạng chuỗi
                                            var formattedDate = currentDate.toISOString().slice(0, 16);

                                            // Đặt giá trị cho input datetime-local
                                            document.getElementById("currentDateTime").value = formattedDate;
                                        </script>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary" style="width: 92%;">Đăng
                                        ký</button>
                                </div>
                            </form>
                        @endif


                    </div>
                    <div class="card-left-context">
                        <div class="card-left-context-header">
                            <img src="{{ asset('nguoi_dung/img/FPT_logo_2010.svg.ico') }}" class="img-fluid"
                                width="26" alt="icon logo" />
                            <span style="font-size: 15px">Tổng đài lắp mạng FPT Toàn Quốc</span>
                        </div>
                        @foreach ($tinhthanh as $item)
                            <div class="card-left-context-body" style="padding: 15px 0 0 0">
                                <a href="tel:0988638092" style="font-size: 14px">LẮP MẠNG FPT
                                    {{ $item->ten_khu_vuc }}</a>
                                <hr />
                            </div>
                            <div class="card-left-context-footer">
                                <table class="table_khuvu" id="table_khuvu">
                                    <tr>
                                        @foreach ($item->tinhthanh as $value)
                                            <td><a
                                                    href="{{ route('bvtt', ['lap-dat-mang-fpt-tai-' . $value->slug, 'id' => $value->id]) }}">{{ $value->ten_tinh_thanh }}</a>
                                            </td>
                                            @if ($loop->iteration % 3 == 0)
                                    </tr>
                                    <tr>
                        @endif
                        @endforeach
                        </tr>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>


    </div>

    </div>


    </div>

    <div class="footer">
        <div class="row">
            <div class="  col-6 d-flex justify-content-center align-items-center image-container">
                <img src="{{ asset('nguoi_dung/img/logofptmobile.png') }}" alt="logofptmobile" width="250"
                    class="img-footer-start" />
            </div>
            <div class="col-6 row footer-center">
                <div class="col-12">
                    <h3>Trụ sở :</h3>
                </div>
                <a href="https://maps.app.goo.gl/EgFGRCeTu23eCLSAA" class="col-12"> <i
                        class="fas fa-location-arrow"></i> Hà Nội: Đội 7-khu 3-thôn Văn Lôi - xã Tam Đồng - huyện Mê
                    Linh - Hà Nội</a>
                <a href="https://maps.app.goo.gl/tvYVxTEtfnjzoMDSA" class="col-12"> <i
                        class="fas fa-location-arrow"></i> Hà Nội: Tòa nhà PVI, số 1 Phạm Văn Bạch, Cầu Giấy</a>
                <a href="https://maps.app.goo.gl/AY1tEdSsNfUKeDmp7" class="col-12"><i
                        class="fas fa-location-arrow"></i> Đà Nẵng: 182 - 184 Đường 2 tháng 9, Hải Châu</a>
                <a href="https://maps.app.goo.gl/bgRS84D1KK9T4HZ26" class="col-12"><i
                        class="fas fa-location-arrow"></i> TP. HCM: Lô 37-39A, đường 19, KCX Tân Thuận, Phường Tân
                    Thuận Đông, Quận 7</a>

            </div>
            <div class="col-12 d-flex justify-content-center align-items-center image-container">
                {{-- <iframe class="footer-end"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.74291387615!2d105.68703787477385!3d21.20236938179401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134feaca1c9a91f%3A0x49da2c9ab147bd4a!2zU8OibiBW4bqtbiDEkOG7mW5nIFRow7RuIFbEg24gTMO0aQ!5e0!3m2!1svi!2s!4v1710515367206!5m2!1svi!2s"
                    width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    
                    <div style="border-top:1px solid #fff; margin: 5px;padding: 5px;text-align: center " >
                        Trụ sở : Hà Nội: Tòa Nhà PVI, Số 1 Phạm Văn Bạch, Cầu Giấy | Phòng kinh doanh Tel: +84 247300 2222 - ext 4631 | Mobile : 094 77 95 777 Email: HaiPM2@fpt.com.vnCông Ty Cổ Phần Viễn Thông FPT | Giấy phép số: 0101778163 do sở kế hoạch đầu tư thành phố Hà Nội cấp ngày 28/07/2005
                    </div>
            </div>
        </div>
    </div>
    </div>

    <div class="fixed-menu">

        <div style="color: #000080;" id="DienThoai1">
            <div class="icon_lienhe" id="id_chat_lieuhe">
                <a href="https://zalo.me/0988638092">
                    <svg id="Layer_1" viewBox="0 0 460.1 436.6" xmlns="http://www.w3.org/2000/svg">
                        <style>
                            .st0 {
                                fill: #fdfefe
                            }

                            .st1 {
                                fill: #0180c7
                            }

                            .st2 {
                                fill: #0172b1
                            }

                            .st3 {
                                fill: none;
                                stroke: #0180c7;
                                stroke-width: 2;
                                stroke-miterlimit: 10
                            }
                        </style>
                        <title />
                        <path class="st0"
                            d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z" />
                        <path class="st1"
                            d="M139.5 436.2c-27.3 0-54.7.9-82-.1-32.3-1.3-57-28.4-57-60.7 0-104.3.2-208.6 0-313C.5 26.7 28.4 1.8 60.5.9c33.6-.9 67.3-.2 101-.2.6 0 1.4-.3 1.7.7-.2 1.8-2 2-3.1 2.7-19.8 11.6-37.9 25.5-53.1 42.7-25.1 28.4-42.5 61-48.4 98.9-10.4 66.9 10.5 123.7 57.8 171.1 8.4 8.5 9.5 15.1 2.8 26.5-8.1 13.7-20.4 23-33.5 31.5-1.4.8-2.8 1.8-4.2 2.7-2.1 1.8-.8 2.7 1 3.5.4.9.9 1.7 1.5 2.5 11.5 10.2 22.4 21.1 33.7 31.5 5.3 4.9 10.6 10 15.7 15.1 2.1 1.9 5.6 2.5 6.1 6.1z" />
                        <path class="st2"
                            d="M139.5 436.2c-.5-3.5-4-4.1-6.1-6.2-5.1-5.2-10.4-10.2-15.7-15.1-11.3-10.4-22.2-21.3-33.7-31.5-.6-.8-1.1-1.6-1.5-2.5 25.5 5 50.4 1.6 74.9-5.9 8.3-2.5 16.6-5 25-7.1 5.7-1.5 11.7-1.2 17.2.8 63.4 21.8 126 19.8 187.6-7.2 25.1-11.1 48-26.7 67.4-46.2 1-1 1.7-2.5 3.5-2.6.9 1.4.4 2.9.4 4.4v58.5c.2 33.4-26.6 60.6-60 60.9h-.5c-36 .2-72 0-108 0H145.5c-2-.2-4-.3-6-.3z" />
                        <path class="st1"
                            d="M155.1 212.4c15.1 0 29.3-.1 43.4 0 7.9.1 12.2 3.4 13 9.7.9 7.9-3.7 13.2-12.3 13.3-16.2.2-32.3.1-48.5.1-4.7 0-9.3.2-14-.1-5.8-.3-11.5-1.5-14.3-7.5s-.8-11.4 3-16.3c15.4-19.6 30.9-39.3 46.4-58.9.9-1.2 1.8-2.4 2.7-3.5-1-1.7-2.4-.9-3.6-1-10.8-.1-21.7 0-32.5-.1-2.5 0-5-.3-7.4-.8-5.7-1.3-9.2-7-7.9-12.6.9-3.8 3.9-6.9 7.7-7.8 2.4-.6 4.9-.9 7.4-.9 17.8-.1 35.7-.1 53.5 0 3.2-.1 6.3.3 9.4 1.1 6.8 2.3 9.7 8.6 7 15.2-2.4 5.7-6.2 10.6-10 15.5-13.1 16.7-26.2 33.3-39.3 49.8-1.1 1.3-2.1 2.6-3.7 4.8z" />
                        <path class="st1"
                            d="M271.1 159.8c2.4-3.1 4.9-6 9-6.8 7.9-1.6 15.3 3.5 15.4 11.5.3 20 .2 40 0 60 0 5.2-3.4 9.8-8.3 11.3-5 1.9-10.7.4-14-3.9-1.7-2.1-2.4-2.5-4.8-.6-9.1 7.4-19.4 8.7-30.5 5.1-17.8-5.8-25.1-19.7-27.1-36.6-2.1-18.3 4-33.9 20.4-43.5 13.6-8.1 27.4-7.4 39.9 3.5zm-35.4 36.5c.2 4.4 1.6 8.6 4.2 12.1 5.4 7.2 15.7 8.7 23 3.3 1.2-.9 2.3-2 3.3-3.3 5.6-7.6 5.6-20.1 0-27.7-2.8-3.9-7.2-6.2-11.9-6.3-11-.7-18.7 7.8-18.6 21.9zM340.4 196.9c-.8-25.7 16.1-44.9 40.1-45.6 25.5-.8 44.1 16.3 44.9 41.3.8 25.3-14.7 43.2-38.6 45.6-26.1 2.6-46.8-16.3-46.4-41.3zm25.1-2.4c-.2 5 1.3 9.9 4.3 14 5.5 7.2 15.8 8.6 23 3 1.1-.8 2-1.8 2.9-2.8 5.8-7.6 5.8-20.4.1-28-2.8-3.8-7.2-6.2-11.9-6.3-10.8-.6-18.4 7.6-18.4 20.1zM331.6 177c0 15.5.1 31 0 46.5.1 7.1-5.5 13-12.6 13.2-1.2 0-2.5-.1-3.7-.4-5-1.3-8.8-6.6-8.8-12.9v-79.5c0-4.7-.1-9.3 0-14 .1-7.7 5-12.7 12.4-12.7 7.6-.1 12.7 4.9 12.7 12.9.1 15.6 0 31.3 0 46.9z" />
                        <path class="st0"
                            d="M235.7 196.3c-.1-14.1 7.6-22.6 18.5-22 4.7.2 9.1 2.5 11.9 6.4 5.6 7.5 5.6 20.1 0 27.7-5.4 7.2-15.7 8.7-23 3.3-1.2-.9-2.3-2-3.3-3.3-2.5-3.5-3.9-7.7-4.1-12.1zM365.5 194.5c0-12.4 7.6-20.7 18.4-20.1 4.7.1 9.1 2.5 11.9 6.3 5.7 7.6 5.7 20.5-.1 28-5.6 7.1-16 8.3-23.1 2.7-1.1-.8-2-1.8-2.8-2.9-3-4.1-4.4-9-4.3-14z" />
                        <path class="st3"
                            d="M66 1h328.1c35.9 0 65 29.1 65 65v303c0 35.9-29.1 65-65 65H66c-35.9 0-65-29.1-65-65V66C1 30.1 30.1 1 66 1z" />
                    </svg>
                </a>
            </div>
        </div>

        <div style="color: #000080;" id="DienThoai2">
            <div class="icon_lienhe" id="id_chat_lieuhe">
                <a href="tel:0988638092">
                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <rect fill="none" />
                        <path d="M159.4,40A80.1,80.1,0,0,1,216,96.6" fill="none" stroke="#000"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path d="M151.1,70.9a47.9,47.9,0,0,1,34,34" fill="none" stroke="#000"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16" />
                        <path
                            d="M92.5,124.8a83.6,83.6,0,0,0,39,38.9,8,8,0,0,0,7.9-.6l25-16.7a7.9,7.9,0,0,1,7.6-.7l46.8,20.1a7.9,7.9,0,0,1,4.8,8.3A48,48,0,0,1,176,216,136,136,0,0,1,40,80,48,48,0,0,1,81.9,32.4a7.9,7.9,0,0,1,8.3,4.8l20.1,46.9a8,8,0,0,1-.6,7.5L93,117A8,8,0,0,0,92.5,124.8Z"
                            fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="16" />
                    </svg>
                </a>
            </div>
        </div>

        <div style="color: #000080;" id="DienThoai3">

            <div class="icon_lienhe" id="id_chat_lieuhe">
                <a href="https://www.facebook.com/profile.php?id=100000930934345&mibextid=dGKdO6">
                    <img src="{{ asset('nguoi_dung/img/2023_Facebook_icon.svg.png') }}" width="38"
                        alt="icon face" />
                </a>
            </div>

        </div>

        <div style="color: #000080;" id="DienThoai4">
            <div class="icon_lienhe" id="id_chat_lieuhe">
                <a href="{{ route('chatify') }}"><svg id="Layer_1" data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #141f38;
                                }
                            </style>
                        </defs>
                        <title>users-chat-bubble-outline</title>
                        <path class="cls-1"
                            d="M345.18,223.18l50.59,50.59a6.56,6.56,0,0,0,11.2-4.64V220.46A72.45,72.45,0,0,0,459.48,151V72.21A72.29,72.29,0,0,0,387.28,0H229.74a72.29,72.29,0,0,0-72.2,72.21v45.94H137.85a72.29,72.29,0,0,0-72.21,72.21v52.51a72.44,72.44,0,0,0,52.52,69.48V361a6.55,6.55,0,0,0,4.05,6.06,6.46,6.46,0,0,0,2.51.5,6.56,6.56,0,0,0,4.64-1.92l50.59-50.59H256a72.29,72.29,0,0,0,72.2-72.21V223.18Zm-174.51-151a59.14,59.14,0,0,1,59.07-59.08H387.28a59.14,59.14,0,0,1,59.08,59.08V151a59.24,59.24,0,0,1-47.26,57.9,6.56,6.56,0,0,0-5.26,6.43v38L352.54,212A6.56,6.56,0,0,0,347.9,210H229.74A59.14,59.14,0,0,1,170.67,151V72.21ZM315.08,242.87A59.14,59.14,0,0,1,256,302H177.23a6.56,6.56,0,0,0-4.64,1.92l-41.31,41.31v-38a6.56,6.56,0,0,0-5.25-6.44,59.22,59.22,0,0,1-47.26-57.89V190.36a59.15,59.15,0,0,1,59.08-59.08h19.69V151a72.29,72.29,0,0,0,72.2,72.21h85.34Z" />
                        <path class="cls-1"
                            d="M242.87,91.9H374.15a6.56,6.56,0,0,0,0-13.13H242.87a6.56,6.56,0,0,0,0,13.13Z" />
                        <path class="cls-1"
                            d="M242.87,144.41h39.38a6.56,6.56,0,0,0,0-13.13H242.87a6.56,6.56,0,0,0,0,13.13Z" />
                        <path class="cls-1"
                            d="M510.55,477.68c-9.07-25.4-29.79-44.63-55.23-53a52.51,52.51,0,1,0-57.31,0c-25.44,8.36-46.16,27.6-55.23,53A24.64,24.64,0,0,0,346,500.42,27.59,27.59,0,0,0,368.58,512H484.75a27.59,27.59,0,0,0,22.58-11.58A24.64,24.64,0,0,0,510.55,477.68Zm-123.27-97a39.38,39.38,0,1,1,39.38,39.38A39.43,39.43,0,0,1,387.28,380.72ZM496.61,492.86a14.45,14.45,0,0,1-11.85,6H368.58a14.45,14.45,0,0,1-11.85-6,11.59,11.59,0,0,1-1.58-10.76c10.45-29.23,39.19-48.87,71.52-48.87s61.08,19.64,71.52,48.87A11.6,11.6,0,0,1,496.61,492.86Z" />
                        <path class="cls-1"
                            d="M81.61,450.5a32.82,32.82,0,1,0-45.06,0A60.07,60.07,0,0,0,1.1,486.2a18.59,18.59,0,0,0,2.4,17.15A20.59,20.59,0,0,0,20.36,512H97.8a20.59,20.59,0,0,0,16.85-8.65,18.58,18.58,0,0,0,2.4-17.15A60.07,60.07,0,0,0,81.61,450.5ZM39.39,426.67a19.69,19.69,0,1,1,19.69,19.69A19.71,19.71,0,0,1,39.39,426.67Zm64.54,69.12a7.47,7.47,0,0,1-6.12,3.08H20.36a7.47,7.47,0,0,1-6.12-3.08,5.6,5.6,0,0,1-.78-5.17c6.65-18.62,25-31.13,45.62-31.13S98,472,104.7,490.62A5.59,5.59,0,0,1,103.93,495.79Z" />
                    </svg></a>
            </div>
        </div>

        <div class="fixe_menu_mobi">
            <div class="icon_lieuhemobi">
                <a href="tel:0988638092">
                    <i class="fas fa-phone-volume">0988638092</i>
                </a>
            </div>
        </div>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('nguoi_dung/js/index.js') }}"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TW0VR0ZM64"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-TW0VR0ZM64');
    </script>
</body>

</html>
