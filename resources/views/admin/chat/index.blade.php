@extends('template.admin')
@section('content')

    <iframe src="{{ route('chatify') }}" 
    frameborder="0" 
    class="Chat-user-custem "
    frameborder="1"></iframe>

 



    <style>
        .Chat-user-custem{
            width: 100%;
            height: 550px;
            border-color: transparent;
            margin-left: 2px;
        }
    </style>
@endsection