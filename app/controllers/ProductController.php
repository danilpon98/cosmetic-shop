<?php 

namespace app\controllers;

use app\models\Product;
use app\models\Breadcrumbs;

class ProductController extends AppController
{
    public function viewAction()
    {
    	$alias = $this->route['alias'];
    	$product = \R::findOne('product'," alias = ? AND status = '1'", [$alias]);
    	if (!$product) {
    		throw new \Exception('Страница не найдна', 404);
    	}
    	$category = \R::findOne('category',' id = ? ', [$product->category_id]);

    	// хлебные крошки
    	$breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id, $product->title);

    	// связанные товары
    	$related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id JOIN category ON product.category_id = category.id WHERE related_product.product_id = ? LIMIT 4", [$product->id]);
    	
    	// Записть в куки запрошеннтго товара 
    	$p_model = new Product();
        $p_model->setRecentlyViewed($product->id);

    	// просмотренные товары
        $r_viewed = $p_model->getRecentlyViewed();
        $recentlyViewed = null;
        if($r_viewed){
             $recentlyViewed = \R::getAll("SELECT `product`.*, `category`.`titlecat`, `category`.`aliascat` FROM `product` JOIN `category` ON `product`.`category_id` = `category`.`id` WHERE  `product`.`id` IN (". \R::genSlots($r_viewed) .")  LIMIT 4", $r_viewed);
        }

    	$this->setMeta("Просмотр товара {$product->title}", $product->description, $product->keywords);
    	$this->set(compact('product','category','related','recentlyViewed','breadcrumbs'));
    }
}
