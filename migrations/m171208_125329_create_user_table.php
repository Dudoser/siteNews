<<<<<<< HEAD
<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m171208_125329_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        /*$this->createTable('user', [
            'id' => $this->primaryKey(),
            'f_name' => $this->string()->notNull(),
            'l_name' => $this->string()->notNull(),
            'auth_key' => $this->string(),
            'password' => $this->string(),
            'image'=> $this->string()->defaultValue('no-image.jpg'),
            'email' => $this->string()->notNull(),
            'text' => $this->text(),
        ]);*/

        $this->execute("CREATE TABLE `news_db`.`user` ( 
            `id` INT(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`) , 
            `f_name` VARCHAR(255) NULL , 
            `l_name` VARCHAR(255) NULL , 
            `auth_key` VARCHAR(255) NOT NULL , 
            `password` VARCHAR(255) NOT NULL , 
            `image` VARCHAR(255) NOT NULL DEFAULT 'no-image.jpg' , 
            `email` VARCHAR(255) NULL , 
            `text` TEXT NOT NULL 
        )");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
=======
<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m171208_125329_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        /*$this->createTable('user', [
            'id' => $this->primaryKey(),
            'f_name' => $this->string()->notNull(),
            'l_name' => $this->string()->notNull(),
            'auth_key' => $this->string(),
            'password' => $this->string(),
            'image'=> $this->string()->defaultValue('no-image.jpg'),
            'email' => $this->string()->notNull(),
            'text' => $this->text(),
        ]);*/

        $this->execute("CREATE TABLE `news_db`.`user` ( 
            `id` INT(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`) , 
            `f_name` VARCHAR(255) NULL , 
            `l_name` VARCHAR(255) NULL , 
            `auth_key` VARCHAR(255) NOT NULL , 
            `password` VARCHAR(255) NOT NULL , 
            `image` VARCHAR(255) NOT NULL DEFAULT 'no-image.jpg' , 
            `email` VARCHAR(255) NULL , 
            `text` TEXT NOT NULL 
        )");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
>>>>>>> 82d3f18a54ab3c385f982895ef9fbaa6c98598e2
