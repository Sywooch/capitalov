<?php

use yii\db\Schema;
use yii\db\Migration;

class m150826_104209_wallet extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE galaxysss_4.cap_users DROP paid_time;');
    }

    public function down()
    {
        echo "m150826_104209_wallet cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
