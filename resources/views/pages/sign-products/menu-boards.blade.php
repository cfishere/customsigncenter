@extends('layouts.default')

@section('content')
    <div class="row">             
            <div class="col-lg-3 col-sm-12">
             @include('includes.restaurant-nav')            
            </div>
            <div class="col-md-7">
              <!-- main title of the page - SEO importance -->
              <h1 style="vertical-align: middle;">Menu Boards &amp; Drive-Thru Signs</h1>
              <p>We have the experience and know-how to <em>design, build and install lighted</em>&nbsp;<strong>&nbsp;drive-thru menus</strong> that perform well under the demands of climate elements and years of service. We also make <strong>indoor menu display boards</strong> that are attractive and effectively promote your products. When it comes to restaurants and cafés, we understand the importance of presentation and attention to detail that speaks well of your store's image.</p>
              <p>Our Columbus Ohio sign facilities offer some of the most innovative and advanced techniques in building restaurant menus. Whether your project requires one menu or a hundred, we can accommodate any order size. With five decades of experience in our sign shop, you can simply tell us the type of custom menu you want and how you want it installed and we will take care of the project, start to finish. We provide our customers with a stress-free, single-source solution that results in consistent customer satisfaction and a high incidence of repeat orders.</p>
              <p>Some types of premium <strong>Restaurant Menu Board Systems</strong> we manufacture, which are available in multiple configurations (see sample images, below):</p>
              <ul>
                <li><strong>Illuminated or non-illuminated</strong></li>
                <li><strong>Exterior or interior boards</strong></li>
                <li><strong>Post or wall mounted</strong></li>
                <li><strong>Preview/pre-sell boards</strong></li>
                <li><strong>Speaker posts &amp; canopy</strong></li>
                <li><strong>Customized with your graphics and color schemes</strong></li>
              </ul>
                <!-- Gallery Row One starts here -->
            <div class="container" data-target="#imgModal" data-toggle="modal" id="gallery">
              <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">                                 
                <div class="col-md-6 my-4">
                     <img data-slide-to="0" data-target="#indicators" src="{{asset('storage/images/galleries/menuboards/menuboard1.jpg')}}" title="Click to enlarge image" alt="Picture of a ground installed commercial sign" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                              
                        <img alt="Click to enlarge image" data-slide-to="1" data-target="#indicators" src="{{asset('storage/images/galleries/menuboards/menuboard2.jpg')}}" title="Click to enlarge image" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                              
                        <img alt="Click to enlarge image" data-slide-to="2" data-target="#indicators" src="{{asset('storage/images/galleries/menuboards/menuboard3.jpg')}}" title="Click to enlarge image" class="img-fluid" />
                </div>
               <div class="col-md-6 my-4">                                               
                        <img alt="Click to enlarge image" data-slide-to="3" data-target="#indicators" src="{{asset('storage/images/galleries/menuboards/menuboard4.jpg')}}" title="Click to enlarge image" class="img-fluid" />
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
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/menuboards/menuboard1.jpg')}}"/>
                        </div>
                       <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/menuboards/menuboard2.jpg')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/menuboards/menuboard3.jpg')}}"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/images/galleries/menuboards/menuboard4.jpg')}}"/>
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
            </div>
            <div class="col-md-2">
               @include('includes.restaurant-skyscraper')
            </div>
          </div>      
@stop