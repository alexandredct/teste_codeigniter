<?php defined('BASEPATH') OR exit('O acesso aos scripts não permitido');

/*
 * Para executar o migration, deve ser feito:
 * 1 - Criar o controller Migrate
 * 2 - Carregar a página localhost/exemplo/migrate no navegador
 */

class Migration_Cria_tabelas_iniciais extends CI_Migration{
    public function up(){//será executada quando o número da migration atual for maior ou igual ao número definido no título do arquivo
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'auto_increment' => TRUE
            ),
            'nome' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'sexo' => array(
                'type' => 'CHAR'
            ),
            'data_nascimento' => array(
                'type' => 'DATE'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('usuario');        
    }
    
    public function down(){
        $this->dbforge->drop_table('usuario');
    }
    
}