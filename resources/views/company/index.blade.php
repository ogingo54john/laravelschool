@extends("layouts.app")

@section("content")

{{-- carousel --}}

{{-- end of carousel --}}



    <!-- Header Start -->
    <div class="container-fluid bg-info py-5 h-100 px-0">
        <div class="container">
        <div class="row mx-0 align-items-center">
             <div class="col-lg-6 px-md-5 text-start text-sm-left">
                 <h1 class="display-5 mb-3">Best Web and software Development Agency</h1>
                 <p class="text-light mb-4">

                         Whether you're a small startup looking to establish a strong online presence or a large enterprise looking to expand your reach and drive revenue, we have the expertise and experience to help you achieve your goals.
                 </p>
             </div>
             <div class="col-lg-6 px-0 text-start">
                 {{-- <img class="img-fluid mt-5 mt-lg-0 .rounded" src="photo/6.jpg" alt=""> --}}
                 <p class="mb-4 text-light">At Nyagaka Web Design Agency Kenya, we understand,and employ modern web designs and techniques unique to each niche websites for an overall good user experience.We assist you establish an online presence in the rapidly evolving digital landscape and stand out in the crowded marketplace.</p>

                 <a href="#" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a>
             </div>
         </div>
        </div>
     </div>
     <!-- Header End -->



     <!-- About Start -->
     <div class="container-fluid">
         <div class="container py-5">
             <div class="row align-items-center">
                 <div class="col-lg-6">
                     <img class="img-fluid mb-4 mb-lg-0 rounded" src="images/services.png" alt="">
                 </div>
               <div class="col-lg-6">
                     <h2>Discover top-notch services</h2>
                     <p class="mb-4">Our team of expert designers and developers are dedicated to help our clients to meet their needs and yield good results in the emerging digital market.
                        </p>
                     <a href="#" class="btn btn-primary text-uppercase py-3 px-5">Get in Touch</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- About End -->



 <!--==========================
       Why Us Section
     ============================-->
    <div class="container-fluid bg-danger">
     <div class="container py-3">
         <div class="row">
         <div class="col-lg-12">
             <div class="d-flex align-items-center justify-content-center">
                 <h3 class="mb-3 text-center text-light">Why choose us</h3>
             </div>
         </div>
     </div>
    </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                  <!-- Approach -->
                  <div class="card shadow mb-4">
                     <div class="card-header py-3 bg-primary">
                         <h6 class="m-0 font-weight-bold text-light"> <i class="fa fa-check"></i> W3C validation</h6>
                     </div>
                     <div class="card-body">
                         <p>We test all websites we build in web browsers to ensure they're compatible with all major browsers across a variety of operating systems, devices and screen sizes.

                         </p>

                     </div>
                 </div>
             </div>

 <!-- -->
 <div class="col-lg-6">
     <!-- Approach -->
     <div class="card shadow mb-4">
        <div class="card-header py-3 bg-danger">
            <h6 class="m-0 font-weight-bold text-light"> <i class="fa fa-check"></i>Mobile usability</h6>
        </div>
        <div class="card-body">
            <p>Since Google uses <code>“mobile-first indexing”</code> we optimize the website for mobile viewing to ensure your website ranks higher in search results.

            </p>

        </div>
    </div>
 </div>

 <!---->
 <div class="col-lg-6">
     <!-- Approach -->
     <div class="card shadow mb-4">
        <div class="card-header py-3 bg-info">
            <h6 class="m-0 font-weight-bold text-light"> <i class="fa fa-check"></i>User-friendly layout</h6>
        </div>
        <div class="card-body">
            <p>We specialize in creating visually stunning and highly functional websites for businesses of all sizes.
            </p>

        </div>
    </div>
 </div>
 <!---->
 <div class="col-lg-6">
     <!-- Approach -->
     <div class="card shadow mb-4">
        <div class="card-header py-3 bg-dark">
            <h6 class="m-0 font-weight-bold text-light"> <i class="fa fa-check"></i> Page loading speed</h6>
        </div>
        <div class="card-body">
            <p>We build websites that run faster while maintaining top-level security.

            </p>

        </div>
    </div>
 </div>
 <!---->

         </div>
     </div>

    </div>


 <!--==========================
       Why Us Section
     ============================-->

         <!-- packages -->

         <div class="container-fluid bg-faded py-3">
                 <div class="container">
                 <h4 class="m-0 text-uppercase text-center fw-bold p-3">How much does our web development service cost?</h4>
                 <div class="row">
                 <div class="col-lg-12">
                 <div class="row">
                 <!-- <div class="col-12">
                 <div class="d-flex align-items-center justify-content-center bg-light py-2 px-4 mb-3">

                 </div>
                 </div> -->
                 <!-- start  -->
                 <!-- {% for package in packages %} -->
                 <div class="col-lg-4 d-flex align-items-stretch mb-4">

                 <div class="card mb-lg-0">
                 <div class="card-body">
                 <h5 class="card-title text-dark text-uppercase text-center" data-name="packageName">Basic</h5>
                 <h6 class="card-text text-center text-danger" data-price="">Ksh.800<span class="period"></span></h6>
                 <hr>
                 <ul>
                 <li>Mobile responsive.</li>
                 <li>3 page comprising of landing page, contact and about pages.</li>
                 <li>1 year hosting and domain name.</li>
                 <li>SSL certificates.</li>
                 <li>Basic SEO.</li>
                 <li>One Business email.</li>
                 <li>1 month technical support.</li>
                 <li>Delivery of 3 business days.</li>
                 <p class="text-dark h5 text-start">This package is only possible for people with limited budget.The system is also responsive to ensure your website ranks higher in search results since google uses "mobile first indexing".</p>
                 </ul>
                 <div class="d-grid">
                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdod">Open modal for @mdo</button>
                 <!-- <a href="#"   class="btn btn-primary text-uppercase" >Select Package</a>                                     -->
                 </div>
                 </div>
                 </div>
                 </div>
                 <!-- {% endfor %} -->


                 <!-- {% for package in packages %} -->
                 <div class="col-lg-4 d-flex align-items-stretch mb-4">

                 <div class="card mb-lg-0">
                 <div class="card-body">
                 <h5 class="card-title text-dark text-uppercase text-center">Package</h5>
                 <h6 class="card-text text-center text-danger">Ksh.800<span class="period"></span></h6>
                 <hr>
                 <ul>
                 <li>Mobile responsive.</li>
                 <li>3 page comprising of landing page, contact and about pages.</li>
                 <li>1 year hosting and domain name.</li>
                 <li>SSL certificates.</li>
                 <li>Basic SEO.</li>
                 <li>One Business email.</li>
                 <li>1 month technical support.</li>
                 <li>Delivery of 3 business days.</li>
                 <p class="text-dark h5 text-start">This package is only possible for people with limited budget.The system is also responsive to ensure your website ranks higher in search results since google uses "mobile first indexing".</p>
                 </ul>
                 <div class="d-grid">
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"  data-bs-whatever="@mdo">Open modal for @mdo</button>
                 <!-- <a href="#"   class="btn btn-primary text-uppercase" >Select Package</a>                                     -->
                 </div>
                 </div>
                 </div>
                 </div>
                 <!-- {% endfor %} -->



                 {{-- <!-- {% for package in packages %} -->
                 <div class="col-lg-4 d-flex align-items-stretch mb-4">

                 <div class="card mb-lg-0">
                 <div class="card-body">
                 <h5 class="card-title text-dark text-uppercase text-center">Package</h5>
                 <h6 class="card-text text-center text-danger">Ksh.800<span class="period"></span></h6>
                 <hr>
                 <ul>
                 <li>Mobile responsive.</li>
                 <li>3 page comprising of landing page, contact and about pages.</li>
                 <li>1 year hosting and domain name.</li>
                 <li>SSL certificates.</li>
                 <li>Basic SEO.</li>
                 <li>One Business email.</li>
                 <li>1 month technical support.</li>
                 <li>Delivery of 3 business days.</li>
                 <p class="text-dark h5 text-start">This with limited budget.The system is also responsive to ensure your website ranks higher in search results since google uses "mobile first indexing".</p>
                 </ul>
                 <div class="d-grid">
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
                 <!-- <a href="#"   class="btn btn-primary text-uppercase" >Select Package</a>                                     -->
                 </div>
                 </div>
                 </div>
                 </div>
                 <!-- {% endfor %} -->


                 <!-- {% for package in packages %} -->
                 <div class="col-lg-4 d-flex align-items-stretch mb-4">

                 <div class="card mb-lg-0">
                 <div class="card-body">
                 <h5 class="card-title text-dark text-uppercase text-center">Package</h5>
                 <h6 class="card-text text-center text-danger">Ksh.800<span class="period"></span></h6>
                 <hr>
                 <ul>
                 <li>Mobile responsive.</li>
                 <li>3 page comprising of landing page, contact and about pages.</li>
                 <li>1 year hosting and domain name.</li>
                 <li>SSL certificates.</li>
                 <li>Basic SEO.</li>
                 <li>One Business email.</li>
                 <li>1 month technical support.</li>
                 <li>Delivery of 3 business days.</li>
                 <p class="text-dark h5 text-start">This package is only possible for people with limited budget.The system is also responsive to ensure your website ranks higher in search results since google uses "mobile first indexing".</p>
                 </ul>
                 <div class="d-grid">
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
                 <!-- <a href="#"   class="btn btn-primary text-uppercase" >Select Package</a>                                     -->
                 </div>
                 </div>
                 </div>
                 </div>
                 <!-- {% endfor %} --> --}}


                 <!--  end -->

                 </div>
                 </div>
                 </div>
                 </div>
                 </div>

                 <!-- packages -->


               <!-- modal -->

               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
               <div class="modal-content">
               <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Book Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Send message</button>
               </div>
               </div>
               </div>
               </div>
               <!-- modal -->


   <!--==========================
       Call To Action Section
     ============================-->
     <div class="container-fluid bg-success">
     <div class="container  py-5">
           <div class="row">
             <div class="col-lg-9 text-center text-lg-left">
               <h5 class="text-light">Call us Today</h5>
               <p class="text-light">Failed to identify a package that best fits you. Contact us our experts are ready to help you meet your needs</p>
             </div>
             <div class="col-lg-3 cta-btn-container text-center">
               <a class="btn btn-light btn-outline-primary align-middle" href="/contact">Contact Us</a>
             </div>
           </div>
         </div>
     </div>
     <!-- end of call to action -->


@endsection
@section("scripts")

<script src="{{ asset("assets/js/bookpackage.js") }}"></script>


{{-- <script>
var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
</script> --}}

@endsection
