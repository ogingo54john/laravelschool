@extends("layouts.app")

@section("content")

<!-- Breadcrumb Start -->
<div class="container-fluid pt-4 d-lg-none">
<div class="container">
<nav class="breadcrumb bg-transparent m-0 p-0">
<a class="breadcrumb-item" href="#">Home</a>
<span class="breadcrumb-item active">About</span>
</nav>
</div>
</div>
<!-- Breadcrumb End -->


        <!-- About Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-5 align-items-center justify-content-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                       <h1 class="display-5 mb-4">About us</h1>
                        <p class="mb-4">
                        Nyagaka Agency is a Web Development Agency in Nairobi, Kenya. Our team consists of certified full stack web developers and designers. We help businesses get visible at the digital marketplace. We specialize in website creation & design, website deployment & maintenance, and online IT consultation
                        </p>
                    </div>
                    <div class="col-lg-6 wow animated slideIn" data-wow-delay="0.5s">
                       <p class="mt-lg-4"> Our customers get the best business web design packages and ecommerce integrations. We take their preferences into account and tailor in the vision they have for their website needs. Once we get an order, we schedule a meeting to ensure all our client's requirements are captured. Next, we email the client a contract letter to sign. The contract letter legally binds us to deliver on our promises. We then develop and customize the website and deliver as promised. The cherry on top is our continued support even after the website goes live. We ensure our clients can operate and make changes to their website easily.</p>
                    </div>
                </div>
            </div>
        </div>

    <div class="container-fluid bg-faded">

    <!-- {% comment %} Vision {% endcomment %} -->
        <div class="container bg-gray">
            <div class="row g-5 align-items-center justify-content-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h2 class="display-5 mb-4 text-info">Our Mission</h2>
                    <p class="mb-2"> Our mission is to go above and beyond in developing engaging websites for entrepreneurs and businesses. We strive to elevate our customer's online presence by deliberately using cutting-edge technologies and programming languages.</p>
                </div>
                <div class="col-lg-6 wow animated slideIn" data-wow-delay="0.5s">
                  <h3 class="display-5 mb-4 text-info">Our Vision</h3>
                  <p class='mb-2'>Our vision is to provide innovative and effective web design solutions that drive growth for our client's businesses. Our goal is to be the first choice for customers seeking to build an online presence that will maximize their success in the digital landscape.</p>
                </div>
            </div>
        </div>
    <!-- {% comment %} Vision {% endcomment %} -->
    <!-- {% comment %} Values {% endcomment %} -->
    <div class="container">
        <div class="row g-5 align-items-center justify-content-center">
            <div class="col-lg-12 wow fadeIn text-start" data-wow-delay="0.1s">
                <h4 class="display-5 mb-2 text-info">Our Values</h4>
               </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow animated slideIn" data-wow-delay="0.5s">
                    <p>At Nyagaka Web Development Agency, we are guided by a set of core values that shape everything we do. These values include:</p>
                    <ul class="text-start">
                 <li>   <p>Innovation: We constantly explore new technologies and techniques to deliver up to date web design solutions for our clients.</p></li>
                 <li>
                    <p>Quality: High-quality work is the hallmark of our Web Development Agency. We strive to exceed our clients' expectations and help them achieve their goals.</p></li>
                    <li>
                        <p>Customer Service: We are dedicated to providing excellent customer service and building strong relationships with our clients. We are always available to address every issue that our customers face.</p></li>

                    <li>
                        <p>Teamwork: We believe that working together as a team is the key to delivering outstanding results for our clients. We value collaborating with our clients as it is key to delivering services that match their expectations.</p></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                       <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid" src="{{ asset("images/about.jpg") }}">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- {% comment %} Values {% endcomment %} -->


    </div>


    <!-- About End -->
@endsection
