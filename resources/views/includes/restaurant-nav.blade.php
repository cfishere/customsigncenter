 <h4 class="title-Grad-Cap-Icon">Explore</h4>
<ul class="menu mod-list" id="vertical-menu-UL">
  <li class="item-744 current active"><a href="/sign-products/restaurant-signs?p=0">Getting Started</a></li>
  <li class="item-811"><a href="/sign-products/exterior-restaurant-signs?p=1">Exterior Signs</a></li>         
  <li class="item-814"><a href="/sign-products/interior-restaurant-signs?p=2">Interior Signs</a></li>
  <li class="item-812"><a href="/sign-products/menu-boards?p=3">Menus</a></li>
  <li class="item-813"><a href="/sign-products/restaurant-directional-parking-signs?p=4">Parking</a></li>
</ul>
<hr><a href="/price-quote-request-restaurant-signs" title="Request More Info"><img src="https://customsigncenter.com/images/button_request_pricing.png" alt="button request pricing" style="max-width: 190px; margin-left: auto; margin-right: auto; display: block;" title="Click now to request restaurant sign pricing"></a>

<script type="text/javascript">

    $(document).ready(function () 
    {
      const $menuItems = $("#vertical-menu-UL li");

      //capture uri query str
      let params = (new URL(document.location)).searchParams;
      let page = currentPage(params);
         
      $menuItems.each(function(i){
        if(i === parseInt(page))
        {
          //set this link to 'active'
          $($menuItems[i]).first('a').addClass('active');
        }
        else
        {
          $($menuItems[i]).first('a').removeClass('active');
        }
      });
    });
    
    //return the page number of the uri query str's "p" param.
    function currentPage(params){             
      if( typeof(params) === 'undefine' || parseInt(params.get("p")) === null || isNaN(parseInt(params.get("p"))))
        {
          //defaults to 0, the first page.
          return 0;
        }
      else
        {
          return parseInt(params.get("p"));
        }
    }
</script>