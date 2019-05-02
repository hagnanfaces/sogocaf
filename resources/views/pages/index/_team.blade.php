<!-- Team -->
<div id="team" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">{{ trans('page.home.personal.title) }}</h2>
            </div>
            <!-- /Section header -->
			
			@foreach(trans('page.home.personal.items') as $team)
			<!-- team -->
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="{{ $team['avatar'] }}" alt="{{ $team['name'] }}">
							{{--<div class="overlay">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
							</div>--}}
                    </div>
                    <div class="team-content">
                        <h3>{{ $team['name'] }}</h3>
                        <span>{{ $team['post'] }}</span>
                    </div>
                </div>
            </div>
            <!-- /team -->-->
            @endforeach

            {{--<!-- team -->
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="{{ asset('assets/img/dg.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Mr Charbel GHOUSSOUB</h3>
                        <span>Directeur Général</span>
                    </div>
                </div>
            </div>
            <!-- /team -->

            <!-- team -->
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="{{ asset('assets/img/team5.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>STAFF</h3>
                        <span>Administration</span>
                    </div>
                </div>
            </div>
            <!-- /team -->

            <!-- team -->
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="{{ asset('assets/img/team4.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>STAFF</h3>
                        <span>Usine</span>
                    </div>
                </div>
            </div>
            <!-- /team -->--}}

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Team -->