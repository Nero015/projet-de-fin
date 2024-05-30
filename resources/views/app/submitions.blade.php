@extends('app.layout')
@section('title', 'Boe Home')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/app2.css') }}">
@endsection
@section('content')

<section class="titel">
        <h3>Submit your project</h3>
        
    </section>
      @if(isset($error))
        <p style="color: red">{{ $error }}</p>
      @elseif (isset($success))
        <p style="color: green">{{ $success }}</p>
      @endif
    <section class="model">

    <form class="Submit" action="{{ route('app.proc.submittions') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4> Please enter the following information</h4> <br>

    <div class="sub">
        <input type="text" name="title" required autocomplete="off">
        <label for="title">Title</label>
    </div>
    <br>

    <div class="mem">
        <div class="sub">
            <input type="text" name="members[]" required autocomplete="off">
            <label for="members">Members</label>    
            <span class="add-link">+</span>
        </div>
    </div>
    <br>
    
    <dov class="radio">
                <label> LMD:</label> 
                <dv class="radio-buttons-container">
                    <dov class="radio-button">
                      <input name="lmd" value="License" id="License" class="radio-button__input" type="radio">
                      <label for="License" class="radio-button__label"><span class="radio-button__custom"></span>License</label>
                    </dov>
                    <dov class="radio-button">
                      <input name="lmd" value="Master" id="Master" class="radio-button__input" type="radio">
                      <label for="Master" class="radio-button__label">
                        <span class="radio-button__custom"></span>
                        
                        Master
                      </label>
                    </dov>
                    <dov class="radio-button">
                      <input name="lmd" value="Doctorate" id="Doctorate" class="radio-button__input" type="radio">
                      <label for="Doctorate" class="radio-button__label">
                        <span class="radio-button__custom"></span>
                            
                            Doctorate
                      </label>
                    </dov>
                    </dv>
            </dov>
    <br>

    <div class="sub">
        <input type="text" name="supervisor" required autocomplete="off">
        <label for="supervisor">Supervisor</label>
    </div>
    <br>

    <div class="sub">
        <label for="year">Year:</label>
        <input type="number" id="year" name="year" min="1975" max="2024" value="2024" required>
    </div>
    <br>

    <div class="sub">
        <textarea class="form-control" name="introduction"  placeholder="                             : dear student this introduction will displayed in project view page " aria-label="With textarea" required></textarea>
        <label for="introduction">Introduction</label>
    </div>
    <br>

    <div class="links">
        <div  class="sub">
            <input type="text" name="links[]" placeholder="              http://......." required autocomplete="off">
            <label for="links">Links</label>
            <span class="add-link">+</span>
            <br>
        </div>
    </div>
    <br>
    
    <input type="file" name="file" class="form-control" aria-label="Large file input example">
    <div class="button">
        <input type="submit" value="Insert" class="btn">
    </div>
</form>

       
    </section>
    

@endsection