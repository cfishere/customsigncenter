<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MetadataController extends Controller
{  

    public function getMeta(Request $request){
       
        //get request"s URI
        $uri = strtolower($request->path());
        $meta = array(
          "/" => array(
            "title"=>"Signs, Banners & Printing/ColumbusOH Custom Sign Center ", 
            "desc"=>"From Yard Signs & Banners, Neon & Real Estate, to Monument, pole & Post N Panel signs Custom Sign Center does it all. We do it all, design, fabrication, permitting, installations & maintenance. Trust us for all your sign needs",
            "viewPath"=>"pages.index",
             "keywords"=>"real estate signs, remax, re/max, HER Realtors, keller Williams, yard signs, banners, monument signs, pylon and pole signs"
          ),
          "employment" => array(
            "title"=>"Apply here for Employment with Custom Sign Center", 
            "desc"=>"We hire CAD designers, fabricators, welders, sign installers, outside sales, crate builders, general warehouse labor for our Columbus location",
            "viewPath"=>"pages.employment",
             "keywords"=>"real estate signs, remax, re/max, HER Realtors, keller Williams, yard signs, banners, monument signs, pylon and pole signs"
          ),        
          
          "our-company/about-us" => array(
            "title"=>"About Custom Sign Center",
            "desc"=>"Your business image demands quality in design & construction, we speak your language. When choosing a company that can meet and exceed your needs in all aspects of your project from initial concept to final installation and maintenance, Custom Sign Center is your choice for superior service",
            "viewPath"=>"pages.our-company.about-us",
            "keywords"=>""
        ),
          "our-company/faq" =>  array(
            "title"=>"",
            "desc"=>"",
            "viewPath"=>"pages.our-company.faq",
            "keywords"=>""
        ),
          "our-company/latest-news" =>  array(
            "title"=>"Custom Sign Center Sign News & Announcements",
            "desc"=>"Check out our customers' latest success stories and see what makes Custom Sign Center a leader in the industry. ",
            "viewPath"=>"pages.our-company.latest-news", 
            "keywords"=>"YESCO Franchising, Heartland Bank loyalty, Tim Horton's Owner's convention, Wendy's Corporate Trade Show, Mariano Brothers vehicle graphics, and more about our signage projects"
        ),
          "our-company/our-work" =>  array(
            "title"=>"Our Work - Photo Gallery of Printed Signs",
            "viewPath"=>"pages.our-company.our-work",
            "desc"=>"Browse samples of previous signs we have printed and manufactured for our customers", 
            "keywords"=>""
        ),
          "our-company/sign-industry-news" =>  array(
            "title"=>"Sign Industry News | Technology and Innovation Announcements",
            "viewPath"=>"pages.our-company.sign-industry-news",
            "desc"=>"News and announcements for the sign industry, reporting technology innovations in printing and signage manufacturing", 
            "keywords"=>""
        ),
          "quick-signs/project-site-signs" =>  array(
            "title"=>"",
            "desc"=>"",
            "viewPath"=>"pages.quick-signs.project-site-signs", 
            "keywords"=>""
        ),
          "quick-signs/real-estate-signs" =>  array(
            "title"=>"Realtor Signs, Panels, Rider Signs, Realtor Frames",
            "desc"=>"Everything Real Estate all in one place. Easy online tools, fast turnaround & all at an affordable price. Independent Realtors & big brands alike will love how easy & fast they can get what they need.",
            "viewPath"=>"pages.quick-signs.real-estate-signs", 
            "keywords"=>"real estate signs, realtor signs, open house, for sale signs"
        ),
          "quick-signs/vehicle-wraps-and-graphics" =>  array(
            "title"=>"Vehicle Wraps, Lettering and Graphics",
            "desc"=>"Make your vehicle a custom rolling billboard with your vehicle wrap or vinyl graphics from Custom Sign Center",
            "viewPath"=>"pages.quick-signs.vehicle-wraps-and-graphics", 
            "keywords"=>"box truck graphics,vehicle wraps,vehicle graphics,van graphics,van wraps,reflective vehicle wraps,non-reflective vehicle graphics,semi truck graphics,wrap your trailer,camper wraps,fire truck graphics,commercial truck wraps,business fleet graphics,automobile graphics,full vehicle wraps,vinyl graphic appliques,reflective decals,custom decals,window graphics,care for your vehicle wrap,premium vehicle graphics"
        ),
          "quick-signs/vinyl-banners" =>  array(
            "title"=>"Banners for Business, Graduation, Military Homecoming & More!",
            "desc"=>"Choose from our Graduation banners, Military Welcome Home banners and Hundreds of templates in several sizes as well as a fully custom sized and design banner where you start from scratch. Get started now.",
            "viewPath"=>"pages.quick-signs.vinyl-banners", 
            "keywords"=>"graduation banners, military welcome home banners, business banners, party banners, event banners, real estate banners"
        ),
          "quick-signs/yard-signs" =>  array(
            "title"=>"Design Custom Yard Signs Online - Easy, Fast & Affordable",
            "desc"=>"Customize a Yard Sign in 3 Sizes; 12x18, 18x24 & 24x36 - 1 or 2 sided. We have yard templates to meet all of your needs ranging from special events, occasions, or promoting sporting events & businesses.",
            "viewPath"=>"pages.quick-signs.yard-signs", 
            "keywords"=>"yard sign, occasion, birthday, graduation, new baby, wedding, directional signs, arrow, military welcome home"
        ),
          "sign-products/accessories" =>  array(
            "title"=>"Sign Accessories, Trade Show Displays & So Much More!",
            "desc"=>"Stand, display or frame your sign with the perfect accessory from Custom Sign Center. Choose from trade show displays, lights, traffic management and so much more. Get started now",
            "viewPath"=>"pages.sign-products.accessories", 
            "keywords"=>"signs, specialty signs & advertising, bungees, stakes, holders, wearable signage, frames, safety signs, portable signs, POP & POS, lettering, flags & pennants, canopy accessories, menu boards, barricade tapes, floor Signs, Tapes & Cones"
        ),
          "sign-products/channel-letters" =>  array(
            "title"=>"Channel Letters & Logo Signs Make a Powerful Impact",
            "desc"=>"Channel Letters are custom-made dimensional letter signs constructed of metal and / or plastic and utilized most often in exterior signage applications. Make the impact you want with custom channel letters/logos for your business",
            "viewPath"=>"pages.sign-products.channel-letters", 
            "keywords"=>"channel letter signs, 3d illuminated electric signs, Channel Logo, Standard Channel Letter, Open Face Channel Letter, Reverse Channel Letter, Black/White Channel Letter. Neon & LED Mounting options"
        ),
          "sign-products/commercial-signage-types" =>  array(
            "title"=>"Commercial Signage Types | Empower Your Brand",
            "desc"=>"Site Analysis, Permitting, Budget Development, Design Engineering, Installation, Surveys & much more! With over 50 years of business experience, we are continuing to grow, expand, & develop cutting-edge production techniques that are revolutionizing the industry",
            "viewPath"=>"pages.sign-products.commercial-signage-types", 
            "keywords"=>"Awnings, Menus, directional signs, restaurant signage, wayfinding, monuments, ground signs, pole or pylon signs, neon signs, LED, wall signs, blade signs, channel letters and logos"
        ),
          /* awnings page_metadata id 34 index.php?option=com_k2&Itemid=185&id=7&lang=en&layout=item&view=item */
          "sign-products/custom-commercial-awnings" =>  array(
            "title"=>"Custom Commercial Printed Awnings | Repair/Replace | Order Awnings",
            "desc"=>"Order custom commercial awnings made using Cooleys Weathertyte to resist fungus and stains, Printed or Blank, any shape, color, style.",
            "viewPath"=>"pages.sign-products.custom-commercial-awnings",
            "keywords"=>"commercial awnings, custom awnings, awnings, printed awning"
        ),
          "sign-products/custom-neon-signs-led" =>  array(
            "title"=>"Custom Neon Lights & LED Signs",
            "desc"=>"Electric Illuminated Signs - LED and Custom Neon signs are the ultimate way to get your message to the masses!",
            "viewPath"=>"pages.sign-products.custom-neon-signs-led", 
            "keywords"=>"led signs, led signage, neon signs, neon signage, custom sign center, Electric Illuminated Signs"
        ),
          "sign-products/dimensional" =>  array(
            "title"=>"Dimensional Letters & Graphics",
            "desc"=>"Metal-formed Dimensional Letters &amp; Graphic signs can cost a bundle. Now there is a lightweight, less expensive, alternative",
            "viewPath"=>"pages.sign-products.dimensional",
            "keywords"=>""
        ),
          "sign-products/exterior-restaurant-signs" =>  array(
            "title"=>"Restaurant Menu Boards, Displays, and Directional Signs",
            "desc"=>"When it comes to restaurants and cafés, the team at Custom Sign Center understands the importance of presentation and attention to detail that speaks well of your store's image. Our Columbus Ohio sign facilities offer some of the most innovative and advanced techniques in building restaurant menus",
            "viewPath"=>"pages.sign-products.exterior-restaurant-signs", 
            "keywords"=>"illuminated, non-illuminated, exterior and interior boards, post or wall mounted, preview/pre-sell boards, speaker posts & canopy, customized with your graphics and color schemes"
        ),
          "sign-products/floor-sidewalk-signs" =>  array(
            "title"=>"Banner Stands, Floor & Sidewalk Sign Frames & More!",
            "desc"=>"Floor & Sidewalk signs are low-cost advertising yet an effective way to grab a potential customer's attention. Get what you need all in one place at Custom Sign Center",
            "viewPath"=>"pages.sign-products.floor-sidewalk-signs",
            "keywords"=>"banner stands, tripod, slim line roll up, flexi banner stands, steel sidewalk swing stands, poster frames, table top pop up trade show displays"
        ),
          "sign-products/ground-signs" =>  array(
            "title"=>"Outdoor Business Signs: Main Signs, Storefront Signs",
            "desc"=>"Studies show a well designed & well placed sign can have a remarkable effect on your businesses bottom line. A ground sign will work for you 24 hours a day, 7 days a week. It conveys your message to the masses & ingrains the identity of your brand into your audience's minds",
            "viewPath"=>"pages.sign-products.ground-signs",
            "keywords"=>"monument, pole sign, pylon sign, made in USA, business signs, signage"
        ),
          "sign-products/interior-restaurant-signs" =>  array(
            "title"=>"",
            "desc"=>"",
            "viewPath"=>"pages.sign-products.interior-restaurant-signs", 
            "keywords"=>""
        ),
          "sign-products/parking-directional-signs" =>  array(
            "title"=>"",
            "desc"=>"", 
            "viewPath"=>"pages.sign-products.parking-directional-signs",
            "keywords"=>""
        ),
          "sign-products/restaurant-signs" =>  array(
            "title"=>"Restaurant Signs: Drive-thru Menus, Directional & Parking, Storefront",
            "desc"=>"Whether a mom-and-pop diner or a national restaurant franchise, a well-made and -maintained sign is a warm invitation to visit your store. Our experienced sign specialists can help you identify the most cost-effective signage strategy for your unique business situation.",
            "viewPath"=>"pages.sign-products.restaurant-signs", 
            "keywords"=>"restaurant signs, signage, foodie signs, directionals, monument, wall signs, wayfinding"
        ),
            "sign-products/wall-signs" =>  array(
            "title"=>"Wall Signs: Columbus Ohio Sign Company | Printed Wall Signs",
            "desc"=>"Custom Wall Signs, Interior+Exterior, Illuminated, Logo-Shaped Signs, we design, make &amp; install",
            "viewPath"=>"pages.sign-products.wall-signs", 
            "keywords"=>"wall signs, custom sign center, ohio signs, ohio sign company, columbus ohio sign company, signs, vehicle graphics, awnings, graduation banners"
        ),
            "real-estate-frame-dimensions" =>  array(
            "title"=>"Real Estate Frames Dimensions &amp; Construction Information",
            "desc"=>"Custom Sign Center produces all of our frames in house, in our Columbus Ohio location, for consistent quality of construction. All of our real estate panels fit snugly in our frames",
            "viewPath"=>"pages.real-estate-frame-dimensions", 
            "keywords"=>"18 x 24 frame 6x24 bottom rider 6x24 bottom and top rider 24 x 24 frame 20x30 fram with rider6 x 30 bottom rider 6 x 30 top and bottom rider a-fram 18x24 aframe panel sandwich signs spider stakes H-stake frames guerilla pole sign spinning extension pole"
        ),            
            "sign-products/menu-boards" =>  array(
            "title"=>"We Make Restaurant Menu Boards, Interior, Exterior, Illuminated and Drive-Thru Signs, clearance bars &amp; Canopies",
            "desc"=>"We build &amp; service every type of menu board from digital displays to printed boards, illuminated/non-illuminated, pre-sell signs, hanging, wall-mounted or pole-mounted",
            "viewPath"=>"pages.sign-products.menu-boards", 
            "keywords"=>"digital display menus, menu boards, illuminated, non-illuminated, exterior, interior, pole-mounted, wall-mounted, pre-sell siggns, drive-thru signs"
        ),
            "sign-products/restaurant-directional-parking-signs" =>  array(
            "title"=>"Restaurant Parking Signs, Wayfinding Parking Lot Signs, Exterior Food Service Lot Signs",
            "desc"=>"Steel and Aluminum Parking Signs, including Electric Restaurant Directional posts and ADA handicap signs",
            "viewPath"=>"pages.sign-products.restaurant-directional-parking-signs", 
            "keywords"=>"Restaurant signs, parking signs, directional signs"
        ),
            "sign-price-quote" =>  array(
            "title"=>"Submit This Form to Request A Price Quote on A Custom-Made Commercial Sign",
            "desc"=>"Use this form to submit a price quote on a custom sign, including installation for permanent business signage.",
            "viewPath"=>"pages.forms.sign-price-quote", 
            "keywords"=>"price quote, sign pricing, custom signs"
        ),
            "price-quote-neon-sign" =>  array(
            "title"=>"Submit Your Requirements for a Neon Sign: We Price Quote Classic Neon & Affordable LED Neon Letters & Logos",
            "desc"=>"Pricing for Neon Signs, Affordable LED Neon Designs, or Genuine Glass Neon Tube Signs.  We make glass neon signs in-house at our Columbus Ohio production plant.",
            "viewPath"=>"pages.forms.price-quote-neon-sign", 
            "keywords"=>"Glass Neon, Neon Signs, LED, Affordable LED Neon"
        ),
             "contact-us" =>  array(
            "title"=>"Contact Custom Sign Center for All Inquiries about our sign products and sign repair and installation services. Call 800-522-2934.",
            "desc"=>"Contact this national sign company regarding sign repair, maintenance, installation, and design. They can help with any size sign, nationwide.",
            "viewPath"=>"pages.forms.contact-us", 
            "keywords"=>"614-279-6700, 800-522-2934, nationwide, full-service, sign repair, sign installation, sign design, manufactured signs"
        ),
            "awning-price-quote" => array(
            "title"=>"Request a Price Quote on Custom-Printed Commercial Awnings",
            "desc"=>"We manufacture custom storefront awnings with optional printed graphics in various awning styles and shapes.",
            "viewPath"=>"pages.forms.printed-commercial-awnings-price", 
            "keywords"=>"614-279-6700, 800-522-2934, nationwide, awnings, custom awnings, printed awnings"
        )
        );
       /* dd($meta);*/
        if($meta[$uri]) {
            return view( $meta[$uri]['viewPath'], ['meta'=>$meta[$uri]] );
        } else {
            echo "route not found among registered routes list";
            exit;
            //return '404'.
        }
    }
}

