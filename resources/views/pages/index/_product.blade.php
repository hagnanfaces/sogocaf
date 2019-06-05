<!-- Portfolio -->
<div id="product" class="section md-padding bg-grey">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">{{ trans('page.home.product.title') }}</h2>
            </div>
            <!-- /Section header -->

        {{--@foreach(trans('page.home.product.products') as $product)
            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{!! $product['image'] !!}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>{!! $product['name'] !!}</span>
                    <h3>{!! $product['description'] !!}</h3>
                    <div class="gallery work-link">
                        --}}{{--<a href="{!! $product['href'] !!}#category-show"><i class="fa fa-external-link"></i></a>--}}{{--
                        <a class="lightbox" href="{!! $product['image'] !!}" title="{{ $product['name'] }}">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Work -->
        @endforeach--}}

        @foreach(trans('page.home.product.products') as $product)
            <!-- Work -->
                <div class="col-md-4 col-xs-6">
                    <div class="product owl-carousel owl-theme" style="margin-top: .25rem !important;">
                        <div class="item">
                            <img class="img-responsive" src="{!! $product['image'] !!}" alt="{!! $product['name'] !!}">
                            <br>
                            <div>
                                <h4>{!! $product['name'] !!}</h4>
                                <span>{!! $product['description'] !!}</span>
                            </div>
                        </div>
                        @if(isset($product['slides']))
                            @foreach($product['slides'] as $k => $slide)
                                <div class="item">
                                    <img class="img-responsive" src="{!! $slide !!}" alt="{!! $product['name'] !!}">
                                    <br>
                                    <div>
                                        <h4>{!! $product['name'] !!}</h4>
                                        <span>{!! $product['description'] !!}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /Work -->
            @endforeach

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Portfolio -->
