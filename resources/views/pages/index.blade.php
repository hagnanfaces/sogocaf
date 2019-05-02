@extends('layouts.master')

@section('title')
    {{ trans('page.home.title') }}
@endsection

{{--  @section('bgi')
    @include('pages.index._header')
@endsection  --}}

@section('content')

    @include('pages.index._about')

    @include('pages.index._why')
    
    @include('pages.index._product')

    @include('pages.index._service')

    {{--@include('pages.index._why')--}}

    {{--@include('pages.index._numbers')  --}}
    
    {{--@include('pages.index._pricing')  --}}
    
    {{--@include('pages.index._testimonial')--}}
    
    @include('pages.index._team')
    
    {{--@include('pages.index._why')--}}
    
    @include('pages.index._contact')
    
@endsection