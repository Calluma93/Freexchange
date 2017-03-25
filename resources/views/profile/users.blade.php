@extends('layouts.master')


@section('content')
<header>
    <div class="home_wrapper">
        <div class="container-fluid home_main_content">
            <div class="row-fluid">
                <div class="span9">
                    <div class="row-fluid">
                        <div class="span12">
                            <table class="table table-bordered">
                                <br><br><br><br>
                                <thead>
                                    <tr>                                        
                                        <th>Name</th>
                                        <th>Technology</th>
                                        <th>Location</th>
                                        <th>Hourly Wage</th>
                                        <th>Description</th>
                                        <th>Member Since</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profiles as $profile)
                                    <tr   class=""  >                                       
                                        <td>
                                            <a href="/users/{{ $profile->user->type }}s/{{ $profile->user_id }}">{{ $profile->user->name }}</a>
                                        </td>
                                        <td><strong>{{ $profile->tech }}</strong>
                                        </td>
                                        <td>{{ $profile->location }}</td>
                                        <td>£{{ $profile->wage }}ph</td>                                        
                                        <td>{{ $profile->description }}</td>
                                        <td>{{ $profile->created_at->toFormattedDateString() }}</td>
                                    </tr>	
                                    @endforeach                                                                                                       
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
