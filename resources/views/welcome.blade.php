<!DOCTYPE html>
        <html lang="{{ config('app.locale') }}">
        <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
        <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
        <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
        <!--[if gt IE 8]><!-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">


    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/all.css') }}">
    <title>Altara CMS - Portal </title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

     <style>
           html, body {
                background-color: #fff;
                color: #003366;
                font-family: 'Lato', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
}
     </style>
    </head>
<body>
<div id="root">
    </div>
</body>
<script src="{{mix('/js/app.js')}}"></script>

</html>
