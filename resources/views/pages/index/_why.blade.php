<!-- Why Choose Us -->
<div id="features" class="section md-padding bg-grey">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- why choose us content -->
            <div class="col-md-6">
                <div class="section-header">
                    <h2 class="title">{{ trans('page.home.feature.title') }}</h2>
                </div>
                <p>
                    {!! trans('page.home.feature.description') !!}
                </p>
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p>{!! trans('page.home.feature.features') !!}</p>
                </div>
            </div>
            <!-- /why choose us content -->

            <!-- About slider -->
            <div class="col-md-6">
                <div id="about-slider" class="owl-carousel owl-theme">
                    <img class="img-responsive" src="{{ asset('assets/img/about1.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/about2.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/about1.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/about2.jpg') }}" alt="">
                </div>
            </div>
            <!-- /About slider -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Why Choose Us -->