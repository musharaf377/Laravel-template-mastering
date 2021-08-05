
@extends('frontend.layouts.app')

@section('title', $title)


@section('content')
    
    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    @include('frontend.pages.blog.section.blog-area')
    <!-- ##### Blog Area End ##### -->
    
@endsection
