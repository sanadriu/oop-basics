<?php

// Class declaration

interface AliveAnimal
{
	public function breath();
	public function move();
}

class Animal implements AliveAnimal
{
	protected string $name;
	protected string $type;
	protected int $health;
	protected int $age;
	protected bool $hasFur;
	protected bool $isVertebrated;

	public function __construct(string $type, bool $hasFur, bool $isVertebrated, string $name = "Animal")
	{
		$this->name = $name;
		$this->status = "healthy";
		$this->age = 0;
		$this->type = $type;
		$this->hasFur = $hasFur;
		$this->isVertebrated = $isVertebrated;

		echo "$this->name has born.\n";
	}

	public function __destruct()
	{
		echo "$this->name has died.\n";
	}

	public function move()
	{
		echo "$this->name is moving.\n";
	}

	public function breath()
	{
		echo "$this->name is breathing.\n";
	}

	public function eat()
	{
		echo "$this->name is eating.\n";
	}

	public function rest(int $minutes)
	{
		echo "$this->name is sleeping for $minutes minutes.\n";
	}

	public function sound()
	{
		echo "$this->name is growling.\n";
	}

	public function showAge()
	{
		echo "$this->name is now $this->age years old.\n";
	}

	public function showStatus()
	{
		echo "$this->name is now $this->status.\n";
	}

	public function setOlder()
	{
		$this->age++;
		$this->showAge();
	}

	public function setWounded()
	{
		$this->status = "wounded";
		$this->showStatus();
	}

	public function setHealed()
	{
		$this->status = "healthy";
		$this->showStatus();
	}
}

class Cat extends Animal
{
	private static $cats = 0;

	private string $breed;
	private string $food;

	public static function getNumOfCats()
	{
		return self::$cats;
	}

	public function __construct(string $name = "Cat", string $breed = "Common", string $gender = "Male", string $food = "fodder")
	{
		parent::__construct("Mammal", true, true, $name);
		$this->breed = $breed;
		$this->food = $food;

		self::$cats++;
	}

	public function getBreed()
	{
		return $this->breed;
	}

	public function setOlder()
	{
		$this->age += 7;
		$this->showAge();
	}

	public function eat()
	{
		echo "$this->name is eating $this->food.\n";
	}

	public function sound()
	{
		echo "$this->name says Meow.\n";
	}

	public function purr()
	{
		echo "$this->name is making purr.\n";
	}
}

abstract class Feline
{
	private string $whisker;

	public function setWhisker(string $whisker)
	{
		$this->$whisker = $whisker;
	}

	public function getWhisker()
	{
		return $this->whisker;
	}
}

// Class instanciation

$animal = new Animal("Mammal", false, true);
$animal->move();
$animal->breath();
$animal->sound();
$animal->eat();
$animal->move();
$animal->rest(90);
$animal->setOlder();
$animal->setOlder();
$animal->setWounded();
$animal->setHealed();

$cat1 = new Cat($name = "Zipi");
$cat1->move();
$cat1->breath();
$cat1->sound();
$cat1->eat();
$cat1->move();
$cat1->rest(5);
$cat1->setOlder();
$cat1->setOlder();
$cat1->setWounded();
$cat1->setHealed();
$cat2 = new Cat($name = "Copo", $gender = "Female");

echo Cat::getNumOfCats() . "\n";
