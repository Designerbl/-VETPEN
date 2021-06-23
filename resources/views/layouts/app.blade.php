<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <!-- Bootstrap Stylesheets -->
  <link rel="stylesheet" href="/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
 
  <!-- Stick -->
  <link rel="stylesheet" type="text/css" href="/libs/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="/libs/slick/slick-theme.css"/>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="/css/style.css"/>

  <script src="https://kit.fontawesome.com/bab5cae328.js" crossorigin="anonymous"></script>
</head>

<body>
@yield('content')
</body>

</html>