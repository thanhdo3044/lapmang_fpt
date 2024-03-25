@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if (isset($data))
                @foreach ($data as $item)
                    <div class="col-xl-4 col-sm-6">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded">
                            Họ tên: {{ $item->ten }} <br>
                            Số điện thoại: {{ $item->phone }} <br>
                            Địa chỉ: {{ $item->diachi }} <br>
                            Dịch vụ: {{ $item->dichvu }} <br>
                            Ngày đăng kí: {{ $item->datenow }}
                        </div>
                    </div>
                @endforeach
            @endif


        </div>
    </div>

@endsection
