@extends('app.layout')
@section('title', 'Boe Home')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
@section('content')
<div class="post-form">
        <i class="fas fa-times" id="form-close" onclick="hideform()"></i>
        <form action="{{ route('app.pro.ideas') }}" method="POST">
            <h3>add post</h3>
            <div class="form-container">
                <form class="form">
                  @csrf
                   <div class="form-group">
                        <label for="email">Titel</label>
                        <input required="" name="title" id="titel" type="text">
                    </div>
                    <div class="form-group">
                        <label for="textarea">How Can We Help You?</label>
                        <textarea required="" cols="50" rows="10" id="textarea" name="subject">          </textarea>
                    </div>
                    <button type="submit" class="form-submit-btn">Submit</button>
                   <div> <input type="checkbox" id="showmyemail">
                    <label for="remmember"> show my email</label></div>
                    <p>Posting project thesis ideas is helping to students and ur help would be mentioned in their projects</p>

                </form>
            </div>
        </form>
    </div>
    <section class="post"> 
        <button class="button2" onclick="showform()">add post</button>
    </section>
        @if(isset($error))
        <p style="color: red">{{ $error }}</p>
        @elseif (isset($success))
        <p style="color: green">{{ $success }}</p>
        @endif  
    <div class="container">

        @if (isset($ideas) && $ideas->isNotEmpty())
        @foreach ($ideas as $idea)
          <div class="card">
            <div class="card-details">
              <p class="text-title">{{ $idea->title }}</p>
              <p class="text-body">{{ $idea->subject }}</p>
            </div>
          </div>
        @endforeach
        @else
          <p>No Ideas To Show at the Moment</p>
        @endif
        

    </div>
@endsection