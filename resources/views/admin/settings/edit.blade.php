@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Settings</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.settings.index') }}">
                            <i class="fa fa-plus">Edit Setting</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.settings.update', [$setting->id]) }}"
                                    method="post" enctype="multipart/form-data"autocomplete="off">

                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label>English Name </label>
                                        <input class="form-control fc-datepicker" type="text" name="title_en"
                                            value="{{ $setting->title_en }}">
                                    </div>
                                    <div class="col">
                                        <label> Arabic Name</label>
                                        <input class="form-control fc-datepicker" name="title_ar"
                                            value="{{ $setting->title_ar }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Email </label>
                                        <input class="form-control fc-datepicker" name="email"
                                            value="{{ $setting->email }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone"
                                            value="{{ $setting->phone }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label>Start_from</label>
                                        <input class="form-control fc-datepicker" name="start_from"
                                            value="{{ $setting->start_from }}" type="time">
                                    </div>
                                    <div class="col">
                                        <label>End_at</label>
                                        <input class="form-control fc-datepicker" name="end_at"
                                            value="{{ $setting->end_at }}" type="time">
                                    </div>
                                    <div class="col">
                                        <label>Facebook_link</label>
                                        <input class="form-control fc-datepicker" name="facebook_link"
                                            value="{{ $setting->facebook_link }}" type="url">
                                    </div>
                                    <div class="col">
                                        <label>Twitter</label>
                                        <input class="form-control fc-datepicker" name="twitter_link"
                                            value="{{ $setting->twitter_link }}" type="url">
                                    </div>
                                    <div class="col">
                                        <label>YouTube</label>
                                        <input class="form-control fc-datepicker" name="youtube_link"
                                            value="{{ $setting->youtube_link }}" type="url">
                                    </div>
                                    <div class="col">
                                        <label>Linkedin</label>
                                        <input class="form-control fc-datepicker" name="linkedin_link"
                                            value="{{ $setting->linkedin_link }}" type="url">
                                    </div>
                                    <div class="col">
                                        <label> Image</label>
                                        <input type="file" class="form-control modal-title" name='logo'
                                            accept="image/jpeg,image/jpg,image/png">
                                        <img src="{{ asset($setting->logo) }}" height="100px" width="100px" />
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
