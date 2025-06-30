<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;

use Cake\Validation\Validator;

class UsersTable extends Table
{

    //    public function validationDefault(Validator $validator): Validator
    //    {
    //        $validator
    //            ->email('email', 'Please enter a valid email address.')
    //            ->add('email', 'unique', [
    //                'rule' => 'validateUnique',
    //                'provider' => 'table',
    //                'message' => 'This email address is already taken.',
    //            ]);
    //
    //        return $validator;
    //    }

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setDisplayField('email');
        $this->setPrimaryKey('id');
    }

    //    public function buildRules(RulesChecker $rules): RulesChecker {
    //        $rules->add($rules->isUnique(['email']),[
    //            'message' => 'This email address is already taken.',
    //            'errorField' => 'email'
    //        ]);
    //        return $rules;
    //    }
}
