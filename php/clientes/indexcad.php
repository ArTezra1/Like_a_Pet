<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <script src="/js/login.js" defer></script>
    <title>Bem-Vindo</title>
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

        h1 {
            margin-bottom: 10px;
        }

        #cadastro {
            background-color: #00b0e6;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            height: 65%;
            box-shadow: 2px 2px 16px rgba(0, 0, 0, 0.515);
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
    <section id="cadastro">
        <form action="cadastro.php" method="post" id="pep">
            <h1>Bem-vindo</h1>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" autocomplete="off">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" autocomplete="off">

            <label for="senha">Nova senha</label>
            <input type="password" name="senha" id="senha" autocapitalize="off" min="6" max="10">

            <label for="telefone">Telefone</label>
            <input type="number" name="telefone" id="telefone" autocomplete="off">

            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" autocomplete="off">

            <input type="submit" name="submit" id="submit">

            <p>
                Já possui uma conta? <a href="indexlogin.php" id="log">Logar-se</a>
            </p>
        </form>
</body>

</html>