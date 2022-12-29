<?php

class Demo
{
    private $eleves = [
        [
            'nom' => 'Lea',
            'age' => 12,
            'moyenne' => 18
        ],
        [
            'nom' => 'Leon',
            'age' => 14,
            'moyenne' => 16
        ],
        [
            'nom' => 'Max',
            'age' => 11,
            'moyenne' => 11
        ],
        [
            'nom' => 'Alex',
            'age' => 18,
            'moyenne' => 8
        ],
    ];

    private function filter(array $eleve): bool
    {
        return $eleve['moyenne'] > 10;
    }

    public function goodStudent(): array
    {
        return array_filter($this->eleves, [$this, 'filter']);
    }


}

$demo = new Demo();


echo '<pre>';
var_dump($demo->goodStudent());
echo '</pre>';
