@extends('template.admin')
@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <div class="row">
            <h6 class="m-0 font-weight-bold text-primary col align-self-start d-flex">QUẢN LÝ THÀNH PHỐ</h6>
            <a href="{{ route('tinhthanh.create') }}" class="m-0 font-weight-bold btn btn-primary col-2 align-self-end"><i class="fas fa-plus"></i></a>
        </div>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Tỉnh Thành</th>
                        <th>Slug</th>
                        <th>Tên Khu Vưc</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index = 1 ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$index++ }}</td>
                        <td>{{$item->ten_tinh_thanh}}</td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->khuvuc->ten_khu_vuc}}</td>
                        <td>
                            <a href="{{ route('tinhthanh.delete', ['id'=>$item->id]) }}" onclick="return confirm('Bạn có chắc chắn xóa dữ liệu?')"><i class="fas fa-trash-alt"></i>
                            </a> | 
                            <a href="{{ route('tinhthanh.edit', ['id'=>$item->id])}}"><i class="fas fa-edit"></i>
                            </a>
                        </td>

                    </tr>
                    @endforeach
                    

                </tbody>
            </table>
        </div>
    </div>
   
</div>
@endsection