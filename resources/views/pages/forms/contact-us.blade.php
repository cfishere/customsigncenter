@extends('layouts.default')
@section('content')
<div class="container">
	 @if(session('result'))
    <h2 class="my-4">Thank You for Contacting Us</h2> 
            <div class="alert alert-success">
                {!! session('result') !!}
            </div>
    @endif
    @if(session('error'))
        <h2 class="my-4">Message Delivery Results</h2> 
            <div class="alert alert-danger">
                {!! session('error') !!}
            </div>
    @endif
	
	<div class="row">
		<div class="col-md-8">			
			<div class="my-4 d-flex justify-content-center">
				<h1 class="anton text-rose my-4 ">Have A Question or Need Assistance?</h1>				
			</div>
			<div class="my-4 d-flex justify-content-center">
				<h3 class="anton text-rose mb-4 justify-content-center">Contact Us.</h3>
			</div>
			<p>If you'd like a price quote, call during business hours, or submit the details <a href="/sign-price-quote" title="Need a Price Quote?">here</a>.</p>
			<form method="POST" action="{{route('contact-us')}}" class="my-4">
				@csrf
				<h4 class="text-danger">* Required Fields</h4>
				<div class="form-group border border-warning p-4 mb-4">
					<div class="form-group row">
						<label class="col-sm-4" for="fromFirstName" /><span class="text-danger">*</span>First Name</label>
						<input class="col-sm-8" type="text" name="fromFirstName" required />
					</div>
					<div class="form-group row">
						<label class="col-sm-4" for="fromLastName" /><span class="text-danger">*</span>Last Name</label>
						<input class="col-sm-8" type="text" name="fromLastName" required />
					</div>
					<div class="form-group row">
						<label class="col-sm-4" for="fromEmail" /><span class="text-danger">*</span>E-Mail</label>
						<input class="col-sm-8" type="text" name="fromEmail" required />
					</div>
					<div class="form-group row">
						<label for="message" /><span class="text-danger">*</span>Comments:</label>
						<textarea class="form-control" name="message" rows="3" required></textarea>
					</div>
				</div>					
	        <div class="d-flex justify-content-center mt-2">       
	        	<button class="btn btn-warning" type="submit" @disabled($errors->isNotEmpty())>Submit</button>
	        	<input type="hidden" name="Email_Template" value="contact" />
	        </div>
	    </form>	
</div>  
<div class="col-md-4">   
	<h3>Corporate Office</h3>
	<div>g map here</div>
	<h1><img src="/images/contact-icon.jpg" alt="contact Custom Sign Center" width="105" height="84">Contact Details</h1>
	<h5><strong>For Website/Order Support, call (614) 300-4267<br><br>Contact Custom Sign Center Corporate Offices:</strong></h5>
	<a href="https://maps.google.com/maps?q=3200+Valleyview+Dr.,+Columbus,+Ohio+43204%5D&amp;ie=UTF-8&amp;hq=&amp;hnear=0x8838902368567bbf:0x1f49b4981a5d9be8,3200+Valleyview+Dr,+Columbus,+OH+43204&amp;gl=us&amp;ei=_TiJUaOPK8TBygGhyYGYBA&amp;ved=0CDMQ8gEwAA" target="_blank">3200 Valleyview Dr.<br>Columbus, Ohio 43204</a><br><br> <strong>Hours:</strong> Monday - Friday: 8am to 5pm<br><br> <strong>Call:&nbsp;</strong>614.279.6700<br><strong>Fax:</strong>&nbsp;614.279.7525<br><strong>Toll Free:</strong>&nbsp;800.522.2934<br><br>
	<h5><strong>Super Sign Showroom:</strong></h5>
	<p>(Order pick-up location)</p>
	<a href="https://maps.google.com/maps?q=400+N.+Wilson+Rd.,+Columbus,+Ohio+43204&amp;ie=UTF-8&amp;hq=&amp;hnear=0x8838903cfb5f5313:0xf3e5ccf96adc5eb6,400+N+Wilson+Rd,+Columbus,+OH+43204&amp;gl=us&amp;ei=LTmJUe-6G4LzyAH4noCICA&amp;ved=0CDMQ8gEwAA" target="_blank">400 N. Wilson Rd.<br>Columbus, Ohio 43204</a><br><br> <strong>Open:</strong> Monday - Friday: 8am to 5pm<br><br> <strong>Call:&nbsp;</strong>614.279.6035
</div>
</div>
	<hr>
	<h2><a dir="ltr" lang="en-GB" href="/employment-application" target="_blank" hreflang="en-GB">Employment Application</a></h2>
	<h5><strong>In search of a great place to work?</strong> We are always looking for highly-qualified, responsible and diligent people. Fill out our online <a dir="ltr" lang="en-GB" title="Online Employment Application" href="/employment-application" target="_blank" hreflang="en-GB">Employment Application</a>.</h5>
	<h5>Or tap or click the download button below. Fill in and submit or print it out. [The free Adobe Acrobat Reader is required to open a PDF on your device.] You can also print it out and fax the completed form to 614-279-7525</h5>
	<p><br> <a href="/docs/cscapplication.zip"><img src="/images/Custom_Sign_Center_Job_ApplicationU.png" alt="application image"></a></p>
	<ul style="list-style-type: none;">
		<li>
			Having problems loading our application? Try using one of these resources for help solving the problem.
		</li>
		<li><a href="https://get.adobe.com/reader/">Download Adobe Reader | View PDFs, Fill out Forms, &amp; Submit from here.</a></li>
		<li><a href="https://helpx.adobe.com/acrobat/kb/quick-fix-view-pdfs-web.html">Quick fix | View PDFs on Web</a></li>
		<li><a href="https://helpx.adobe.com/acrobat/kb/cant-view-pdf-web.html">Can't view PDF on the web</a></li>
	</ul>
</div>
@stop