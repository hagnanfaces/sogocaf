<!-- Blog -->
<div id="category-show" class="section md-padding bg-grey">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">{{ $category['name'] }}</h2>
                {{--@if(!empty($category->children))--}}
                    {{--<small>{{ $category->children->name }}</small>--}}
                {{--@endif--}}
            </div>
            <!-- /Section header -->

            
            @for ($i = 1; $i < 4; $i++)
                <!-- blog -->
                <a href="{{ route('category.product',['category' => $category['slug'], 'product' => $product]) }}">
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ asset('assets/img/blog'.$i.'.jpg') }}" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>{{ $product }}</h3>
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