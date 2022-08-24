@extends('frontend.layouts.master')

@section('content')
    <!--Contact Area S t a r t-->
    <div class="contactArea section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="contact-Wrapper">
                        <form action="{{ route('contacts.store') }}" method="post" class="form-control col-md-12"
                            id="add-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-tittle mb-40">
                                        <h2 class="tittle p-0">Get in touch</h2>
                                        <p>Our friendly team would love to hear from you.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="infoTitle">First name</label>
                                    <div class="input-form input-form2">
                                        <input type="text" name="first_name" placeholder="First name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="infoTitle">Last name</label>
                                    <div class="input-form input-form2">
                                        <input type="text" name="last_name" placeholder="Last name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="infoTitle">Email</label>
                                    <div class="input-form input-form2">
                                        <input type="email" name="email" placeholder="you@company.com" required>
                                    </div>
                                </div>
                                <!-- country Number Selector -->
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <label class="infoTitle">Phone number</label>
                                        <input id="phone" name="phone" type="number" required>
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="col-lg-12">
                                    <label class="infoTitle">Message</label>
                                    <div class="input-form">
                                        {{-- <textarea name="message " id="message" placeholder="About your project"></textarea> --}}
                                        <textarea class="form-control" name="message" rows="5" placeholder="About your project" required></textarea>
                                    </div>
                                </div>
                                <!-- user Message -->
                                <div class="col-sm-12">
                                    <label class="checkWrap2">You agree to our privacy policy.
                                        <input class="effectBorder" name="published" type="checkbox" value="1"
                                            required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </form>
                        <div class="col-sm-12">
                            <div class="btn-wrapper mb-10">
                                {{-- <button type="submit" form="add-form" class="cmn-btn4 w-100">Send message</button> --}}
                                <button type="submit" class="btn btn-primary waves-effect waves-light" form='add-form'>Send
                                    Message</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="contactRight-img">
                        <img src="{{ asset('frontend') }}/assets/img/gallery/contact.jpg" alt="images" class="contactImg">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('body').on('submit', '#add-form', function(e) {
            e.preventDefault();
            var url = $(this).attr('action');
            $.ajax({
                url: url,
                method: "post",
                data: new FormData(this),
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response == 'success') {
                        new Noty({
                            type: 'success',
                            layout: 'topRight',
                            text: "{{ 'Saved successfully' }}",
                            timeout: 2000,
                            killer: true
                        }).show();
                    }
                },
            });
        });
    </script>
@endpush
