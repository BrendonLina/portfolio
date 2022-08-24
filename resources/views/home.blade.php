@extends('layout.site')

@section('content')
   <header class="header">
       <div class="headline">
           <h2 id="bem-vindo">Olá,Seja bem vindo!</h2>
           <h2 id="portfolio">Essa é minha História</h2>
           <p>Sou <b>Brendon lina</b> tenho 25 anos, sou desenvolvedor web há {{$exp}} anos, atuando com PHP, Laravel, Node, React,
               Html, Css e JavaScript. Atuo principamente com back-end por escolha, mas também sei desenvolver o front-end.
               no decorrer desses anos eu atuei em algumas empresas, e também em alguns sistemas própio com enfase
               nos estudos, enfim esse é meu portfólio.
           </p>
           <a href="#" class="contact-btn">FALE COMIGO</a>
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
                <h3>Sistema de login com authenticação</h3>
                <p>Sistema com busca no banco de dados, com validações e requisições.</p>
                <p><b>Tecnologias: PHP/Laravel/HTML/CSS/JavaScript</b></p>
        
                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg></a>

                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></a>
            </div>

            <div class="card">
                <img src="/img/codificacao-da-web.png">
                <h3>Sistema cadastro de usuario</h3>
                <p>Sistema com gerenciamento de conta, e com nivel de acesso e validações.</p>
                <p><b>Tecnologias: PHP/Laravel/HTML/CSS/JavaScript</b></p>
                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg></a>

                    <a href="https://www.github.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></a>
               
            </div>

            <div class="card">
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
         
            </div>

            <div class="card">
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
         
            </div>
       </div>
   </section>

   <div class="my-exp">
        <h1 class="experiencias">Minhas expêriencias profissonais</h1>

        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Freela,Estudo e Projetos - 01/2020 até 02/2021.
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
                    <p>Nessa Empresa eu pude participar de um sistema de educação a distãncia como principal produto
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
                    <div class="accordion-body"> <p>Nessa nova etapa eu decido focar mais nos meus estudos e projetos 
                        paralelos pessoas, clientes e empresas. no decorrer desse tempo eu prestei serviços para clientes pessois e para empreas
                        como por exemplo: MULTTI, eu prestei serviço para resolver freatures novas + bugs por tempo 
                        determinado. em outra empresa FIOCRUZ, eu pude participar de grande correções no sistema deles,
                        sistema complexo feito com PHP e Laravel legado, e Bootstrap + Jquery no front. Nessa empresa
                        eu pude estar participando de, correção de bugs, fratures novas, manutenção e etc. eu presto 
                        serviço a eles de 02/2022 até o momento. Em paralelo a isso eu faço freelas para clientes pessoais
                        tanto no front-end quanto no back-end.
                    </p></div>
                    </div>
                </div>
    </div>

    <div class="meu-form">    
        <form action="/user" method="POST" >
            @csrf
            <h1 class="mensagem">Deixe um comentário!</h1>
            <div class="mb-3">
                <input type="text" class="form-control" id="validationCustomUsername" name="name" placeholder="Seu nome" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Seu email" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario" placeholder="Seu comentário" required></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" id="btn-enviar" value="Enviar">
            </div>
        </form>
    </div>
    @if(count($usuarios) > 0)
    @foreach($usuarios as $usuario)
    <div class="comentarios">
        <div class="card" style="width: 18rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            @if($user == 1)
            <button class="btn btn-danger" id="btn-excluir" type="submit"><a href="{{route('/login')}}">x</a></button>
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <div class="card-body">
                <h5 class="card-title">User: {{$usuario->name}} </h5>
                <p class="card-text"> {{$usuario->comentario}} </p>
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
