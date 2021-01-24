<?php

use yii\db\Migration;

/**
 * Class m210124_194105_books
 */
class m210124_194105_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'isbn' => $this->string(),
            'pageCount' => $this->integer(),
            'publishedDate' => $this->datetime(),
            'thumbnailUrl' => $this->string(),
            'shortDescription' => $this->text(),
            'longDescription' => $this->text(),
            'status_id' => $this->integer(),
            'authors_id' => $this->string(),
            'categories_id' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('books');
    }
}
