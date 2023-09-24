<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>Tugas GITS || Welcome</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('fe/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('fe/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('fe/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/hero-bg.jpg" alt="">
      </div>
    </div>
    <header class="header_section">
      <div class="header_top">
      <div class="container-fluid">
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span>
                Fia Amalia
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item @if(Route::currentRouteName() == 'dashboard') active @endif">
                  <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item @if(request()->is('about')) active @endif">
                  <a class="nav-link" href="{{ url('about') }}">About Me</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'kampus') active @endif">
                  <a class="nav-link" href="{{ route('kampus') }}">Profile Kampus</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->