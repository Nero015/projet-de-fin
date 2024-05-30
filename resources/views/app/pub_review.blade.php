<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>visitors Review Page</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin-top: 30px;
  }
  .header {
    text-align: center;
    margin-bottom: 20px;
  }
  .container .Back{
    position: absolute;
    background-color: transparent;
    border: none;
    cursor: pointer;
    font-size: 18px;
    color: #494949;
    margin-left: 10px;
    transition: color 0.3s ease, transform 0.3s ease;
  }
  .Back:hover {
    color: rgb(0, 0, 0);
    transform: scale(1.1);
  }
  i {
    margin-right: 5px;
  }
  .header img {
    max-width: 200px;
    height: auto;
    float: left;
    margin-right: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  }
  .review-section {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 30px;
  }
  .left-section {
    flex: 1;
    margin-right: 20px;
  }
  .right-section {
    flex: 1;
    text-align: center;
  }
  .download-btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
    transition: background-color 0.3s ease;
  }
  .download-btn:hover {
    background-color: #0056b3;
  }
  ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  ul li {
    margin-bottom: 10px;
  }
  ul li a {
    text-decoration: none;
    color: #333;
    transition: color 0.3s ease;
  }
  ul li a:hover {
    color: #007bff;
  }
  .introduction {
    margin-bottom: 20px;
  }
  .names-section {
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .line {
    width: 50%;
    border-top: 1px solid #ddd;
    margin: 0 auto;
    margin-bottom: 20px;
  }
</style>
</head>
<body>
  
<div class="container">
  <a href="{{ route('app.projects') }}">Back</a>
  <div class="header">
    <h1>Welcome to our Review Page</h1>
    <img src="https://via.placeholder.com/200" alt="Review Image">
  </div>
  <div class="introduction">
    <h2>Introduction</h2>
    <p>{{ $project->intro }}</p>
  </div>
  <div class="line"></div>
  <div class="names-section">
    <h2>Student Names & Supervisor</h2>
    <p>Students: {{ $project->member1 }} @if ($project->member2 != "")
    & {{$project->member2}}
    @endif
    @if ($project->member3 != "")
    & {{$project->member3}}
    @endif</p>
    <p>Supervisor: {{$project->enc}}</p>
  </div>
  <div class="line"></div>
  <div class="review-section">
    <div class="left-section">
      <h2>Links</h2>
      <ul>
        @if (isset($project->url_list))
        @php
            $list = json_decode($project->url_list);
        @endphp
        @foreach($list as $e)
            <li><a href="{{ $e }}">Review 1</a></li>
        @endforeach
        @endif
      </ul>
    </div>
    <div class="right-section">
      <h2>Document</h2>
      <p>You can read the thesis paper here</p>
      <a href="{{ $project->uploaded_file }}" class="download-btn">Download Document</a>
    </div>
  </div>
</div>
</body>
</html>