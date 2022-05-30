@extends('master')
@section('content')
<style>
    /*   body {
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        color: #333;
    } */

    .main-body {
        padding: 15px;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }

    .h-100 {
        height: 100% !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }
</style>

<body>
    <div class="container">
        <div class="main-body">
            <form action="">
                <div class="row gutters-sm">
                    @if(Auth::check())
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="./image/avatar/{{Auth::user()->avatar}}" class="rounded-circle" width="200">
                                    <div class="mt-3">
                                        <h4></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tên</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{Auth::user()->name}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    {{Auth::user()->email}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Điện thoại</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    {{Auth::user()->phone}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a style="background-color: #D10024;" class="btn btn-info " href="#">Sửa</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a style="background-color: #D10024;" class="btn btn-info " href="#">Đổi mật khẩu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript"></script>
    @endsection