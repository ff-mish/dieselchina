<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version24 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('sl_store', 'email', 'string', '255', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('sl_store', 'email');
    }
}