<!-- Portfolio -->
<div id="portfolio" class="section md-padding bg-grey">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">{{ trans('page.home.product.title') }}</h2>
            </div>
            <!-- /Section header -->

            @foreach(trans('page.home.product.products') as $product)
                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="{!! $product['image'] !!}" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>{!! $product['name'] !!}</span>
                        <h3>{!! $product['description'] !!}</h3>
                        <div class="work-link">
                            {{--<a href="{!! $product['href'] !!}#category-show"><i class="fa fa-external-link"></i></a>--}}
                            <a class="lightbox" href="{!! $product['image'] !!}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->
            @endforeach

            {{--<!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work12.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>tôles noires</span>
                    <h3>6/10 à 50 mm en toute dimension</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'tole-noires') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work12.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work7.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>tôles inox</span>
                    <h3>7/10 au 10mm en 304L ou 316L</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'tole-inox') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work7.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work8.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>tôles d'usure marque hardox</span>
                    --}}{{--<h3>400, 450, 500, 550, 600</h3>--}}{{--
                    <h3>4-50mm en toute dimension</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'tole-hardox') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work8.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work9.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Tôles bac</span>
                    <h3>aluzinc, galva, aluminium, prelace du 35-70/100</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'tole-bac') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work9.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work10.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Poutrtelles</span>
                    <h3>U, I, H en toute dimension</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'poutrelles') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work10.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work11.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Fer Plat</span>
                    <h3>20-100</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'fer-plat') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work11.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work11.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Cornières</span>
                    <h3>20-150</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'cornieres') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work11.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work11.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Tubes</span>
                    <h3>rond, carré, rectangle en toute dimension</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'tubes') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work11.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work11.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Caillebotis</span>
                    --}}{{--<h3>sous categories</h3>--}}{{--
                    <div class="work-link">
                        <a href="{{ route('category.show', 'caillebotis') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work11.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work11.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Fer à bétons</span>
                    <h3>du diamètre 6-32 mm en FEe 500 ou 400</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'fer-a-betons') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work11.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{ asset('assets/img/work11.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>Tubes Galva</span>
                    <h3>20/27 au 102/114</h3>
                    <div class="work-link">
                        <a href="{{ route('category.show', 'tubes-galva') }}#category-show"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{ asset('assets/img/work11.jpg') }}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->--}}

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Portfolio -->