@extends('template.admin')
@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary text-align col">Sửa Thành Phố</h3> <hr>
    <form action="{{ route('tinhthanh.update', ['id'=>request()->route('id')]) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Tên Tỉnh Thành</label>
            <input type="text" class="form-control" name="ten_tinh_thanh" value="{{$data->ten_tinh_thanh}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Khu vực</label>
            <select
                class="form-select form-select-lg"
                name="id_khu_vuc"
                id=""
            >
            @foreach ($khuvuc as $item)
            <option value="{{$item->id}}" {{ $item->id == $data->id_khu_vuc ? "selected" : ""  }}>{{$item->ten_khu_vuc}}</option>
            @endforeach
                
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
    </div>
</div>
@endsection