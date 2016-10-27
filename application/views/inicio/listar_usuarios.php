<div class="panel panel-primary">
    <div class="panel-heading">Usuários Cadastrados</div>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
            </tr>    
        <?php
        $this->load->helper("date");
        foreach ($usuarios as $usuario){
            echo "<tr>"
                    . "<td>{$usuario['nome']}</td>"
                    . "<td>{$usuario['email']}</td>"
                    . "<td>".dataMysqlParaPtbr($usuario['data_nascimento'])."</td>"
              . "</tr>";
        }
        ?>
                </tr>
        </table>
</div>