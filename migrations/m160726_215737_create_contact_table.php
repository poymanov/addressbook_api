<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact`.
 */
class m160726_215737_create_contact_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'group' => $this->string(50),
            'phone' => $this->string(50),
            'email' => $this->string(50)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact');
        return true;
    }
}
