<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body class="site">
    <div class="body">
        @include('includes.header')
        @include('includes.nav')        
        <div id="contentwrap" class="py-5">
            <div class="container-fluid">
                <div class="item-page" itemscope="" itemtype="https://schema.org/Article">
                    <meta itemprop="inLanguage" content="en-GB">
                    <div itemprop="articleBody">    
                        @yield('content') 
                    </div>
                </div>
            </div>
        </div>  
        @include('includes.footer')   
    </div>
</body>
</html>