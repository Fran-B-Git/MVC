<?php
class monsterController
{
    private Monster $monsters;
    private showMonster $view;

    public function __construct(Monster $monsters, showMonster $view)
    {
        $this->monsters = $monsters;
        $this->view = $view;
    }
    public function getMonster(string $name): array
    {
        return $this->monsters->getMonster($name);
    }
    public function getMonsterAttribure(string $monsterName, string $attribute): string
    {
        return $this->monsters->getMonsterAttribute($monsterName, $attribute);
    }
    public function updateMonster(array $monster)
    {
        $this->monsters->updateMonster($monster);
    }

    public function displayMonster(string $monsterName)
    {
        $this->view->display($this->getMonster($monsterName));
    }
}