@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Categories</h6>
          <button class="btn btn-success">
            <a href="{{ route('admin.categories.create') }}">
                <i class="fa fa-plus">Create</i>
            </a></button>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">title_en</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">title_ar</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description_en</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description_ar</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $category->title_en }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $category->title_ar }}</p>
                  </td>
               
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $category->description_en }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $category->description_ar }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $category->image }}</span>
                  </td>
                  <td class="align-middle">
                  <td>
                  <a class="btn btn-primary" href="{{ route('admin.categories.edit', [$category->id]) }}"><i
                      class="fas fa-edit">Edit</i></a>
                </td>
            
                <td>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#exampleModal{{ $category->id }}">
                    <i class="fas fa-trash-alt">Delete</i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <form action="{{ route('admin.categories.delete', $category->id) }}" method="post">@csrf
                        @method('DELETE')
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete
                              confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p> Are you sure you want to delete this item?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Yes Delete it</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- End Modal -->
                </td>
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
