<?php

namespace app\controllers;

use ishop\App;
use ishop\libs\Pagination;
use app\models\Category;

class SearchController extends AppController{

    public function typeaheadAction(){
        if($this->isAjax()){
            $query = !empty(trim($_GET['query'])) ? trim($_GET['query']) : null;
            if($query){
                $products = \R::getAll("SELECT id, title FROM product WHERE title LIKE ? AND status = '1' LIMIT 11", ["%{$query}%"]);
                echo json_encode($products);
            }
        }
        die;
    }

    public function indexAction(){
        $query = !empty(trim($_GET['s'])) ? trim($_GET['s']) : null;
        if($query){

            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $perpage = App::$app->getProperty('pagination');

            $total = \R::count('product', "title LIKE ? AND status = '1' ",["%{$query}%"]);
            $pagination = new Pagination($page, $perpage, $total);

            $start = $pagination->getStart();



            // $products = \R::find('product', "title LIKE ? AND status = '1'", ["%{$query}%"]);
            $products = \R::getAll("SELECT `product`.*, `category`.`titlecat`, `category`.`aliascat` FROM `product` JOIN `category` ON `product`.`category_id` = `category`.`id` WHERE  `product`.`title` LIKE ? AND `product`.`status` = '1' LIMIT $start, $perpage", ["%{$query}%"]);

            if($this->isAjax()){
                $this->loadView('filter', compact('products', 'total', 'pagination'));
            }
        }
        $this->setMeta('Поиск по: ' . h($query));
        $this->set(compact('products', 'query', 'pagination'));
    }

}