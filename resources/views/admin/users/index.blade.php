@extends('layouts.admin.app')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Users</h6>
          <button class="btn btn-primary">
            <a href="{{ route('admin.users.create') }}">
                <i class="fa fa-plus">Create</i>
            </a></button>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Country_id</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created_at</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>
                  <img src="{{ $user->image }}" width="100px" height="100px" alt="">
                  </td>
                  <td>
                  <p class="text-xs font-weight-bold mb-0">{{ $user->first_name }}</p>
                  </td>
                  <td>
                  <p class="text-xs font-weight-bold mb-0">{{ $user->last_name }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $user->email }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $user->phone }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $user->country_id }}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    @if($user->status == 1)
                    <span class="badge badge-sm bg-gradient-success">Online</span>
                    @else
                    <span class="badge badge-sm bg-gradient-danger">Offline</span>
                    @endif
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $user->created_at }}</span>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-info">
                    <a href="{{ route('admin.users.edit', [$user->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      <i class="fa fa-edit">Edit</i>
                    </a></button>
                    <form action="{{ route('admin.users.delete', [$user->id]) }}" method="post" style="display: inline-block">
                      {{ csrf_field() }}
                      {{ method_field('delete') }}
                      {{-- <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button> --}}
                      <button class="btn btn-danger" type="submit">
                      <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete user">
                        <i class="fa fa-trash">Delete</i>
                      </a></button>
                  </form><!-- end of form -->

                  {{-- <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('site.delete')</button> --}}

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
