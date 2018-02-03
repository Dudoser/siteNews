<<<<<<< HEAD
<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m171208_125843_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        /*$this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'name' => string(),
            'description' => string(),
        ]);*/

        $this->execute("CREATE TABLE `news_db`.`category` (
            `id` INT(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
            `parent_id` INT(11) NOT NULL DEFAULT 0,
            `name` VARCHAR(255) NOT NULL,
            `description` VARCHAR(255) NULL,
            PRIMARY KEY (id)
        )");



    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
=======
<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m171208_125843_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        /*$this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'name' => string(),
            'description' => string(),
        ]);*/

        $this->execute("CREATE TABLE `news_db`.`category` (
            `id` INT(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
            `parent_id` INT(11) NOT NULL DEFAULT 0,
            `name` VARCHAR(255) NOT NULL,
            `description` VARCHAR(255) NULL
        )");



    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
>>>>>>> 82d3f18a54ab3c385f982895ef9fbaa6c98598e2
