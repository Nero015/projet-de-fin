@extends('app.layout')
@section('title', 'Boe Home')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/app2.css') }}">
@endsection
@section('content')
    <section class="project">
      @if (isset($projects))
        @foreach ($projects as $project)
        <div class="card">
        <div class="card-details">
          <p class="text-title"> {{ $project->subject }}</p>
          <p class="text-title">{{ $project->member1 }} {{ $project->member2 }} {{ $project->member3 }}</p>
          <p class="text-title">{{ $project->enc }}</p>
          <p class="text-title">{{ $project->LMD }}</p>
        </div>
        <a class="card-button" href="{{ route('app.review', ['id' => $project->id]) }}">More Info</a>
      </div>
        @endforeach
      @endif
      

        </section>
       
@endsection