@extends('template.index')

@section('title')
    Contact
@endsection

@section('main')
    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-map">


        <div class="col-sm-12" style="padding:0;">
            <!-- Map -->
            <div id="contact-us-map">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.8568383384127!2d5.680495615718239!3d50.611197679497835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f41c3d702da7%3A0x2d5b3cb7b45da7ab!2sEafc%20Fl%C3%A9ron-Charlemagne%20-%20Promotion%20Sociale!5e0!3m2!1sen!2sbe!4v1644950101410!5m2!1sen!2sbe"></iframe>
                <br />
                <small>
                    <a
                        href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
                </small>
                </iframe>
            </div>
            <!-- End Map -->
        </div>


    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <h3>Get in Touch with Us</h3>
                </hr>
                <div class="col-sm-6">
                    <!-- Contact Info -->
                    <p class="contact-us-details">
                        <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br />
                        <b>Phone:</b> +44 123 654321<br />
                        <b>Fax:</b> +44 123 654321<br />
                        <b>Email:</b> <a
                            href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
                    </p>
                    <!-- End Contact Info -->
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>
@endsection
