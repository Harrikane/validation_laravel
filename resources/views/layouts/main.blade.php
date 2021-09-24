<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/style/css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    
    <div class="headerC">
        
        <a class="buttonHead" href="/"> Accueil</a>
        <a class="buttonHead" href="/liste"> Personnages</a>
        <a class="buttonHead" href="/addCharacter"> Ajout de personnage</a>


        
    </div>
    <!-- yield avec le contenu du header -->
    @yield('index-content')
</body>
</html>
