@extends('layouts.master')
<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

@section('content')
<header>
    <div class="header-content">
        <div class="header-content-inner" style="display: inline-block">
            </br></br>
            <div class="panel panel-info">
                <div class="panel-heading" style="background-color:#F05F40; color: white;">
                    <h3 class="panel-title">Set Your Preferences</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form enctype="multipart/form-data" role="form" method="POST" action="{{ url('/setpreferences') }}">
                                    {{ csrf_field() }}
                        
                        <div class=" col-md-12 col-lg-12 "> 
                            <table class="table table-user-information">
                                <tbody>                   
                                    <tr>    
                                        
                                            <div class="form-group{{ $errors->has('tech') ? ' has-error' : '' }}">
                                                <select class='form-control' name="tech" required>
                                                    <option value="" selected disabled>Language...</option>
                                                    <option value="java">Java</option>
                                                    <option value="sql">SQL</option>
                                                    <option value="javascript">JavaScript</option>
                                                    <option value="c#">C#</option>
                                                    <option value="c++">C++</option>
                                                    <option value="php">PHP</option>
                                                    <option value="ruby">Ruby</option>
                                                </select>
                                            </div>
                                        
                                    </tr>
                                    <tr>                                        
                                        
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <select class='form-control' name="location" required>
                                                    <option value="" selected disabled>Location...</option>
                                                    <option value="aberdeenshire">Aberdeenshire</option>
                                                    <option value="argyll">Argyll</option>
                                                    <option value="ayrshire">Ayrshire</option>
                                                    <option value="dundee">Dundee</option>
                                                    <option value="edinburgh">Edinburgh</option>
                                                    <option value="glasgow">Glasgow</option>
                                                    <option value="stirling">Stirling</option>
                                                    <option value="perthshire">Perthshire</option>
                                                    <option value="highlands">The Highlands</option>
                                                    <option value="fife">Fife</option>
                                                    <option value="borders">The Borders</option>
                                                </select>
                                            </div>
                                         
                                    </tr>  
                                    <tr>
                                                                              
                                            <div class="form-group{{ $errors->has('wage') ? ' has-error' : '' }}">
                                                <label for="wage" class="sr-only">Wage</label>

                                                <input id="wage" type="text" placeholder="Wage..." class="form-control" name="wage" required>

                                                @if ($errors->has('wage'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('wage') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        
                                    </tr>  
                                    <tr>
                                        <td>Available From:</td>
                                        <td>
                                            <div class="form-group">
                                                <label for="startdate" class="sr-only">Start Date</label>
                                                <input id="startdate" type="date" class="form-control" name="startdate" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Available To:</td>
                                        <td>
                                            <div class="form-group">
                                                <label for="enddate" class="sr-only">End Date</label>
                                                <input id="enddate" type="date" class="form-control" name="enddate" required>
                                            </div>
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td><input type="submit" class="btn" value="Set Preferences"></td>
                                    </tr>
                                </form>
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

@section('styles')
<!--<link rel="stylesheet" href="css/login/form-elements.css">-->
<link rel="stylesheet" href="css/login/style.css">
@endsection

@section('scripts')
<script src="js/login/jquery-1.11.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/login/jquery.backstretch.min.js"></script>
<script src="js/login/scripts.js"></script>        
<script type="text/javascript" src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/creative.min.js') }}"></script>
@endsection