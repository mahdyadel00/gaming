@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Users</h6>
                    <button class="btn btn-primary">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-plus">Edit User</i>
                        </a></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="{{ route('admin.users.update', [$user->id]) }}"
                                    method="post" enctype="multipart/form-data"autocomplete="off">

                                    {{ csrf_field() }}
                                    <div class="col">
                                        <label>First Name</label>
                                        <input class="form-control fc-datepicker" type="text" name="first_name"
                                            value="{{ $user->first_name }}">
                                    </div>
                                    <div class="col">
                                        <label> Last Name </label>
                                        <input class="form-control fc-datepicker" name="last_name"
                                            value="{{ $user->last_name }}" type="text">
                                    </div>
                                    <div class="col">
                                        <label> Email</label>
                                        <input class="form-control fc-datepicker" name="email" value="{{ $user->email }}"
                                            type="text">
                                    </div>
                                    {{-- <div class="col">
                                        <label>Password</label>
                                        <input class="form-control fc-datepicker" name="password"
                                            value="{{ $user->password }}" type="text">
                                    </div> --}}
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control fc-datepicker" name="phone" value="{{ $user->phone }}"
                                            type="text">
                                    </div>
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control modal-title" name='image'
                                            accept="image/jpeg,image/jpg,image/png" required>
                                            <img src="{{ asset($user->image) }}" height="100px" width="100px" />
                                    </div>
                                    <div class="col">
                                        <label>Country </label>
                                        <select name="country_id" id="country_id" class="form-control fc-datepicker">
                                            <option value="0">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}"
                                                    @if($user->country_id == $country->id)
                                                    selected
                                                    @endif
                                                    >{{ $country->name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="col">
                                        <label>Roles </label>
                                        <select name="roles_name"  class="form-control fc-datepicker">
                                            <option value="0">Select Roles</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="col-md-12">
                                        <label class="infoTitle">@lang('site.status')</label>

                                        <input type="checkbox" value="1" {{  $user->status == 1 ? 'checked' : '' }} name="status">

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
