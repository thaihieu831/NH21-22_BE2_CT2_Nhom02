@extends('admin.layout-admin')
@section('content_admin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">{{ $typeProduct->type_name }}</h1> --}}
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">Products of {{ $typeProduct->type_name }}</h6> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <form action="{{ route('editProduct', ['product_id' => $product->product_id]) }}" method="post" enctype="multipart/form-data" id="image-form">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-4">
                                            <h3 style="font-weight: bold">Name</h3>
                                        </div>
                                        <div class="col-8">
                                            <input value="{{ $product->product_name }}" required type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="name">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-4">
                                            <h3 style="font-weight: bold">Protype</h3>
                                        </div>
                                        <div class="col-8">
                                            <select id="inputStatus" class="form-control custom-select" name="protype" required>
                                                @foreach ($all_typeProduct as $item)
                                                <option <?php if ($product->type_id == $item->type_id) {
                                                            echo 'selected';
                                                        } ?> value="{{ $item->type_id }}">
                                                    {{ $item->type_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-4">
                                            <h3 style="font-weight: bold">Manufacture</h3>
                                        </div>
                                        <div class="col-8">
                                            <select id="inputStatus" class="form-control custom-select" name="manufacture" required>
                                                @foreach ($all_manuProduct as $item)
                                                <option <?php if ($product->manu_id == $item->manu_id) {
                                                            echo 'selected';
                                                        } ?> value="{{ $item->manu_id }}">
                                                    {{ $item->manu_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-4">
                                            <h3 style="font-weight: bold">Price</h3>
                                        </div>
                                        <div class="col-8">
                                            <input value="{{ $product->price }}" required type="number" class="form-control" placeholder="Price" aria-label="Username" aria-describedby="basic-addon1" name="price">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-4">
                                            <h3 style="font-weight: bold">Description</h3>
                                        </div>
                                        <div class="col-8">
                                            {{-- <textarea name="desc" id="summernote" class="form-control" rows="4">{{$product->description}}</textarea> --}}

                                            <textarea id="summernote" required class="form-control" aria-label="With textarea" name="description">{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-4">
                                            <h3 style="font-weight: bold">Featured</h3>
                                        </div>
                                        <div class="col-8">
                                            <select id="inputStatus" class="form-control custom-select" name="featured" required>
                                                <option value="0" <?php if ($product->feature == 0) {
                                                                        echo 'selected';
                                                                    } ?>>Không nổi bật</option>
                                                <option value="1" <?php if ($product->feature == 1) {
                                                                        echo 'selected';
                                                                    } ?>>Nổi bật</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="ml-2 col-sm-12">
                                        <div id="msg"></div>
                                        <input type="file" name="file" class="file" accept="image/*">
                                        <div class="input-group my-3">
                                            <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                            <div class="input-group-append">
                                                <button type="button" class="browse btn btn-primary">Browse...</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-2 col-sm-12">
                                        <img src="{{ asset('img/product/' . $product->image) }}" id="preview" class="img-thumbnail" style="width:100%; heigth:100%">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <input type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" value="Save">
                            </div>
                        </form>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
@if (Session::has('addSuccess'))
<div class="alert alert-success alert-dismissible" style="position: fixed; right:20px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> {{ Session::get('addSuccess') }}
</div>
@endif

<!-- End of Main Content -->
@endsection