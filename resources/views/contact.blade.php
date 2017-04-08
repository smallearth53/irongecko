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
            <h1 class="section-heading">Contact v.2</h1>
            <!--Section sescription-->
            <p class="section-description mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

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
                                                <input type="text" id="name" name="name"  class="form-control" required>
                                                <label for="name" class="">Your name</label>
                                            </div>
                                        </div>
                                    </div>
                
<!--                                    Second column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="email" id="email" name='email' class="form-control" required>
                                                <label for="email" class="">Your email</label> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                /.First row-->
                
<!--                                Second row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <input type="text" id="subject" name='subject' class="form-control" required>
                                            <label for="subject" class="">Subject</label>
                                        </div>
                                    </div>
                                </div>
<!--                                /Second row-->
                
<!--                                Third row-->
                                <div class="row">
<!--                                    First column-->
                                    <div class="col-md-12">
                
                                        <div class="md-form">
                                            <textarea type="text" id="message" name='message' class="md-textarea" required></textarea>
                                            <label for="message">Your message</label>
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
                        <li><i class="fa fa-map-marker fa-2x"></i>
                            <p>New York, NY 10012, USA</p>
                        </li>

                        <li><i class="fa fa-phone fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class="fa fa-envelope fa-2x"></i>
                            <p>contact@mdbootstrap.com</p>
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

