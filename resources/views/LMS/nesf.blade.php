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
    <title>Nouvel administrateur</title>
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



        <div class="content mt-3">

                <div class="d-flex justify-content-center">

                <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                               Entrez les informations du nouvel administrateur
                            </div>
                            <div class="card-body card-block">
                            <form class="form" action = "{{route('store_super_administrateur')}}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label class=" form-control-label">Nom : </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input class="form-control" type="text" name="nom">
                                    </div>
                                    <small class="form-text text-muted">ex. NAMA</small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Prenom : </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input name="prenom" class="form-control" type="text">
                                    </div>
                                    <small class="form-text text-muted">ex. lyly</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Date de naissance</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input name="date_de_naissance" class="form-control" type="date">
                                    </div>
                                    <small class="form-text text-muted">ex. 15-05-2009</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Telephone : </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input name="tel"  class="form-control" type = "text">
                                    </div>
                                    <small class="form-text text-muted">ex. +237 65789089</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">E-mail : </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input name="email" class="form-control" type="email">
                                    </div>
                                    <small class="form-text text-muted">ex. lyly@gmail.com</small>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Login : </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input name="login" class="form-control" type="text">
                                    </div>
                                    <small class="form-text text-muted">ex. lyly</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Mot de passe : </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                        <input name="password" class="form-control" type="password">
                                    </div>
                                    <small class="form-text text-muted">ex. lyly@gmail.com</small>
                                </div>
                                <div class=" form-group">
                                <div class="input-group">

                                        <input class="form-control btn btn-info" type="submit" value="Enregistrer">
                                    </div>
                                </div>
                            </form>
                            </div>
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
