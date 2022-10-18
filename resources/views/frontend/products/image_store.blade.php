@extends('frontend.layouts.master')
@section('content')
    <!--addList-Details S t a r t-->
    <div class="addList-Details section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12">
                    <div class="listingDetails-Wrapper">
                        <div class="listingDetails">
                            <form method="post" action="{{ route('products.store_image') }}" enctype="multipart/form-data"
                                class="dropzone" id="dropzone">
                                @csrf
                                <input type="hidden" name='image' id='id1234' value="{{ $product->id }}">
                            </form>
                            <div class="col-sm-12">
                                <div class="btn-wrapper mb-10">
                                    <a href="{{ route('product.single', $product->id) }}"
                                        class="cmn-btn4 w-100">@lang('site.go_to_my_post')</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End-of addList-Details -->
@endsection
@push('js')
    <script>
        Dropzone.options.dropzone = {
            url: "{{ route('products.store_image') }}",
            maxFilesize: 1,
            paramName: 'image',
            addRemoveLinks: true,
            autoProcessQueue: true,
            parallelUploads: 1,
            dictRemoveFile: 'Remove file',
            params: {
                _token: '{{ csrf_token() }}',
                id: $("#id1234").val(),
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            // success: function(image, response) {
            //     console.log(response);
            // },
            success: function(response) {
                console.log(response);
                if (response == 'success') {
                    new Noty({
                        type: 'success',
                        layout: 'topRight',
                        text: "{{ ('Saved successfully') }}",
                        timeout: 2000,
                        killer: true
                    }).show();
                }
            },

            error: function(image, response) {
                return false;
            }
            // removedfile: function(file) {
            //     $.ajax({
            //         type: 'POST',
            //         dataType: 'json',
            //         url: '{{ route('products.store_image') }}',
            //         data: {'_token': ' {{ csrf_token() }}', id: file.id},
            //         success: function (data) {
            //             console.log('success: ' + data);
            //         }
            //     })
            //     var _ref;
            //     return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            // },
        };
    </script>
@endpush
