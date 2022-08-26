@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>users</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-plus">Show users</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.users.store') }}" method="post"
                                    enctype="multipart/form-data"autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label> First Name </label>
                                        <input class="form-control fc-datepicker" name="first_name" type="text" required>
                                    </div>
                                    <div class="col">
                                        <label> Last Name</label>
                                        <input class="form-control fc-datepicker" name="last_name" required>

                                    </div>
                                    <div class="col">
                                        <label> Email </label>
                                        <input class="form-control fc-datepicker" name="email" type="email" required>
                                    </div>
                                    <div class="col">
                                        <label>Password</label>
                                        <input class="form-control fc-datepicker" name="password" type="password" required>
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" type="number" required>
                                    </div>

                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png">
                                    </div>
                                    <div class="col">
                                        <label>Country </label>
                                        <select name="country_id" id="country_id" class="form-control fc-datepicker">
                                            <option value="0">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                <label class="infoTitle">@lang('site.status')</label>

                                    <input type="checkbox" value="1" name="status" >

                            </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Add</button>
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
