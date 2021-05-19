<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'mother_name' => $this->faker->name('female'),
            'birthday' => $this->faker->date(),
            'cpf' => $this->faker->cpf(),
            'cns' => $this->faker->regexify('[0-9]{15}'),
            'cep' => $this->faker->ean8(),
            'adress' => $this->faker->streetName(),
            'number' => $this->faker->numberBetween(1, 1000),
            'complement' => $this->faker->secondaryAddress(),
            'district' => $this->faker->citySuffix(),
            'city' => $this->faker->city(),
            'state_abbr' => $this->faker->stateAbbr(),
        ];
    }
}