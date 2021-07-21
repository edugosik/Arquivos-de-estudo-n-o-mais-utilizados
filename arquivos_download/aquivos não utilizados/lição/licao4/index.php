
<!DOCTYPE html>

    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css.css">
        <title>lição2</title>
    </head>

    <body>
        <div id="all">
            <form action="fazendologin.php" method='post'>
                <h2>Login</h2>
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label><br/>
                        <input type="email" class="form-control" name='email' name= id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Coloque seu email"><br/>
                    </div>

                    <div class="form-group" >
                        <label for="exampleInputPassword1">Senha:</label><br/>
                        <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Coloque sua senha">
                    </div>

                    <button type="submit" class="btn btn-primary" >
                        <a href="#" class="linkLC" >Esqueci minha senha</a>
                    </button>

                    <br/>

                    <br/>

                    <button type="submit" class="btn btn-primary">Enviar</button>

                    <div class="linkLC1" >

                        <button type="submit" class="btn btn-primary" >
                            <a href="cadastro.php" class="linkLC">Cadastre-se</a>
                        </button>

                        <button type="submit" class="btn btn-primary" >
                            <a href="fazendopost.php" class="linkLC">post</a>
                        </button>
                    
                    </div>
            </form>
        </div>
    </body>

</html>


