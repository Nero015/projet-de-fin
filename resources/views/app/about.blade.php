@extends('app.layout')
@section('title', 'Boe Home')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
@section('content')
<style>
         
          body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #000000;
            margin: 0;
            padding: 20px;
           
        }
        .container {
            max-width: 800px;
            margin: 60px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, p {
            margin-bottom: 20px;
        }
        .definition {
            margin-bottom: 50px;
        }
        .hidden {
            display: none;
        }
        .toggle-definition {
            cursor: pointer;
            color: #000000;
            display: flex;
            align-items: center;
        }
        .toggle-symbol {
            margin-right: 5px;
        }

        /* Add your CSS styles here */
        .friend-definition {
            border: 2px solid #007bff; /* Blue border */
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
        }
        /************************************/
       
header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #ffffff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
    padding: 5px;
    box-shadow: 0 0 10px #00000080;
    
}
header .logo img{
    width: 60px;
    flex: 2;
    margin-inline: 50px;
}
header .search-box{
    flex: 1;
    position: relative;
    margin-right: 90px;

}
.search-box input{
    width: 100%;
    height: 25px;
    border: none;
    outline: none;
    background: #eaeaea;
    border-radius: 30px;
    color: rgb(255, 255, 255);
    font-size: 16px;
    padding-left: 20px;}
.search-box button{
    cursor: pointer;
    width: 25px;
    height: 25px;
    border-radius: 30px;
    border: none;
    position: absolute;
    top: 0;
    right: -17px;
    transform: scale(0.9);
    background-color: #eaeaea;
}
header .navbar a{
    color: #161313;
    font-size: 16px;
    margin: 0 10px;
    padding-left: 20px;
    border-left: 1px solid #837e7e;
    text-decoration: none;
}
header .navbar .h{
  color: blue;

}
header .navbar #n{
    border-left: none;
}

header .navbar a:hover{
    color: blue;
}
header .navbar input{
    padding: 3px 5px;
    margin-right: 20px;
    border : 1px solid #3A62D7;
    color: #3A62D7;
    margin-left: 20px;
}
header .navbar input:hover{
    background: #3A62D7;
    color: white;
}
#menu-bar{
    color: #474747;
    border: 1px solid #464545;
    border-radius: 5px;
    font-size: 24px;
    padding: 5px 10px;
    cursor: pointer;
    display: none;
}
@media (max-width:990px){
    #menu-bar{
        display: initial;
    }
    header .navbar{
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #e0dcdc;
        border-top: 1px solid rgba(196, 185, 185, 0.2);
        padding: 5px 10px;
        clip-path: polygon(0 0 , 100% 0 , 100% 0 , 0 0);
    }
    header .navbar.active{
        clip-path: polygon(0 0 , 100% 0 , 100% 100% , 0 100%);
    }

    header .navbar a{
        display: block;
        border-radius: 2px;
        padding: 7px;
        margin: 7px 0;
        background: #c5c5c5;
    }
    html{
        font-size: 50%;
    }
}
    </style>
    <div class="container"> 
       
       <h1>About Us</h1>
       <main>
           <section id="audience">
               <h2> Dear visitor! </h2>
               <p> This site is created for students first and for the rest of the world second.</p>
           </section>
           <section id="purpose">
               <h2>Purpose of the Website</h2>
               <p>Explain the purpose of your website here.
               BOE a dedicated web site for thesis projects can 
               serve as a central platform for CS students to display their
               research findings, project descriptions, and any accompanying
               materials such as presentations,digital papers,
               or software demos.

               </p>
           </section>   

           <section id="introduction">
               <h2>Introduction to the Department</h2>
               <p> 
               Baji Moukhtar University in Annaba, Algeria,
               is an institution that promotes computer science
               education and research. Its computer science department 
               offers a comprehensive curriculum covering programming, 
               algorithms, networking, and more. The program focuses 
               on providing theoretical knowledge and practical skills 
               through hands-on projects and collaborations with industry 
               partners. Additionally, the university likely conducts research
               in areas such as machine learning, cybersecurity, and big 
               data analytics. Events like seminars and workshops further 
               enrich the academic environment, keeping students updated with 
               the latest advancements in the field. Overall, serves as a 
               significant contributor to the innovation for it's students.
               </p>
           </section>
           <section id="scope">
               <h2>Scope of Thesis Projects</h2>
               <p> 
                   Thesis projects at Baji Moukhtar University in Annaba cover diverse areas of 
                   computer science such as machine learning, cybersecurity, data science, software 
                   engineering, mobile/web development, IoT, computer vision, and natural language 
                   processing. Supervised by faculty, students undertake research, design experiments, 
                   implement solutions, and present their findings in written theses and oral defenses. 
                   These projects demonstrate students' ability to apply knowledge to solve real-world 
                   problems, contributing to their academic and professional development.
               </p>
           </section>

           <section id="navigation" class="definition">
               <h2 class="toggle-definition"> <span class="toggle-symbol">▼</span> Navigation Guide</h2>
               <div class="friend-definition hidden"> 
                   <p>1. Homepage: <br>
                   - Upon visiting the website, you'll land on the homepage. Here, you'll find a welcome message introducing you to the platform and its purpose.
                   <br><br>
                   2. Navigation Menu:<br>
                   - Look for a navigation menu at the top of the homepage. This menu typically includes options such as "Home," "Projects," "About," "Ideas," "Submission," "Login." 
                   <br><br>
                   3. Projects Page:<br>
                   - Click on the "Projects" option in the navigation menu to explore the list of CS major thesis projects. Here, you'll find a curated collection of projects, each with a title, brief description, and possibly other details.
                   <br><br>
                   4. Search Functionality:<br>
                   - If you're looking for specific projects, use the search bar provided on the Projects page. Enter keywords or criteria related to your interests, such as topics, keywords, or authors, and press enter to view search results.
                   <br><br>
                   5. Project Details:<br>
                   - Click on any project title or  "More info" button to view more details about that specific project. You'll typically find additional information such as project objectives, methodologies, outcomes, and any accompanying materials (such as papers, presentations, or software).
                   <br><br>
                   6. User Registration:<br>
                   - If you're a student interested in submitting your own thesis project or a faculty member looking to participate, there may be options to register as a user. Look for prompts or links to register or create an account.
                   <br><br>
                   7. About and Contact Pages:<br>
                   - To learn more about the website, its mission, and the team behind it, visit the "About" page. If you have any questions or feedback, you can also visit the "Contact" page to get in touch with the website administrators.
                   <br><br>
                   8. Footer Links:<br>
                   - At the bottom of the homepage, you'll typically find links to important pages such as "About," "Contact," "Privacy Policy," and possibly others. These links provide additional information and resources about the website.
                   <br><br>
                   9. Explore and Enjoy:<br>
                   - Finally, take your time to explore the website, discover interesting projects, and engage with the community. Whether you're a student, faculty member, or enthusiast, there's plenty to learn and appreciate on the platform.
                   <br><br>
               </p>
               </div>

               
               <script>
                   document.addEventListener('DOMContentLoaded', function () {
                       const toggleDefinition = document.querySelector('.toggle-definition');
                       const friendDefinition = document.querySelector('.definition .friend-definition');
                       
                       toggleDefinition.addEventListener('click', function () {
                           friendDefinition.classList.toggle('hidden');
                       });
                   });
               </script>
           </section>

           <section id="cta">
               <h2> You can participate </h2>
               <p> We encourage visitors to explore the website further and engage with its content. u can even post your own ideas in the website and it might be taken as a future project to some of ou ambitious students.
                   and students can learn from other thesis projects and ofc their work would be posted
               </p>
           </section>

           
       <section id="about-degrees" class="definition">
           <h2 class="toggle-definition"> <span class="toggle-symbol">▼</span> About CS Degrees</h2>
           <div class="friend-definition hidden">
                <p  class="hidden">1. Bachelor's Degree:<br>
                  - The Bachelor's Degree in Computer Science offers a foundational understanding of computing concepts, algorithms, and programming languages. Students typically learn about data structures, software development methodologies, and computer architecture.
               <br><br>
               2. Master's Degree:<br>
                  - The Master's Degree in Computer Science provides an opportunity for specialization and in-depth study of advanced topics. Students may focus on areas such as artificial intelligence, cybersecurity, or data science, depending on their interests and career goals.
               <br><br>
               3. Doctoral Degree:<br>
                  - The Doctoral Degree in Computer Science is the highest academic degree in the field. It involves conducting original research and making significant contributions to the advancement of knowledge in specific areas of computer science. Graduates often pursue careers in academia, research institutions, or industry leadership roles.
               <br><br>
