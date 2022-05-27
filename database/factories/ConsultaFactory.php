<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->tollFreePhoneNumber(),
            'endereco' => $this->faker->address(), 
            'observacao' => $this->faker->text(),
            'data_consulta' => $this->faker->dateTime(),
            'dentista_responsavel' => 'Dr. ' . $this->faker->lastName()
        ];
    }
}
