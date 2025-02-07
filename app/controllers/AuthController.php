<?php

class AuthController extends Controller
{
    public function login()
    {
        $dados = array();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email          = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $senha          = filter_input(INPUT_POST, 'senha');

            if ($email && $senha) {
                // Verificar se o email pertence a um aluno
                $alunoModel = new Aluno();
                $aluno = $alunoModel->buscarAluno($email);

                if ($aluno) {
                    $tipo_usuario = 'aluno';
                    $usuario = $aluno;
                    $campoSenha = 'senha_aluno';
                    $campoId = 'id_aluno';
                    $campoNome = 'nome_aluno';
                    $campoEmail = 'email_aluno';
                } else {
                    // Verificar se o email pertence a um professor
                    $professorModel = new Professor();
                    $professor = $professorModel->buscarProf($email);

                    if ($professor) {
                        $tipo_usuario = 'professor';
                        $usuario = $professor;
                        $campoSenha = 'senha_professor';
                        $campoId = 'id_professor';
                        $campoNome = 'nome_professor';
                        $campoEmail = 'email_professor';
                    } else {
                        $usuario = null;
                    }
                }

                if ($usuario && $usuario[$campoSenha] === $senha) {
                    var_dump($usuario);
                    $_SESSION['userId']     = $usuario[$campoId];
                    $_SESSION['userTipo']   = $tipo_usuario;
                    $_SESSION['userNome']   = $usuario[$campoNome];
                    $_SESSION['userEmail']  = $usuario[$campoEmail];

                    // Redirecionar para a página de Dashboard
                    header('Location:' . BASE_URL . 'dashboard');
                    exit;
                } else {
                    $_SESSION['login-erro'] = 'E-mail ou Senha incorretos';
                }
            } else {
                // Credenciais inválidas - Dados incompletos
                $_SESSION['login-erro'] = 'Preencha todos os dados';
            }
            header('Location: ' . BASE_URL . '?login-erro=1');
            exit;
        }

        // Se o método não for POST
        header('Location: ' . BASE_URL . '?login-erro=1');
        exit;
    }

    public function sair() {
        session_unset();
        session_destroy();
        header('Location:' . BASE_URL);
        exit;
    }
}