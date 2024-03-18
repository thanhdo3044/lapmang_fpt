@extends('template.admin')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <iframe src="{{ route('chatify') }}" frameborder="0" style="width: 100%; height: 800px;"></iframe>
            </div>
        </div>
    </div>


@endsection