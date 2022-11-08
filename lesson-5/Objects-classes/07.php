<?php

class Dog{
    private string $name ;
    private string $gender;
    public Dog $mother;
    public Dog $father;
    function __construct(string $name,string $gender) {
        $this->name = $name;
        $this->gender = $gender;

    }

    public function fathersName(): string {
        return $this->father->name ?? "Unknown";
    }

    public function hasSameMotherAs(Dog $otherDog): bool {
        return $this-> mother === $otherDog-> mother;
    }
}

class DogTest {
    private array $dogs;
    public function Main(){
        $this->dogs[] = new Dog('Max', 'male');
        $this->dogs[] = new Dog('Rocky', 'male');
        $this->dogs[] = new Dog('Sparky', 'male');
        $this->dogs[] = new Dog('Buster', 'male');
        $this->dogs[] = new Dog('Sam', 'male');
        $this->dogs[] = new Dog('Lady', 'female');
        $this->dogs[] = new Dog('Molly', 'female');
        $this->dogs[] = new Dog('Coco', 'female');
        $this->dogs[0]->father = $this->dogs[1];
        $this->dogs[0]->mother = $this->dogs[5];
        $this->dogs[7]->mother = $this->dogs[6];
        $this->dogs[7]->father = $this->dogs[3];
        $this->dogs[1]->father = $this->dogs[4];
        $this->dogs[1]->mother = $this->dogs[6];
        $this->dogs[3]->mother = $this->dogs[5];
        $this->dogs[3]->father = $this->dogs[2];

        echo $this->dogs[7] -> fathersName() .PHP_EOL;
        echo $this->dogs[2] -> fathersName() .PHP_EOL;
        echo $this->dogs[7] -> hasSameMotherAs($this->dogs[1]) ? 'True' . PHP_EOL : 'False' . PHP_EOL;
    }
}

$dogTest = new DogTest();
$dogTest->Main(); // Buster | Unknown | True