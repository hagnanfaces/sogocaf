@extends('layouts.second')

@section('title')
    Produits
@endsection

{{--@section('navigation')
    <ul class="main-nav nav navbar-nav navbar-left">
        <li><a href="{{ route('home') }}#home">Accueil</a></li>
        <li><a href="{{ route('home') }}#about">A propos</a></li>
        <li><a href="{{ route('home') }}#portfolio">Produits</a></li>
        <li><a href="{{ route('home') }}#service">Services</a></li>
        <li><a href="{{ route('home') }}#team">Personnels</a></li>
        <li><a href="{{ route('home') }}#contact">Contact</a></li>
    </ul>
@endsection--}}

@section('content')

    @include('pages.category.index')
    
@endsection