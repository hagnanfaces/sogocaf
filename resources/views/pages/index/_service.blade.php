<!-- Service -->
<div id="service" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">{{ trans('page.home.service.title') }}</h2>
            </div>
            <!-- /Section header -->

        @foreach(trans('page.home.service.services') as $service)
            <!-- service -->
            <div class="col-sm-6">
                <div class="service">
                    <i class="fa fa-diamond"></i>
                    <h3>{!! $service['title'] !!}</h3>
                    <p>{!! $service['description'] !!}</p>
                </div>
            </div>
            <!-- /service -->
        @endforeach

            {{--<!-- service -->
            <div class="col-sm-6">
                <div class="service">
                    <i class="fa fa-diamond"></i>
                    <h3>HARDOX WEAR PART</h3>
                    <p>Atelier de chaudronnerie</p>
                </div>
            </div>
            <!-- /service -->

            <!-- service -->
            <div class="col-sm-6">
                <div class="service">
                    <i class="fa fa-rocket"></i>
                    <h3>Pliage</h3>
                    <p>Presse plieuse 1-3 m, Presse plieuse 3-9 m, Presse plieuse 9-12 m</p>
                </div>
            </div>
            <!-- /service -->

            <!-- service -->
            <div class="col-sm-6">
                <div class="service">
                    <i class="fa fa-cogs"></i>
                    <h3>Roulage</h3>
                    <p>Roulage Roulage</p>
                </div>
            </div>
            <!-- /service -->

            <!-- service -->
            <div class="col-sm-6">
                <div class="service">
                    <i class="fa fa-pencil"></i>
                    <h3>Coupe Plasma</h3>
                    <p>Oxy, des coupes plasma de 0-20 mm , de 20-40mm  et plus de 40 mm</p>
                </div>
            </div>
            <!-- /service -->--}}

            {{--  <!-- service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-pencil"></i>
                    <h3>Logistics</h3>
                    <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                </div>
            </div>
            <!-- /service -->

            <!-- service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <i class="fa fa-flask"></i>
                    <h3>Suivie client</h3>
                    <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                </div>
            </div>
            <!-- /service -->  --}}

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Service -->