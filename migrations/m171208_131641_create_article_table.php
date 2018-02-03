<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m171208_131641_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        /*$this->createTable('article', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()notNull(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'full_text' => $this->text(),notNull(),
            'hits' => $this->integer()defaultValue(0),
            'image' => $this->string()defaultValue('no-img.jpg'),
            'date' => $this->date(),
        ]);*/

        $this->execute("CREATE TABLE `news_db`.`article` (
            `id` INT(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),
            `user_id` INT(11) NOT NULL,
            `category_id` INT(11) NOT NULL,
            `title` VARCHAR(255) NOT NULL,
            `full_text` TEXT NOT NULL,
            `teg` VARCHAR(255) NULL,
            `hits` INT(11) NOT NULL DEFAULT 0,
            `image` VARCHAR(255) NOT NULL DEFAULT 'no-img.jpg',
            `date` DATE NOT NULL
        )");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
