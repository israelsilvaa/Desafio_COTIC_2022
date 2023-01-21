@extends('layouts.main')

@section('title', 'formulario')

@section('content')


    <div class="col-md-8 offset-md-2 form-back rounded">

        <div class="accordion " id="accordionExample">
            <div class="accordion-item ">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Sobre a COTIC
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-dark bg-gradient text-white">
                        <p class="card-text">
                            A Coordenadoria de Tecnologia da Informação e Comunicação (COTIC), controla as atividades
                            relacionadas à identificação e tratamento das necessidades tecnológicas da PROEG. É do seu dever
                            o
                            desenvolvimento e manutenção de sistemas de informações que auxiliam os diversos setores na
                            condução
                            ágil e eficiente de suas atividades, estabelecendo ações antecipadas para solucionar questões
                            que
                            venham promover o melhor gerenciamento das Diretorias da PROEG. A COTIC é responsável também
                            pelo
                            parque de informática e de infraestrutura, pelos sistemas
                            informatizados da PROEG e pela segurança da informação do ambiente informatizado de todos os
                            setores
                            da Pró-Reitoria, provendo a aplicação de ações e procedimentos, baseados nas normas e padrões
                            nacionais.
                        </p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Informações sobre o desafio prático:
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-dark bg-gradient text-white">
                        <p>

                            O desafio deve ser desenvolvido com as seguintes tecnologias e linguagens:<br>
                            ● HTML, PHP e MySQL;<br>
                            ● Javascript/CSS (opcionais - serão avaliados como um diferencial).<br>
                            É permitido consultar a internet durante a execução do desafio, porém tente construir e
                            entender sua solução, pois você irá apresentá-la para a equipe, caso seja aprovado nesta
                            etapa.<br>
                            Estão disponibilizados no email, anexos contendo o arquivo do banco de dados a ser
                            utilizado e a pasta com o projeto onde deverá ser realizado o desafio.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        As etapas do desafio são:
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-dark bg-gradient text-white">
                        <p>
                            1. No menu principal do site, deve ser alterado o conteúdo do botão “Home” para “Início”
                            e criado um novo botão que irá redirecionar para uma nova página (“formulario.html”).<br>
                            2. Na nova página, criar um formulário para inserir uma ideia para o novo personagem
                            da terceira temporada de The Boys. O formulário deve conter os seguintes campos:<br>
                            nome do personagem, idade, possíveis atores/atrizes, alinhamento* e biografia.
                            *Alinhamento deve conter as opções “The boys” ou “Supes”.<br>
                            3. Adicionar lógica ao formulário e fazer com que as informações sejam recebidas pelo
                            back-end (em PHP). Além disso, persistir (salvar as informações) no banco de dados
                            MySQL.<br>
                            4. Exibir todas as informações dos personagens na tela em “lista.html”.<br>
                            5. Na exibição de informações, exibir o nome dos personagens “The Boys” em azul e o
                            nome dos personagens “Supes” em vermelho.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
