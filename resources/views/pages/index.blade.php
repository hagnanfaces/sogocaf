@extends('layouts.master')

@section('title')
    Accueil
@endsection

{{--  @section('bgi')
    @include('pages.index._header')
@endsection  --}}

@section('content')

    @include('pages.index._about')
    
    @include('pages.index._portofolio')
    
    @include('pages.index._service')
    
    {{--  @include('pages.index._why')  --}}
    
    {{--  @include('pages.index._numbers')  --}}
    
    {{--  @include('pages.index._pricing')  --}}
    
    {{--  @include('pages.index._testimonial')  --}}
    
    @include('pages.index._team')
    
    {{--  @include('pages.index._blog')  --}}
    
    @include('pages.index._contact')
    
@endsection