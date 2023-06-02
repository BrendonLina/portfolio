@extends('layout.site')


@section('content')
   
   <header class="header">
       <div class="headline">
            <!-- <h2 id="bem-vindo">Olá,Seja bem vindo!</h2> -->
           <h2 id="portfolio">Essa é minha História</h2>
           
           <p>Sou <b>Brendon Lina </b> tenho 26 anos, sou desenvolvedor web há {{$exp}} anos, atuando com PHP, Laravel, Node, Angular,
               Html, Css e JavaScript. Atuo principamente com back-end por escolha, mas também sei desenvolver o front-end.
               no decorrer desses anos eu atuei em algumas empresas, e também em alguns sistemas própio com enfase
               nos estudos, enfim esse é meu portfólio.
           </p>
           <a href="https://api.whatsapp.com/send?phone=5521968688942" target="_blank" class="contact-btn">FALE COMIGO</a>
           
       </div>
       <div class="img-headline">
           <img src="/img/3964906.jpg" alt="programador" style="max-width:100%;">
       </div> 
   </header>
   <section>
        
            
       <h2>Minhas experiências pessoais</h2>
       <div class="servicos">
            <div class="card">
                <img src="/img/codificacao-da-web.png">
                <h3>Sistema de Consultório Médico</h3>
                <p>Sistema com todo o fluxo e gerênciamento de clinicas médicas.</p>
                <p><b>Tecnologias: PHP/Laravel/HTML/CSS/JavaScript</b></p>
        
                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg></a>

                    <a href="{{route('/consultorio')}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></a>
                    <div class="andamento">Em Andamento</div>
            </div>

            <div class="card">
                <img src="/img/codificacao-da-web.png">
                <h3>Sistema de Imobiliaria</h3>
                <p>Sistema para divulgação de imóveis, com busca filtros e etc</p>
                <p><b>Tecnologias: PHP/Laravel/HTML/CSS/JavaScript</b></p>
                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg></a>

                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></a>
                    <div class="breve">Em Breve</div>
               
            </div>

            <div class="card">
                <img src="/img/codificacao-da-web.png">
                <h3>Sistema para aluguel de veículos</h3>
                <p>Sistema de gestão, incluindo login, cadastro e nivel de permissão de usuário</p>
                <p><b>Tecnologias: PHP/Laravel/HTML/CSS/JavaScript</b></p>
                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg></a>

                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></a>
                    <div class="breve">Em Breve</div>
            </div>

            {{-- <div class="card">
                <img src="/img/codificacao-da-web.png">
                <h3>Sistema com node e express</h3>
                <p>Sistema de gestão, incluindo login, cadastro e nivel de permissão de usuário</p>
                <p><b>Tecnologias: PHP/Laravel/HTML/CSS/JavaScript</b></p>
                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg></a>

                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></a>
                    <div class="breve">Em Breve</div>
            </div>

            <div class="card">
                <img src="/img/codificacao-da-web.png">
                <h3>Sistema com react</h3>
                <p>Sistema de gestão, incluindo login, cadastro e nivel de permissão de usuário</p>
                <p><b>Tecnologias: PHP/Laravel/HTML/CSS/JavaScript</b></p>
                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg></a>

                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></a>
                    <div class="breve">Em Breve</div>
            </div>

            <div class="card">
                <img src="/img/codificacao-da-web.png">
                <h3>Sistema com react</h3>
                <p>Sistema de gestão, incluindo login, cadastro e nivel de permissão de usuário</p>
                <p><b>Tecnologias: PHP/Laravel/HTML/CSS/JavaScript</b></p>
                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg></a>

                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></a>
                    <div class="breve">Em Breve</div>
            </div> --}}
       </div>
   </section>

   <div class="my-exp">
        <h1 class="experiencias">Minhas experiências profissonais</h1>

        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Estudos e Projetos - 01/2020 até 02/2021.
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <p>No decorrer do ano eu tive contato com PHP,HTML,CSS E JavaScript, onde além de estudar
                        fiz alguns projetos como estudo.
                    </p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Agência F3X - 02/2021 até 07/2021. PJ
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <h6>Desenvolvedor Back-end</h6>
                   <p>Nessa empresa eu participei de diversos projetos o principal foi em um marketplace internacional
                       onde tinha uma equipe aqui no Rio de Janeiro, e o restante pelo mundo, China, Índia e Paquistão.
                       Usei Php e Laravel no back-end, dando manutenção, suporte, correção de bugs e novas freatures.
                       e no front-end utilizando html,css e javascript. Utilizei também o Wordpress para criação
                       de diversos sites para a empresa, utilizando Elementor.
                   </p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Learning Update - 08/2021 até 10/2021. PJ
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <h6>Desenvolvedor Front-end</h6>
                    <p>Nessa Empresa eu pude participar de um sistema de educação a distancia como principal produto
                        E na criação de um sistema de medicina. Nesses sistemas foram utilizado REACT.JS e NEXT.JS, 
                        no front-end. e no back-end php com laravel. Minha atuação foi levantar as telas do zero com
                        essas técnologias, depois do projeto finalizado, meu contrato foi encerrado.
                    </p>
                </div>
                </div>
            </div>
            </div>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Freelancer, Clientes e Empresas - 11/2021 até o momento.
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> 
                            <h6>Desenvolvedor Fullstack</h6>
                            <p>Nessa nova etapa eu decidi focar mais nos meus estudos e projetos 
                                pessoais, clientes e empresas. no decorrer desse tempo eu prestei serviços para clientes 
                                pessoais e para empresas como por exemplo: MULTTI, eu prestei serviço para resolver freatures 
                                novas + bugs por tempo determinado com PHP/Laravel. em outra empresa FIOCRUZ, eu pude participar
                                de grande correções no sistema deles, sistema complexo feito com PHP e Laravel legado, e Bootstrap 
                                + Jquery no front. Nessa empresa eu pude estar participando de, correção de bugs, fratures novas, 
                                manutenção e etc. eu presto serviço a eles de 02/2022 até o momento. Em paralelo a isso eu faço freelas
                                para clientes pessoais tanto no front-end quanto no back-end.
                            </p>
                        </div>
                    </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    Life Tecnologia - 02/2022 até 03/2023.
                </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                <div class="accordion-body">
                    <h6>Desenvolvedor Back-end</h6>
                    <p>Nessa empresa eu participei na manutenção e melhorias no sistema da FIOCRUZ.
                        O projeto é de educação, mestrado, doutorado e pós-graduação. Nesse projeto eu atuei com PHP/Laravel no
                        backend, mas também em alguns momentos eu atuei no frontend com Html,Css,Javascript,jquery,Bootstrap.
                    </p>
                </div>
                </div>
            </div>
            </div>
    </div>

    <div class="cv-info">
            <!-- Button trigger modal -->
            <div data-bs-toggle="modal" data-bs-target="#exampleModal">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Informações e Curriculo
                </button>
                </div>
                
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" style="color:red;">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg> -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Site desenvolvido com</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        PHP, Laravel , Mysql , HTML , CSS e JavaScript. 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary"><a href="{{route('/baixar')}}" id="baixar-cv"> Download CV</a></button>
                    </div>
                    </div>
                </div>
                </div>
        </div>

    @if(!session('adm'))
    <div class="meu-form">    
        <form action="/user" method="POST" >
            @csrf

            <h1 class="mensagem">Deixe um comentário!</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <input type="text" class="form-control" id="validationCustomUsername" name="name" placeholder="Seu nome" >
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Seu email" >
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario" placeholder="Seu comentário" ></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" id="btn-enviar" value="Enviar">
            </div>
        </form>
    </div>
    @endif

    @if(count($usuarios) > 0)
    @if(session('adm'))
        <h3 class="coments">Comentários</h3>
    @endif

    @foreach($usuarios as $usuario)
    <div class="comentarios">
        <div class="card" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            @if(session('adm'))
            <form method="POST" action="/user/{{ $usuario->id }}">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger" id="btn-excluir" type="submit">x</button>
            </form>
            @endif
            
            <div class="card-body">
                <h5>Comentário:</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                    <h6 class="card-title"> {{$usuario->name}} </h6>
                <p class="card-text"> {{$usuario->comentario}} </p>
                <p class="card-text"> {{$usuario->updated_at = substr($usuario->updated_at, 0,10)}} </p>
            </div>
        </div>
    </div>
    @endforeach
    @else
        <div class="sem-comentario">
            <p>Não existe comentários!</p>
        </div>
        
    @endif
    @endsection
