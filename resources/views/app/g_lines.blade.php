@extends('app.layout')
@section('title', 'Boe Home')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
@section('content')

<style>
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
    
    padding-left: 20px;
}

.search-box button{
    cursor: pointer;
    width: 25px;
    height: 25px;
    border-radius: 30px;
    border: none;
    position: absolute;
    top: 0;
    right: 1px;
    transform: scale(0.9);
    background: #eaeaea;
}
header .navbar .h{
  color: blue;

}
header .navbar a{
    color: #161313;
    font-size: 16px;
    margin: 0 10px;
    padding-left: 20px;
    border-left: 1px solid #837e7e;
    text-decoration: none;
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
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        margin-top: 80px;
    }
    h1, h2, p {
        margin-bottom: 20px;
    
    }
</style>
<h1 class="container">Guidelines</h1>
        
    
<br>

   
<body>
    <div class="container"> 
        
            <h1>Terms of Use</h1>
        
        <main>
            <section>
                <h2>Introduction</h2>
                <p>These terms of use govern your use of our website. By accessing and using this website, you agree to abide by these terms. If you do not agree with any part of these terms, please refrain from using our website.</p>
            </section>
            <section>
                <h2>Use of Content</h2>
                <p>The content provided on this website is for informational purposes only. You may use the content for personal, non-commercial purposes, but you may not modify, reproduce, or distribute it without prior written consent.</p>
            </section>
            <section>
                <h2>User Conduct</h2>
                <p>You agree to use this website responsibly and lawfully. You may not engage in any activity that could harm, disrupt, or interfere with the functioning of the website or infringe upon the rights of others.</p>
            </section>
            <section>
                <h2>Intellectual Property</h2>
                <p>All intellectual property rights in the content and materials on this website belong to us or our licensors. You may not use our trademarks, logos, or copyrighted materials without our express permission.</p>
            </section>
            <section>
                <h2>Links to Third-Party Websites</h2>
                <p>This website may contain links to third-party websites for your convenience. We do not endorse or take responsibility for the content, privacy practices, or terms of use of these third-party websites.</p>
            </section>
            <section>
                <h2>Limitation of Liability</h2>
                <p>We make no representations or warranties about the accuracy, completeness, or reliability of the content on this website. We shall not be liable for any direct, indirect, incidental, or consequential damages arising out of your use of or inability to use this website.</p>
            </section>
            <section>
                <h2>Changes to Terms</h2>
                <p>We reserve the right to modify or update these terms of use at any time without prior notice. Your continued use of the website after any changes constitutes acceptance of the modified terms.</p>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Department of Computer Science, Faculty of Annaba</p>
        </footer>
    </div>
<br>
    <div class="container"> 
       
            <h1>Privacy Policy</h1>
       
        <main>
            <section>
                <h2>Information Collection</h2>
                <p>We may collect personal information, such as your name, email address, and contact details, when you voluntarily provide it to us, such as when submitting a project or contacting us.</p>
            </section>
            <section>
                <h2>Use of Information</h2>
                <p>We use the information we collect to communicate with you, process project submissions, improve our services, and fulfill legal obligations. We do not sell, rent, or share your personal information with third parties without your consent, except as required by law.</p>
            </section>
            <section>
                <h2>Cookies</h2>
                <p>We may use cookies and similar technologies to enhance your browsing experience and analyze website usage. You can adjust your browser settings to refuse cookies or alert you when cookies are being sent.</p>
            </section>
            <section>
                <h2>Security</h2>
                <p>We implement security measures to protect against unauthorized access, alteration, disclosure, or destruction of your personal information. However, no method of transmission over the internet or electronic storage is 100% secure.</p>
            </section>
            <section>
                <h2>Third-Party Services</h2>
                <p>This website may use third-party services, such as analytics providers or social media platforms. These third parties may collect information about your interactions with our website, subject to their own privacy policies.</p>
            </section>
            <section>
                <h2>Children's Privacy</h2>
                <p>This website is not intended for children under the age of 13. We do not knowingly collect personal information from children under 13. If you are a parent or guardian and believe that your child has provided us with personal information, please contact us to have it removed.</p>
            </section>
            <section>
                <h2>Changes to Policy</h2>
                <p>We reserve the right to modify or update this privacy policy at any time. We will notify you of any material changes by posting the updated policy on this website.</p>
            </section>
            <br>
            <div class="container"> 
            <section>
                <h2>Contact Us</h2>
                <p>If you have any questions or concerns about this privacy policy or our data practices, please contact us.</p>
                <a href="#">facebook</a>
                <a href="#">E-mail</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </section>
        
        <footer>
            <p>&copy; 2024 Department of Computer Science, Faculty of Annaba</p>
        </footer>
    </div>
        </main>
        </div>

@endsection