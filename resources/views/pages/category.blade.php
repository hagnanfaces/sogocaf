@extends('layouts.master')

@section('title')
    Categories
@endsection

@section('navigation')
    <ul class="main-nav nav navbar-nav navbar-right">
        <li><a href="/">Accueil</a></li>
        {{--  <li class="has-dropdown">
            <a href="/fr/categories">Produits</a>
            <ul class="dropdown">
                <li><a href="/hardox">Hardox</a></li>
            </ul>
        </li>  --}}
        <li><a class="btn btn-warning pull-right" href="/fr/devis#consult">Demandez un devis</a></li>
    </ul>
@endsection

@section('content')

    @include('pages.category.index')
    
@endsection