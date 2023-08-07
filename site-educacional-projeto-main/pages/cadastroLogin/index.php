<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="C:\Users\icaro\Downloads\site-educacional-projeto-main\LogoSite.png" type="image/png">

    <!--CSS LINK -->
    <link rel="stylesheet" href="/css/style.css" />
    <!--Favicon-->
    <link rel="shortcut icon" href="/faviconTI.png" type="image/x-icon" />
    <!--BOOTSTRAP LINK-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!--Animation Install-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Escola Técnica São Vincente</title>
  </head>
  <body>
    <div class="container01">
      <header class="headerContent">
        <div class="headerText">
          <a href="/pages/home.html" class="logoAnchor text-center">
            <h3><mark id="titleLogo">ESCOLA TÉCNICA SÃO VINCENTE</mark></h3>
            <p>O ENSINO INTEGRADOR DA TECNOLOGIA</p>
            </a>
            <a class="anchorNav" href="pages/avancadoPage/livro.html"><button>Ir para Livros</button></a>"
        </div>
        <div class="btnNavGroup">
          <div class="dropdown">
            <button class="btn btn-outline-light dropbtn">Nível Básico</button>
            <div class="dropdown-content">
              <a class="anchorNav" href="/pages/basicaPage/introinfo.html"
                >Introdução á Informática</a
              >
              <a class="anchorNav" href="/pages/basicaPage/ingles.html"
                >Inglês Técnico</a
              >
              <a class="anchorNav" href="/pages/basicaPage/fundamentos.html"
                >Fundamentos de Hardware e Software</a
              >
              <a class="anchorNav" href="/pages/basicaPage/programacao1.html"
                >Lógica de Programação I</a
              >
            </div>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-light dropbtn">
              Nível Intermediário
            </button>
            <div class="dropdown-content">
              <a class="anchorNav" href="/pages/intermedioPage/so.html"
                >Sistemas Operacionais</a
              >
              <a class="anchorNav" href="/pages/intermedioPage/devweb.html"
                >Desenvolvimento Web</a
              >
              <a class="anchorNav" href="/pages/intermedioPage/segsistemas.html"
                >Segurança de Sitema</a
              >
              <a class="anchorNav" href="/pages/intermedioPage/redes.html"
                >Redes de Computadores</a
              >
              <a
                class="anchorNav"
                href="/pages/intermedioPage/programacao2.html"
                >Lógica de Programação II</a
              >
            </div>
          </div>
          <div class="dropdown">
            <button class="btn btn-outline-light dropbtn">
              Nível Avançado
            </button>
            <div class="dropdown-content">
              <a class="anchorNav" href="/pages/avancadoPage/bancodados.html"
                >Banco de Dados</a
              >
              <a class="anchorNav" href="/pages/avancadoPage/projetoint.html"
                >Projeto Integrador</a
              >
              <a class="anchorNav" href="/pages/avancadoPage/phpweb.html"
                >Programação para Internet</a
              >
              <a class="anchorNav" href="/pages/avancadoPage/aps.html"
                >Analise de Projetos e Sistemas</a
              >
              <a
                class="anchorNav"
                href="/pages/avancadoPage/poo.html"
                >Programação Orientada a Objetos</a
              >
              <a class="anchorNav" href="pages/livros.html"><button>Ir para Livros</button></a>"
            </div>
          </div>
        </div>
      </header>
<body>
    <h1>Página de Login e Cadastro</h1>

    <!-- Formulário de login -->
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="login_username">Usuário:</label>
        <input type="text" id="login_username" name="login_username" required>
        <br>
        <label for="login_password">Senha:</label>
        <input type="password" id="login_password" name="login_password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>

    <!-- Formulário de cadastro -->
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="post">
        <label for="cadastro_username">Usuário:</label>
        <input type="text" id="cadastro_username" name="cadastro_username" required>
        <br>
        <label for="cadastro_password">Senha:</label>
        <input type="password" id="cadastro_password" name="cadastro_password" required>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
