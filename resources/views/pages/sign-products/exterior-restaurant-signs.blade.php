@extends('layouts.default')
@section('content')

    <div class="row">     
             
            <div class="col-lg-3 col-sm-12">
             @include('includes.restaurant-nav')
            </div>
            <div class="col-md-7">
              <!-- main title of the page - SEO importance -->
              <h1>Wall-Mounted &amp; Ground Signs</h1>
              <p>Drive more traffic to your restaurant with your brand identity and custom message successfully displayed up high on a pylon sign to help customers find your location easily. Whether your eatery is an independent location or a national chain Custom Sign Center can guide your project from inception to installation and beyond. Our experienced team will exceed expectations by delivering high-end, custom restaurant signage within your budget. Our committed project management team can handle one location or a complete restaurant chain re-branding.<br><br> Since 1969 Custom Sign Center has been helping our customers, big and small, to get the right signage for their business. We look forward to providing the right solution to your signage dilemma.</p>
              <p>Some types of premium <strong>Restaurant Pylon Signage Systems</strong> we manufacture, which are available in multiple configurations (see sample images, below):</p>
              <ul>
                <li><strong> Illuminated or non-illuminated</strong></li>
                <li><strong> Electronic Message Center (EMC)</strong></li>
                <li><strong> Single or Double Pole</strong></li>
                <li><strong> Attractive Pole covers</strong></li>
                <li><strong> Changeable Copy Sections</strong></li>
                <li><strong> Custom Lightbox Pole Signs</strong></li>
                <li><strong> Customized with your graphics and color schemes</strong></li>
              </ul>        
            </div>
          </div>
              <!-- Gallery Row One starts here -->
            <div class="container" data-target="#imgModal" data-toggle="modal" id="gallery">
              <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">                                 
                <div class="col-md-6 my-4">
                     <img data-slide-to="0" data-target="#indicators" src="{{asset('storage/images/galleries/exterior-restaurant-signs/IMG-20120929-00012.jpg')}}" title="Click to enlarge image" alt="Picture of a ground installed commercial sign" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                              
                        <img alt="Click to enlarge image" data-slide-to="1" data-target="#indicators" src="{{asset('storage/images/galleries/exterior-restaurant-signs/100_1937-640dpi.png')}}" title="Click to enlarge image" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                              
                        <img alt="Click to enlarge image" data-slide-to="2" data-target="#indicators" src="{{asset('storage/images/galleries/exterior-restaurant-signs/wall-channel-letters-noodles-restaurant.png')}}" title="Click to enlarge image" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                               
                        <img alt="Click to enlarge image" data-slide-to="3" data-target="#indicators" src="{{asset('storage/images/galleries/exterior-restaurant-signs/pylon-sign-wendys2-sq.png')}}" title="Click to enlarge image" class="img-fluid" />
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
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/exterior-restaurant-signs/IMG-20120929-00012.jpg')}}"/>
                        </div>
                       <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/exterior-restaurant-signs/100_1937-640dpi.png')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/exterior-restaurant-signs/wall-channel-letters-noodles-restaurant.png')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/exterior-restaurant-signs/pylon-sign-wendys2-sq.png')}}"/>
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

            <div class="col-md-2">
              @include('includes.restaurant-skyscraper')
            </div>
          </div>
@stop