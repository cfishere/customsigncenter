@extends('layouts.default')

@section('content')
  <link href="/css/featherlight.css" type="text/css" rel="stylesheet" /> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
{{-- Featherlight is used for interactive infographic --}}
  <script src="/js/featherlight.js" type="text/javascript"></script>
  <script src="/js/featherlight-gallery.js" type="text/javascript"></script>  
 
            <div class="row">       
            <div class="col-lg-3 col-sm-12">
             @include('includes.restaurant-nav')              
            </div>           
            <div class="col-lg-7 col-sm-12">              
              <h1>Restaurant Signs</h1>             
               <div data-target="#exampleModal" data-toggle="modal" id="gallery">
                  <div class="row d-flex flex-wrap" data-toggle="modal" data-target="#lightbox">  
                       <div class="col-lg-3 col-sm-2 my-4 align-items-center">                        
                        <img class="img-fluid mx-auto" src="{{asset('storage/images/restaurant/gallery_thbs/timhorton-ground-sign.png')}}" title="Click to enlarge image" alt="Click to see Restaurant Pylon and Monument Signs" title="Tim Hortons Monument Sign" data-slide-to="0" data-target="#indicators" role="button">                        
                        <h5 class="d-none d-lg-block text-center">Exterior</h5>                          
                      </div>   
                       <div class="col-lg-3 col-sm-2 my-4">
                        <img class="img-fluid mx-auto" src="{{asset('storage/images/restaurant/gallery_thbs/restaurant-interior-signs.png')}}"
                        data-slide-to="1" data-target="#indicators" alt="Interior signage of all types, plaques, wall signs and interior decor" title="Restroom placard ADA Compliant" role="button">
                        <h5 class="d-none d-lg-block text-center">Interior</h5>
                      </div>            
                       <div class="col-lg-3 col-sm-2 my-4 align-items-center">
                        <img class="img-fluid mx-auto" alt="Click to enlarge image" data-slide-to="2" data-target="#indicators" src="{{asset('storage/images/restaurant/gallery_thbs/drive-thru-menu.png')}}" alt="Click for Menu Boards and Drive Thru Signs" title="Beautiful Menu Boards with spinning menus for Breakfast, Lunch &amp; Dinner" role="button"/>
                        <h5 class="d-none d-lg-block text-center">Menus</h5>                
                      </div>                      
                       <div class="col-lg-3 col-sm-2 my-4 align-items-center">
                        <img class="img-fluid mx-auto" src="{{asset('storage/images/restaurant/gallery_thbs/restaurant-parking-lot-signs.png')}}" data-slide-to="3" data-target="#indicators" alt="Exterior Signs, Directionals and more!" title="Exterior restaurant signage, directionals and more!" role="button">
                        <h5 class="d-none d-lg-block text-center">Parking</h5>
                      </div>
                    </div>                  
                </div>
              {{-- MODAL --}}
              <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <img class="d-block w-100" src="{{asset('storage/images/restaurant/gallery/timhorton-ground-sign.jpg')}}"/>
                            </div>                           
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('storage/images/restaurant/gallery/restaurant-interior-signs.jpg')}}"/>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('storage/images/restaurant/gallery/drive-thru-menu.jpg')}}"/>
                            </div>
                             <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('storage/images/restaurant/gallery/restaurant-parking-lot-signs.png')}}"/>
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
              <p>Whether a mom-and-pop diner or&nbsp;a national restaurant franchise, a well-made and -maintained sign is a warm invitation to eat at your restaurant, cafe, bar or bistro establishment. The quality and condition of exterior signs, fair or not, create a strong, instant perception about the interior of your store.&nbsp; With that in mind, Custom Sign Center's experienced sign specialists can help you identify the most cost-effective signage strategy for your unique business situation.&nbsp; Trust us with your signs; our company has built a decades-long reputation on designing, fabricating, installing and servicing the highest quality restaurant signs in the industry.</p>
              <hr>
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  {{-- <a href="#" id="featherLightLink" data-featherlight=""> --}}
                    <img src="/images/restarant-signs-info-graphic-thb.png" alt="Restaurant Signs Infographic" style="margin-right: 30px; margin-bottom: 10px; margin-top: 10px; float: left;" title="Interactive Restaurant Infographic" data-toggle="modal" data-target="#infoGraphic" role="button">
                 {{--  </a>    --}}            
                  <!-- Modal -->
                  <div class="modal fade" id="infoGraphic" tabindex="-1" role="dialog" aria-labelledby="infoGraphicLabel" aria-hidden="true">
                    <div class="modal-dialog w-75" style="max-width:852px !important" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="infoGraphicLabel">Restaurant Sign Types</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">                              
                          <!-- Image Map Generated by http://www.image-map.net/ -->
                          {{-- <img src="/images/restaurant-signs-info-graphic.png" alt="Restaurant Signs Info Graphic" usemap="#image-map" class="img-fluid"> --}}
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 852 660">
                            <image width="852" height="660" xlink:href="/images/restaurant-signs-info-graphic.png"></image>
                            <a xlink:href="/infographics/pylon-signs"
                                data-featherlight="/infographics/pylon-signs"
                                data-featherlight-iframe-height="518"
                                data-featherlight-iframe-width="585"
                                target="" alt="Pylon Sign" title="Pylon Sign">
                              <rect x="62" y="66" fill="#fff" opacity="0" width="59" height="52"></rect>
                            </a>
                            <a xlink:href="/infographics/directionals"
                                data-featherlight="/infographics/directionals"
                                data-featherlight-iframe-height="518"
                                data-featherlight-iframe-width="585"      
                                target="" alt="Directional Signs" title="Directional Signs" >
                              <rect x="2" y="273" fill="#fff" opacity="0" width="58" height="72"></rect>
                            </a>
                            <a xlink:href="/infographics/banners"
                                data-featherlight="/infographics/banners"      
                                data-featherlight-iframe-height="518" 
                                data-featherlight-iframe-width="585"  
                                target="" alt="Vinyl Banner" title="Vinyl Banner">
                              <rect x="225" y="195" fill="#fff" opacity="0" width="67" height="64"></rect>
                            </a>
                            <a xlink:href="/infographics/sidewalk-signs"
                                id="featherbox-sidewalk-sign" 
                                data-featherlight="/infographics/sidewalk-signs"      
                                data-featherlight-iframe-height="518" 
                                data-featherlight-iframe-width="585"  
                                target="" alt="Sidewalk and Floor Signs" title="Sidewalk and Floor Signs">
                              <rect x="274" y="324" fill="#fff" opacity="0" width="75" height="50"></rect>
                            </a>
                            <a xlink:href="/infographics/neon-signs"
                                data-featherlight="/infographics/neon-signs"      
                                data-featherlight-iframe-height="518" 
                                data-featherlight-iframe-width="585"  
                                target="" alt="Neon Sign" title="Neon Sign">
                              <rect x="380" y="259" fill="#fff" opacity="0" width="50" height="50"></rect>
                            </a>
                            <a xlink:href="/infographics/channel-letters"
                                data-featherlight="/infographics/channel-letters"      
                                data-featherlight-iframe-height="518" 
                                data-featherlight-iframe-width="585"
                                target="" alt="Channel Letter" title="Channel Letter">
                              <rect x="470" y="112" fill="#fff" opacity="0" width="50" height="50"></rect>
                            </a>
                            <a xlink:href="/infographics/wall-signs"
                                data-featherlight="/infographics/wall-signs"      
                                data-featherlight-iframe-height="518" 
                                data-featherlight-iframe-width="585"
                                target="" alt="Wall Signs">
                              <rect x="532" y="175" fill="#fff" opacity="0" width="50" height="64"></rect>
                            </a>
                            <a xlink:href="/infographics/awnings"           
                                data-featherlight="/infographics/awnings"      
                                data-featherlight-iframe-height="518" 
                                data-featherlight-iframe-width="585"  
                                target="" alt="Awning" title="Awning">
                              <rect x="605" y="198" fill="#fff" opacity="0" width="51" height="50"></rect>
                            </a>
                            <a xlink:href="/infographics/window-graphics" 
                                data-featherlight="/infographics/window-graphics"      
                                data-featherlight-iframe-height="518" 
                                data-featherlight-iframe-width="585"  
                                target="" alt="Cut Vinyl Letters and Graphics" title="Cut Vinyl Letters and Graphics">
                              <rect x="528" y="262" fill="#fff" opacity="0" width="68" height="50"></rect>
                            </a>
                            <a xlink:href="/infographics/parking-signs"
                                data-featherlight="/infographics/parking-signs"      
                                data-featherlight-iframe-height="518" 
                                data-featherlight-iframe-width="585"  
                                target="" alt="Parking Sign" title="Parking Sign">
                              <rect x="614" y="350" fill="#fff" opacity="0" width="52" height="55"></rect>
                            </a>
                            <a xlink:href="/infographics/presell-signs"
                                data-featherlight="/infographics/presell-signs"      
                                data-featherlight-iframe-height="518"
                                data-featherlight-iframe-width="585"  
                                target="" alt="Pre-Order Sign" title="Pre-Order Sign">
                              <rect x="687" y="304" fill="#fff" opacity="0" width="50" height="50"></rect>
                            </a>
                            <a xlink:href="/infographics/menuboards" 
                                data-featherlight="/infographics/menuboards"      
                                data-featherlight-iframe-height="518" 
                                data-featherlight-iframe-width="585"  
                                target="" alt="Outdoor Menu Board" title="Outdoor Menu Board">
                              <rect x="769" y="263" fill="#fff" opacity="0" width="50" height="50"></rect>
                            </a>
                        </svg>                         
                          <!--load jquery and featherlight lightbox plugin files -->
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>                        
                          <script src="/js/featherlight.js" type="text/javascript"></script>
                          <!-- support mobile devices with slide -->                          
                          <script src="//cdnjs.cloudflare.com/ajax/libs/detect_swipe/2.1.1/jquery.detect_swipe.min.js"></script>
                          {{-- end modal body content --}}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close Window</button>                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6" class="align-items">                
                  <h3 style="color: #3ab1ba; margin: 50px auto 20px auto; display: inline-block;" >Info-Graphic: Sign Types</h3>    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#infoGraphic">EXPLORE</button>    
                </div>
              </div>
              <h5 style="color: #af8f35; margin-top: 25px;">Case Study: Solving the Budget Dilemma</h5>
              <div style="background-color: #efecc7; color: #d37b39; padding: 21px 25px; margin: 20px; font-family: 'Lucida Sans Typewriter', 'Lucida Console', monaco, 'Bitstream Vera Sans Mono', monospace; border: 1px solid #bc8285; font-size: 13px; line-height: 26px; border-radius: 8px;">
                <div style="text-indent: 38px;">A new franchisee had multiple quotes from sign manufacturers for the main building sign to her north Columbus Ohio establishment. However, every estimate was more than $3,000 over her allocated budget.</div>
                <div style="text-indent: 38px;">Our sales person was able to identify the customer's need based upon her location and business profile, and recommend a storefront sign within her budget. Experience matters. Our knowledgeable sign specialist was able to provide the customer with an illuminated cabinet sign that satisfied her outdoor marketing needs by recommending the appropriate style and size product for her location.</div>
                <div style="text-indent: 38px;">There is a right sign for your business, too. Why not speak with an experienced sign product specialist to identify the best signage options for your organization?</div>
              </div>
              <!-- end col-md-7 page contents wrapper: -->
            </div>
            <div class="col-md-2 pull-center">
             @include('includes.restaurant-skyscraper')
            </div>
            <!-- featherlight jquery lightbox gallery for the infographics -->

            <!--load jquery and featherlight lightbox plugin files -->
             
              
                <!--<script src="/templates/csc-wide/js/featherlight-gallery.js" type="text/javascript"></script>-->
                <!-- support mobile devices with slide -->
                <!--<script src="/templates/csc-wide/js/jquery.detect_swipe.js" type="text/javascript"></script>-->
                <script src="//cdnjs.cloudflare.com/ajax/libs/detect_swipe/2.1.1/jquery.detect_swipe.min.js"></script>
            <script>
              //no conflict mode $ alias for jQuery:
              /*var $ = jQuery.noConflict();  */
            </script>           
         

        </div>
 @stop