<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
    <link rel="shortcut icon" href="assets/imagens/carro1.png">
    <!-- css bootstrap 5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- nosso css -->
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body>

    <!-- main/header/footer/nav/section/article/aside/div -->
    <!-- shift alt f atalho para a indentação automática -->

    <main class="container">

        <header id="home">
            <h1>Carros Especiais</h1>
        </header>
        <!-- início do nav -->
        <na>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#carroeletrico">Carros elétricos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#carroesportivo">Carros esportivos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#carrohibrido">Carros híbridos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#carrovoador">Carros voadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#quemsomos">Quem somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ondeestamos">Onde estamos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faleconosco">Fale conosco</a>
                </li>
            </ul>
            </nav>
            <!-- fim do nav -->


            <!-- início da section home -->
            <section>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/imagens/homeCarro1.webp" class="d-block w-100" alt="Carro esportivo Lamborghini">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/imagens/homeCarro2.webp" class="d-block w-100" alt="Carro Audi cinza">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/imagens/homeCarro3.webp" class="d-block w-100" alt="Carro vermelho">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <!-- fim da section home -->

            <!-- sessão dos carros elétricos, híbridos, esportivos e voadores -->

            <section>
                <!-- article dos carros elétricos -->
                <article id="carroeletrico">
                    <div class="card" style="width: 70%;margin-left: 15%;">
                        <img src="assets/imagens/carroEletricoCarro1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">Carro elétrico</h2>
                            <p class="card-text">Um carro elétrico é um veículo automotivo para transporte de carga e de pessoas com propulsão elétrica. O termo descreve carros de passeio em geral, mas pode, contudo, também ser entendido para toda a gama de veículos de várias faixas. A abreviatura usual e internacional é EV do inglês Electric Vehicle. </p>
                            <a href="https://pt.wikipedia.org/wiki/Carro_el%C3%A9trico" target="_blank" class="btn btn-primary">Clique aqui</a>
                        </div>
                    </div>
                </article>
                <br>
                <!-- article dos carros esportivos -->
                <article id="carroesportivo">
                    <div class="card" style="width: 70%;margin-left: 15%;">
                        <img src="assets/imagens/carroEsportivoCarro1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">Carro esportivo</h2>
                            <p class="card-text">O Ferrari 360 é um carro esportivo desenvolvido pela Ferrari com três modelos possíveis: Ferrari 360 Modena, um cupê de duas portas; Ferrari 360 Spider, um conversível de duas portas; e Challenge Stradale, a versão aprimorada dos 360 Modena.

                                O Ferrari 360 Modena tem um motor 3.6 litros V8 de 400cv de potência e acelera de 0–100 km/h em 4.3 segundos. Todos têm o motor de oito cilindros e o chassis de alumínio. Os 360 serviram também como a base para seu sucessor, o modelo F430 lançado em 2004. </p>
                            <a href="https://pt.wikipedia.org/wiki/Ferrari_360" target="_blank" class="btn btn-primary">Clique aqui</a>
                        </div>
                    </div>
                </article>
                <!-- article dos carros híbridos -->
                <article id="carrohibrido">
                    <div class="card" style="width: 70%;margin-left: 15%;">
                        <img src="assets/imagens/carroHibridoCarro1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">Carro híbrido</h2>
                            <p class="card-text">Um automóvel híbrido é um automóvel que tem um motor de combustão interna, normalmente a gasolina, e um motor eléctrico que permite manter o motor de combustão funcionando a baixas rotações, ou em certos momentos não funcionando, e, desse modo, reduzir o consumo de combustível e a emissão de poluentes. </p>
                            <a href="https://pt.wikipedia.org/wiki/Autom%C3%B3vel_h%C3%ADbrido_el%C3%A9trico" target="_blank" class="btn btn-primary">Clique aqui</a>
                        </div>
                    </div>
                </article>
                <!-- article dos carros voadores -->
                <article id="carrovoador">
                    <div class="card" style="width: 70%;margin-left: 15%;">
                        <img src="assets/imagens/carroVoadorCarro1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title">Carro voador</h2>
                            <p class="card-text">Engarrafamentos são um dos maiores problemas enfrentados pelos centros urbanos atualmente. A frota de carros cresce e o número de veículos por habitante é cada vez maior. Muitas pessoas frequentemente até levam horas para se deslocar de casa para o trabalho ou para a faculdade.

                                Uma coisa é certa: não há como construir novas ruas nos centros das cidades. Algumas melhorias de urbanismo podem ser realizadas, mas conter o avanço da frota de veículos já é algo impensável. A baixa qualidade dos transportes coletivos desmotiva as pessoas a utilizarem o ônibus ou o metrô, o que agrava ainda mais a situação.

                                Ao pensar em todas essas questões, os estudos acerca de meios de transporte aéreos para curtas distâncias têm progredido muito nos últimos anos, com protótipos testados por diversas empresas espalhadas por todo o globo. Neste artigo discutiremos um pouco mais sobre as melhorias e desvantagens dos veículos urbanos que muito em breve preencherão os céus das grandes cidades.</p>
                            <a href="https://www.tecmundo.com.br/internet/4184-os-carros-voadores-estao-por-ai-.htm" target="_blank" class="btn btn-primary">Clique aqui</a>
                        </div>
                    </div>
                </article>


            </section>

            <!-- quem somos -->
            <br>
            <section id="quemsomos">
                <h2>Somos TI22 - Senac Lapa Tito</h2>
                <img src="assets/imagens/quemsomos.jpg" class="img-fluid" alt="...">

            </section>

            <!-- onde estamos -->
            <section id="ondeestamos">
                <h2>Estamos na Rua Tito, 54 - Lapa</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.124145260985!2d-46.69399738576272!3d-23.528036884699436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8775663b04f%3A0x923835e9005f8309!2sSenac%20Lapa%20Tito!5e0!3m2!1spt-BR!2sbr!4v1618239674412!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>

            <section id="faleconosco">
                <form method="post" action="atualizaCliente.php">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <textarea name="mensagem" name="mensagem" cols="100" rows="10">Mensagem</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <br><br><br>
                </form>
            </section>
            <footer class="container">
                <h6>&copy;&nbsp;Copyrigth Senac Lapa Tito - <?php echo date("Y"); ?></h6>
            </footer>


    </main>




    <!-- ========================================================================================= -->
    <!-- js bootstrap 5.0 - observar que não tem jquery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>