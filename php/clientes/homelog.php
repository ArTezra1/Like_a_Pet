<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="novostyle.css">
    <script src="script.js" defer></script>
    <title>Like A Pet</title>

    <style>
        .produto img {
            background-color: white;
            width: 100%;
            height: 75%;
            object-fit: contain;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        /* aplica para a pagina toda */
        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            scroll-padding: 40px;
            font-family: Arial, Helvetica, sans-serif;
        }

        /*variavel de cores e fontes*/
        :root {
            --color-white1: #ffffff;
            --color-white2: #e4e4e4;
            --color-white3: #c4c0c0;
            --color-white4: #f5f2f2;
            --color-white5: #ccc;
            --color-dark: #4b4848;
            --color-blue: #0291bd;
            --font-primary: Helvetica;
            --font-secondary: 'Open Sans', sans-serif;
        }

        /*Barra colorida*/
        .barra1 {
            width: 10%;
            height: 12px;
            position: relative;
            top: -50px;
            left: 290px;
            background-color: var(--color-blue);
        }

        .barra2 {
            width: 10%;
            height: 12px;
            position: relative;
            top: -50px;
            left: 300px;
            background-color: var(--color-white3);
        }


        body {
            background-color: var(--color-white4);
        }

        /*Nav*/
        header {
            display: flex;
            gap: 15%;
            justify-content: center;
            padding: 20px;
            align-items: center;
            position: fixed;
            max-width: calc(100vw - 50px);
            width: 100%;
            max-height: 30px;
            height: 100%;
            z-index: 100;
            background-color: white;
        }

        .scrolled {
            transition: 0.3s;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.503);
        }

        .logo {
            transition: 0.3s all;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .logo img{
            width: 70px;
            border-radius: 10px;
        }

        nav ul {
            display: flex;
            gap: 20px;
            list-style: none;
        }

        nav ul a {
            text-decoration: none;
            transition: 0.3s;
            color: black;
            display: inline-block;
        }

        nav ul li {
            transition: 0.3s;
        }

        nav ul li a:hover {
            transform: scale(1.1);
            color: var(--color-blue);
        }

        .login {
            padding: 10px;
            width: 100px;
            border: none;
            border-radius: 10px;
            background-color: var(--color-blue);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            transition: 0.3s;
            cursor: pointer;
            color: black;
        }

        .login:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 8px #00c3ff59;
            color: white;
        }

        /*Home*/
        #home {
            padding: 40px 10%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .text_body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .text_title1 {
            font-size: 32px;
            color: var(--color-blue);
            margin-bottom: 20px;
        }

        .text_title2 {
            margin-bottom: 40px;
        }

        .button_prod {
            width: 150px;
            padding: 10px;
            border-radius: 100px;
            background-color: var(--color-blue);
            border: none;
            transition: 0.3s;
            margin-bottom: 50px;
        }

        .button_prod a {
            text-decoration: none;
            color: black;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.3s;
        }

        .button_prod:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 8px #00c3ff6a;
        }

        .button_prod a:hover {
            color: white;
        }

        .text_title3 {
            font-size: 20px;
            color: var(--color-blue);
            margin-bottom: 20px;
        }

        .text_para1 {
            margin-bottom: 20px;
        }

        .img_body{
            flex: 1;
            width: 300px;
            margin-left: 300px;
        }

        /* Sobre */
        #sobre {
            padding: 40px 10%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 30vh;
        }

        #sobretxt {
            font-size: 40px;
            margin-bottom: 20px;
        }

        #sobre h3 {
            font-size: 20px;
        }

        .text_para3 {
            display: flex;
            gap: 40px 4%;
        }

        .quadrado {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            border-radius: 10px;
            background-color: var(--color-white1);
            box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.296);
            transition: all 0.3s;
        }

        .quadrado:hover {
            transform: scale(1.05);
        }

        /* Produtos */

        #produtos {
            height: 100vh;
            padding: 40px 10%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        #produtos h2 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 40px;
        }

        .produto {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border-radius: 10px;
            background-color: var(--color-white5);
            box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.436);
        }

        .preco {
            display: flex;
            gap: 20px;
            justify-content: space-between;
            align-items: center;
        }

        .preco button {
            padding: 5px;
            width: 100px;
            border-radius: 5px;
            border: none;
            background-color: rgb(0, 255, 242);
            font-weight: bold;
            transition: all 0.3s;
        }

        .preco button:hover {
            cursor: pointer;
            transform: scale(1.1);
            box-shadow: 0px 0px 16px rgba(0, 144, 136, 0.529);
        }

        /* Serviços */

        #servicos {
            height: 70vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #servicos h2 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            width: 95%;
            height: 50%;
            background-color: var(--color-blue);
            padding: 20px;
            border-radius: 10px;
            align-items: center;
        }

        .clock {
            flex: 1;
        }

        .clock svg {
            width: 200px;
            height: 200px;
            display: flex;
        }

        .serv {
            display: flex;
            gap: 40px;
            flex: 1;
        }

        /* Footer */

        footer {
            display: flex;
            gap: 40px;
            background-color: var(--color-white3);
            padding: 10px;
            align-items: center;
            justify-content: center;
        }

        /* ADD */

        #add {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            height: 60vh;
        }

        .cont{
            display: flex;
            gap: 40px;
            background-color: var(--color-blue);
            padding: 10px;
            border-radius: 10px;
        }

        .cont form{
            background-color: var(--color-white1);
            padding: 10px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        #add form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #add input {
            width: 300px;
        }

        #add #submit {
            padding: 5px;
        }

        /*Contato*/

        #contato {
            height: 50vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #contato .container {
            display: flex;
            justify-content: space-between;
            background-color: var(--color-blue);
            padding: 10px;
            border-radius: 10px;
            height: 100%;
        }

        .desc {
            width: 30%;
            display: flex;
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }

        #contato .container form {
            flex: 1;
            background-color: var(--color-white1);
            padding: 10px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
            text-align: center;
        }

        #contato .container form input {
            width: 80%;
            border-radius: 10px;
            padding: 3px;
            border: 1px solid black;
            margin-bottom: 10px;
        }

        #contato .container form select {
            width: 80%;
            margin-bottom: 10px;
        }

        #contato .container form textarea {
            padding: 10px;
            border-radius: 10px;
            width: 80%;
            height: 50%;
        }

        #contato h2 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        #contato button {
            padding: 10px;
            border-radius: 10px;
            width: 100px;
            border: none;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.503);
            background-color: var(--color-blue);
            transition: 0.3s;
            cursor: pointer;
        }

        button:hover {
            transform: scale(1.1);
        }
    </style>

