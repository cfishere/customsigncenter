<meta charset="utf-8">
<meta name="description" content="">
<meta name="Saquib" content="Blade">
<meta name="description" content= 
@if($meta['desc'])
   "{{$meta['desc']}}"
   @else
   "Custom Sign Center is a Full-Service, National Sign Company Located in Columbus Ohio"
@endif >
<title>
      @if( $meta['title'] )
        {{ $meta['title'] }}
      @else
        Custom Sign Center Sign Company, Columbus Ohio"
      @endif
</title>
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
{{-- Load any page-specific CSS files --}}
@if(isset($addCss))
  {!! $addCss !!} 
@endif
{{-- Required for Bootstrap Collapse plugin, menu interactions to function --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> --}}
<script src="//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
{{-- End Menu Resources --}}

{{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
<link href="{{asset('build/assets/app.717539bb.css')}}" rel="stylesheet" />
<script type="text/javascript" src="{{ asset('/build/assets/app.ed5d39ad.js') }}" defer></script>
{{-- google analytics script --}}
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73806741-1', 'auto');
  ga('send', 'pageview');
</script>
<link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet" type="text/css">