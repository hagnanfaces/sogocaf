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
                @foreach(trans('page.home.feature.features') as $feature)
                <div class="feature">
                    <i class="fa fa-check"></i>
                    <p>{!! $feature[0] !!}</p>
                </div>
                @endforeach
            </div>
            <!-- /why choose us content -->

            <!-- About slider -->
            <div class="col-md-6">
                <div id="about-slider" class="owl-carousel owl-theme">
                    {{--<img class="img-responsive" src="{{ asset('assets/img/hardox_1.jpg') }}" alt="">--}}
                    {{--<img class="img-responsive" src="{{ asset('assets/img/hardox_wearpart.jpg') }}" alt="">--}}
                    {{--<img class="img-responsive" src="{{ asset('assets/img/hardox_500.jpg') }}" alt="">--}}
                    <img class="img-responsive" src="{{ asset('assets/img/why1.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/why3.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/why4.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/why5.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/why6.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/why7.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/why8.jpg') }}" alt="">
                    <img class="img-responsive" src="{{ asset('assets/img/why9.jpg') }}" alt="">
                </div>
            </div>
            <!-- /About slider -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Why Choose Us -->