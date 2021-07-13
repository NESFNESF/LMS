<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{asset('Vendors/bootstrap/dist/css/bootstrap.min.css ')}}">
    <link rel="stylesheet" href="{{asset('Vendors/font-awesome/css/font-awesome.min.css ')}} ">
    <link rel="stylesheet" href="{{asset('Vendors/themify-icons/css/themify-icons.css ')}} ">
    <link rel="stylesheet" href="{{asset('Vendors/flag-icon-css/css/flag-icon.min.css ')}} ">
    <link rel="stylesheet" href="{{asset('Vendors/selectFX/css/cs-skin-elastic.css ')}} ">
    <link rel="stylesheet" href="{{asset('Vendors/jqvmap/dist/jqvmap.min.css ')}}  ">


    <link rel="stylesheet" href="{{asset('Assets/css/style.css ')}}  ">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                     <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="{{ route('accueil') }}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
      <!-- Header-->
      <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{ $lecon->titre }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><a href="{{route('liste_classe_enseignant',$user->id) }}">Liste des Classes </a>  \ <a href="{{ route('liste_classe_matiere_enseignant',['id' => $user->id ,'id_c' => $classe->id ]) }}">{{ $classe->nom }} </a> \  <a href="{{ route('liste_classe_matiere_lecon_enseignant',['id' => $user->id ,'id_c' => $classe->id , 'id_m' => $matiere->id ]) }}" >{{ $matiere->nom }}</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

        <div class="content mt-3 ml-0">
            <div class="animated fadeIn">

                <div class="social-buttons">
                    <div class="card icon-text">
                        <div class="card-header">
                            <h1><strong>OBJECTIFS</strong></h1>

                        </div>
                        <div class="card-body">

 @php
                    $i = 0;
                    @endphp

                            @foreach ($objectifs as $objectif )
                                @if ($i == 0)
                                    <h4> {{ $objectif }}</h4>

                                    @php
                                     $i = 1;
                                    @endphp
                                   
                                @else
                                    <h4>- {{ $objectif }}</h4>
                                @endif
                            
                            @endforeach

                        </div>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-4 ">

                             <a href="{{ route('liste_classe_matiere_lecon_prerequiq',['id' => $user->id ,'id_c' => $classe->id , 'id_m' => $matiere->id ,'id_l' => $lecon->id]) }}" class="btn btn-success btn"><h5>Précédent</h5> </a>


                        </div>
                        <div class="col-4">
                            <a href="{{ route('liste_classe_matiere_lecon_indicateur',['id' => $user->id ,'id_c' => $classe->id , 'id_m' => $matiere->id ,'id_l' => $lecon->id]) }}" class="btn btn-success btn"><h5>Suivant</h5> </a>

                        </div>
                      </div>

                </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{asset('Vendors/jquery/dist/jquery.min.js ')}} "></script>
    <script src="{{asset('Vendors/popper.js/dist/umd/popper.min.js ')}}  "></script>
    <script src="{{asset('Vendors/bootstrap/dist/js/bootstrap.min.js')}}  "></script>
    <script src="{{asset('Assets/js/main.js ')}} "></script>


    <script src="{{asset('Vendors/chart.js/dist/Chart.bundle.min.js ')}}  "></script>
    <script src="{{asset('Assets/js/dashboard.js ')}}  "></script>
    <script src="{{asset('Assets/js/widgets.js ')}}  "></script>
    <script src="{{asset('Vendors/jqvmap/dist/jquery.vmap.min.js ')}}  "></script>
    <script src="{{asset('Vendors/jqvmap/examples/js/jquery.vmap.sampledata.js ')}}  "></script>
    <script src="{{asset('Vendors/jqvmap/dist/maps/jquery.vmap.world.js ')}}  "></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
