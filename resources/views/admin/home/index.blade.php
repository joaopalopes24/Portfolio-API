@extends('layouts.admin')
@section('title', $name)
@section('subtitle', $name)
@section('caption', 'Status')
@section('content')
<!-- Home Content -->
<div class="card card-success card-outline">
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <img src="{{asset('plugins/images/frame(01).jpeg')}}" class="d-block w-100">
        <h2>Trabalho em Equipe</h2>
        <p>
          A equipe consegue trabalhar de forma em que seus integrantes sabem exatamente o que a
          outra está fazendo, suas ideias e seus esforços são direcionados para um objetivo em
          comum. Todos dentro da equipe são responsáveis pelas atividades exercidas. Portanto
          cada membro é responsável pelo sucesso de uma tarefa bem feita, ou pelo fracasso de
          uma operação mal sucedida.
        </p>
      </div>
      <div class="col-md-4">
        <img src="{{asset('plugins/images/frame(02).jpeg')}}" class="d-block w-100">
        <h2>Proatividade</h2>
        <p>
          A proatividade é a capacidade de antecipar situações, estando preparado para lidar com
          elas antes mesmo de acontecerem. Assim, é possível antever um problema e planejar sua
          solução de forma independente, sem que ninguém precise lhe dizer o que fazer. O
          profissional proativo é aquele que não espera ordens para se movimentar. Ele vê uma
          torneira pingando e, ao invés de procurar seu superior para saber o que fazer, fecha-a
          por conta própria.
        </p>
      </div>
      <div class="col-md-4">
        <img src="{{asset('plugins/images/frame(03).jpg')}}" class="d-block w-100">
        <h2>Inovação</h2>
        <p>
          A inovação no mercado de trabalho é uma realidade, e esquivar-se dela enquanto
          profissional significa perder boas oportunidades, estando sempre atrás da concorrência.
          Tanto as empresas quanto seus colaboradores precisam se capacitar para tirar o melhor
          proveito das novas tecnologias. Contudo, sabemos que essa nem sempre é uma missão
          descomplicada, afinal, estar alinhado às tendências requer planejamento e treinamento.
        </p>
      </div>
    </div>
    {{-- Divisão --}}
    <hr class="featurette-divider">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="mb-4 font-italic text-center">
          Características técnicas do Sistema
        </h3>
      </div>
      <div class="col-sm-12">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block text-warning">Qual a função do sistema?</strong>
            <p class="card-text mb-auto">
              Este sistema foi criado com o intuito de atender o desafio proposto pela empresa OM30,
              visando mostrar meus conhecimentos técnicos sobre desenvolvimento FullStack em PHP. O
              painel administrativo conta um sistema para gerenciar permissões dos usuários, além de
              monitoramento do sistema mostrando todos os logs. Caso queiram testar o sistema, podem
              utilizar o email “administrator@example.com” e a senha “12345678”.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block text-primary">FrontEnd</strong>
            <p class="mb-auto">
              Baseei o FrontEnd do sistema no template do AdminLTE 3, utilizando o BootStrap 4.6, CSS,
              HTML e JavaScript. A parte de FrontEnd do sistema é básico e simples, mas bem intuitivo,
              fácil de aprender e atraente para o usuário final. As telas do sistema são todas responsivas,
              se adaptando ao tamanho da tela do usuário. A logo utilizada foi desenvolvida por mim mesmo.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block text-success">BackEnd</strong>
            <p class="mb-auto">
              Esse sistema foi desenvolvido utilizando o framework de PHP Laravel, na sua versão 8. Utilizei
              alguns pacotes adicionais para incrementar funcionalidades ao sistema, como o Spatie Permission
              para controle de permissões de usuário, o Laravel UI para login e redefinição de senha, o Activity
              Log para geração de todos os logs dos sistemas que envolvam alterações no banco de dados, o Faker
              PHP para popular o Banco de Dados com informações mais reais, e o Validator Docs para validação
              do CPF e CNS.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block text-danger">Banco de Dados</strong>
            <p class="mb-auto">
              Utilizei uma funcionalidade poderosíssima do framework para criação das tabelas do banco de dados,
              que são as migrations. Utilizei como banco de dados principal o PostgreSQL, um banco simples e
              fácil de usar. A utilização de migrations é importante por versionar o schema de sua aplicação,
              além de uma fácil adaptação a diferentes bancos de dados.
            </p>
          </div>
        </div>
      </div>
    </div>
    {{-- Divisão --}}
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Objetivos Pessoais</h2>
        <p class="lead">
          Meu nome é João Pedro. Sou apaixonado por programação, adoro explorar novas tecnologias e ferramentas,
          desenvolvendo aplicações web. Adoro motocicletas e viajar, principalmente em família e com minha
          companheira Kevellyn Mariana. Meus objetivos profissionais também são objetivos pessoais, mas acima
          de tudo, tenho o objetivo de ter uma família abençoada, com filhos maravilhosos, e que eu possa
          proporcionar tudo de melhor para eles. Busco viajar bastante por vários lugares do mundo, com
          intuito de conhecer esse nosso planeta rico e esplêndido.
        </p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('plugins/images/block(01).jpeg')}}" class="d-block w-100">
      </div>
    </div>
    {{-- Divisão --}}
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Qualificações</h2>
        <p class="lead">
          Estudante de Engenharia de Sistemas pela Universidade Estadual de Montes Claros (UNIMONTES).
          Trabalho com desenvolvimento web empregando linguagens e ferramentas de programação, como
          Laravel, JavaScript, CSS, HTML5, GIT, entre outras. Tenho experiência nas áreas de Ciências
          da Computação, com ênfase em Programação e Gerenciamento de Redes. Viso crescer e aprimorar
          meus conhecimentos no ramo, aprendendo novas tecnologias, linguagens, aumentando o leque de
          conhecimento e ferramentas que domino.
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{asset('plugins/images/block(02).jpeg')}}" class="d-block w-100">
      </div>
    </div>
    {{-- Divisão --}}
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Objetivos Profissionais</h2>
        <p class="lead">
          Busco novos desafios em minha carreira e uma colocação no mercado, pois desejo continuar a
          desenvolver meus talentos e colaborar com os meus conhecimentos e experiências para a
          construção de grandes resultados. Sendo assim, procuro uma empresa onde eu possa me
          desenvolver profissionalmente, demonstrar minhas competências e habilidades técnicas e
          emocionais e, em conjunto com os meus colegas e gestores, eu possa colaborar para o
          crescimento da organização e do grupo.
        </p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('plugins/images/block(03).jpeg')}}" class="d-block w-100">
      </div>
    </div>  
  </div>
</div>
<!-- End Content -->
@endsection