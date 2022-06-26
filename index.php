<?php

class User
{

    public function __construct(protected $name)
    {
    }
}

class Plan
{

    public function __construct(protected string $name = 'monthly')
    {
    }
}

class Signup
{

    public function __construct(protected User $user, protected Plan $plan)
    {
    }
}

$user = new User('john_doe');
$plan = new Plan('Yearly');

$signup = new Signup($user, $plan);

var_dump(($signup));
