<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Usuarios_controller extends CI_Controller{
    public function novo_usuario(){                     
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "sexo" => $this->input->post("sexo"),
            "data_nascimento" => $this->input->post("data_de_nascimento")
        );        
        $this->load->model("usuarios_model"); //Carrega o MODEL específico com as funções para tratar USUÁRIOS
        $this->usuarios_model->novo($usuario);
        $this->load->template("inicio/index.php");
    }
    
    public function listar_todos_usuarios(){
        $this->load->model("usuarios_model");
        $usuarios = $this->usuarios_model->todos();
        $dados = array ("usuarios" => $usuarios);
        $this->load->template("inicio/listar_usuarios.php", $dados);
    }
    
    public function formulario(){
        $this->load->template("inicio/cadastro_usuario.php");
    }
    
}