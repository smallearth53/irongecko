
<!DOCTYPE html>
<html>

    <head>

        <title>Iron Gecko - @yield('title')</title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="shortcut icon" href="favicon.ico"> 
        <meta name="google-site-verification" content="8OqkxmFXFbjAAYoqNcptj6MRo3SYAf9MWWvDf9h0J-w" />

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
        
        


        




    </head>
    <body>
        
        @include('layouts.nav')





        @yield('content')







        @include('layouts.footer')