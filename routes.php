<?php

    use App\Controller\{
        AlunoController,
        inicialController,
        LoginController,
        AutorController,
        CategoriaController,
        LivroController,
        EmprestimoControler
    };
+
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($url)
    {
        case '/':
            inicialController::index();
        break;

        // rotas para login
        case '/login':
            LoginController::index();
        break;

        case '/logout':
            LoginController::logout();
        break;

        // rotas para alunos
        case '/aluno':
            AlunoController::index();
        break;

        case '/aluno/cadastro':
            AlunoController::cadastro();
        break;

        case '/aluno/delete':
            AlunoController::delete();
        break;

        // rotas para autores
        case '/autor':
            AutorController::index();
        break;

        case '/autor/cadastro':
            AutorController::cadastro();
        break;

        case '/autor/delete':
            AutorController::delete();
        break;
        
        // rotas para categoria
        case '/categoria':
            CategoriaController::index();
        break;

        case '/categoria/cadastro':
            CategoriaController::cadastro();
        break;

        case '/categoria/delete':
            CategoriaController::delete();
        break;

         
        // rotas para livro
        case '/livro':
            LivroController::index();
        break;

        case '/livro/cadastro':
            LivroController::cadastro();
        break;

        case '/livro/delete':
            LivroController::delete();
        break;

        // rotas para emprestimo
        case '/emprestimo':
            EmprestimoControler::index();
        break;

        case '/emprestimo/cadastro':
            EmprestimoControler::cadastro();
        break;

        case '/emprestimo/delete/':
            EmprestimoControler::delete();
        break;
    }

?>