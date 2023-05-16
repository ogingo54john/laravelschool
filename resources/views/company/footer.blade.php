
<!-- Footer Start -->
<div class="container-fluid bg-dark footer pb-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
    <div class="row g-5">
    <div class="col-lg-3 col-md-6">
      <p class="text-light text-sentencecase pb-2 h4">Our Services</p>
      <div class="d-flex flex-column justify-content-start" style="text-decoration:none">
    <p class="outline-danger"><a class="text-light mb-2" style="text-decoration:none;" href="#">Web Design</a></p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <p class="text-light mb-4 h4">Contacts</p>

    <p class="text-light"><i class="fa fa-map-marker-alt me-3 text-light"></i>Address</p>
    <p class="text-light"><i class="fa fa-phone-alt me-3"></i><a style="text-decoration:none;" class="text-light" href="tel:0745566505">0745566505</a></p>
    <p class="text-light"><i class="fa fa-envelope me-3"></i>omundifelix30@gmail.com</p>



    </div>
    <div class="col-lg-3 col-md-6">
    <p class="text-light mb-2 h4">Quick Links</p>

    <a class="d-flex mb-1 text-light" style="text-decoration:none" href="{{ url("contact") }}">Contact Us</a>
    <a class="d-flex mb-1 text-light" style="text-decoration:none" href="{{ url("services") }}">Services</a>
    <a class="d-flex mb-1 text-light" style="text-decoration:none" href="{{ url("about") }}">About Us</a>
    <a class="d-flex mb-1 text-light" style="text-decoration:none" href="{{ url("pricing") }}">Pricing</a>
    {{-- <a class="d-flex mb-1 text-light" style="text-decoration:none" href="#">Terms & Conditions</a> --}}

    </div>
    <div class="col-lg-3 col-md-6">
    <p class="text-light mb-4 h4">Newsletter</p>
    <p class="text-light">Please subcribe to receive latest news from our blog:</p>
    <div class="position-relative mx-auto" style="max-width: 500px;">
    <form method="POST" id="subscriberForm" autocomplete='off' action="{{ url ("/subscribe") }}" >
    @csrf
    <div class="control-group">
    <div class="form-group">

    <input  class="form-control bg-light mb-2 w-100" id="name"
    name="name" type="text" placeholder="Your Name">
    </div>
    </div>

    <div class="control-group">
    <div class="form-group">
    <input  class="form-control bg-light w-100" id="email"
      name="email" type="text" name='email' placeholder="Your email">
    </div>
    </div>

    <ul  class="text-danger d-none" id="save-errors"></ul>
      <button id="subscribe" style="background-color:blue;color:#ffff" class="w-100  top-0 end-0 py-2 me-2">Subscribe</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    <div class="container-fluid copyright">
    <div class="container">
    <div class="row">
    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-light">
    &copy;  2023 <a href="#" class="text-primary" style="text-decoration:none;">Nyagaka</a> All Rights Reserved.
    </div>

    <div class='col-md-6 text-light'>
    <a class="btn btn-outline-primary text-center mr-2 px-0 text-light" style="width: 38px; height: 38px;" href="https://wa.me/+254745566505?text=Hello Nyagaka%20I%20need%20your service in" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a class="btn btn-outline-primary text-center mr-2 px-0 text-light" style="width: 38px; height: 38px;" href="https://www.facebook.com/nyagakaSolutions" target="_blank"><i class="fab fa-facebook-f" ></i></a>
    <a class="btn btn-outline-primary text-center mr-2 px-0 text-light" style="width: 38px; height: 38px;" href="https://www.linkedin.com/company/nyagaka/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    <a class="btn btn-outline-primary text-center mr-2 px-0 pt-sm-2 text-light" style="width: 38px; height: 38px;" href="https://www.youtube.com/channel/UCWX3aOegItASQd-Z9Y4bS5A" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Footer End -->
