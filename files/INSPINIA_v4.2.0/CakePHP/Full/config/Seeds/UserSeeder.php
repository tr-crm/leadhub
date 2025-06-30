<?php

declare(strict_types=1);

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Phinx\Seed\AbstractSeed;

/**
 * Users seed.
 */
class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'User',
                'email' => 'user@inspinia.com',
                'password' => (new DefaultPasswordHasher())->hash('password')
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
