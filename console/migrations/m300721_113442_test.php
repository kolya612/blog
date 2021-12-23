<?php

use yii\db\Migration;

class m300721_113442_test extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%test}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(250)->defaultValue(''),
            'status' => $this->smallInteger()->notNull()->defaultValue(1)
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%test}}');
    }
}
