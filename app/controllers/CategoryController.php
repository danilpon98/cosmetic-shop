<?php

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Category;
// use app\widgets\filter\Filter;
use ishop\App;
use ishop\libs\Pagination;

class CategoryController extends AppController {

    public function viewAction(){
        $alias = $this->route['alias'];
        $category = \R::findOne('category', 'aliascat = ?', [$alias]);
        if(!$category){
            throw new \Exception('Страница не найдена', 404);
        }

        $breadcrumbs = Breadcrumbs::getBreadcrumbs($category->id);

        $cat_model = new Category();
        $ids = $cat_model->getIds($category->id);
        $ids = !$ids ? $category->id : $ids . $category->id;

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');

        $total = \R::count('product', "category_id IN ($ids)");
        $pagination = new Pagination($page, $perpage, $total);

        $start = $pagination->getStart();

        // $products = \R::find('product', "status = '1' AND category_id IN ($ids) $sql_part LIMIT $start, $perpage");
        $products = \R::getAll("SELECT `product`.*, `category`.`titlecat`, `category`.`aliascat` FROM `product` JOIN `category` ON `product`.`category_id` = `category`.`id` WHERE  `product`.`status` = '1' AND category_id IN ($ids) LIMIT $start, $perpage");

        if($this->isAjax()){
            $this->loadView('filter', compact('products', 'total', 'pagination'));
        }

        $this->setMeta($category->titlecat, $category->description, $category->keywords);
        $this->set(compact('products', 'breadcrumbs', 'pagination'));
    }

}