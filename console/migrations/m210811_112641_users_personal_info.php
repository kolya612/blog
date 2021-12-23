<?php

use yii\db\Migration;

/**
 * Class m210811_112641_users_personal_info
 */
class m210811_112641_users_personal_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('{{%user}}', 'first_name', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'last_name', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'phone', $this->string()->defaultValue(null));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'first_name');
        $this->dropColumn('{{%user}}', 'last_name');
        $this->dropColumn('{{%user}}', 'phone');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210811_112641_users_personal_info cannot be reverted.\n";

        return false;
    }
    */
}
