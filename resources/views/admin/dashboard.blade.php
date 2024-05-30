@extends('admin.layout')
@section('title', 'Admin Dashboard')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
@section('content')
<section class="static">

<h1>Statistic :</h1>
<div class="control">
    <div class="cards">
        
        <div class="card red">
            <p class="tip">Total project</p>
            <p class="second-text">{{ $projectsNum }}</p>
        </div>
   <a href="#pending">
        <div class="card blue">
            <p class="tip">pending</p>
            <p class="second-text">{{ $pendingProjectsNum }}</p>
        </div>
    </a>
        <div class="card red">
            <p class="tip">accepted</p>
            <p class="second-text">{{ $accptedProjectsNum }}</p>
        </div>
        <a href="#unaccpted">
        <div class="card blue">
            <p class="tip">unaccpted</p>
            <p class="second-text">{{ $rejectedProjectsNum }}</p>
        </div>
    </a>
        <a href="#singendup">
        <div class="card red">
            <p class="tip">singendup</p>
            <p class="second-text">{{ $users }}</p>
        </div>
    </a>
    </div>
</div>

</section>

<section class="pending" id="pending">
<h1>pending list</h1>
@if (isset($pendingProjectsList))
@foreach ($pendingProjectsList as $pendingProject)
<a href="{{ route('app.admin.review', ['id' => $pendingProject->id]) }}" target="_blank"><div class="section">
    <h2>{{ $pendingProject->subject }}</h2>
    <p><spam>Student Name</spam>: {{$pendingProject->member1}} | 
        <spam> Supervisor</spam>: {{$pendingProject->enc}} |
        <spam> Email</spam>: {{$pendingProject->user->email}} | 
        <spam> Time of Sending</spam>: {{$pendingProject->created_at}}</p>           
  </div></a>
@endforeach
@else
    <p>There are no pending Projects at The Moment</p>
@endif

</section>

<section class="unaccpted" id="unaccpted">
<h1>Unaccepted list</h1>

@if (isset($rejectedProjects))
@foreach ($rejectedProjects as $rejectedProject)
<a href="#" target="_blank"><div class="section">
    <h2>{{ $rejectedProject->subject }}</h2>
    <p><spam>Student Name</spam>: {{$rejectedProject->member1}} | 
        <spam> Supervisor</spam>: {{$rejectedProject->enc}} |
        <spam> Email</spam>: {{$rejectedProject->user->email}} | 
        <spam> Time of Sending</spam>: {{$rejectedProject->created_at}}</p>           
  </div></a>
@endforeach
@else
    <p>There are no rejected Projects at The Moment</p>
@endif



</section>

<section class="singendup" id="singendup">
<h1>singendup</h1>

<div class="activity">
    <div class="activity-data">

        <div class="email">
            <span class="data-title">Email</span>
            @if (isset($usersData))
                @foreach ($usersData as $userData)
                <span class="data-list">{{$userData->email}}</span>
                @endforeach
            @endif
        </div>
       
        <div class="data project">
            <span class="data-title">project</span>
            @if (isset($usersData))
                @foreach ($usersData as $userData)
                <span class="data-list">{{count($userData->project)}}</span>
                @endforeach
            @endif
        </div>

        <div class="data joined">
            <span class="data-title">Joined</span>
            @if (isset($usersData))
                @foreach ($usersData as $userData)
                <span class="data-list">{{$userData->created_at}}</span>
                @endforeach
            @endif
        </div>
    </div>
</div>
</section>
@endsection