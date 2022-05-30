@extends('admin.layout-admin')
@section('content_admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ $typeProduct->type_name }}</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Products of {{ $typeProduct->type_name }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Type_id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Featured</th>
                                <th>Create date</th>
                                <th class="text-center"> <a href="{{ route('ShowAddProduct') }}"
                                        class="btn btn-info btn-circle btn-sm">
                                        <i class="fa fa-plus"></i>
                                    </a></th>
                            </tr>
                        </thead>
                        {{-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> --}}
                        <tbody>
                            @foreach ($all_product_by_type_id as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->type_id }}</td>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td><img style="width:100px; height:100px"
                                            src="{{ asset('img/product/' . $item->image) }}" alt=""></td>
                                    <td>{{ number_format($item->price) }}</td>
                                    <td><?php if ($item->is_featured == 0) {
                                        echo 'Không nổi bật';
                                    } else {
                                        echo 'Nổi bật';
                                    } ?></td>
                                    <td>{{ $item->create_date }}</td>
                                    <td class="text-center"> <a href="{{route('ShowEditProduct',['product_id'=>$item->product_id])}}" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#deleteModal{{$item->id}}" href="#"
                                            class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ready to delete?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                {{-- <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                                                </div> --}}
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    <a class="btn btn-primary" href="{{route('deleteProduct',['id'=>$item->id])}}">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                    <div class="row" style=" float:right;">
                        <div class="div">
                            {{ $all_product_by_type_id->appends(request()->all())->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
  
    </div>
    <!-- End of Main Content -->
    @if (Session::has('deleteSuccess'))
    <div class="alert alert-success alert-dismissible" style="position: fixed; right:20px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{Session::get('deleteSuccess')}}
      </div>
    @endif
   
    @if (Session::has('updateSuccess'))
    <div class="alert alert-success alert-dismissible" style="position: fixed; right:20px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{Session::get('updateSuccess')}}
      </div>
    @endif
@endsection
