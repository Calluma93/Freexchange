@extends('layouts.master')
<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

@section('content')
<header>
    <div class="header-content">
        <div class="header-content-inner">            
            <div class="panel panel-info">
                <div class="panel-heading" style="background-color:#F05F40; color: white;">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; border-radius:50%; "> </div>


                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Description:</td>
                                        <td>{{ $user->profile->description }}</td>
                                    </tr>                                    
                                    <tr>
                                        <td>Member Since:</td>
                                        <td>{{ $user->profile->created_at->toFormattedDateString() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Preferred Technology:</td>
                                        <td>{{ $user->profile->tech }}</td>
                                    </tr>
                                    <tr>
                                        <td>Location:</td>
                                        <td>{{ $user->profile->location }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number:</td>
                                        <td>{{ $user->profile->phonenumber }}<br></td>
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

