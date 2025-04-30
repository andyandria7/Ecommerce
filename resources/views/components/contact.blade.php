@extends('layouts.master')
@section('title')
    Contact
@endsection
@section('content')
    <div class="page-banner" style="background-image: url({{ asset('assets/uploads/banner.jpg') }});">
        <div class="inner">
            <h1>Contact Us!</h1>
        </div>
    </div>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Contact Form</h3>
                    <div class="row cform">
                        <div class="col-md-8">
                            <div class="well well-sm">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" name="visiteur_nom"
                                                    placeholder="Enter name...*">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" name="visiteur_email"
                                                    placeholder="Enter email address...*">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Phone Number</label>
                                                <input type="text" class="form-control" name="visiteur_phone"
                                                    placeholder="Enter Phone Number...*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Message</label>
                                                <textarea name="visiteur_message" class="form-control" rows="9" cols="25" placeholder="Enter message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" value="Send Message" class="btn btn-primary pull-right"
                                                name="form_contact">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                            <address>
                                93 Simpson Avenue
                                Harrisburg, PA
                            </address>
                            <address>
                                <strong>Phone:</strong><br>
                                <span>032456844</span>
                            </address>
                            <address>
                                <strong>Email:</strong><br>
                                <a href="mailto:hopes@gmail.com"><span>hopes@gmail.com</span></a>
                            </address>
                        </div>
                    </div>

                    <h3>Find Us On Map</h3>


                </div>
            </div>
        </div>
    </div>
@endsection
