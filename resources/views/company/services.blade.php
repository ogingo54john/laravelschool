@extends("layouts.app")

@section("content")

<!-- Breadcrumb Start -->
<div class="container-fluid pt-4 ">
    <div class="container">
    <nav class="breadcrumb bg-transparent m-0 p-0">
    <a class="breadcrumb-item" href="#">Home</a>
    <span class="breadcrumb-item active">Services</span>
    </nav>
    </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Start -->
    <div class="container-fluid bg-light p-6">
    <div class="row">


    <!-- {% for service in services_list  %} -->
    @forelse ($services as $key => $service )
    <div class="col-lg-4 mb-3 mt-3 d-flex align-items-stretch">
    <div class="card  p-5">
    <div class="text-justified">
    <h4>
    <p  class="text-warning" style="text-decoration:none">
  {{$service->name}}
    </p></h4>
    <a href="tel:+254745566505" class="btn  btn-dark"><i class="fa fa-phone-alt text-success font-weight-bold"></i> Call Us Now</a>
    <p>{!! $service->description !!} </p>
    <a href="{{ url("/service", $service->slug ) }}" class="btn btn-info">Read More</a>
    </div>
    </div>
    </div>
    @empty
    <div class="col-lg-4 mb-3 mt-3 d-flex align-items-stretch">
        <div class="card  p-5">
        <div class="text-justified">
        <h4>
        <p  class="text-warning" style="text-decoration:none">
        No available services currently
        </p></h4>

        </div>
        </div>
        </div>
    @endforelse
    <!-- {% endfor %} -->

{{--
    <!--  -->
    <div class="col-lg-4 mb-3 mt-3 d-flex align-items-stretch">
    <div class="card  p-5">
    <div class="text-justified">
    <h4>
    <p  class="text-warning" style="text-decoration:none">
    Back-end development
    </p></h4>
    <a href="tel:+254745566505" class="btn  btn-dark"><i class="fa fa-phone-alt text-success font-weight-bold"></i> Call Us Now</a>
    <p> Our team of developers is well-versed in server-side technologies and can create robust and scalable back-end systems to power your web and mobile applications. We have experience in building RESTful APIs using NodeJS and Express for mobile applications.</p>
    <a href="#" class="btn btn-info">Read More</a>
    </div>
    </div>
    </div>
    <!--  -->


    <!--  -->
    <div class="col-lg-4 mb-3 mt-3 d-flex align-items-stretch">
    <div class="card  p-5">
    <div class="text-justified">
    <h4>
    <p  class="text-warning" style="text-decoration:none">
    Database design and management
    </p></h4>
    <a href="tel:+254745566505" class="btn  btn-dark"><i class="fa fa-phone-alt text-success font-weight-bold"></i> Call Us Now</a>
    <p>  We design, implement, and maintain databases to ensure optimal performance and scalability. Our developers are experts in working with various databases such as MySQL, MongoDB, and PostgreSQL.</p>
    <a href="#" class="btn btn-info">Read More</a>
    </div>
    </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="col-lg-4 mb-3 mt-3 d-flex align-items-stretch">
    <div class="card  p-5">
    <div class="text-justified">
    <h4>
    <p  class="text-warning" style="text-decoration:none">
    Mobile app development
    </p></h4>
    <a href="tel:+254745566505" class="btn  btn-dark"><i class="fa fa-phone-alt text-success font-weight-bold"></i> Call Us Now</a>
    <p>   We offer design, development, and maintenance services for mobile applications on both iOS and Android platforms. </p>
    <a href="#" class="btn btn-info">Read More</a>
    </div>
    </div>
    </div>
    <!--  -->


    <!--  -->
    <div class="col-lg-4 mb-3 mt-3 d-flex align-items-stretch">
    <div class="card  p-5">
    <div class="text-justified">
    <h4>
    <p  class="text-warning" style="text-decoration:none">
    . Deployment and maintenances
    </p></h4>
    <a href="tel:+254745566505" class="btn  btn-dark"><i class="fa fa-phone-alt text-success font-weight-bold"></i> Call Us Now</a>
    <p>   We provide deployment services to ensure that your application is deployed smoothly and securely. We also offer ongoing maintenance and support to ensure that your application stays up-to-date and running smoothly.  </p>
    <a href="#" class="btn btn-info">Read More</a>
    </div>
    </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="col-lg-4 mb-3 mt-3 d-flex align-items-stretch">
    <div class="card  p-5">
    <div class="text-justified">
    <h4>
    <p  class="text-warning" style="text-decoration:none">
    Technical consulting
    </p></h4>
    <a href="tel:+254745566505" class="btn  btn-dark"><i class="fa fa-phone-alt text-success font-weight-bold"></i> Call Us Now</a>
    <p>  We offer expert advice and guidance to clients on various technical issues related to web and software development. </p>
    <a href="#" class="btn btn-info">Read More</a>
    </div>
    </div>
    </div>
    <!--  --> --}}


    </div>
    </div>
    <!-- About End -->
@endsection
