<?php

use think\migration\Migrator;

class CreateUser extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $table = $this->table('users');
        $table->addColumn('username','string')
            ->addColumn('password','string',['default' => ''])
            ->addColumn('created_at','timestamp',['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at','timestamp',['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('deleted_at','timestamp',['null' => true])
            ->addColumn('email', 'string')
            ->addColumn('phone', 'string')
            ->addColumn('wx_open_id', 'string',['null' => true])
            ->addColumn('qq_open_id', 'string',['null' => true])
            ->addColumn('gh_open_id', 'string',['null' => true])
            ->addIndex('username',['unique' => true])
            ->save();
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
