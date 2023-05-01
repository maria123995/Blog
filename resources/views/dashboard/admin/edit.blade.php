@extends('dashboard.layouts.app')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> المنتجات </a>
                                </li>
                                <li class="breadcrumb-item active"> تعديل
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <form class="form-horizontal" role="form" method="post"
                        action="{{ route('dashboard.update-admin', $admin->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="container">


                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right"
                                            for="admin_id">
                                            رقم الآدمن
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $admin->admin_id }}" name="admin_id" id="admin_id"
                                                placeholder="" class="form-control" />
                                            @error('admin_id')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right"
                                            for="name">
                                            الاسم
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $admin->name }}" name="name" id="name"
                                                placeholder="" class="form-control" />
                                            @error('name')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right"
                                            for="email">
                                            الايميل </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $admin->email }}" name="email"
                                                id="email" placeholder=""
                                                class="form-control" />
                                            @error('password')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right"
                                            for="password">
                                            كلمة المرور </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $admin->password }}" name="password"
                                                id="password" placeholder=""
                                                class="form-control" />
                                            @error('password')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
                                    <i class="ft-x"></i> تراجع
                                </button>
                                <button type="submit" class="btn btn-primary" name="save">
                                    <i class="la la-check-square-o"></i> حفظ
                                </button>
                            </div>
                        </div>
                    </form>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>




    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write(
            "<script src='../assets/js/jquery.mobile.custom.js'>" + "<" + "/script>");
    </script>
    {{-- <script src="../assets/js/bootstrap.js"></script> --}}
@endsection
