<?php

require_once($projectPath.'/Infrastructure/Book.php');

class Search
{
    private array $condition;

    public function __construct($condition)
    {
        $this->condition = $condition;
    }

    public function result(): array
    {
        $item = new Book();
        $books = $item->get($this->condition);
        return $books;
    }
}
