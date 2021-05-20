﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, intial-scale=1" />
    <link rel="stylesheet" href="../../css/bootstrap11.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Permanent+Marker&family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/Mark Essay question English and Arabic.css" />
    <script src="../../Javascript/html5shiv.min.js"></script>
    <script src="../../Javascript/respond.min.js"></script>
    <script type="text/javascript"></script>
</head>
<body>
 <!-- Start navbar -->
           <div class="container">
           <nav class="navbar smart-scroll navbar-expand-lg navbar-light bg-light" dir="auto">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="logo-nav">ONLINE</span>exam</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.index')}}">{{__('massages.Home')}} <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.exam')}}">{{__('massages.Exam')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.courses')}}">{{__('massages.Courses')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.result')}}">{{__('massages.Results')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.profile')}}">{{__('massages.Profile')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- use "javascript:void(0)" to make link do nnothing at all -->
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown">
                           {{__('massages.Languages')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                        @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}" tabindex="-1" aria-disabled="true">{{__('massages.sing out')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- End navbar -->
        <div class="row" id="EnglishRow" style="display:block" ;>
            <div class="img22">
                <img src="../../img/std.jpg" width="200" height="150" />
            </div>
            <div class="StdEdit">
                <a href="{{route('student.editprofile')}}">
                    <button id="btn12" class="btn btn-primary" type="submit">Edit</button>
                    </a>
            </div>
            <div class="StdName">
                <label style="font-weight:700">
                    Name :
                </label>
                    <label id="lblStdName" style="font-weight:700">Ahmed Mohamed Mahmoud</label>
</div>
            <div class="StdSsR">
                <label style="font-weight:700">SSN :</label>
                <label id="lblStdSSR" style="font-weight:700">456457578678</label>
            </div>
            <div class="StdUni">
                <label style="font-weight:700">University : </label>
                <label id="lblStdUni" style="font-weight:700">Helwan</label>
            </div>
            <div class="Stdcoll">
                <label style="font-weight:700">College :</label>
                <label id="lblStdColl" style="font-weight:700"> computer and information</label>
            </div>
            <div class="StdEmail">
                <label style="font-weight:700">Email :</label>
                <label id="lblStdEmail" style="font-weight:700"> MA@gmail.com</label>
            </div>
            <div class="StdPass">
                <label style="font-weight:700">Password :</label>
                <label id="lblStdPass" style="font-weight:700"> *******</label>
            </div>
            <div class="StdID">
                <label style="font-weight:700">Id :</label>
                <label id="lblStdID" style="font-weight:700"> 20170111</label>
            </div>
        </div>
    </div>
    <script src="../../jquery/query.js"></script>
    <script src="../../Javascript/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../../jquery/jqq.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>