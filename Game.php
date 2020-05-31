<?php

/**Написать класс Человек. У него должны быть свойства: имя, возраст, пол, степень голода, количество денег
 * и должны быть методы: поесть (тратятся деньги), поработать (получаются деньги).
 * От него отнаследовать класс Студент, у него должно быть свойство успеваемость. Когда оно достигает 100%, он становится человеком.
 * Должен быть метод учиться (повышается чувство голода)*/

class Human
{

    public $gender;
    public $name;
    public $age;
    public $hungerLvl;
    public $amountMany;

    public function __construct($gender, $name, $age, $hungerLvl, $amountMany)
    {
        $this->gender = $gender;
        $this->name = $name;
        $this->age = $age;
        $this->hungerLvl = $hungerLvl;
        $this->amountMany = $amountMany;
    }

    function getGender()
    {
        return $this->gender;
    }

    function getName()
    {
        return $this->name;
    }

    function getAge()
    {
        return $this->age;
    }

    function toEat()
    {
        $this->hungerLvl--;
    }

    function toWork()
    {
        $this->amountMany++;
    }
}

class Student extends Human
{

    public $academic_performance;

    public function __construct($gender, $name, $age, $hungerLvl, $amountMany, $academic_performance)
    {
        parent::__construct($gender, $name, $age, $hungerLvl, $amountMany);

        $this->academic_performance = $academic_performance;

    }

    public function getAP()
    {
        return $this->academic_performance;
    }

    public function setAP()
    {
        $this->academic_performance;
    }

    public function toStudy($c)
    {
        $this->academic_performance++;
        $this->hungerLvl++;

        if ($this->academic_performance == 100) {
            $c = new Human($this->gender, $this->name, $this->age, $this->hungerLvl, $this->amountMany);
        }
        return $c;
    }
}

$a = new Human('male', 'Jack', '20', '5', '150');
$b = new Student('male', 'Stas', '20', '25', '150', '99');
$b->toWork();
$b->toEat();
$data = $b->toStudy($data);
var_dump($b);
echo '<hr>';
var_dump($data);