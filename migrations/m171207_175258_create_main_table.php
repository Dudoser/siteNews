<<<<<<< HEAD
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
=======
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
>>>>>>> 82d3f18a54ab3c385f982895ef9fbaa6c98598e2
