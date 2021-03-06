<?php

use yii\db\Migration;

class m090821_090500_workouts_exercises extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%workouts_exercises}}', [
            'id' => $this->primaryKey(),
            'workout_id' => $this->integer()->defaultValue(0),
            'exercise_id' => $this->integer()->defaultValue(0)
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%workouts_exercises}}');
    }
}
