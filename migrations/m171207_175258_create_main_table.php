<?php

use yii\db\Migration;

/**
 * Handles the creation of table `main`.
 */
class m171207_175258_create_main_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('main', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('main');
    }
}
