<!DOCTYPE html>
<?php
include_once '../ConfiguracaoWEB.html';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="../bootstrap/assets/img/favicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <!-- Favicons -->
        <link href="../bootstrap/assets/img/favicon.png" rel="icon">
        <link href="../bootstrap/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="../bootstrap/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../bootstrap/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="../bootstrap/assets/css/style.css" rel="stylesheet">

        <style>
            .user-info {
                text-align: right;
            }

            .user-label {
                color: black;
                padding: 5px;
                border-radius: 5px;
            }

            .user-name {
                font-weight: bold;
            }

            .online-indicator {
                display: inline-block;
                width: 10px;
                height: 10px;
                background-color: green;
                border-radius: 50%;
                margin-left: 5px;
            }
        </style>
    </head>
    <title>Principal</title>
    <body>
        <?php
        session_start();
        include 'validaLogin.php';
        ?>

        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="principal.php">
                <i class='fas' style='font-size:10px;color:white'></i>
                <?php
                if (isset($_SESSION["login"])) {
                    echo $_SESSION["login"] . '<span class="online-indicator"></span>';
                }
                ?>
            </a>

            <!-- Links -->
            <ul class="navbar-nav">
                <?php
                switch ($_SESSION["perfil"]) {
                    case "Administrador":
                        ?>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style='color:white' href="#" id="navbardrop" data-toggle="dropdown">
                                Usuário
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="formCadastroUsuario.php" target="centro">Cadastrar Usuário</a> 
                                <a class="dropdown-item" href="listarAllUsuario.php" target="centro">Listar Usuário</a>  
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style='color:white' href="#" id="navbardrop" data-toggle="dropdown">
                                Cursos
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="formCadastroCurso.php" target="centro">Cadastrar Curso</a> 
                                <a class="dropdown-item" href="listarAllCurso.php" target="centro">Listar Curso</a> 
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style='color:white' href="#" id="navbardrop" data-toggle="dropdown">
                                Disciplinas
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="formCadastroDisciplina.php" target="centro">Cadastrar Disciplinas</a> 
                                <a class="dropdown-item" href="listarAllDisciplina.php" target="centro">Listar Disciplinas</a> 
                                <a class="dropdown-item" href="formAddAlunoemDisciplina.php" target="centro">Cadastrar alunos nas disciplinas</a> 
                                <a class="dropdown-item" href="listarAllDisciplinaUsuario.php" target="centro">Listar Alunos por disciplina</a> 
                            </div>
                        </li>
                        <a class="navbar-brand" href="../CONTROLLER/logoffController.php">
                            <i class="bi bi-box-arrow-left" style='font-size:24px;color:red'></i>
                        </a>
                        <?php
                        break;
                    case "Aluno":
                        ?>
                        <script>
                            window.location.href = '../view/index.php';
                        </script>
                    </ul>
                </nav>
            </div>
            <?php
            break;
        case "Professor":
            ?>
            <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style='color:white' href="#" id="navbardrop" data-toggle="dropdown">
                Diário
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="formSelecionarDisciplina.php" target="centro">Cadastrar Diário</a> 
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style='color:white' href="#" id="navbardrop" data-toggle="dropdown">
                Notas
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="formSelecionarDisciplinaNota.php" target="centro">Cadastrar Notas</a> 
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style='color:white' href="#" id="navbardrop" data-toggle="dropdown">
                Lista
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="formSelecionarLista.php" target="centro">Listar Faltas e Notas</a> 
            </div>
        </li>

        <a class="navbar-brand" href="../CONTROLLER/logoffController.php">
            <i class="bi bi-box-arrow-left" style='font-size:24px;color:red'></i>
        </a>
        <?php
        break;
}
?>
</ul>
</nav>
</div>
<iframe name="centro" src="centro.php" width="100%" height="825" frameborder="0"></iframe>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
