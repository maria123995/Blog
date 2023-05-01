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
                        action="{{ route('dashboard.delete-comment', $admin->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <div class="container">

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="photo id-input-file-2">
                                            الصورة </label>
                                        <div class="col-sm-9">
                                            <!-- #section:custom/file-input -->
                                            <label class="ace-file-input">
                                                <input type="file" name="photo" id="id-input-file-2 photo">
                                                <span class="ace-file-container" data-title="Choose">
                                                    <span class="ace-file-name" data-title="No File ...">
                                                        <i class="ace-icon fa fa-upload"></i></span></span><a class="remove"
                                                    href="#"><i class=" ace-icon fa fa-times"></i></a>
                                            </label>
                                            @error('photo')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="title">
                                            العنوان
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $admin->title }}" name="title" id="title"
                                                placeholder="" class="form-control" />
                                            @error('title')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="date">
                                            التاريخ </label>
                                        <div class="col-sm-9">
                                            <input class="form-control fc-datepicker" value="{{ $admin->date }}"
                                                name="Due_date date" id="date" placeholder="YYYY-MM-DD" type="text"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="description">
                                            الوصف </label>
                                        <div class="col-sm-9">
                                            {{-- <textarea type="text" name="description" id="description" value="{{ $item->description }}" class="form-control" placeholder=""
                                               ></textarea> --}}
                                            <input type="text" name="description" id="description"
                                                value="{{ $admin->description }}" placeholder="" class="form-control" />
                                            @error('admin.$index.description')
                                                <span>{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="status">
                                            الحالة
                                        </label>
                                        <div class="col-sm-7">
                                            <input name="status" id="id-button-borders status" checked=""
                                                type="checkbox" value="1" class="ace ace-switch ace-switch-5" />
                                            <span class="lbl middle"></span>
                                        </div>
                                        @error('status')
                                            <span>{{ $message }}</span>
                                        @enderror

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
    <script src="../assets/js/bootstrap.js"></script>
@endsection
