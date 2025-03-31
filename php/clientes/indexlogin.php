<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #ececec;
        }

        #login h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        #login {
            background-color: #00b0e6;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            max-width: 500px;
            height: 40%;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.515);
            animation: transicao 1s;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-size: 20px;
            margin-bottom: 10px;
        }

        input {
            border: none;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 10px;
            width: 90%;
        }

        #login button {
            margin-bottom: 20px;
        }

        #submit {
            padding: 10px;
            border-radius: 10px;
            border: none;
            background-color: black;
            color: white;
            width: 50%;
            margin: 10px;
            transition: 0.3s;
            cursor: pointer;
        }

        #submit:hover {
            transform: scale(1.05);
        }

        a {
            text-decoration: none;
            color: purple;
            display: inline-block;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.3s;
            margin-bottom: 10px;
        }

        a:hover {
            color: white;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <section id="login">
        <form action="testelogin.php" method="post" id="epa">
            <h1>Bem-vindo de Volta!</h1>
            <p><a href="homedes.php">Voltar ao site</a></p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" autocomplete="off">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">

            <button type="submit" name="submit" id="submit">Login</button>

            <p>
                Não possui uma conta? <a href="indexcad.php" id="cada">Cadastrar-se</a>
            </p>
        </form>
    </section>
</body>

</html>