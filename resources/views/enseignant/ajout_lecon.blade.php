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




    <!-- Left Panel -->

    <!-- Right Panel -->

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
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Nouvelle leçon</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="{{route('liste_classe_enseignant',$user->id) }}">Liste des Classes </a>  \ <a href="{{ route('liste_classe_matiere_enseignant',['id' => $user->id ,'id_c' => $classe->id ]) }}">{{ $classe->nom }} </a> \ {{ $matiere->nom }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="d-flex justify-content-center">

                <div class="col-xs-10 col-sm-10">
                        <div class="card">
                            <div class="card-header">
                               Entrez les informations de la nouvelle leçon de <strong>{{ $matiere->nom }}</strong>
                            </div>
                            <div class="card-body card-block">
                            <form class="form" action = "{{route('store_lecon',['id' => $user->id ,'id_c' => $classe->id , 'id_m' => $matiere->id ])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class=" form-control-label">Titre de la leçon : </label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    <input class="form-control" type="text" name="titre" required>
                                </div>
                                <small class="form-text text-muted">ex. LE MONDE NUMÉRIQUE</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Objectifs : </label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    <textarea class="form-control" name="objectif" rows="4" required placeholder="ex:
                                    -Connaitre l'ordinateur
                                    -Connaitre le web"></textarea>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Indicateurs de Compétenses : </label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    <textarea class="form-control" name="indicateur" rows="4" required placeholder="ex:
                                    -l'élève est capable de décrire un ordinateur
                                    -peut répondre à plusieurs questions sur le web "></textarea>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Situation ploblème : </label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    <textarea class="form-control" name="situation" rows="4" required placeholder="Saisisez votre texte ici..."></textarea>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Consigne : </label>
                                <div class="input-group">

                                    <div id="consign">
                                        <div class="row">
                                            <br />
                                            <input name="consigne1" required class="form-control " type="text" placeholder="saisir la consigne 1" size="50" />
                                            <br />
                                            <br />


                                            <div class="col-1"> <input  type="radio" for="reponsec1" name="choix11" value="true" /> </div>
                                            <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsec11" placeholder=" proposition 1" />
                                            </div>
                                            <div class="col-1"> <input  type="radio" for="reponsec2" name="choix21" value="true" /> </div>
                                            <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsec21" placeholder=" proposition 2" /> </div>
                                            <div class="col-1"> <input  type="radio" for="reponsec3" name=" choix31" value="true" /> </div>
                                            <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsec31" placeholder=" proposition 3" /> </div>
                                            <br />
                                            <br />
                                        </div>



                                    </div>

                                    <h6>RM:Cliquez sur + pour ajouter un champs de la consigne.<input name="compteurC" id="compteurC" type="number" value="1" size="2" hidden> </h6>

                                    <input type="button" class=" bg-success" value="+" onclick="addC()" />

                                    fabrice

                                </div>

                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Trace écrite : </label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    <textarea class="form-control" name="trace" rows="4" required placeholder="Saisisez votre texte ici..."></textarea>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Documents associés à la leçon : </label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    <input class="form-control" type="file" name="file" required>
                                </div>
                                <small class="form-text text-muted">Placer le documents ici</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Evaluation  <br/> Partie QCM : </label>
                                <div class="input-group">

                                    <div id="qcm">
                                        <div class="row">
                                            <br />
                                            <input name="evaluation1" required class="form-control " type="text" placeholder="saisir la question 1" size="50" />
                                            <br />
                                            <br />


                                            <div class="col-1"> <input  type="radio" for="reponsee1" name="qcm11" value="true" /> </div>
                                            <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsee11" placeholder=" proposition 1" />
                                            </div>
                                            <div class="col-1"> <input  type="radio" for="reponsee2" name="qcm21" value="true" /> </div>
                                            <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsee21" placeholder=" proposition 2" /> </div>
                                            <div class="col-1"> <input  type="radio" for="reponsee3" name=" qcm31" value="true" /> </div>
                                            <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsee31" placeholder=" proposition 3" /> </div>
                                            <br />
                                            <br />
                                        </div>



                                    </div>

                                    <h6>RM:Cliquez sur + pour ajouter un champs de QCM.<input name="compteurqcm" id="compteurqcm" type="number" value="1" size="2" hidden> </h6>

                                    <input type="button" class=" bg-info" value="+" onclick="addEqcm()" />



                                </div>

                                <label class=" form-control-label">Partie Vrai/Faux : </label>
                                <div class="input-group">
                                    <div id="prerequis">

                                        <input name="prequis1" class="form-control " required type="text" placeholder="saisir la question 1" size="50" /><br /><input type=" text " size="10" name="reponse1" placeholder="vrai o faux ?" />


                                    </div>


                    <br /><br />






                                </div>  <input name="compteur" id="compteur" type="number" value="1" size="2" hidden>
                    <br/><br/>
                            <h6>RM:Cliquez sur + pour ajouter un champs de prérequis. </h6><input type="button" class="bg-info" value="+" onclick="add()" />

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

    <script>
        function add() {
            var div = document.getElementById('prerequis');

            var question = document.createElement("input");
            var reponse = document.createElement("input");
            var btn = document.getElementById("compteur");
            var plus = btn.value = parseInt(btn.value) + 1;
            var br = document.createElement("br");
            question.name = "prequis" + plus;

            question.className = "form-control";
            question.type = "text";
            question.placeholder = "saisir la question " + plus;
            question.size = "50";
            question.required = " require";
            reponse.name = "reponse" + plus;

            reponse.type = "text";
            reponse.placeholder = "vrai ou faux ?";
            reponse.size = "10";
            reponse.required = " required";


            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(question);
div.appendChild(document.createElement("br"));
            div.appendChild(reponse);
            div1.appendChild(br);
            div1.appendChild(br);



        }



        function addC() {

            var div = document.getElementById("consign");
            var question = document.createElement("input");
            var reponse1 = document.createElement("input");
            var reponse2 = document.createElement("input");
            var reponse3 = document.createElement("input");
            var choix1 = document.createElement("input");
            var choix2 = document.createElement("input");
            var choix3 = document.createElement("input");
            var br = document.createElement("br");
            var btn = document.getElementById("compteurC");
            var plus = btn.value = parseInt(btn.value) + 1;
            var div1 = document.createElement("div");
            div2 = document.createElement("div");
            div2.className = "row";
            div1.className = "row";
            question.name = " consigne" + plus;

            question.className = "form-control";
            question.type = "text";
            question.placeholder = "saisir la consigne  " + plus;
            question.size = "50";
            question.required = " required";

            reponse1.name = "reponsec1" + plus;
            reponse1.type = "text";
            reponse1.placeholder = " proposition 1";
            reponse1.size = "10";
            reponse1.className = "form-control";
            reponse1.required = " required";

            reponse2.name = "reponsec2" + plus;
            reponse2.type = "text";
            reponse2.placeholder = " proposition " + plus;
            reponse2.size = "10";
            reponse2.className = "form-control";
            reponse2.required = " require";
            reponse3.name = "reponsec3" + plus;
            reponse3.type = "text";
            reponse3.placeholder = " proposition 3";
            reponse3.size = "10";
            reponse3.className = "form-control";
            reponse3.required = " required";

            choix1.type = "radio";
            choix1.name = "choix1" + plus;
            choix1.value = "true";


            choix2.type = "radio";
            choix2.name = "choix2" + plus;
            choix2.value = "true";

            choix3.type = "radio";
            choix3.name = "choix3" + plus;
            choix3.value = "true";
            div1.appendChild(br);
            div1.appendChild(br);
            div1.appendChild(br);


            div1.appendChild(question);

            div1.appendChild(br);
            div1.appendChild(br);
            div1.appendChild(br);



            div21 = document.createElement("div");
            div22 = document.createElement("div");
            div23 = document.createElement("div");
            div24 = document.createElement("div");
            div25 = document.createElement("div");
            div26 = document.createElement("div");
            div21.className = "col-1";
            div23.className = "col-1";
            div25.className = "col-1";
            div22.className = "col";
            div24.className = "col";
            div26.className = "col";
            div21.appendChild(choix1);
            div22.appendChild(reponse1);
            div23.appendChild(choix2);
            div24.appendChild(reponse2);
            div25.appendChild(choix3);
            div26.appendChild(reponse3);
            div2.appendChild(div21);
            div2.appendChild(div22);
            div2.appendChild(div23);
            div2.appendChild(div24);
            div2.appendChild(div25);
            div2.appendChild(div26);
            div.appendChild(div1);
            div.appendChild(document.createElement("br"));
            div.appendChild(div2);
            div.appendChild(br);



        }



        function addEqcm() {

var div = document.getElementById("qcm");
var question = document.createElement("input");
var reponse1 = document.createElement("input");
var reponse2 = document.createElement("input");
var reponse3 = document.createElement("input");
var choix1 = document.createElement("input");
var choix2 = document.createElement("input");
var choix3 = document.createElement("input");
var br = document.createElement("br");
var btn = document.getElementById("compteurqcm");
var plus = btn.value = parseInt(btn.value) + 1;
var div1 = document.createElement("div");
div2 = document.createElement("div");
div2.className = "row";
div1.className = "row";
question.name = "evaluation" + plus;

question.className = "form-control";
question.type = "text";
question.placeholder = "saisir la question " + plus;
question.size = "50";
question.required = " required";

reponse1.name = "reponsee1" + plus;
reponse1.type = "text";
reponse1.placeholder = " proposition 1";
reponse1.size = "10";
reponse1.className = "form-control";
reponse1.required = " required";

reponse2.name = "reponsee2" + plus;
reponse2.type = "text";
reponse2.placeholder = " proposition 2";
reponse2.size = "10";
reponse2.className = "form-control";
reponse2.required = " require";
reponse3.name = "reponsee3" + plus;
reponse3.type = "text";
reponse3.placeholder = " proposition 3";
reponse3.size = "10";
reponse3.className = "form-control";
reponse3.required = " required";

choix1.type = "radio";
choix1.name = "qcm1" + plus;
choix1.value = "true";


choix2.type = "radio";
choix2.name = "qcm2" + plus;
choix2.value = "true";

choix3.type = "radio";
choix3.name = "qcm3" + plus;
choix3.value = "true";
div1.appendChild(br);
div1.appendChild(br);
div1.appendChild(br);


div1.appendChild(question);

div1.appendChild(br);
div1.appendChild(br);
div1.appendChild(br);



div21 = document.createElement("div");
div22 = document.createElement("div");
div23 = document.createElement("div");
div24 = document.createElement("div");
div25 = document.createElement("div");
div26 = document.createElement("div");
div21.className = "col-1";
div23.className = "col-1";
div25.className = "col-1";
div22.className = "col";
div24.className = "col";
div26.className = "col";
div21.appendChild(choix1);
div22.appendChild(reponse1);
div23.appendChild(choix2);
div24.appendChild(reponse2);
div25.appendChild(choix3);
div26.appendChild(reponse3);
div2.appendChild(div21);
div2.appendChild(div22);
div2.appendChild(div23);
div2.appendChild(div24);
div2.appendChild(div25);
div2.appendChild(div26);
div.appendChild(div1);
div.appendChild(document.createElement("br"));
div.appendChild(div2);
div.appendChild(br);



}

    </script>


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
