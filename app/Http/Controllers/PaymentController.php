<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public static function store()
    {
      $faker = new \Faker\Generator;
      $payment = new Payment;
      $faker->addProvider(new \Faker\Provider\en_US\Person($faker));
      $faker->addProvider(new \Faker\Provider\Payment($faker));
      $faker->addProvider(new \Faker\Provider\DateTime($faker));

      $payment->name = $faker->name;
      $payment->card_type = $faker->creditCardType;
      $payment->card_number = $faker->creditCardNumber;
      $payment->card_expiration = $faker->creditCardExpirationDateString;
      $payment->save();
    }
}
