@extends('layouts.default')
@section('content')
<div id="contentwrap"> 
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
        	<div class="my-4 justify-content-center">
			<h1>Quote Request Form</h1>
			<p>For Immediate Queries on Pricing, Call Our Staff during Business Hours: 614-279-6035.</p>	
		</div>
		
        	<form method="POST" action="{{route('price-quote')}}" class="my-4">
				@csrf
				<h4 class="text-danger">* Required Fields</h4>
				<div class="border border-warning p-4 mb-4">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label" for="fromFirstName" /><span class="text-danger">*</span>First Name</label>
						<div class="col-sm-8"><input type="text" name="fromFirstName" required /></div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label" for="fromLastName" /><span class="text-danger">*</span>Last Name</label>
						<div class="col-sm-8"><input type="text" name="fromLastName" required /></div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label" for="fromLastName" /><span class="text-danger">*</span>Organization Name</label>
						<div class="col-sm-8">
							<input type="text" name="orgName" required />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label" for="signAddress" /><span class="text-danger">*</span>Sign Location - Address</label>
						<div class="col-sm-8">
							<input type="text" name="orgAddr" placeholder="Street Address" required />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label" for="orgZipcode" /><span class="text-danger">*</span>Sign Location - Zip Code</label>
						<div class="col-sm-8">
							<input type="text" name="orgZipcode" placeholder="Zip Code" required />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label"  for="fromEmail" /><span class="text-danger">*</span>E-Mail</label>
						<div class="col-sm-8"><input type="text" name="fromEmail" required /></div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label"  for="phone" /><span class="text-danger">*</span>Contact Phone</label>
						<div class="col-sm-8"><input type="text" name="phone" required /></div>
					</div>
					<div class="form-group">
						<label for="signReplacementOrNew" /><span class="text-danger">*</span>New or Replacement Sign?</label>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="signReplacementOrNew" id="replacementOpt" value="Replacement of an Existing Sign">
						  <label class="form-check-label" for="replacementOpt">Replacement</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="signReplacementOrNew" id="newOption" value="New">
						  <label class="form-check-label" for="newOption">New</label>
						</div>						
					</div>
					<div class="form-group row">
						<div class="col-12">
							<label for="signHeight" />Sign Dimensions</label>
						</div>
						<div class="col-sm-6">
							<span>Height: </span><input type="text" name="signHeight" />
						</div>
						<div class="col-sm-6">
							<span>Width: </span><input type="text" name="signWidth" />
						</div>
					</div>
					<div class="form-group row">
						<label for="message" /><span class="text-danger">*</span>Project Details (illuminated sign, wall- or pole-mounted, budget, etc):</label><br>
						<textarea class="form-control" name="message" rows="3" required></textarea>
					</div>
				</div>					
	        <div class="d-flex justify-content-center mt-2">       
	        	<button class="btn btn-warning" type="submit" @disabled($errors->isNotEmpty())>Submit</button>
	        	<input type="hidden" name="Email_Template" value="priceQuote" />
	        </div>
	    </form>	

                     
		</div>
	{{-- 	<div class="row">
			<h3>All Forms</h3>
			<div class="span12">
			<div class="span6">
			<ul style="margin: 28px 0px 10px 30px;">
			<li style="line-height: 30px;"><a href="/contact" target="_parent" rel="noreferrer" hreflang="en-GB" lang="en-GB" title="Submit a question or get a quote">Submit a Question or Comment</a></li>
			<li style="line-height: 30px;"><a href="/generic-sign-quote/form/7:get-a-fast-neon-led-quote" target="_parent" rel="noreferrer" hreflang="en-GB" lang="en-GB">Custom Neon Sign Quote</a></li>
			<li style="line-height: 30px;"><a href="/vehicle-graphics-pricing" target="_parent" rel="noopener noreferrer" hreflang="en-GB" lang="en-GB">Vehicle Wraps &amp; Graphics Quote</a></li>
			<li style="line-height: 30px;"><a href="/generic-sign-quote" target="_parent" rel="noreferrer" hreflang="en-GB" lang="en-GB">Custom Commercial Sign Quote</a></li>
			<li style="line-height: 30px;"><a href="/commercial-real-estate-installation-quote" target="_parent" rel="noopener noreferrer" hreflang="en-GB" lang="en-GB">Commercial Real Estate Installation Quote</a></li>
			<li style="line-height: 30px;"><a href="/generic-sign-quote" target="_parent" rel="noreferrer" hreflang="en-GB" lang="en-GB">General Price Quote - Various Products</a></li>
			</ul>
			</div>
			</div>
		</div> --}}
	</div>
</div>
        @stop