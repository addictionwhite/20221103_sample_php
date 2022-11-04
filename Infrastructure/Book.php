<?php

class Book
{
    public function get(array $condition): array
    {
        // 本来は検索条件をもとに、
        //クエリビルダなどを用いてDBにSQLを用いて直接問い合わせる
        return ['book1','book2'];
    }
}