</head>

<body>
    <header>
        <div class="logo">
            <img src="../../img/logo.jpg" class="img_logo_header" alt="logotipo">
        </div>

        <nav>
            <ul>
                <li>
                    <a href="#home" class="">Home</a>
                </li>
                <li>
                    <a href="#sobre" class="">Sobre nós</a>
                </li>
                <li>
                    <a href="#produtos" class="">Produtos</a>
                </li>
                <li>
                    <a href="#servicos" class="">Serviços</a>
                </li>
            </ul>
        </nav>

        <a href="sair.php"><button class="login">Sair</button></a>
    </header>

    <section id="home">
        <div class="text_body">
            <div class="text_title1">
                <h1>Carinho e Cuidados<br>para seu Amigão</h1>
            </div>
            <div class="barra1"></div>
            <div class="barra2"></div>
            <div class="text_title2">
                <h3>Aqui tratamos com todo amor e carinho, pois<br>sabemos o quão importante é cuidar da sua
                    família.</h3>
            </div>
            <button class="button_prod"><a href="#produtos">Produtos ></a></button>
            <a href="sistema.php"><button class="login">Sistema</button></a>
            <div class="text_title3">
                <h2>Like a Pet</h2>
            </div>
            <div class="text_para">
                <div class="text_para1">
                    <p>
                        Quando nós, seres humanos, temos nossos desejos ou <br> necessidades, sempre procuramos os
                        melhores
                        lugares para <br>
                        resolver nossas questões. Facilita muito a nossa vida quando <br> encontramos tudo o que
                        precisamos
                        em um só
                        lugar.
                    </p>
                </div>
                <div class="text_para2">
                    <p>
                        A Like a Pet visa o mesmo para os pets: que seus tutores encontrem <br> tudo o que for
                        necessário
                        para eles, desde uma
                        loja bem <br> montada, que oferece também banho e tosa com profissionais <br> dedicados e
                        amorosos a
                        uma clínica
                        veterinária, com horários <br> agendados ou urgências e emergências.
                    </p>
                </div>
            </div>
        </div>



        <div class="img_body">
            <img src="../../img/home.png" alt="img_cachorro">
        </div>
    </section>

    <section id="sobre">
        <div class="text_title4">
            <h2 id="sobretxt">Nossa Loja</h2>
        </div>

        <div class="text_para3">
            <div class="quadrado">
                <h3>Reinvenção Pet</h3>
                <p class="p1">
                    Nossa loja de petshop acaba de se reinventar para oferecer uma experiência ainda mais
                    incrível para você e seu pet. Agora, contamos com um espaço ampliado e moderno, totalmente adaptado
                    para receber animais de todos os portes com conforto e segurança. Além disso, nossos produtos foram
                    atualizados, trazendo as últimas tendências em alimentação, brinquedos interativos e acessórios
                    exclusivos para cães, gatos e outras espécies.
                </p>
            </div>

            <div class="quadrado">
                <h3>Banho e Tosa com Segurança</h3>
                <p class="p1">
                    Uma das nossas grandes novidades é o sistema de monitoramento online durante o banho e
                    tosa. Você pode acompanhar todo o processo pelo celular, garantindo tranquilidade e a certeza de que
                    seu pet está sendo bem cuidado. Também disponibilizamos agendamento digital, permitindo que você
                    escolha o melhor horário e dia de forma rápida e prática pelo nosso aplicativo, sem precisar sair de
                    casa.
                </p>
            </div>

            <div class="quadrado">
                <h3>Saúde Pet na Palma da Mão</h3>
                <p class="p1">
                    A tecnologia também chegou aos nossos produtos de saúde e bem-estar animal. Agora,
                    contamos com coleiras inteligentes que monitoram a atividade física e o bem-estar do seu pet,
                    enviando dados diretamente para o seu smartphone. Com essa inovação, você consegue acompanhar a
                    saúde do seu bichinho em tempo real, garantindo mais qualidade de vida e cuidados personalizados.
                </p>
            </div>
        </div>
    </section>

    <section id="produtos">
        <h2>Produtos</h2>
        <div class="container">
            <div class="produto">
                <h3>Roupa</h3>
                <img src="../../img/cachorro.jpg" alt="Roupa para Cachorro">
                <div class="preco">
                    <p>R$59,90</p>
                    <button>ADD</button>
                </div>
            </div>
            <div class="produto">
                <h3>antipulgas</h3>
                <img src="../../img/antipulgas.jpg" alt="Antipulgas">
                <div class="preco">
                    <p>R$49,99</p>
                    <button>ADD</button>
                </div>
            </div>
            <div class="produto">
                <h3>Cama</h3>
                <img src="../../img/cama.jpg" alt="Cama para cachorro">
                <div class="preco">
                    <p>R$129,00</p>
                    <button>ADD</button>
                </div>
            </div>
            <div class="produto">
                <h3>bebedouro Portátil</h3>
                <img src="../../img/bebedouro.jpg" alt="Bebedouro Portátil">
                <div class="preco">
                    <p>R$39,90</p>
                    <button>ADD</button>
                </div>
            </div>
            <div class="produto">
                <h3>Coleira Ajustável</h3>
                <img src="../../img/coleira.jpg" alt="Coleira Ajustável">
                <div class="preco">
                    <p>R$35,50</p>
                    <button>ADD</button>
                </div>
            </div>
            <div class="produto">
                <h3>Osso de Nylon</h3>
                <img src="../../img/osso.jpg" alt="Oasso de Brinquedo">
                <div class="preco">
                    <p>R$12,75</p>
                    <button>ADD</button>
                </div>
            </div>
            <div class="produto">
                <h3>Petisco</h3>
                <img src="../../img/petisco.jpg" alt="Petisco">
                <div class="preco">
                    <p>R$15,90</p>
                    <button>ADD</button>
                </div>
            </div>
            <div class="produto">
                <h3>Ração Premier</h3>
                <img src="../../img/ração_premium.jpg" alt="Ração Premier" class="img">
                <div class="preco">
                    <p>R$89,90</p>
                    <button>ADD</button>
                </div>
            </div>
            <div class="produto">
                <h3>Shampoo</h3>
                <img src="../../img/shampoo.jpg" alt="Shampoo">
                <div class="preco">
                    <p>R$24,50</p>
                    <button>ADD</button>
                </div>
            </div>
            <div class="produto">
                <h3>Mordedor</h3>
                <img src="../../img/brinquedo.jpg" alt="Brinquedo Mordedor">
                <div class="preco">
                    <p>R$19,99</p>
                    <button>ADD</button>
                </div>
            </div>
        </div>
    </section>

    <section id="servicos">
        <h2>Serviços</h2>
        <div class="content">
            <div class="clock">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                    class="bi bi-clock-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                </svg>
            </div>
            <div class="serv">
                <div>
                    <h3>Horários de Funcionamento:</h3>
                    <h3 class="h3_footer1"><strong>Loja</strong></h3>
                    <div class="text_horarios1">
                        <p> <strong>Segunda a Sexta:</strong>
                            9h às 21h
                            <br>
                            <strong>Sábado:</strong>
                            9h às 17h
                            <br>
                            <strong>Domingo:</strong>
                            9h às 15h
                        </p>
                    </div>
                </div>

                <div class="text_list2">
                    <h3 class="h3_footer2"><strong>Banho, tosa e consulta.</strong></h3>
                    <div class="text_horarios2">
                        <p>
                            <strong>Segunda a Sexta:</strong>
                            9h às 18h
                            <br>
                            <strong>Sábado:</strong>
                            9h às 17h
                            <br>
                            <strong>Domingo:</strong>
                            9h às 15h
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <section id="contato">
        <h2>Contato</h2>
        <div class="container">
            <div class="desc">
                <h1>Mande uma mensagem!</h1>
                <p>Preencha o formulário e nos envie a mensagem do seu agendamento detalhadamente para a gente enteder melhor a situação!</p>
            </div>
            <form action="#contato" method="post">
                <label for="em">Seu email</label>
                <input type="email" id="email" name="email">

                <label for="tipo">Tipo de Agendamento</label>
                <select name="tipo" id="tipo">
                    <option value="null"></option>
                    <option value="banho">Banho</option>
                    <option value="tosa">Tosa</option>
                    <option value="consulta">Consulta</option>
                </select>

                <textarea name="mensagem" id="mensagem" placeholder="Sua mensagem"></textarea>
                <button>Enviar</button>
            </form>
        </div>
    </section>

    <section id="add">
        <div class="cont">
            <form action="../produtos/inserir.php" method="post" enctype="multipart/form-data">

            <h2>Cadastrar Produto</h2>

                <label for="nome">Nome produto:</label>
                <input type="text" name="nome" id="nome">
                <label for="categoria">Categoria produto:</label>
                <input type="text" name=" categoria" id="categoria">
                <label for="preco">Preço produto:</label>
                <input type="number" name="preco" id="preco">
                <label for="quantidade">Quantidade produto:</label>
                <input type="number" name="estoque" id="estoque">
                <input type="submit" name="submit">
            </form>

            <form action="../animais/inserir.php" method="post">

            <h2>Cadastrar Animal</h2>

                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" autocomplete="off">
                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo">
                    <option value="cachorro">Cachorro</option>
                    <option value="gato">Gato</option>
                    <option value="passaro">Passaro</option>
                    <option value="hamster">Hamster</option>
                    <option value="macaco">Macaco</option>
                </select>
                <label for="peso">Peso</label>
                <input type="text" name="peso" autocomplete="off">
                <input type="submit" name="submit" id="submit">
            </form>

            <form action="../agendamentos/inserir.php" method="post">

            <h2>Marcar um Horário</h2>

                <label for="data">Data:</label>
                <input type="date" name="data" id="data" required>
                <label for="hora">Hora:</label>
                <input type="time" name="hora" id="hora" required>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </section>

    <footer>
        <p class="credits1">© Like a Pet - 2024 - Todos os direitos reservados</p>
        <p class="credits2">Desenvolvido por Henrique Pereira & Arthur Marques</p>
    </footer>

</body>

</html>