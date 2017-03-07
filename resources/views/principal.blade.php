<html>
    <head>
        <title>Ecocinema</title>
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <link rel="stylesheet" href="css/Estilo.css">


    </head>
    <body>
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img alt="Brand" src="Media/Logo.png" id="logo">
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('ofertas')}}">Nuestra Oferta</a></li>
                    <li><a href="{{route('surgimos')}}">Como Surgimos</a></li>
                    <li><a href="{{route('vision')}}">Nuestra Vision</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{route('nosotros')}}">Sobre Nosotros</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
                </ul>
            </div>
        </nav>
        @yield('contenido')
        <footer class="footer" id="footer">
            <div class="container">
                <p class="text-muted">©Ecocinema, SLL 2017</p>
            </div>
        </footer>
    </body>
</html>