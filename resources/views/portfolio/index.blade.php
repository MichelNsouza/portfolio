@extends('templates.portfolio')

@section('content')
    <div class="apresentacao">
        <h1>Olá, Mundo!</h1>
        <p>Meu nome é Michel Souza, sou um desenvolvedor FullStack, focado em aprimorar minhas habilidades em PHP e Laravel.</p>
        <p>Bem-vindo ao meu portfólio! Sinta-se à vontade para explorar e entrar em contato comigo.</p>
        <div class="social-links">
            <a href="https://github.com/MichelNsouza/" target="_blank">
                <img class="social-icon" src="img/icons/github-logo.png" alt="GitHub">
            </a>

            <a href="https://www.linkedin.com/in/michel-n-souza/" target="_blank">
                <img class="social-icon2" src="img/icons/linkedin-logo.png" alt="LinkedIn">
            </a>
        </div>
    </div>

    <div class="portfolio">

        @foreach($projetos as $projeto)
            <div class="project-card">
                <img src="{{$projeto->imagem}}" alt="{{ $projeto->alt }}">
                <div class="title">{{ $projeto->titulo }}</div>
                <div class="description">
                    <p>{{ $projeto->descricao }}</p>
                </div>
                <div class="links">
                    <a href="{{ $projeto->url }}" target="_blank">Ver Projeto</a>
                    <a href="{{ $projeto->codigo_fonte }}" target="_blank">Código Fonte</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
