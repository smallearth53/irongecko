@extends('layouts.master')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')



<div class="container">
    <div class="row mt-5">

        <!--Section: Contact v.2-->
        <section class="section">

            <!--Section heading-->
            <h1 class="section-heading">Contact Us</h1>
            <!--Section sescription-->
            <p class="section-description text-left mb-5">Enter your contact details into the form below, and we will call you back within <strong>one working day</strong>.
                <strong>Please note</strong> that we will not divulge your personal contact details to a third party under any circumstances.</p>

            <div class="row">

                <!--                <form method='POST' action='/contact/submit' id="contactform">
                                    
                                    {{ csrf_field() }}
                
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                
                                </form>-->

                <!--First column-->
                <div class="col-md-8">
                    <form method='POST' action='/contact/submit' id="contactform">

                        {{ csrf_field() }}

                        <!--                                First row-->
                        <div class="row">
                            <!--                                    First column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="firstName" name="firstName"  class="form-control" required>
                                        <label for="name" class="">First name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="lastName" name="lastName"  class="form-control" required>
                                        <label for="name" class="">Last name</label>
                                    </div>
                                </div>
                            </div>      

                            <!--                                    Second column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="email" id="email" name='email' class="form-control" required>
                                        <label for="email" class="">Email</label> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="email" id="contactNumber" name='contactNumber' class="form-control" required>
                                        <label for="email" class="">Contact number</label> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                                /.First row-->

                        <!--                                Second row-->
                      
                        <!--                                /Second row-->

                        <!--                                Third row-->
                        <div class="row">
                            <!--                                    First column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name='message' class="md-textarea" required></textarea>
                                    <label for="message">Message</label>
                                </div>

                            </div>
                        </div>
                        <!--                                /.Third row-->

                        <div class="center-on-small-only">
                            <button type='submit' name='submit' class='btn btn-ins'>Submit</button>
                        </div>

                    </form>


                </div>
                <!--.First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <ul class="contact-icons">
                        

                        <li><i class="fa fa-phone fa-2x"></i>
                            <p>+ 27 71 877 8671</p>
                        </li>

                        <li><i class="fa fa-envelope fa-2x"></i>
                            <p>developers@irongecko.co.za</p>
                        </li>
                    </ul>
                </div>
                <!--.Second column-->

            </div>
        </section>
        <!--/Section: Contact v.2-->

    </div>

</div>






@endsection

