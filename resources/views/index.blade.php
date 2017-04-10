@extends('layouts.master')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')


<div class="container-fluid mainbody">
<div class="container mainbody">
    <div class="row mt-1">
        


        <section class="page-title mt-6">
            <div class='row'>

                <div class='col'>
                    <h1 class="title-first-line text-center">Web <high-light>Design</high-light></h1>
                    <h1 class="title-second-line text-center">Which Stands <high-light>Out</high-light></h1>

                </div>
                <div class='col-3'>
                    <img id='logo' class='img-fluid text-center wow fadeIn' data-wow-delay="0.1s" src='/img/gecko.png' width='250px'/>
                </div>

            </div>


        </section>




        <!--Section: Features v.1-->
        <section class="section feature-box wow fadeIn mt-6">

            <!--Section heading-->

            <!--Section sescription-->
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

            <!--First row-->
            <div class="row features-big mt-6">
                <!--First column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-html5" aria-hidden="true"></i>
                    <h4 class="feature-title">Elegant</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-css3" aria-hidden="true"></i>
                    <h4 class="feature-title">Responsive</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-md-4 mb-r">
                    <i class="fa fa-th-list" aria-hidden="true"></i>
                    <h4 class="feature-title">Well Designed</h4>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
                </div>
                <!--/Third column-->
            </div>
            <!--/First row-->

        </section>
        <!--/Section: Features v.1-->

    </div>
</div>
</div>


<div class="container-fluid belowfold mt-4">   
    <div class="container">

        <section>
            <div class="row">
                <div class="col mb-4">

                    <!--Card-->
                    <div class="card card-cascade">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="img/web4.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title"><strong>Innovation</strong></h4>


                            <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                            </p>

                            <!--Facebook-->
                            <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"></i></a>

                        </div>
                        <!--/.Card content-->

                    </div>
                </div>
                <div class="col">

                    <!--Card-->
                    <div class="card card-cascade">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="img/web1.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title"><strong>Creativity</strong></h4>


                            <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                            </p>

                            <!--Facebook-->
                            <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"></i></a>

                        </div>
                        <!--/.Card content-->

                    </div>
                </div>
                <div class="col">

                    <!--Card-->
                    <div class="card card-cascade">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="img/web2.jpg" class="img-fluid" alt="">
                            <a>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title"><strong>Technology</strong></h4>


                            <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.
                            </p>

                            <!--Facebook-->
                            <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"></i></a>

                        </div>
                        <!--/.Card content-->

                    </div>

                </div>

            </div>

        </section>
    </div>
</div>

<div class="container">


        <div class="row mt-2">
        </div>
        <!--Section: Testimonials v.3-->
        <section class="section team-section wow fadeIn">

            <!--Section heading-->
            <h2 class="section-heading">What Our Clients Think</h2>
            <!--Section description-->

            <!--First row-->
            <div class="row text-center">

                <!--First column-->
                <div class="col-md-4 mb-r">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle img-fluid">
                        </div>

                        <!--Content-->
                        <h4>Anna Deynah</h4>
                        <h5>Accountant</h5>
                        <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.</p>

                        <!--Review-->
                        <div class="orange-text">
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star-half-full"> </i>
                        </div>
                    </div>
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4 mb-r">
                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" class="rounded-circle img-fluid">
                        </div>

                        <!--Content-->
                        <h4>John Doe</h4>
                        <h5>Small Business Owner</h5>
                        <p><i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

                        <!--Review-->
                        <div class="orange-text">
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                        </div>
                    </div>
                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-md-4 mb-r">
                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle img-fluid">
                        </div>
                        <!--Content-->
                        <h4>Maria Kate</h4>
                        <h5>Photographer</h5>
                        <p><i class="fa fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>

                        <!--Review-->
                        <div class="orange-text">
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star"> </i>
                            <i class="fa fa-star-o"> </i>
                        </div>

                    </div>
                </div>
                <!--/Third column-->

            </div>
            <!--/First row-->

        </section>
        <!--/Section: Testimonials v.3-->

        <!--Section: Pricing v.1-->
        <section class="section">

            <!--Section heading-->
            <h1 class="section-heading">Our pricing plans v.1</h1>
            <!--Section description-->
            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

            <!--First row-->
            <div class="row">

                <!--First column-->
                <div class="col-lg-4 col-md-12 mb-r">

                    <!--Pricing card-->
                    <div class="card pricing-card">
                        <!--Price-->
                        <div class="price header blue">
                            <h1>10</h1>
                            <div class="version">
                                <h5>Basic</h5>
                            </div>
                        </div>
                        <!--/.Price-->

                        <!--Features-->
                        <div class="card-block striped">
                            <ul>
                                <li>
                                    <p><i class="fa fa-check"></i> 20 GB Of Storage</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-check"></i> 2 Email Accounts</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-times"></i> 24h Tech Support</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-times"></i> 300 GB Bandwidth</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-times"></i> User Management </p>
                                </li>
                            </ul>

                            <button class="btn btn-primary">Buy now</button>
                        </div>
                        <!--/.Features-->

                    </div>
                    <!--/.Pricing card-->

                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-lg-4 col-md-6 mb-r">

                    <!--Pricing card-->
                    <div class="card pricing-card">
                        <!--Price-->
                        <div class="price header indigo">
                            <h1>20</h1>
                            <div class="version">
                                <h5>Pro</h5>
                            </div>
                        </div>
                        <!--/.Price-->

                        <!--Features-->
                        <div class="card-block striped">
                            <ul>
                                <li>
                                    <p><i class="fa fa-check"></i> 20 GB Of Storage</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-check"></i> 4 Email Accounts</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-check"></i> 24h Tech Support</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-times"></i> 300 GB Bandwidth</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-times"></i> User Management </p>
                                </li>
                            </ul>

                            <button class="btn btn-primary">Buy now</button>
                        </div>
                        <!--/.Features-->

                    </div>
                    <!--/.Pricing card-->

                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-lg-4 col-md-6 mb-r">
                    <!--Pricing card-->
                    <div class="card pricing-card">
                        <!--Price-->
                        <div class="price header deep-purple">
                            <h1>30</h1>
                            <div class="version">
                                <h5>Enterprise</h5>
                            </div>
                        </div>
                        <!--/.Price-->

                        <!--Features-->
                        <div class="card-block striped">
                            <ul>
                                <li>
                                    <p><i class="fa fa-check"></i> 30 GB Of Storage</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-check"></i> 5 Email Accounts</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-check"></i> 24h Tech Support</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-check"></i> 300 GB Bandwidth</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-check"></i> User Management </p>
                                </li>
                            </ul>

                            <button class="btn btn-primary">Buy now</button>
                        </div>
                        <!--/.Features-->

                    </div>
                    <!--/.Pricing card-->
                </div>
                <!--/Third column-->

            </div>
            <!--/First row-->

        </section>
        <!--/Section: Pricing v.1-->
        </div>







<





@endsection

