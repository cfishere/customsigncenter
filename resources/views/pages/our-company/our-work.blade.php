@extends('layouts.default')
@section('content')    
<h1>Our Work</h1>
 <!-- Gallery Row One starts here -->
    <div class="container" data-target="#exampleModal" data-toggle="modal" id="gallery">
        <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
            <div class="col-md-6 col-lg-3 my-4">
                 <img data-slide-to="0" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/tim-hortons-front-sign.png')}}" title="Click to enlarge image"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">                                              
                    <img alt="Click to enlarge image" data-slide-to="1" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/truck-wrap-full-color.png')}}" title="Click to enlarge image"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">                                              
                    <img alt="Click to enlarge image" data-slide-to="2" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/hanging-sign-danes.png')}}" title="Click to enlarge image"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">                                               
                    <img alt="Click to enlarge image" data-slide-to="3" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/neon-sign-shades-restaurant.png')}}" title="Click to enlarge image"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">                                             
                    <img alt="Click to enlarge image" data-slide-to="4" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/projecting-wall-sign-kooma-sushi.png')}}" title="Click to enlarge image"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">
                    <img alt="Click to enlarge" data-slide-to="5" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/vehicle-wrap-pizza-delivery.png')}}" title="Click to enlarge image"/>
            </div>
        
        <!-- Gallery Row Two Starts Here -->
      
           <div class="col-md-6 col-lg-3 my-4">                
                    <img alt="Click to enlarge image" data-slide-to="6" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/wendys-monument-sign.png')}}" title="Click to enlarge"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">                                            
                    <img alt="Click to enlarge image" data-slide-to="7" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/ice-cream-sign.png')}}" title="Click to enlarge image"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">                                                
                    <img alt="Click to enlarge image" data-slide-to="8" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/neon-sign-downright.png')}}" title="Click to enlarge image"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">                                                
                    <img alt="Click to enlarge image" data-slide-to="9" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/exterior-restaurant-signs.png')}}" title="Click to enlarge image"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">                                              
                    <img alt="Click to enlarge image" data-slide-to="10" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/ritas-sign.png')}}" title="Click to enlarge image"/>
            </div>
           <div class="col-md-6 col-lg-3 my-4">                                          
                    <img alt="Click to enlarge image" data-slide-to="11" data-target="#indicators" src="{{asset('storage/images/galleries/our-work/thumbs/tim-hortons-arrow-sign.png')}}" title="Click to enlarge image"/>
            </div>
        </div>
       
        <!-- Modal -->
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
                                <li data-slide-to="4" data-target="#indicators">
                                </li>
                                <li data-slide-to="5" data-target="#indicators">
                                </li>
                                <li data-slide-to="6" data-target="#indicators">
                                </li>
                                <li data-slide-to="7" data-target="#indicators">
                                </li>
                                <li data-slide-to="8" data-target="#indicators">
                                </li>
                                <li data-slide-to="9" data-target="#indicators">
                                </li>
                                <li data-slide-to="10" data-target="#indicators">
                                </li>
                                <li data-slide-to="11" data-target="#indicators">
                                </li>
                                <li data-slide-to="12" data-target="#indicators">
                                </li>                                                            
                            </ol>
                            <div class="carousel-inner">    
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/tim-hortons-front-sign.png')}}"/>
                                </div>
                               <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/truck-wrap-full-color.png')}}"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/hanging-sign-danes.png')}}"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/neon-sign-shades-restaurant.png')}}"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/projecting-wall-sign-kooma-sushi.png')}}"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/vehicle-wrap-pizza-delivery.png')}}"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/wendys-monument-sign.png')}}"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/ice-cream-sign.png')}}"/>
                                </div>                                                               
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/neon-sign-downright.png')}}"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/exterior-restaurant-signs.png')}}"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/ritas-sign.png')}}"/>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/galleries/our-work/tim-hortons-arrow-sign.png')}}"/>
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
                        </div><!--container-->
                     
    <!-- End Gallery -->
<h4>
    Sign Manufacturing Process
</h4>                               
<hr>
    <p class="indent30">
        1) Project Management
    </p>
    <p class="indent60">
        Custom Sign Center provides you access to top project managers for the development of your sign project. Project managers apply decades of sign industry experience in meeting the highest quality assurance standards in our industry.
    </p>
    <p class="indent30">
        2) Sign Design
    </p>
    <p class="indent60">
        Our drafting technicians and graphic designers are knowledgable regarding the production processes, materials and common permitting strictures in Central Ohio jurisdictions. This knowledge, combined with experience and attention to project environment details, helps expedite the work and permit approval. From concept to reality, we have the resources in place to make sure your brand image is executed flawlessly and consistently - from the first sign to the 10,000th.To that end, we offer you computer renderings of your signage superimposed over your property before manufacturing begins. Whether our designers develop your signage solution or we work with your design or architectural firm, our goal is your complete satisfaction. You can see, in the partial rendering submission form below, that the designer has added the Sport Clips sign to the building face and also shown is the manner in which the sign will be afixed to the building. The benefits of seeing the sign mounted before the sign is manufactured are huge.  You know what it will look like and there are no extra construction or installation costs to make a change at this time. Saving you time and money!
        <a class="jcepopup jcemediabox-image" data-mediabox="1" data-mediabox-title="Sign Rendering Prior to Production" dir="ltr" href="https://customsigncenter.com/images/images/Sign_Rendering_Prior_to_production.png" hreflang="en-GB" lang="en-GB">
            <img alt="Sign Rendering Prior to production" height="200" src="https://customsigncenter.com/images/images/Sign_Rendering_Prior_to_production.png" style="margin: 30px auto; display: block;" width="524"/>
        </a>
    </p>
    <p class="indent30">
        3) Sign Permit Acquisition
    </p>
    <p class="indent60">
        Our sign permitting services operate through our in-house, dedicated permit agents assigned to each project. Permit agents in our employ are familiar with the local authorities and permit regulations. Sign permit approval is a critical and often time-consuming process that we've come to master during our 40-plus years of installing commercial signage in Columbus and surround areas.
    </p>
    <p class="indent30">
        4) Sign Manufacturing & Fabrication
    </p>
    <p class="indent60">
        Custom Sign Center's corporate and industiral complex includes over 125,000 square feet of production space with experienced and skillful staff who emphasize quality and precision in every sign we make. CSC uses state-of-the-art robotics and industry-leading R&D; processes to produce consistent, high-quality sign cabinets, cut letter signs, channel letters, and other custom accessories we fabricate from our facilities. You can learn more about the quality
        <a href="/sign-materials-and-substrates">
            sign materials and substrates
        </a>
        that we use during manufacturing.
    </p>
    <p class="indent30">
        5) Sign Installation
    </p>
    <p class="indent60">
        We have a dedicate fleet of installation trucks and skilled field crews, because ensuring timely delivery and installation of our products is paramouont to maintaining our reputation as the leader in quality among sign manufacturers.
    </p>
    <p class="indent30">
        6) Customer Support & Sign Maintenance
    </p>
    <p class="indent60">
        Maintaining the high quality and performance of your sign is the focus of our maintenance crews. A clean, securely-mounted sign with properly working lamps ensures that our customers maximize the marketing affect and their ROI. Our team of trusted maintenance technicians can assist you with estimates, preventative maintenance, and repairs.
    </p>
    <pre>-- <a href="#gallery" title="View Gallery">View Photo</a></pre>
</hr>    
    @stop
