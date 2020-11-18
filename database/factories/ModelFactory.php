<?php

$factory->define(User::class, function(Faker\nerator $faker){
  return[
    'name'=>$faker->name,
    'email'=>$faker->email,
    'password'=> password_hash('123456', PASSWORD_BCRYPT)
  ];
});


 ?>
