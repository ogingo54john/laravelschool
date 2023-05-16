@extends("layouts.admin")

@section("content")

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Basic Form </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
        </ol>
      </nav>
    </div>



    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Default form</h4>
            <p class="card-description"> Basic form layout </p>
            {{-- <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputUsername1">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
              </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"> Remember me </label>
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-dark">Cancel</button>
            </form> --}}


            <form id="simple_form" class="forms-sample" novalidate="novalidate" >

                <div class="control-group">
                                <div class="form-group mb-0 pb-2">
                                    <input type="text" name="contact_name" id="contact_name" class="form-control form-control-lg" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="text-danger help-block"></p>
                                </div>
                            </div>
                
                            <div class="control-group">
                                <div class="form-group">
                                    <input type="email" name="contact_email" id="contact_email" class="form-control form-control-lg" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="text-danger help-block"></p>
                
                                </div>
                            </div>
                
                            <div class="control-group">
                                <div class="form-group">
                                    <input type="tel" name="contact_mobile" id="contact_mobile" class="form-control form-control-lg" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." pattern="^[0-9]{10}$" data-validation-pattern-message="10 digits needed" />
                                    <p class="text-danger help-block"></p>
                
                                </div>
                            </div>
                
                            <div class="control-group">
                                <div class="form-group">
                                    <textarea name="contact_message" id="contact_message" class="form-control form-control-lg" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="text-danger help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="form-group">
                             <button type="submit" class="btn btn-primary" id="send_button">Send</button>
                            </div>



          </div>
        </div>
      </div>


    
@endsection

@section("scripts")


<script src="{{ asset("admin/assets/js/jqBootstrapValidation.min.js") }}"></script>
    

<script>    
    $(document).ready(function(){
     
     $('#simple_form input, #simple_form textarea').jqBootstrapValidation({
      preventSubmit: true,
      submitSuccess: function($form, event){     
       event.preventDefault();
       $this = $('#send_button');
       $this.prop('disabled', true);
       var form_data = $("#simple_form").serialize();
       $.ajax({
        url:"send.php",
        method:"POST",
        data:form_data,
        success:function(){
         $('#success').html("<div class='alert alert-success'><strong>Your message has been sent. </strong></div>");
         $('#simple_form').trigger('reset');
        },
        error:function(){
         $('#success').html("<div class='alert alert-danger'>There is some error</div>");
         $('#simple_form').trigger('reset');
        },
        complete:function(){
         setTimeout(function(){
          $this.prop("disabled", false);
          $('#success').html('');
         }, 5000);
        }
       });
      },
     });
    
    });
    
    </script>

@endsection