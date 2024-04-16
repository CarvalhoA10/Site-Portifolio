<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Portifólio - Aelson Carvalho</title>
</head>
<body>
    

    <header>

        <nav>
            <div id="menu">
                <img src="icons/menu.png" alt="hamburguer">
            </div>
            <ul id="itens_nav">
                <br>
                <li><a href="#">Apresentação</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>

    </header>

    <main>


        <!-- Sessão do perfil -->

        <section id="conteiner_perfil">

            <div id="perfil_foto">
                <img src="img/tris.jfif" alt="Foto">
            </div>
            <div id="perfil_descricao">

                <br>
                <p><strong>Nome:</strong> Aelson Carvalho</p>
                <br>
                <p><strong>Sobre:</strong> Olá. me chamo Aelson, estudante de análise e desenvolvimento de sistemas com foco em programação voltada para o backend utilizando python e php. tembem possuo conhecimentos em html, css, javascript e banco de dados mysql.</p>
                <br>
                <p><strong>Tecnologias:</strong></p>
                <br>
                <div id="perfil_tecnologias">
                    <img src="img/python-logo.png" alt="python">
                    <img src="img/php-logo.png" alt="php">
                    <img src="img/html-logo.png" alt="html">
                    <img src="img/css-3-logo.png" alt="css">
                </div>
            </div>
        </section>
        <br>

        <!-- Sessão dos projetos -->

        <section id="conteiner_projetos">

        </section>
        <br>


        <!-- Sessão do formulário de contatos -->

        <section id="conteiner_contatos">

            <p><strong>Redes Sociais</strong></p><br>
            <div id="redes">
                <a href="https://www.linkedin.com/in/aelson-carvalho-fernandes-13514a24b/" target="blank"><img src="img/LinkedIn_logo.png" alt="Linkedin"></a>

                <a href="https://github.com/CarvalhoA10" target="blank"><img src="img/github-logo.png" alt="Github"></a>

            </div>
            <br>

            <form action="">
                <p style="text-align: justify;">Ou pode entrar em contato por meio do formulário. Responderei assim que possivel.</p><br>

                <div id="">

                    <div>
                        <label for="">Titulo:</label><br>
                        <input type="text" placeholder="Serviço"><br>
                    </div>
                    <br>
                    <div>
                        <label for="">Email:</label><br>
                        <input type="email" placeholder="joao@email.com"><br>
                    </div>

                </div>
                <br>

                <div>


                    <label for="">Descrição:</label><br>
                    <textarea name="" id="" cols="35" rows="6"></textarea><br>

                </div>

                <div>
                    <input type="submit" id="btn_enviar" value="Enviar">
                </div>
            </form>

        </section>


    </main>

    <footer>
        <p>Aelson Carvalho @ 2024</p>
    </footer>

    <script src="js/script.js"></script>

</body>
</html>