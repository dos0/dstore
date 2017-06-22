<?php

namespace App\Model;

use Dos0\Framework\Validator\Validator;

class Foo
{
    public $id = 10;
    public $name = 'Product name';
    public $price = 100;
    public $email = 'do_s@ukr.net';
    public $description = 'Some long text about of the product features';
    public $code = 'XX-0011';

    private $rules = [
        ['id, name', 'required'],
        ['id, price', 'numerical'],
        ['price', ['numerical', 'min' => 10, 'max' => 10000]],
        ['email', 'email'],
        ['code', ['regexp', 'regexp' => '/[a-zA-Z]{2}-\d{4}/i']],
    ];

    /**
     * @return array
     */
    public function getRules(): array
    {
        return $this->rules;
    }


}