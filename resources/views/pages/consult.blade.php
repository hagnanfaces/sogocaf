@extends('layouts.second')

@section('title')
    {{ trans('page.contact.title') }}
@endsection

{{--@section('navigation')
    <ul class="main-nav nav navbar-nav navbar-left">
        <li><a href="/#home">Accueil</a></li>
        <li><a href="/#about">A propos</a></li>
        <li><a href="/#portfolio">Produits</a></li>
        <li><a href="/#service">Services</a></li>
        <li><a href="/#team">Personnels</a></li>
        <li><a href="/#contact">Contact</a></li>
    </ul>
@endsection--}}

@section('content')

<!-- consult -->
<div id="consult" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section-header -->
            <div class="section-header text-center">
                <h2 class="title">{{ trans('page.contact.title') }}</h2>
            </div>
            <!-- /Section-header -->

            <!-- consult form -->
            <div class="col-md-8 col-md-offset-2">
                <form class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" name="nom" class="form-control" placeholder="{{ trans('page.contact.form.name') }}">
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="{{ trans('page.contact.form.email') }}">
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="tel" name="phone" class="form-control" placeholder="{{ trans('page.contact.form.phone') }}">
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea class="input form-control" name="message" placeholder="{{ trans('page.contact.form.msg') }}"></textarea>
                    </div>
                    <div class="btn-group col-sm-12 text-center">
                        <button class="center main-btn">{{ trans('page.contact.form.send') }}</button>
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