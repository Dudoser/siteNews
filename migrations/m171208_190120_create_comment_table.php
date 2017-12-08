<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m171208_190120_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        /*$this->createTable('comment', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'article_id' => $this->integer()->notNull(),
            'comment_text' => string()->notNull(),
            'like' => $this->integer(),
            'date' => $this->date(),
        ]);
*/
        $this->execute("CREATE TABLE `news_db`.`comment`(
            `id` INT(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY(`id`),
            `parent_id` INT(11) NOT NULL DEFAULT 0,
            `user_id` INT(11) NOT NULL,
            `article_id` INT(11) NOT NULL,
            `comment_text` VARCHAR(255) NOT NULL,
            `like` INT(11) NULL,
            `date` DATE NOT NULL
        )");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment');
    }
}
