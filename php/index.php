<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href="../css/index.css">
    <title>index</title>
</head>

<body>


    <form class="form-signin" method="POST">
        <div class="text-center">
            <img id="logo" src="../img/logo.png" alt="" >
            <hr>
        </div>
        <input type="text" class="form-control" name="valor" placeholder="E-mail" required="" autofocus="" />
        <br>
        <input type="password" class="form-control" name="password" placeholder="Senha:" required="" />
        <br>
        <div class="text-left" id="cadastro">

        </div>

        <div class="text-right">
            <input type="submit" name="acessar" class="btn btn-dark btn-lg btn-block" value="Acessar">
        </div>

    </form>

</body>

</html>