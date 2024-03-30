@extends('template.admin')
@section('content')
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary col align-self-start d-flex">QUẢN LÝ -
                    {{ $title }}</h6>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
               
    
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Nội Dung</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1; ?>
                            @foreach ($data as $item)
                                <tr>
                        
                                    <td>{{ $index++ }}</td>
                                    <td>{{ $item->noidung }}</td>
                                   
    
                                    <td>
                                        <a href="{{ route('marquee.edit', ['id'=> $item->id ]) }}"
                                            class="d-flex justify-content-center"><i class="fas fa-edit"></i>
                                        </a>
                                    </td>
    
                                </tr>
                            @endforeach
    
    
                        </tbody>
                    </table>
                </form>
                
            </div>
        </div>

    </div>
@endsection
