@extends('template.admin')
@section('content')
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary text-align col">SỬA Nội Dung</h3>
            <hr>
            <form action="{{ route('marquee.update', ['id' => request()->route('id')]) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nội dung dòng chạy</label>
                    <input type="text" class="form-control" name="noidung" id="" aria-describedby="helpId"
                        placeholder=""  value="{{$data->noidung}}"/>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
@endsection
