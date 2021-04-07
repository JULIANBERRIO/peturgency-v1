<html>
    <head>
        <link href="css/form.css" rel="stylesheet"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>loginUsuarios</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    </head>
    <body>
        
        <div class="container col-lg-3">
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group text-center">
                    <img src="imgform/favicon.png" height="100" width="110"/>
                    <p><strong>Bienvenido al Sistema Pet Urgency</strong></p>
                </div>
                <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" placeholder="ejemplo@gmail.com" class="form-control" required>
                
                </div>
                <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" name="password" placeholder="*******" class="form-control" required>
                </div>
                <center>
                <input class="btn btn-primary bnt-block" type="submit" name="accion" value="Iniciar sesion" >
                <a href="{{route('register')}}" class="btn btn-primary">Registrarse</a>
                <BR></BR>
                <a href="{{route('index')}}" class="btn btn-primary">Regresar al inicio</a>
                
                
                </center>

            </form>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>