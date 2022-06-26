<?php


class User 
{
    public function profile()
    {
        return null;
    }
}

class Profile
{
    public function employment()
    {
        return 'Software Developer';
    }
}

$user = new User;

// echo $user->profile()->employment();

// $profile = $user->profile();

// if ($profile) {
//     echo $profile->employment();
// }

var_dump($user?->profile()?->employment());