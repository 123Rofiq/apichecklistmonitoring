<?php
use yii\db\Schema;
use yii\db\Migration;

class m151214_051311_create_user extends Migration
{
    private $_table = 'user';
    public function up()
    {
        $this->createTable($this->_table, [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'access_token' => $this->string(32)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull()
        ]);
    }
    public function down()
    {
        $this->dropTable($this->_table);
    }
}
?>
