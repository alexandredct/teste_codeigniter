<div class="panel-heading">Cadastro de novo usuário</div>
            <div class="panel-body">

            
<?php
    $this->load->helper('form');
    echo form_open("cadastro/novo_usuario");//irá chamar a função novo_usuario no arquivo Cadastro        
    echo form_label("Nome", "nome"); //form_label([Informação que será exibida], "id do campo")
    echo form_input(array(
        "name" => "nome",
        "class" => "form-control",
        "id" => "nome",
        "maxlenght" => "100"
    ));

    echo form_label("Email", "email");
    echo form_input(array(
        "name" => "email",
        "class" => "form-control",
        "id" => "email",
        "maxlenght" => "100"
    ));

    echo form_label("Sexo", "sexo"). "<br/>";
    echo form_radio('sexo', 'M', TRUE)."Masculino  ";    
    echo form_radio('sexo', 'F', FALSE)."Feminino<br/>";

    echo form_label("Data de nascimento","data_de_nascimento");
    echo form_input(array(
        "name" => "data_de_nascimento",
        "class" => "form-control",
        "id" => "data_de_nascimento",
        "type" => "DATE"
    ));

    echo "<br/>";

    echo form_button(array(
       "class" => "btn btn-primary",
       "content" => "Salvar",
        "type" => "submit"
    ));

    echo form_close();
?>  
    </div>        
</div>