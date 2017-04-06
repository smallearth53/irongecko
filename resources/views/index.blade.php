@extends('layouts.master')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')



<div class="container">
    <div class="row mt-3">

        <div class="col-4">
            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="img/woman2.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-center">
                    <!--Category & Title-->
                    <h5>Shoes</h5>
                    <h4 class="card-title"><strong><a href="">Product name</a></strong></h4>

                    <!--Description-->
                    <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left">49$</span>
                        <span class="right">
                            <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share-alt"></i></a>
                            <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart"></i></a>
                        </span>
                    </div>

                </div>
                <!--/.Card content-->

            </div>
        </div>
        <div class="col-4">
            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="img/woman1.jpg" class="img-fluid" alt="" >
                    <a>
                        <div class="mask waves-effect waves-light"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-center">
                    <!--Category & Title-->
                    <h5>Shoes</h5>
                    <h4 class="card-title"><strong><a href="">Product name</a></strong></h4>

                    <!--Description-->
                    <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left">49$</span>
                        <span class="right">
                            <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fa fa-share-alt"></i></a>
                            <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fa fa-heart"></i></a>
                        </span>
                    </div>

                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->


        </div>
    </div>
</div>






@endsection

