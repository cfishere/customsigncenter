@extends('layouts.default')

@section('content')

            <div class="row">
            <div class="col-lg-3 col-sm-12">
               @include('includes.restaurant-nav')               
            </div>
            <div class="col-md-7 col-sm-7">
              <h1>Parking &amp; Directional Signs</h1>
              <p>A fresh look in your signage may be just what your restaurant needs to boost your customer traffic. Before a customer sees what you offer inside they see your signs outside. If your signs are old and broken or you don't have coordinated signage your potential customers aren't going to see you or they may not want to come inside. Make your exterior as appetizing as your menu with custom parking and directional signs from Custom Sign Center.</p>
              <h4>ADA Signs<img src="https://customsigncenter.com/images/restaurant/exterior/Handicapped%20Parking-tn.png" alt="Handicapped Parking tn" class="awning" style="float: right; max-width:200px"></h4>
              <p>Signage in public areas of all buildings are subject to compliance with federal, state and local code requirements - requiring the use of certain symbols, messages, graphic standards and Braille characters. We manufacture wheelchair accessible parking signs and use requirements outlined in the ADS. These <strong>Americans with Disabilities Act signs</strong> are available in a variety of standard colors and can also be adapted to any custom color scheme or design. Perfect for any restaurant parking lot.</p>
              <p>Our ADA signs are made for <strong>easy install</strong>&nbsp; always <a href="https://www.access-board.gov/guidelines-and-standards/buildings-and-sites/about-the-ada-standards/guide-to-the-ada-standards" target="_blank" rel="noopener noreferrer" hreflang="en-GB" dir="ltr" lang="en-GB">ADA compliant</a>.</p>
            <!-- Gallery Row One starts here -->
            <div class="container" data-target="#imgModal" data-toggle="modal" id="gallery">
              <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">                                 
                <div class="col-md-6 my-4">
                     <img data-slide-to="0" data-target="#indicators" src="{{asset('storage/images/galleries/parking-directionals/500-fine.png')}}" title="Click to enlarge image" alt="example metal parking sign reading $500 Fine" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                              
                        <img alt="Click to enlarge image" data-slide-to="1" data-target="#indicators" src="{{asset('storage/images/galleries/parking-directionals/directional-1.jpg')}}" title="Click to enlarge image" alt="A parking directional sign that directs traffic flow in a parking lot" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                              
                        <img alt="Click to enlarge image" data-slide-to="2" data-target="#indicators" src="{{asset('storage/images/galleries/parking-directionals/no_parking_custom_TEMP.png')}}" title="Click to enlarge image" alt="No Parking Customizable Wording Metal Parking Lot Sign" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                               
                        <img alt="Click to enlarge image" data-slide-to="3" data-target="#indicators" src="{{asset('storage/images/galleries/parking-directionals/reservedparking.png')}}" title="Click to enlarge image" alt="Reserved Parking Notification Sign for Parking Lots" class="img-fluid" />
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="imgModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    <div id="indicators" class="carousel slide" data-interval="false">
                      <ol class="carousel-indicators">
                      <!-- Carousel markup goes in the modal body -->                                 
                        <li class="active" data-slide-to="0" data-target="#indicators">
                        </li>
                        <li data-slide-to="1" data-target="#indicators">
                        </li>
                        <li data-slide-to="2" data-target="#indicators">
                        </li>
                        <li data-slide-to="3" data-target="#indicators">
                        </li>
                      </ol>                    
                      <div class="carousel-inner">    
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/parking-directionals/500-fine.png')}}"/>
                        </div>
                       <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/parking-directionals/directional-1.jpg')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/parking-directionals/no_parking_custom_TEMP.png')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/parking-directionals/reservedparking.png')}}"/>
                        </div>
                      </div><!--carousel inner-->
                      <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div><!--id="indicators"-->
                  </div><!--modal-content-->
               </div><!--modal-dialog-->
              </div><!--modal fade-->
            </div>

   
              <h5 style="color: #af8f35; margin-top: 25px;">Case Study: Solving the Budget Dilemma</h5>
              <div style="background-color: #efecc7; color: #d37b39; padding: 21px 25px; margin: 20px; font-family: 'Lucida Sans Typewriter', 'Lucida Console', monaco, 'Bitstream Vera Sans Mono', monospace; border: 1px solid #bc8285; font-size: 13px; line-height: 26px; border-radius: 8px;">
                <div style="text-indent: 38px;">A new franchisee had multiple quotes from sign manufacturers for the main building sign to her north Columbus Ohio establishment. However, every estimate was more than $3,000 over her allocated budget.</div>
                <div style="text-indent: 38px;">Our sales person was able to identify the customer's need based upon her location and business profile, and recommend a storefront sign within her budget. Experience matters. Our knowledgeable sign specialist was able to provide the customer with an illuminated cabinet sign that satisfied her outdoor marketing needs by recommending the appropriate style and size product for her location.</div>
                <div style="text-indent: 38px;">There is a right sign for your business, too. Why not speak with an experienced sign product specialist to identify the best signage options for your organization?</div>
              </div>
            </div>          
            <div class="col-md-2 col-sm-4">
              @include('includes.restaurant-skyscraper')
            </div>
          </div>
        </div>
@stop