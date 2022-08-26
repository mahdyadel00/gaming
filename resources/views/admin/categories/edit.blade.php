@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Categories</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.categories.index') }}">
                            <i class="fa fa-plus">Edit Category</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.categories.update', [$category->id]) }}"
                                    method="post" enctype="multipart/form-data"autocomplete="off">

                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label>English Title </label>
                                        <input class="form-control fc-datepicker" type="text" name="title_en"
                                            value="{{ $category->title_en }}">
                                    </div>
                                    <div class="col">
                                        <label> Arabic Title</label>
                                        <input class="form-control fc-datepicker" name="title_ar"
                                            value="{{ $category->title_en }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> English Description</label>
                                        <input class="form-control fc-datepicker" name="description_en"
                                            value="{{ $category->description_en }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Arabic Description</label>
                                        <input class="form-control fc-datepicker" name="description_ar"
                                            value="{{ $category->description_ar }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                        <img src="{{ asset($category->image) }}" height="100px" width="100px" />
                                    </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
    </div>
    <!-- row closed -->
    </div>
    </div>
    </div>
    </div>
@endsection
