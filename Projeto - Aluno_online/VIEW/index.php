<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>ETC - Página do Aluno</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

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

        <!-- Template Main CSS File -->
        <link href="../bootstrap/assets/css/style.css" rel="stylesheet">

    </head>

    <body>
        <?php
        session_start();
        include 'validaLogin.php';
        if (isset($_SESSION["login"])) {
            
        }
        ?>
        <!-- ======= Mobile nav toggle button ======= -->
        <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

        <!-- ======= Header ======= -->
        <header id="header" style="background-color:rgb(21, 81, 247) ;">
            <div class="d-flex flex-column">

                <div class="profile">
                    <img src="../bootstrap/assets/img/download.png" alt="" class="img-fluid rounded-circle">
                    <h1 class="text-light"><a href="index.html">
                            <?php
                            if (isset($_SESSION["login"])) {
                                echo '<div class="user-info">';
                                echo ' <span class="user-name">' . $_SESSION["login"] . '<span class="online-indicator"></span>' . '</span>';
                                echo '<br>';
                                echo '<br>';

                                echo '</div>';
                            }
                            ?>
                        </a></h1>
                    <div class="social-links mt-3 text-center">
                        <a href="https://www.facebook.com/cepceilandia" target="_blank" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://www.youtube.com/etcvirtual" target="_blank" class="youtube"><i
                                class="bx bxl-youtube"></i></a>
                        <a class="bx bx-exit" href="../CONTROLLER/logoffController.php" ></a>
                    </div>
                </div>

                <nav id="navbar" class="nav-menu navbar">
                    <ul>
                        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Principal</span></a></li>
                        <li><a href="#sobre" class="nav-link scrollto"><i class='bx bx-user'></i> <span>Aluno</span></a></li>
                        <li><a href="#documentos" class="nav-link scrollto"><i class="bx bx-line-chart"></i> <span>Documentação</span></a></li>
                        <li><a href="#resumo" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Acompanhamento</span></a></li>
                        <li><a href="#servicos" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Máterias</span></a></li>
                        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contato</span></a></li>
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </header><!-- End Header -->

        <!-- ======= hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
            <div class="hero-container" data-aos="fade-in">
                <h1>Área do Aluno</h1>
                <p>Eu preciso de <span class="typed" data-typed-items="estudo., foco., empenho."></span></p>
            </div>
        </section><!-- End hero -->

        <main id="main">

            <!-- ======= sobre Section ======= -->
            <section id="sobre" class="sobre">
                <div class="container">

                    <div class="section-title">
                        <h2>
                            <?php
                            if (isset($_SESSION["login"])) {
                                echo '<div class="user-info">';
                                echo ' <span class="user-name">' . $_SESSION["login"] . '<span class="online-indicator"></span>' . '</span>';
                                echo '<br>';
                                echo '<br>';

                                echo '</div>';
                            }
                            ?>
                        </h2>
                        <p>Pagina destinada para as informações do aluno.<br> (Em construção)</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                            <img src="../bootstrap/assets/img/download.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <h3>Curso Técnico em informática.</h3>
                            <p class="fst-italic">
                                Módulo 3.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Data de Nascimento:</strong> <span>07/05/1998</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Telefone:</strong> <span>+55 61 940594493</span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Cursos concluidos:</strong> <span>2</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>pessoa@gmail.com</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End sobre Section -->

            <!-- ======= documentos Section ======= -->
            <section id="documentos" class="documentos">
                <div class="container">
                    <div class="section-title">
                        <h2>Documentação</h2>
                    </div>
                    <div>
                        <link rel="stylesheet" type="text/css" href="../bootstrap/assets/css/estilo_Fordocumentos.css">
                        <ul>
                            <li><a href="../bootstrap/assets/TESTE.pdf" target="_blank" download>Declaração de Passe Estudantil</a></li>
                            <li><a href="../bootstrap/assets/TESTE.pdf" target="_blank" download>Declaração de Escolaridade</a></li>
                            <li><a href="../bootstrap/assets/TESTE.pdf" target="_blank" download>Histórico Escolar</a></li>
                            <li><a href="../bootstrap/assets/TESTE.pdf" target="_blank" download>Declaração de Estágio</a></li>
                        </ul>
                    </div>


                </div>
            </section><!-- End documentos Section -->


            <!-- ======= resumo Section ======= -->
            <section id="resumo" class="resumo">
                <div class="container">

                    <div class="section-title">
                        <h2>Acompanhamento do Aluno</h2>
                        <div class="table table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Disciplina</th>
                                        <th scope="col">Nome da Disciplina</th>
                                        <th scope="col">Nota Final</th>
                                        <th scope="col">Situação</th>
                                        <th scope="col">Total de Faltas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Linguagem Visual I</td>
                                        <td>Em processo</td>
                                        <td>Apto/Aprovado</td>
                                        <td style="background-color: yellow;">25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Banco de Dados</td>
                                        <td>Em processo</td>
                                        <td>Apto/Aprovado</td>
                                        <td style="background-color: rgba(0, 128, 0, 0.39);">10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Design Gráfico</td>
                                        <td>Em processo</td>
                                        <td>Reprovado</td>
                                        <td style="background-color: red;">30</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
            </section><!-- End resumo Section -->



            <!-- ======= servicos Section ======= -->
            <section id="servicos" class="servicos">
                <div class="container">

                    <div class="section-title">
                        <h2>Matérias</h2>
                        <p>Essa seção deve mostrar as matérias do módulo atual.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Banco de dados</a></h4>
                            <p class="description">Professor Edimar Nogueira</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="">Desenvolvimento de Interfaces Web</a></h4>
                            <p class="description">Professora Keila Freitas</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            <h4 class="title"><a href="">Linguagem Visual II</a></h4>
                            <p class="description">Professora Sandra Freire</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                            <h4 class="title"><a href="">Projeto de Conclusão de Curso</a></h4>
                            <p class="description">Professora Cleyton Ferreira</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            <h4 class="title"><a href="">Segurança da Informação</a></h4>
                            <p class="description">Professora Renata Verônica de O. Gomes</p>
                        </div>
                    </div>

                </div>
            </section><!-- End servicos Section -->



            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">

                    <div class="section-title">
                        <h2>Contato</h2>
                    </div>

                    <div class="row" data-aos="fade-in">

                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Endereço:</h4>
                                    <p>EQNN 14 Área Especial S/ Nº- Ceilândia Sul - DF - CEP: 72220-140</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>etc@se.df.gov.br</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Telefone:</h4>
                                    <p>(61) 3901-7545</p>
                                </div>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2282.393939698081!2d-48.11012378118131!3d-15.829572390993166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bccfba936f021%3A0x6f07a0a68fc87b4a!2sCentro%20de%20Educa%C3%A7%C3%A3o%20Profissional%20de%20Ceil%C3%A2ndia!5e0!3m2!1spt-BR!2sbr!4v1691795012242!5m2!1spt-BR!2sbr" width="470" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                            </div>

                        </div>
                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->



        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="../bootstrap/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="../bootstrap/assets/vendor/aos/aos.js"></script>
        <script src="../bootstrap/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../bootstrap/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../bootstrap/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../bootstrap/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../bootstrap/assets/vendor/typed.js/typed.umd.js"></script>
        <script src="../bootstrap/assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="../bootstrap/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="../bootstrap/assets/js/main.js"></script>

    </body>

</html>
<!-- Rudá tava mexendo -->