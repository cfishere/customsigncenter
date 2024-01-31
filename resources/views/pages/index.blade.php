@extends('layouts.wide')
@section('content')
        <div class="row">
            {{-- left aside --}}              
            <div class="col-md-2 hidden-phone">
                @include('includes.aside_left')
            </div>
            <div class="col-sm-12 col-md-8">
                <h1 class="text-center font-weight-bold mt-2" style="font-size:38pt">Our Products</h1>           
                            <div class="row text-center mb-4">
                                <div class="col-md-4 px-2 my-xs-2 mt-md-0">
                                    <img src="{{asset('storage/images/products/home-top-commercial-sm.png')}}" alt="Permanent Commercial Storefront Signage - We build and install." class="margin-auto img-fluid" />
                                </div>
                                <div class="col-md-4 px-2 my-xs-2 mt-4 mt-md-0">
                                    <img src="{{asset('storage/images/products/home-top-yardsign-sm.png')}}" alt="Custom Yard Signs - Design and Order Online." class="margin-auto img-fluid" />
                                </div>
                           
                                <div class="col-md-4 px-2 my-xs-2 mt-4 mt-md-0">
                                    <img src="{{asset('storage/images/products/home-top-realestate-sm.png')}}" alt="Real Estate Sign Panels and Frames Sold Here." class="margin-auto img-fluid" />
                                </div>
                                 </div>
                            <div class="row text-center mb-4">
                                <div class="col-md-4 px-2 my-xs-2 mt-md-0">
                                    <img src="{{asset('storage/images/products/home-top-banners-sm.png')}}" alt="Vinyl Outdoor Banners - Design and Order Online." class="margin-auto img-fluid  my-md-0 my-sm-2" />
                                </div>                                
                                <div class="col-md-4 px-2 my-xs-2 mt-4 mt-md-0">
                                    <img src="{{asset('storage/images/products/home-top-vehicle-graphics-sm.png')}}" alt="Vinyl Outdoor Banners - Design and Order Online." class="margin-auto img-fluid" />
                                </div>
                                {{-- <div class="col-md-4 px-2 my-xs-2 mt-4 mt-md-0">
                                    <img src="{{asset('storage/images/products/home-top-all-products-sm.png')}}" alt="View all of our Sign Product Categories." class="margin-auto img-fluid" />
                                </div> --}}
                                <div class="col-md-4 px-2 my-xs-2 mt-4 mt-md-0">
                                    <img src="{{asset('storage/images/products/home-top-parking-sm.png')}}" alt="Metal Parking Lot Signs, Handicap Parking, Tow Zone, and Customizable Signs." class="margin-auto img-fluid" />
                                </div>
                            </div>                            
                            <div class="mt-3 mb-5 text-center">
                                <div class="margin-auto m-auto">                     
                                <a href="" title="" target="_blank">Vehicle Magnets</a> | <a href="" title="" target="_blank">Political Signs</a> | <a href="" title="" target="_blank">Real Estate Frames</a> | <a href="" title="" target="_blank">Business Cards</a> ... <button class="btn-danger btn text-center font-weight-bold mt-xs-2 mt-m-0" type="button">View All</button>
                                </div>
                            </div>
                              <h4 class="center-phone">
                                        Super Sign Showroom and Headquarters, Columbus Ohio
                                    </h4>                           
                            <div class="row">
                                <div class="col-md-7">                                  
                                    <p>
                                        We offer<strong> high-quality commercial signs you'd want </strong>, including banners, real estate signs, RE/MAX® or Keller Williams yard signs, custom neon signs, vehicle magnets & graphics and much more. Our<strong> Super Sign Showroom </strong> at 400 N Wilson Rd, Columbus, has knowledgeable sales associates & sign designers eager to assist you.
                                    </p>
                                    <div class="px-2 my-xs-2 mt-4 mt-md-0">
                                       <a href="https://www.google.com/maps/place/400+N+Wilson+Rd,+Columbus,+OH+43204/@39.9624639,-83.0947628,17z/data=!3m1!4b1!4m6!3m5!1s0x8838903d016268f1:0x69e5c30d09457c0c!8m2!3d39.9624598!4d-83.0921879!16s%2Fg%2F11b8v4kjhp?entry=ttu" target="_blank" title="Map to 400 N Wilson Road and Custom Sign Center Administration Offices">Google Map</a>
                                    </div>
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-5">
                                    
                                         <img src="{{asset('storage/images/csc-map-lg.png')}}" alt="Map of Custom Sign Center Locations for Offices 3200 Valleyview Dr and Sales Showroom 400 North Wilson Road" class="margin-auto img-fluid" id="j_map_img" onclick="toggleSize()" style="z-index=800"; />                           
                                </div>
                            </div>


                              <!--end row fluid-->
                                <h1 class="text-center mt-5 mb-2">Commercial Signs</h1>
                                <div class="row">                                    
                                    <div class="col-md-12">
                                        <p>
                                            Fair or not, the quality and condition of a sign on the outside of a business affects the perception about the quality and condition of the inside.  An exterior sign is most often the first impression made to potential customers.  Allow us to work with you to help optimize that first impression.  It is an investment that can reap dividends in new and repeat customers.
                                        </p>
                                        <p>
                                            Being centrally located in Columbus, Ohio, Custom Sign Center, Inc. is able to build and deliver complex, custom signage solutions under tight project time constraints.  Our manufacturing team is comprised of dozens of skilled craftsmen possessing years of experience in the sign fabrication industry.  Quality, Integrity, and Customer Satisfaction are our shared, uncompromising Core Values.  Those values are reflected in every project, big and small. From design, to fabrication, to installation,
                                            <strong>
                                                your complete satisfaction is our measure of success
                                            </strong>
                                            .
                                        </p>
                                        <p>
                                            For Quick Signs (vinyl banners, real estate panels, magnetic signs, and yard signs) web visitors may
                                            <strong>
                                                design and order these online
                                            </strong>
                                            . Choose either a blank canvas or a starter template from any of the category of quick signs we sell.  Get started by accessing your product of choice from our main menu.
                                        </p>
                                        <p>
                                            Custom Sign Center, Inc. proudly partners with YESCO as an extension of our
                                            <strong>
                                                Sign Repair and Maintenance Services
                                            </strong>
                                            .
                                        </p>
                                    </div>
                                    <!-- end row -->
                                   </div>
                                       {{--  <h3>
                                            Proud Sponsors of:
                                        </h3>
                                        <div class="row">
                                            <div class="col-md-4 text-center">
                                                <br>
                                                    <a href="http://www.info-komen.org/site/TR?sid=6174&type=fr_informational&pg=informational&fr_id=7092" rel="noopener noreferrer" target="_blank" title="Click now to Check out Susan B. Komen's page">
                                                        <img alt="CLM race logo" height="75" src="https://customsigncenter.com/images/sponsorships/CLM_race_logo.png" width="119"/>
                                                    </a>
                                                    <br>
                                                    </br>
                                                </br>
                                            </div> --}}
                                            <!--end span 3 column-->
                                            {{-- <div class="col-md-4 text-center">
                                                <br>
                                                    <a href="http://www.biahomebuilders.com/aws/BIA/pt/sp/home_page" rel="noopener noreferrer" target="_blank" title="Visit the BIA">
                                                        <img alt="mame logo" height="75" src="https://customsigncenter.com/images/sponsorships/mame_logo.jpg" width="150"/>
                                                    </a>
                                                    <br>
                                                    </br>
                                                </br>                                                   
                                            </div>
                                        </div> --}}
                                            <!--end row -->
                                            
                                           
                                           
                                            <hr>
                                                <div class="row">
                                                    <div class="col-md-12" style="margin-top: 40px;">
                                                        <img alt="Electric Illuminated Signs Custom Neon Signs Real Estate Signs Custom Business Signs" src="https://customsigncenter.com/images/logos.jpg" style="margin-left: auto; margin-right: auto; display: block;" title="Electric Illuminated Signs Custom Neon Signs Real Estate Signs Custom Business Signs"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>
                                                            <a href="https://shop.customsigncenter.com/graduation-banners/" rel="noopener" target="_blank">
                                                                Graduation
                                                            </a>
                                                            and other
                                                            <a href="/quick-signs/vinyl-banners">
                                                                Vinyl Banners
                                                            </a>
                                                            |
                                                            <a href="/quick-signs/magnetic">
                                                                Magnetic Vehicle Signs
                                                            </a>
                                                            |
                                                            <a href="/quick-signs/yard-signs">
                                                                Yard Signs
                                                            </a>
                                                            |
                                                            <a href="https://shop.customsigncenter.com/yard-signs-14/products/" title="Click now for business yard sign template categories, backgrounds and more!">
                                                                Yard Signs for Business
                                                            </a>
                                                            |
                                                            <a href="/quick-signs/real-estate-signs">
                                                                Real Estate Signs
                                                            </a>
                                                            |
                                                            <br>
                                                                <a href="https://shop.customsigncenter.com/keller-williams-real-estate-signs/products/">
                                                                    Keller Williams Real Estate Signs
                                                                </a>
                                                                |
                                                                <a href="https://shop.customsigncenter.com/remax-signs-and-frames/products/">
                                                                    RE/MAX Real Estate Signs
                                                                </a>
                                                            </br>
                                                        </p>
                                                    </div>
                                                  
                                            </hr>
                                        
                                        <div class="romw-reviews" data-token="eCm9jQo2g47Z5eCtnpCQLyN62G57OBSjReVYEqpU7xpitFTvJS" id="romw-id-9ed1c182f596fe676606">
                                            <div class="romw-review-eCm9jQo2g47Z5eCtnpCQLyN62G57OBSjReVYEqpU7xpitFTvJS">
                                                <div class="romw-list">
                                                    <div class="romw">
                                                        <p class="romw-source-logo">
                                                            <img alt="Google" src="https://reviewsonmywebsite.com/images/source-logos/google_sm.png" />
                                                       
                                                        </p>
                                                        <p class="romw-author-photo">
                                                            <img alt="Luis Garcia" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Luis Garcia&background=FF9800&size=75&color=ffffff&rounded=1';" src="https://s3.romw-cdn.co/media/1/596/5954764/conversions/ALm5wu2bFTmYaMLL5XsymCTC0Nk4_JaKfb-vYWB_8Aax=s240-c-c0x00000000-cc-rp-mo-br100-60px.png">
                                                            </img>
                                                        </p>
                                                        <h3 class="romw-author-stars">
                                                            <span class="romw-author">
                                                                Luis Garcia
                                                            </span>
                                                            <span class="romw-stars">
                                                                <i aria-hidden="true" class="romw-fa romw-fa-star">
                                                                </i>
                                                                <i aria-hidden="true" class="romw-fa romw-fa-star">
                                                                </i>
                                                                <i aria-hidden="true" class="romw-fa romw-fa-star">
                                                                </i>
                                                                <i aria-hidden="true" class="romw-fa romw-fa-star">
                                                                </i>
                                                                <i aria-hidden="true" class="romw-fa romw-fa-star">
                                                                </i>
                                                            </span>
                                                        </h3>
                                                        <p class="romw-date">
                                                            Oct 7, 2022
                                                        </p>
                                                        <p class="romw-text">
                                                            Custom Sign Center went above and beyond to help me with my first order. I ordered Realtor signs that I customized. They proofed and fixed several errors that I made. I was grateful to know that they care of the quality and have such great attention to detail.
                                                        </p>
                                                    </div>
                                                </div>
                                                <p style="display: block !important; visibility: visible !important;">
                                                    Powered by
                                                    <a href="https://reviewsonmywebsite.com" style="display: inline-block !important; visibility: visible !important;" target="_blank">
                                                        ReviewsOnMyWebsite
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                   
                                    </hr>
                                </div>


                        
                     </div>{{-- /col-md-8 main page content col --}}
                     {{-- right aside content: --}}
                     <div class="col-md-2 hidden-phone">
                        @include('includes.aside_right')
                     </div>
                 </div>
                 
<script>
        let shrink = true;
        // Click to Enlarge Image; Get the img object using its Id
        img = document.getElementById("j_map_img");
        // Function to increase image size
        function toggleSize() {
            if(shrink){
                 // Set image size to 2x original
                
                img.classList.remove("img-fluid");
                // Animation effect
                img.style.transition = "transform 0.25s ease";
                img.style.zIndex = "1";
                shrink = false;
            } else {
                // Set image size to original
                img.classList.add("img-fluid");
                img.style.zIndex = "inherit";
                img.style.transition = "transform 0.25s ease";
                shrink = true;
            }
           
        }       
    </script>             
@stop