</p></div>

<script>
   document.addEventListener('DOMContentLoaded', function () {
       const toggleDefinition = document.querySelector('#about-degrees .toggle-definition');
       const friendDefinition = document.querySelector('#about-degrees .friend-definition');
       
       toggleDefinition.addEventListener('click', function () {
           friendDefinition.classList.toggle('hidden');
       });
   });
</script>
</section>
           <section id="contributors">
               <h2>Contributors</h2>
               <p> This website/platforme itself is a
                   part of my thesis project me B.Ebra and 
                   S.Oussama with our suppervisor Dr H.Mehdi
                   for liecence.<a href="#"> our project</a> </p> 
           </section>

       </main>

       <style>
           /* CSS for FAQ page */
           .faq-item {
               margin-bottom: 10px;
           }
           
           .question {
               cursor: pointer;
               background-color: #f4f4f4;
               padding: 10px;
               border-radius: 5px;
           }
   
           .answer {
               display: none;
               padding: 10px;
               border-radius: 5px;
               background-color: #fff;
               border: 1px solid #ccc;
               margin-top: 5px;
           }
   
           .answer.show {
               display: block;
           }
       </style>

       <h1>Frequently Asked Questions</h1>
   
   <main>
       <div class="faq-item">
           <div class="question" onclick="toggleAnswer(1)">What is the Department of Computer Science?</div>
           <div class="answer" id="answer1">The Department of Computer Science is...</div>
       </div>
       <div class="faq-item">
           <div class="question" onclick="toggleAnswer(2)">How can I apply for a thesis project?</div>
           <div class="answer" id="answer2">To apply for a thesis project...</div>
       </div>
       <!-- Add more FAQ items as needed -->
   </main>
    

   <script>
       // JavaScript function to toggle answer visibility
       function toggleAnswer(id) {
           var answer = document.getElementById("answer" + id);
           answer.classList.toggle("show");
       }
   </script>

   <section id="contact">
       <h2>Contact Information</h2>
       <p>Provided contact details for inquiries or feedback regarding the website.</p>
       <a href="#">facebook</a>
       <a href="#">E-mail</a>
       <a href="#">instagram</a>
       <a href="#">twitter</a>
       <a href="#">linkedin</a>
   </section>
   <section id="guide">
       <p> You might also check :</p>
       <a href="guide lines.html"> Guidelines</a>
       <p> </p>
   </section>
   <footer>
       <p>&copy; 2024 Department of Computer Science, Faculty of Annaba</p>
   </footer></div>
@endsection