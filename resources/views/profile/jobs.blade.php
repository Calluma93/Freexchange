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
                                        <th>Job Title</th>
                                        <th>Technology</th>
                                        <th>Location</th>
                                        <th>Hourly Wage</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        @if(Auth::user() && Auth::user()->type == 'employer')
                                        <th></th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)
                                    <tr   class=""  >                                       
                                        <td>
                                            <a href="/jobs/{{ $job->id }}">{{ $job->title }}</a> <br /> Posted by <a href="/users/{{ $job->user->type }}s/{{ $job->user_id }}">{{ $job->user->name }}</a>
                                        </td>
                                        <td><strong>{{ $job->tech }}</strong>
                                        </td>
                                        <td>{{ $job->location }}</td>
                                        <td>£{{ $job->wage }}ph</td>
                                        <td>{{ $job->startdate->toFormattedDateString() }}</td>
                                        <td>{{ $job->enddate->toFormattedDateString() }}</td>
                                        @if(Auth::user() && Auth::user()->type == 'employer')
                                        <td>
                                            {{ Form::open(['method' => 'DELETE', 'route' => ['jobs.destroy', $job->id]]) }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                        <!--                                            <a href="/deletejob/{{ $job->id }}"
                                                                                           onclick="event.preventDefault();
                                                                                           document.getElementById('delete-form').submit();">
                                                                                            Delete
                                                                                        </a>
                                        
                                                                                        <form id="delete-form" method="DELETE" route="('/deletejob/{{$job->id}} ')" style="display: none;">
                                                                                            {{ csrf_field() }}
                                                                                        </form>
                                                                                    -->
                                        @endif
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
