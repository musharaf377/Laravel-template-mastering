@extends('frontend.layouts.app')

@section('title', $title)

@push('styles')
    
@endpush

@section('content')

    {{-- @include('frontend.pages.home.section.slider') --}}
    @include('frontend.include.search')
    @include('frontend.pages.home.section.featured-propertis')
    @include('frontend.include.action-area')
    @include('frontend.pages.home.section.testimonial')
    @include('frontend.pages.home.section.editor')
    
@endsection

@push('script')
    
@endpush



