@extends('template.admin')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <form action="{{ route('doimatkhau') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Mật khẩu mới</label>
                    <input type="text" class="form-control" name="password" id="" aria-describedby="helpId"
                        placeholder="" />
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
     
@endsection
