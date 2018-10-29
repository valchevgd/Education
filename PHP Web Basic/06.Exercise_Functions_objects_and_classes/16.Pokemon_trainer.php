<?php

class Trainer
{

    private $name;
    private $badges;
    private $pokemons;


    public function __construct($name, $pokemons = [], $badges = 0)
    {
        $this->name = $name;
        $this->badges = $badges;
        $this->pokemons = $pokemons;
    }

    public function addPokemon(Pokemon $pokemon, string $pokemon_name){
        $this->pokemons[$pokemon_name] = $pokemon;
    }

    public function haveTournament(string $tournament){
        foreach ($this->pokemons as $pokemon){
            if ($pokemon->getElement() === $tournament){
                $this->badges++;
            }else{
                $health = $pokemon->getHealth() - 10;
                $pokemon->setHealth($health);
            }

            if ($pokemon->getHealth() <= 0){
                unset($this->pokemons[$pokemon->getName()]);
            }
        }
    }

    public function __toString()
    {
        $life_pokemons = count($this->pokemons);

        return "$this->name $this->badges $life_pokemons".PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getBadges()
    {
        return $this->badges;
    }


    public function setBadges($badges): void
    {
        $this->badges = $badges;
    }


    public function getPokemons()
    {
        return $this->pokemons;
    }


    public function setPokemons($pokemons): void
    {
        $this->pokemons = $pokemons;
    }

}

class Pokemon{

    private $name;
    private $element;
    private $health;


    public function __construct($name, $element, $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getElement()
    {
        return $this->element;
    }


    public function setElement($element): void
    {
        $this->element = $element;
    }


    public function getHealth()
    {
        return $this->health;
    }


    public function setHealth($health): void
    {
        $this->health = $health;
    }

}

$trainers = [];

while (true){

    $input = readline();

    if ($input === 'Tournament'){
        break;
    }

    $tokens = explode(' ', $input);

    $trainer_name = $tokens[0];
    $pokemon_name = $tokens[1];
    $element = $tokens[2];
    $health = intval($tokens[3]);

    $pokemon = new Pokemon($pokemon_name, $element, $health);

    if (!array_key_exists($trainer_name, $trainers)){
        $trainer = new Trainer($trainer_name);
        $trainers[$trainer_name] = $trainer;
    }

    $trainers[$trainer_name]->addPokemon($pokemon, $pokemon_name);

}

while (true){

    $input = readline();

    if ($input === 'End'){
        break;
    }

    foreach ($trainers as $trainer){
        $trainer->haveTournament($input);
    }

}

usort($trainers, function (Trainer $t1, Trainer $t2){
   return $t2->getBadges() <=> $t1->getBadges();
});

foreach ($trainers as $trainer){
    echo $trainer;
}