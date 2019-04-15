<!-- Blog -->
<div id="catgeory-show" class="section md-padding bg-grey">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">tôles d'usure marque hardox</h2><small>400, 450, 500, 550, 600</small>
            </div>
            <!-- /Section header -->

            
            @for ($i = 1; $i < 4; $i++)
                <!-- blog -->
                <a href="/fr/categories/cat/product/{{$i}}">
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ asset('assets/img/blog'.$i.'.jpg') }}" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>Molestie at elementum eu facilisis sed odio</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- /blog -->
            @endfor

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Blog -->