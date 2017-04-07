
<!DOCTYPE html>
<html>

    <head>

        <title>Iron Gecko - @yield('title')</title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="shortcut icon" href="favicon.ico"> 
        <meta name="google-site-verification" content="8OqkxmFXFbjAAYoqNcptj6MRo3SYAf9MWWvDf9h0J-w" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.css" rel="stylesheet">
        <link href="css/style.css?v1" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Dancing+Script:700|EB+Garamond" rel="stylesheet" type="text/css" />


<!--        <script src="https://use.fontawesome.com/7f149e32c1.js"></script>-->


        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>









    </head>
    <body class="fixed-sn black-skin">

        @include('layouts.nav')





        @yield('content')







        @include('layouts.footer')