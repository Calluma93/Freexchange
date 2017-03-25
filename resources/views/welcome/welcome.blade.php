@extends('layouts.master')

@section('content')
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Let's Get You To Work</h1>
            <hr>
            <p>Being a Freelancer is stressful enough, let us find you your new perfect job!</p>
            <a style="background-color:#F05F40; color:white;" href="/jobs" class="page-scroll btn btn-default btn-xl sr-button">Find Your New Job</a>
        </div>
    </div>
</header>

<section class="bg-primary" id="freelancer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Freelancer</h2>
                <hr class="light">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i style="color:white;" class="fa fa-4x fa-user text-primary sr-icons"></i>
                    <h3>Your Profile</h3>
                    <p class="text-faded">Design your profile to show yourself off.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i style="color:white;" class="fa fa-4x fa-check-square-o text-primary sr-icons"></i>
                    <h3>Your Preferences</h3>
                    <p class="text-faded">Set your preferences to find exactly what you're looking for.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i style="color:white;" class="fa fa-4x fa-server text-primary sr-icons"></i>
                    <h3>Your Options</h3>
                    <p class="text-faded">Pick the perfect job from the list we give you.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i style="color:white;" class="fa fa-4x fa-heart text-primary sr-icons"></i>
                    <h3>Your Job</h3>
                    <p class="text-faded">Get to work!</p>
                </div>
            </div>
        </div>
    </div>
    </br></br>

    <div class="col-sm-2 col-sm-offset-4 text-center">
        <a style="color:#F05F40;" href="/login" class="page-scroll btn btn-default btn-xl sr-button">Sign In</a>
    </div>
    <div class="col-sm-2 text-center">
        <a style="color:#F05F40;" href="/register" class="page-scroll btn btn-default btn-xl sr-button">Sign Up</a>
    </div>
</section>

<section id="employer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Employer</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-briefcase text-primary sr-icons"></i>
                    <h3>Your Business</h3>
                    <p class="text-muted">Create an attractive business profile to entice the best employees.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-check-square-o text-primary sr-icons"></i>
                    <h3>Your Needs</h3>
                    <p class="text-muted">Dynamically set your needs for each posting, so only qualified applicants apply.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-thumbs-o-up text-primary sr-icons"></i>
                    <h3>Your Choice</h3>
                    <p class="text-muted">Pick from the best of the best.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                    <h3>Your Employee</h3>
                    <p class="text-muted">Hire your new perfect employee.</p>
                </div>
            </div>
        </div>
    </div>
    </br></br>
    <div class="col-sm-2 col-sm-offset-4 text-center">
        <a style="background-color:#F05F40; color:white;" href="/login" class="page-scroll btn btn-default btn-xl sr-button">Sign In</a>
    </div>
    <div class="col-sm-2 text-center">
        <a style="background-color:#F05F40; color:white;" href="/register" class="page-scroll btn btn-default btn-xl sr-button">Sign Up</a>
    </div>
</section>
@endsection