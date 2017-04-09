<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">

        <title>Site Under Construction</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.css" rel="stylesheet">
        <link href="css/style.css?v1" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
                padding-bottom: 50px;
            }




            @media(max-width:767px){
                /*                .title {
                                    
                                    font-size: 2.2em;
                                }*/

                .title {
                    font-size: 2em;
                    font-weight: bold;
                    padding-left: 2px;
                    padding-right: 2px;
                    padding-bottom: 0px;
                    margin-bottom: 0px;
                    opacity: 0.7;
                }

                #image {
                    width: 300px;
                }
                #content {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    /* bring your own prefixes */
                    transform: translate(-50%, -50%);
                }
            }
            @media(min-width:768px){
                #content {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    /* bring your own prefixes */
                    transform: translate(-50%, -50%);
                }
            }
            @media(min-width:992px){

            }
            @media(min-width:1200px){

            }





        </style>
    </head>
    <body>

        <div class="container">
            <div class="row text-center">



                <div id='content'>
                    <div>
                        <img class='wow fadeInDown' id='image' src="{{asset('img/skyline4.png')}}" width='600px'>
                    </div>
                    <br />

                    <div class="title wow fadeInUp">
                        Irongecko Productions<br/>
                        <p class='subtext' style='font-size: 0.5em;'>Will soon be in Town<p>

                    </div>
                </div>





            </div>
        </div>

        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script>
new WOW().init();
        </script>
    </body>
</html>

