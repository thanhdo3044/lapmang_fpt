@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <div class="row">
                            <h6 class="m-0 font-weight-bold text-primary col align-self-start d-flex">QUẢN LÝ BÀI VIẾT -
                                {{ $title }}</h6>
                            
                            <a href="{{ route('sale.create') }}"
                                class="m-0 font-weight-bold btn btn-primary col-2 align-self-end"><i
                                    class="fas fa-plus"></i></a>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="{{ route('deleteAll') }}" class="btn btn-primary" style="position: relative;" onclick="">Xóa tất cả</a>
                            <form action="{{ route('checkDelete') }}" method="post">
                                @csrf
                                
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th><button type="submit" class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn xóa?')">Xoá đã chọn</button>  </th>
                                            <th>STT</th>
                                            <th>Tiêu Đề</th>
                                            <th>Thông tin</th>
                                            <th>Nội Dung</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $index = 1; ?>
                                        @foreach ($data as $item)
                                        <td><input type="checkbox" name="ids[{{$item->id}}]" value="{{$item->id}}"></td>
                                            <td>{{ $index++ }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>Ngày viết: <b>{{ $item->created_at }}</b> <br>
                                                Ngày Sửa: <b>{{ $item->updated_at }}</b>
                                            </td>
                                            <td class="d-inline-block text-truncate"
                                                style="max-width: 700px; max-height: 90px">
                                                {!! $item->description !!}</td>

                                            <td>
                                                <a href="{{ route('sale.edit', ['id' => $item->id]) }}"
                                                    class="d-flex justify-content-center"><i class="fas fa-edit"></i>
                                                </a>
                                            </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                               
                            </form>
                            {{ $data->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
