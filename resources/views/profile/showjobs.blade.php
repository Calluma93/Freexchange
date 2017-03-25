@extends('layouts.master')
<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

@section('content')
<header>
    <div class="header-content">
        <div class="header-content-inner">            
            <div class="panel panel-info">
                <div class="panel-heading" style="background-color:#F05F40; color: white;">
                    <h3 class="panel-title">{{ $job->title }}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img src="/uploads/avatars/{{ $job->user->avatar }}" style="width:150px; height:150px; border-radius:50%; "> </div>
                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Employer:</td>
                                        <td><a href="/users/{{ $job->user->type }}s/{{ $job->user_id }}">{{ $job->user->name }}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Description:</td>
                                        <td>{{ $job->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Wage:</td>
                                        <td>£{{ $job->wage }}ph</td>
                                    </tr>
                                    <tr>
                                        <td>Start Date:</td>
                                        <td>{{ $job->startdate->toFormattedDateString() }}</td>
                                    </tr>
                                    <tr>
                                        <td>End Date:</td>
                                        <td>{{ $job->enddate->toFormattedDateString() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Technology:</td>
                                        <td>{{ $job->tech }}</td>
                                    </tr>
                                    <tr>
                                        <td>Location:</td>
                                        <td>{{ $job->location }}</td>
                                    </tr>
                                    <tr>
                                        <td>Employer Email:</td>
                                        <td>{{ $job->user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Employer Phone Number:</td>
                                        <td>{{ $job->user->profile->phonenumber }}<br></td>
                                    </tr>
                                    

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>


</header>
@endsection

