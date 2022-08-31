@extends('layouts.admin.app')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Settings</h6>
          <button class="btn btn-primary">
            <a href="{{ route('admin.settings.index') }}">
                <i class="fa fa-plus">Show Settings</i>
            </a></button>
        </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.settings.store') }}" method="post" enctype="multipart/form-data"autocomplete="off">
                        {{ csrf_field() }}
                            <div class="col">
                                <label> English Name </label>
                                <input class="form-control fc-datepicker" name="title_en"
                                    type="text"  required>
                            </div>
                            <div class="col">
                                <label> Arabic Name</label>
                                <input class="form-control fc-datepicker" name="title_ar" required>

                            </div>
                            <div class="col">
                                <label>Email</label>
                                <input class="form-control fc-datepicker" name="email"
                                    type="text" required>
                            </div>
                            <div class="col">
                                <label>Phone</label>
                                <input class="form-control fc-datepicker" name="phone"
                                    type="text" required>
                            </div>
                            <div class="col">
                                <label>Start_from</label>
                                <input class="form-control fc-datepicker" name="start_from"
                                    type="time" required>
                            </div>
                            <div class="col">
                                <label>End_at</label>
                                <input class="form-control fc-datepicker" name="end_at"
                                    type="time" required>
                            </div>
                            <div class="col">
                                <label>Facebook_link</label>
                                <input class="form-control fc-datepicker" name="facebook_link"
                                    type="url" required>
                            </div>
                            <div class="col">
                                <label>Twitter_link</label>
                                <input class="form-control fc-datepicker" name="twitter_link"
                                    type="url" required>
                            </div>
                            <div class="col">
                                <label>YouTube_link</label>
                                <input class="form-control fc-datepicker" name="youtube_link"
                                    type="url" required>
                            </div>
                            <div class="col">
                                <label>Linkedin_link</label>
                                <input class="form-control fc-datepicker" name="linkedin_link"
                                    type="url" required>
                            </div>
                            <div class="col">
                                <label> Logo</label>
                                    <input type="file" class="form-control modal-title" name='logo'
                                    accept="image/jpeg,image/jpg,image/png">
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
