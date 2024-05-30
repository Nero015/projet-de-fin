@extends('app.layout')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
@section('title', 'Boe Home')
@section('content')

    <section class="home" id="home">
        <div class="content">
            <h3>welcome to biboe 
            the officiel CS thesis projects platforme</h3>
        </div>
        <img src="{{ asset('images/students.jpg') }}" alt="">
    </section>

    <section>
        <div class="cosc">
            <h2>About CS degrees</h2>
            <p>The Computer Science major at the University of Baji Mokhtar offers Bachelor's, Master's, and Doctoral degrees. These programs cover foundational concepts, programming languages, software development, and specialized areas such as cybersecurity and artificial intelligence. With a strong emphasis on both theory and practical skills, graduates are prepared for careers in software engineering, systems analysis, research, and more. The programs provide opportunities for hands-on learning, internships, and research projects, allowing students to gain valuable experience and expertise in the field. Overall, the Computer Science major degrees at Baji Mokhtar University equip students with the knowledge and skills needed to succeed in the
                 rapidly evolving field of technology. <a href="about.html"> See More →</a></p>
            
        </div>
    </section>
    <section>
        <div class="">
            <h2>What's this platforme about? </h2>
            <p>At Bœ, we are dedicated to showcasing the remarkable achievements of Computer Science (CS) students through their major thesis projects. 
                Our platform serves as a central hub for students to exhibit their innovative research,
                cutting-edge technologies, and impactful solutions to real-world challenges.     <a href="about.html">      See More → </a> 
                </p>
                
        </div>
    </section>
    <section>
       <button class="button2" onclick="window.location.href='loginboe.html'">Get started</button>
    </section>

    <section class="footer">
        <div class="box-container">
            <div class="box1">
                <h3>quick links</h3>
                <a href="#">Official website of 
                    Badji Mokhtar-Annaba University</a>
                <a href="#">info.univ-annaba.dz website</a>
                <a href="#">Personal pages for teachers</a>
            </div>

            <div class="box2">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>
           
            <div class="box3">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>
        </div>
    </section>
    
@endsection