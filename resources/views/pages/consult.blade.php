@extends('layouts.master')

@section('title')
    Demander un devis
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
        <li><a href="/fr/devis#consult">Demandez un devis</a></li>
    </ul>
@endsection

@section('content')

<!-- consult -->
<div id="consult" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section-header -->
            <div class="section-header text-center">
                <h2 class="title">Demandez un devis</h2>
            </div>
            <!-- /Section-header -->

            <!-- consult form -->
            <div class="col-md-8 col-md-offset-2">
                <form class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" name="nom" class="form-control" placeholder="Nom">
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="tel" name="phone" class="form-comtrol" placeholder="Téléphone">
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea class="input form-control" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="btn-group col-sm-12 text-center">
                        <button class="center main-btn">Soumettre</button>
                    </div>
                </form>
            </div>
            <!-- /consult form -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /consult -->
    
@endsection