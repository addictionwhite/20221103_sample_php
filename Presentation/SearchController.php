<?php

$projectPath = dirname(__FILE__, 2);// 仮置き
require_once($projectPath.'/Domain/Search.php');

class SearchController
{
    /**
     * @param array $condition
     */
    public function index(array $condition)
    {
        $serach= new Search($condition);
        $serach->result();

        $result = [
            'books'=>$serach->result(),
        ];

        echo json_encode($result);
    }
}

$condition=[];
(new SearchController())->index($condition);
echo "\n";
