<?php
class Monster
{

    private array $monsters;
    function __construct()
    {
        $this->monsters = json_decode(file_get_contents("monstermanual.json"), true);

    }
    public function getMonster(string $monster): array
    {
        if (array_key_exists($monster, $this->monsters))
            return $this->monsters[$monster];
        else {
            print("Monster Not in database, returning 0's\n");
            return [
                "name" => "0",
                "color" => "0",
                "age" => "0",
                "price" => "0"
            ];

        }

    }
    public function getMonsterAttribute(string $monster, string $attribute): string
    {
        return $this->monsters[$monster][$attribute];
    }

    public function addMonster(array $monster)
    {
        $this->monsters[$monster["name"]] = $monster;
    }
    public function updateMonster(array $monster)
    {

        if (in_array($monster["name"], $this->monsters)) {
            $this->monsters[$monster["name"]] = $monster;
        }
    }
    public function deleteMonster(string $name)
    {
        if (in_array($name, $this->monsters)) {
            unset($this->monsters[$name]);
        }
    }

    public function saveDatabase(string $outputname = "monsters.php")
    {
        file_put_contents($outputname, json_encode($this->monsters));
    }

}