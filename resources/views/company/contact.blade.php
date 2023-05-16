@extends("layouts.app")

@section("styles")
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>
@endsection

@section("content")


<!-- Breadcrumb Start -->
<div class="container-fluid pt-4 d-lg-none">
    <div class="container">
    <nav class="breadcrumb bg-transparent m-0 p-0">
    <a class="breadcrumb-item" href="#">Home</a>
    <span class="breadcrumb-item active">Contact</span>
    </nav>
    </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-faded py-3">
    <div class="container">
    <div class="bg-faded py-2 px-4 mb-3">
    <h3 class="m-0">Contact Us For Any Queries</h3>
    </div>
    <div class="row">
    <div class="col-md-5">

    <div class="bg-light  mb-3" style="padding: 30px;">
    <h6 class="font-weight-bold">Get in touch</h6>
    <p>Please get in touch using the details below</p>

    <div class="d-flex align-items-center mb-3">
    <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
    <div class="d-flex flex-column">
    <h6 class="font-weight-bold">Email Us</h6>
    <p class="m-0">omundifelix30@gmail.com</p>
    </div>
    </div>
    <div class="d-flex align-items-center">
    <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
    <div class="d-flex flex-column">
    <h6 class="font-weight-bold">Call Us</h6>
    <p class="m-0">0745566505</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-7">
    <div class="contact-form bg-light mb-3" style="padding: 30px;">
    <form name="sentMessage" id="contactForm" novalidate="novalidate" autocomplete="off">

    <div class="row">

    <div class="col-md-6">

    <div class="control-group">
    <label for="name">Your Name</label>

    <input type="text"
    id="name"
    name="name"
    placeholder="Your Name" required="required"
    data-validation-required-message="Please enter your name" minlength="3"
    data-validation-minlength-message="Enter minimum of 3 characters"
    maxlength="30" data-validation-maxlength-message="Enter maximum of 30 characters" class="form-control"/>

    <p class="help-block text-danger"></p>
    </div>
    </div>


    <div class="col-md-6">
    <div class="control-group">
    <label for="phone" class="mb-1">Your Phone</label>

    <input type="text" id="phone"
    placeholder="Your Phone"  required="required"
    class="form-control"
    data-validation-required-message="Please enter your mobile number"
    data-validation-regex-regex="^(\+)?(\d{1,2})?[( .-]*(\d{3})[) .-]*(\d{3,4})[ .-]?(\d{4})$"
    data-validation-regex-message="Enter valid phone number"

    />


    <p class="help-block text-danger"></p>
    </div>
    </div>
    </div>

    <div class="control-group">
    <label for="email">Your Email</label>
    <input type="email" class="form-control" id="email"  placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" maxlength="40" data-validation-maxlength-message="This email exceeds max length"  />
    <p class="help-block text-danger"></p>

    </div>


    <div class="control-group error">
    <label class="control-label">Service</label>
    <div class="controls">

    <label class="checkbox d-flex mr-2">
    <input type="checkbox"  id="service"
    class="service"
    name="service[]" value="Website design and development"
    data-validation-minchecked-minchecked="1"
    data-validation-minchecked-message="Please check one service"
    data-validation-maxchecked-maxchecked="1"
    data-validation-maxchecked-message="You can only inquire for one service at a time"
    aria-invalid="true">
    Website design and development
    </label>


    <label class="checkbox d-flex mr-2">
        <input type="checkbox"  id="service"
        class="service"
        name="service[]" value="API Development"
        data-validation-minchecked-minchecked="1"
        data-validation-minchecked-message="Please check one service"
        data-validation-maxchecked-maxchecked="1"
        data-validation-maxchecked-message="You can only inquire for one service at a time"
        aria-invalid="true">
        API Development
        </label>



    <label class="checkbox d-flex mr-2">
        <input type="checkbox"  id="service"
        class="service"
        name="service[]" value="Database design and development"
        data-validation-minchecked-minchecked="1"
        data-validation-minchecked-message="Please check one service"
        data-validation-maxchecked-maxchecked="1"
        data-validation-maxchecked-message="You can only inquire for one service at a time"
        aria-invalid="true">
        Database design and development
        </label>


    <label class="checkbox d-flex mr-2">
        <input type="checkbox"  id="service"
        class="service"
        name="service[]" value="Deployment and maintenances"
        data-validation-minchecked-minchecked="1"
        data-validation-minchecked-message="Please check one service"
        data-validation-maxchecked-maxchecked="1"
        data-validation-maxchecked-message="You can only inquire for one service at a time"
        aria-invalid="true">
        Deployment and maintenances
        </label>


    <label class="checkbox d-flex mr-2">
        <input type="checkbox"  id="service"
        class="service"
        name="service[]" value="Technical consulting"
        data-validation-minchecked-minchecked="1"
        data-validation-minchecked-message="Please check one service"
        data-validation-maxchecked-maxchecked="1"
        data-validation-maxchecked-message="You can only inquire for one service at a time"
        aria-invalid="true">
        Technical consulting
        </label>


        <label class="checkbox d-flex mr-2">
            <input type="checkbox"  id="service"
            class="service"
            name="service[]" value=" Mobile app development"
            data-validation-minchecked-minchecked="1"
            data-validation-minchecked-message="Please check one service"
            data-validation-maxchecked-maxchecked="1"
            data-validation-maxchecked-message="You can only inquire for one service at a time"
            aria-invalid="true">
            Mobile app development
            </label>


            <label class="checkbox d-flex mr-2">
                <input type="checkbox"  id="service"
                class="service"
                name="service[]" value="Other"
                data-validation-minchecked-minchecked="1"
                data-validation-minchecked-message="Please check one service"
                data-validation-maxchecked-maxchecked="1"
                data-validation-maxchecked-message="You can only inquire for one service at a time"
                aria-invalid="true">
               Other
                </label>



    <p class="help-block text-danger"></p>
    </div>
    </div>



    <div class="control-group">
    <textarea class="form-control" class="bg-light" id="message" value="wow you look fine" placeholder="Additional Message" required="required" data-validation-required-message="Please enter your message"

    maxlength="5000"
    data-validation-maxlength-message="You have exceeded a maximum of 5000 characters."
    ></textarea>
    <p class="help-block text-danger"></p>
    </div>

    <button class="btn btn-danger" type="submit"   id="sendMessageButton">Send Message</button>
    </div>

    <div id="success" class="mt-4">
    </div>


    {{-- <input name="phone" type="text" id="phone1"/>  --}}



    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Contact End -->

    @endsection


    @section("scripts")
    <script src="{{ asset ("assets/js/axios.js") }}"></script>
    <script src="{{ asset ("assets/js/jqBootstrapValidation.min.js") }}"></script>
    <script src="{{ asset("assets/js/contact.js") }}"></script>
    {{-- <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script>
        var input = document.querySelector("#phone1");
        window.intlTelInput(input, {
        separateDialCode: true
        });
    </script> --}}
    @endsection
