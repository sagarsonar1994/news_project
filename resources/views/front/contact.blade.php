@extends('front.layouts.master')

@section('title')
<title>Category</title>
@endsection

@section('style')
@endsection

@section('body')
<section class="section gray-bg pt-5">
	
<div class="container">
	
	<div class="row">
		<div class="col-md-6">
			<div class="about-logo">
				<h3>Fill this form<span class="color"> for any  Query</span></h3>		
				<hr>	
			</div> 						
								  	
		   <!-- Form itself -->
          <form name="contact_form" id="contact_form" novalidate=""> 
		 <div class="input-field mt-15"> 
			<label for="name" class="">   Name </label> 
			<input type="text" name="contact_name" class="form-control" id="contact_name" required="" data-validation-required-message="Please enter your name">
			
		   
	         </div> 	
            <div class="input-field mt-15"> 
				<label for="name" class="">   Email </label> 
				<input type="email" class="form-control" name="contact_email" required="" data-validation-required-message="Please enter your email"> 
					   
			</div> 	
			  
            <div class="input-field mt-15"> 
				<label for="name" class="">   Message </label> 
				 <textarea rows="5" cols="100" name="contact_message" required="" class="form-control materialize-textarea" idation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
						 
			</div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
		 <br>
	    <button type="button" name="contact_btn" id="contact_btn" class="btn btn-red">Send</button><br>
          </form>
				</div>
				<div class="col-md-6 contact">
					<div class="about-logo">
						<h3>Want to <span class="color"> Know More?</span></h3>	
						<hr>						
					</div> 	
					<h4>Phone</h4>
					<p><strong>For query pls call or Whats app on.</strong>(+91) 9650192314</p>
					<hr>
					<h4>Email</h4>
					<p><i class="fa fa-envelope"></i> info@dainiksamachar.com</p>
					<hr>
					<h4>Address</h4>
					<p> Village, East Delhi, Delhi, 110091</p>
					<hr>
				</div>
			</div>
	</div>
 
	</section>

@endsection

@section('script')
@endsection

