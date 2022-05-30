@extends('admin.layout-admin')
@section('content_admin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Create_at</th>
                            <th>Updated_at</th>
                            <th class="text-center"> <a href="" class="btn btn-info btn-circle btn-sm">
                                    <i class="fa fa-plus"></i>
                                </a></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{ csrf_field() }}
                        @foreach ($all_user as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td><img style="width:100px; height:100px" src="./image/avatar/{{$row->avatar}}" alt=""></td>
                            <td>{{$row->phone}}</td>
                            <td>{{$row->password}}</td>
                            <td><?php 
                            if ($row->role == 1){
                                echo 'User';
                            }
                            else{
                                echo 'Admin';
                            }
                            ?></td>
                            <td><?php 
                            if ($row->status == 1){
                                echo 'Đang sử dụng';
                            }
                            else{
                                echo 'Đã bị khóa';
                            }
                            ?></td>
                            <td>{{$row->created_at}}</td>
                            <td>{{$row->updated_at}}</td>
                            <td class="text-center"> <a href="" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a data-toggle="modal" data-target="#deleteModal" href="#" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <a class="btn btn-primary" href="">Delete</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection