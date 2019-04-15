@extends('layouts.master')

@section('title')
    Product
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

<!-- Blog -->
<div id="blog" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Main -->
            <main id="main" class="col-md-9">
                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="{{ asset('assets/img/blog-post') }}.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        {{--  <ul class="blog-meta">
                            <li><i class="fa fa-user"></i>John doe</li>
                            <li><i class="fa fa-clock-o"></i>18 Oct</li>
                            <li><i class="fa fa-comments"></i>57</li>
                        </ul>  --}}
                        <h3>Produit</h3>
                        <p>Détails.</p>
                    </div>

                    {{--  <!-- blog tags -->
                    <div class="blog-tags">
                        <h5>Tags :</h5>
                        <a href="#"><i class="fa fa-tag"></i>Web</a>
                        <a href="#"><i class="fa fa-tag"></i>Design</a>
                        <a href="#"><i class="fa fa-tag"></i>Marketing</a>
                        <a href="#"><i class="fa fa-tag"></i>Development</a>
                        <a href="#"><i class="fa fa-tag"></i>Branding</a>
                        <a href="#"><i class="fa fa-tag"></i>Photography</a>
                    </div>
                    <!-- blog tags -->  --}}

                    {{--  <!-- blog author -->
                    <div class="blog-author">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{ asset('assets/img/author.jpg') }}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h3>Joe Doe</h3>
                                    <div class="author-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /blog author -->

                    <!-- blog comments -->
                    <div class="blog-comments">
                        <h3 class="title">(13) Comments</h3>

                        <!-- comment -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{ asset('assets/img/perso2.jpg') }}" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                            </div>
                        </div>
                        <!-- /comment -->

                        <!-- comment -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{ asset('assets/img/perso1.jpg') }}" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                            </div>

                            <!-- author reply comment -->
                            <div class="media author">
                                <div class="media-left">
                                    <img class="media-object" src="{{ asset('assets/img/perso2.jpg') }}" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                    <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                                </div>
                            </div>
                            <!-- /comment -->

                            <!-- reply comment -->
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="./img/perso2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                    <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                                </div>
                            </div>
                            <!-- /comment -->

                        </div>
                        <!-- /comment -->


                        <!-- comment -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{ asset('assets/img/perso.jpg') }}" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                            </div>
                        </div>
                        <!-- /comment -->

                    </div>
                    <!-- /blog comments -->

                    <!-- reply form -->
                    <div class="reply-form">
                        <h3 class="title">Leave a reply</h3>
                        <form>
                            <input class="input" type="text" placeholder="Name">
                            <input class="input" type="email" placeholder="Email">
                            <textarea placeholder="Add Your Commment"></textarea>
                            <button type="submit" class="main-btn">Submit</button>
                        </form>
                    </div>
                    <!-- /reply form -->  --}}
                </div>
            </main>
            <!-- /Main -->


            <!-- Aside -->
            <aside id="aside" class="col-md-3">

                {{--  <!-- Search -->
                <div class="widget">
                    <div class="widget-search">
                        <input class="search-input" type="text" placeholder="search">
                        <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- /Search -->  --}}

                <!-- Category -->
                <div class="widget">
                    <h3 class="title">Categories</h3>
                    <div class="widget-category">
                        <a href="#">Tôles inox</span></a>
                    </div>
                </div>
                <!-- /Category -->

                {{--  <!-- Posts sidebar -->
                <div class="widget">
                    <h3 class="title">Populare Posts</h3>

                    <!-- single post -->
                    <div class="widget-post">
                        <a href="#">
                            <img src="{{ asset('assets/img/post1.jpg') }}" alt=""> Blog title goes here
                        </a>
                        <ul class="blog-meta">
                            <li>Oct 18, 2017</li>
                        </ul>
                    </div>
                    <!-- /single post -->

                    <!-- single post -->
                    <div class="widget-post">
                        <a href="#">
                            <img src="{{ asset('assets/img/post2.jpg') }}" alt=""> Blog title goes here
                        </a>
                        <ul class="blog-meta">
                            <li>Oct 18, 2017</li>
                        </ul>
                    </div>
                    <!-- /single post -->


                    <!-- single post -->
                    <div class="widget-post">
                        <a href="#">
                            <img src="{{ asset('assets/img/post3.jpg') }}" alt=""> Blog title goes here
                        </a>
                        <ul class="blog-meta">
                            <li>Oct 18, 2017</li>
                        </ul>
                    </div>
                    <!-- /single post -->

                </div>
                <!-- /Posts sidebar -->

                <!-- Tags -->
                <div class="widget">
                    <h3 class="title">Tags</h3>
                    <div class="widget-tags">
                        <a href="#">Web</a>
                        <a href="#">Design</a>
                        <a href="#">Graphic</a>
                        <a href="#">Marketing</a>
                        <a href="#">Development</a>
                        <a href="#">Branding</a>
                        <a href="#">Photography</a>
                    </div>
                </div>
                <!-- /Tags -->  --}}

            </aside>
            <!-- /Aside -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Blog -->
    
@endsection