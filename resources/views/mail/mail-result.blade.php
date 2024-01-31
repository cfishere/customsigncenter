@extends('layouts.default')
@section('content')
  <div id="contentwrap">
    <div class="container">
    @if(session('result'))
    <h2 class="my-4">Thank You for Contacting Us</h2> 
            <div class="alert alert-success">
                {!! session('result') !!}
            </div>
    @endif

    @if(session('error'))
        <h2 class="my-4">Message Delivery Results</h2> 
            <div class="alert alert-danger">
                {!! session('error') !!}
            </div>
    @endif
</div>
</div>
 @endsection