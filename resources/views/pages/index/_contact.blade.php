<!-- Contact -->
<div id="contact" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section-header -->
            <div class="section-header text-center">
                <h2 class="title">{{ trans('page.home.contact.title') }}</h2>
            </div>
            <!-- /Section-header -->

           {{-- <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-phone"></i>
                    <h3>Phone</h3>
                    <p>(+226) 25 34 55 94</p>
                    <p>(+226) 25 41 64 62</p>
                    <p>(+226) 70 14 30 40</p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-envelope"></i>
                    <h3>Email</h3>
                    <p>info@socoghaf.com</p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-map-marker"></i>
                    <h3>Adresse</h3>
                    <p>Av. KADIOGO - Rue 8.31 - Quartier Gounghin - Secteur 06</p>
                </div>
            </div>
            <!-- /contact -->--}}

            <!-- contact form -->
            <div class="col-md-8 col-md-offset-2">
                <form class="contact-form" method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <input type="text" required name="name" class="input"
                           placeholder="{{ trans('page.home.contact.contact-form.name') }}">
                    <input type="email" required name="email" class="input"
                           placeholder="{{ trans('page.home.contact.contact-form.email') }}">
                    <input type="text" required name="subject" class="input"
                           placeholder="{{ trans('page.home.contact.contact-form.subject') }}">
                    <textarea class="input" required name="message"
                              placeholder="{{ trans('page.home.contact.contact-form.msg') }}"></textarea>
                    <button type="submit" class="main-btn">{{ trans('page.home.contact.contact-form.send') }}</button>
                </form>
            </div>
            <!-- /contact form -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Contact -->