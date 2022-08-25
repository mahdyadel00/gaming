@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Products</h6>
       
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Id</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">title_en</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">title_ar</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description_en</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description_ar</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price_Discount</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User_id</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category_id</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Country_id</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $product->id }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $product->title_en }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $product->title_ar }}</p>
                  </td>
               
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $product->description_en }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $product->description_ar }}</span>
                  </td>
                  <td class="align-middle text-center">
                  <img src="/admin/product/{{ $product['image'] }}" height="30px" width="30px" /> <span class="text-secondary text-xs font-weight-bold">{{ $product->image }}</span>
                  </td>
                 
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $product->price }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $product->price_discount }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $product->user_id }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $product->category_id }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $product->country_id }}</span>
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
