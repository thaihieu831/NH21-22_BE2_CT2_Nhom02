@extends('master')
@section('content')
<style type="text/css">
    body {
        background: #f7f7ff;
        margin-top: 20px;
    }

    .main-body {
        padding: 15px;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: .25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
    }

    .me-2 {
        margin-right: .5rem !important;
    }
</style>
<body>
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="./img/apple-watch-series-7-lte-41mm-vien-thep-tim-thumb-660x600.jpg" alt="Admin" class="rounded-circle" width="200">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="" method="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Họ Và Tên:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input required type="text" class="form-control" name="name" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Điện thoại:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input required type="text" name="phone" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Avatar:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" name="avatar" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="password" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Confirm Password:</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="confirm_pass" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <!-- <input type="button" class="btn btn-primary px-4" value="Save Changes"> -->
                                        <button class="btn btn-primary px-4" style="background-color: #D10024;" name="submit">Lưu thay đổi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"></script>
    @endsection