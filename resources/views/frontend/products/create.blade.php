@extends('frontend.layouts.master')

@section('content')
    <!--addList-Details S t a r t-->
    <div class="addList-Details section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12">
                    <!-- Bread Crumb S t a r t -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">@lang('site.home')</a></li>
                            <li class="breadcrumb-item"><a href="#">@lang('site.properties')</a></li>
                            <li class="breadcrumb-item"><a href="#">@lang('site.post_ad')</a></li>
                        </ol>
                        <h4 class="priceTittle pt-20 pb-20">@lang('site.post_your_ad')</h4>
                    </nav>
                    <!-- /END-->
                    <div class="listingDetails-Wrapper">
                        <div class="listingDetails">
                            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="select-itms">
                                            <label class="infoTitle">@lang('site.item_category')</label>
                                            <select name="category_id" class="niceSelect">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title_en }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-6">
                                    <div class="select-itms">
                                        <label class="infoTitle">Item subcategory</label>
                                        <select name="select"  class="niceSelect">
                                            <option value="">Subcategory</option>
                                            <option value="">Subcategory 1</option>
                                            <option value="">Subcategory 2</option>
                                            <option value="">Subcategory 3</option>
                                        </select>
                                    </div>
                                </div> --}}
                                    <!-- condition -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="condition">
                                            <h6 class="infoTitle">@lang('site.item_condition')</h6>
                                            <div class="cs_radio_btn">
                                                <div class="radio">
                                                    <input id="radio-1" name="condition" type="radio" tabindex="0"
                                                        value="0">
                                                    <label for="radio-1" class="radio-label">Pre-Loved</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-2" name="condition" type="radio" tabindex="0"
                                                        value="1">
                                                    <label for="radio-2" class="radio-label">New</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- condition -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="condition">
                                            <h6 class="infoTitle">@lang('site.authanticate')</h6>
                                            <div class="cs_radio_btn">
                                                <div class="radio">
                                                    <input id="radio-3" name="authanticate" type="radio" tabindex="0"
                                                        value="0">
                                                    <label for="radio-3" class="radio-label">Pre-Loved</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-4" name="authanticate" type="radio" tabindex="0"
                                                        value="1">
                                                    <label for="radio-4" class="radio-label">New</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Title en-->
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.title_en')</label>
                                        <div class="input-form input-form2">
                                            <input type="text" name="title_en" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.title_ar')</label>
                                        <div class="input-form input-form2">
                                            <input type="text" name="title_ar" placeholder="">
                                        </div>
                                    </div>
                                    <!-- Description En -->
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.description_en')</label>
                                        <div class="input-form">
                                            <textarea name="description_en" id="message" placeholder="About your project"></textarea>
                                        </div>
                                    </div>
                                    <!-- Description En -->
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.description_ar')</label>
                                        <div class="input-form">
                                            <textarea name="description_ar" id="message" placeholder="About your project"></textarea>
                                        </div>
                                    </div>
                                    <!-- Price -->
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.price')</label>
                                        <div class="input-form">
                                            <input type="number" name="price">
                                            <div class="icon"><i class="las la-calendar-week"></i></div>
                                        </div>
                                    </div>
                                    <!-- image -->
                                    <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.image')</label>
                                        <div class="dropzone" id="file-dropzone"></div>
                                    </div>
                                    {{-- <div class="col-lg-12">
                                        <label class="infoTitle">@lang('site.image')</label>
                                        <div class="input-form">
                                            <input type="file" class="form-control modal-title" name='image'
                                                accept="image/jpeg,image/jpg,image/png">

                                        </div>
                                    </div> --}}
                                    <!-- user Message -->
                                    <div class="col-sm-12">
                                        <label class="checkWrap2">@lang('site.negotiable')
                                            <input class="effectBorder" name="nigotiable" type="checkbox"
                                                value="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="btn-wrapper mb-10">
                                            <button type="submit" class="cmn-btn4 w-100">@lang('site.continue')</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End-of addList-Details -->
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>

    <script>
        Dropzone.options.fileDropzone = {
            url: '{{ route('product.store') }}',
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            maxFilesize: 8,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            removedfile: function(file) {
                var name = file.upload.filename;
                $.ajax({
                    type: 'POST',
                    url: '{{ route('product.store') }}',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: name
                    },
                    success: function(data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function(file, response) {
                console.log(file);
            },
        }
    </script>
@endpush
