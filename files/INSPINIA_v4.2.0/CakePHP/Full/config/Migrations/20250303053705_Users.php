<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string');
        $table->addColumn('email', 'string');
        $table->addIndex('email', ['unique' => true]);
        $table->addColumn('password', 'string');
        $table->create();
    }
}
