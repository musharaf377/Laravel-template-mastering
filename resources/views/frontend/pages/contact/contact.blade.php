 @extends('frontend.layouts.app')

 @section('title', $title)
     
 @section('content')
 
    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.pages.contact.section.contact-info')
    <!-- ##### Breadcumb Area End ##### -->

    <!-- Google Maps -->
    @include('frontend.pages.contact.section.map-area')
 
 @endsection



 @push('script')

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
 <script src="asset/frontend/js/map-active.js"></script>
 @endpush
 