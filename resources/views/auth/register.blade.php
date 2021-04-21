<!DOCTYPE html>
<html>
    <head>
        <title>Animated Login Form</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="css/form.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <img class="wave" src="img/wave.svg">
        <div class="container">
            <div class="img">
                <img src="img/bg.png">
            </div>
            <div id="login"class="login-content">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                   
                    <img src="img/favicon.png">
                    
				    <h4 class="title">Bienvenido al Sistema Pet Urgency</h4>
				     
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Nombres</h5>
                            <input type="text" class="input" name="name"title="Es obligatorio que ingreses tu nombre" required>
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="div">
                            <h5>Correo Electronico</h5>
                            <input  type="email" name="email" class="input" title="Es obligatorio que ingreses tu e-mail"  required>
                    </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-phone-square-alt"></i>
                        </div>
                        <div class="div">
                            <h5>Telefono</h5>
                            <input type="text" name="phone" placeholder="" class="input" title="Es obligatorio que ingreses tu numero celular"  required>
                    </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-venus-mars"></i>
                        </div>
                        <div class="div">
                            <h5>Genero</h5>
                            <br>
                            <select name="gender" id="gender" class="styled-select">
                                <option>Selecciona tu género</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                            </select>
                    </div>
                    <br>

                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Contraseña</h5>
                            <input type="password"pattern=".{8,}"name="password" placeholder="" class="input" title="Es obligatorio que ingreses tu Contraseña (Maximo 8 caracteres)" required>
                    </div>
                    </div>


                    <a href="#">¿Has olvidado tu contraseña? </a>
                    <input type="submit" class="btn btn-primary bnt-block"  name="accion" value="Registrarse">
                    <a href="{{route('index')}}" class="btn btn-primary">Regresar</a>
                    
                    
                    
                </form>
            </div>
        </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script type="text/javascript" src="js/form.js"></script>
    </body>
</html>

