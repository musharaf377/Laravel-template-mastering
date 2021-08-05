 @extends('frontend.layouts.app')

 @section('title',$title)
 
 @section('content')
     
    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
    <!-- ##### Breadcumb Area End ##### -->
    
    <!-- ##### Advance Search Area Start ##### -->
    @include('frontend.include.search')
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Listing Content Wrapper Area Start ##### -->
    @include('frontend.pages.properties.section.listing-content')
    <!-- ##### Listing Content Wrapper Area End ##### -->
 
@endsection

