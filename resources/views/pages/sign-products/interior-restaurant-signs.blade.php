@extends('layouts.default')

@section('content')

  <div class="row">           
                 
    <div class="col-lg-3 col-sm-12">
     @include('includes.restaurant-nav')           
    </div>
    <div class="col-md-7">
      <!-- main title of the page - SEO importance -->
      <h1>Restaurant Interior Signs</h1>
      <p>Make your signage work for you. Using signage effectively can make your restaurant more successful and increase your bottom line. Your signs not only direct customers to your establishment (outdoor signs) but once they enter they promote, entice and inform your customers of your offerings, your health dept grade as well as where to use the restroom. What ever type of signage you need Custom Sign Center is here to make your signage system seamless with your Brand Image and ensure all of your signs work together as they were intended.</p>
      <p>Below is a list of some of the <strong>Interior Restaurant Signage</strong> we produce.</p>
      <ul>
        <li><strong>Restroom Plaques</strong></li>
        <li><strong>Wall Signs or Murals</strong></li>
        <li><strong>Window Graphics: </strong>
          <ul>
            <li><strong>Clear Decals</strong></li>
            <li><strong>Perforated Decals</strong></li>
            <li><strong>Static Clings</strong></li>
          </ul>
        </li>
        <li><strong>Store Hours</strong></li>
        <li><strong>Decor Signs &amp; Banners (custom to your restaurant's theme)</strong></li>
        <li><strong>Temporary Displays</strong></li>
        <li><strong>Public Health Notices</strong></li>
        <li><strong>Area Designation Signs (ie. where alcohol can be taken)</strong></li>
        <li><strong>Emergency Exits</strong></li>
        <li><strong>And More!</strong></li>
      </ul>
    </div>
  </div>
               <!-- Gallery Row One starts here -->
            <div class="container" data-target="#imgModal" data-toggle="modal" id="gallery">
              <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">                                 
                <div class="col-md-6 my-4">
                     <img data-slide-to="0" data-target="#indicators" src="{{asset('storage/images/galleries/interior-restaurant-signs/cut-letters-and-graphics-sign.png')}}" title="Click to enlarge image" alt="Picture of a ground installed commercial sign" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                              
                        <img alt="Click to enlarge image" data-slide-to="1" data-target="#indicators" src="{{asset('storage/images/galleries/interior-restaurant-signs/framed-mounted-product-signs.png')}}" title="Click to enlarge image" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                              
                        <img alt="Click to enlarge image" data-slide-to="2" data-target="#indicators" src="{{asset('storage/images/galleries/interior-restaurant-signs/wall-mounted-branded-menuboard.png')}}" title="Click to enlarge image" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                               
                        <img alt="Click to enlarge image" data-slide-to="3" data-target="#indicators" src="{{asset('storage/images/galleries/interior-restaurant-signs/restroom-sign-with-braille.png')}}" title="Click to enlarge image" class="img-fluid" />
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
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/interior-restaurant-signs/cut-letters-and-graphics-sign.png')}}"/>
                        </div>
                       <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/interior-restaurant-signs/framed-mounted-product-signs.png')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/interior-restaurant-signs/wall-mounted-branded-menuboard.png')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/interior-restaurant-signs/restroom-sign-with-braille.png')}}"/>
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
            <div class="col-md-2">
               @include('includes.restaurant-skyscraper')
            </div>
          
@stop