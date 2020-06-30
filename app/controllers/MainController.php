<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController {

    public function indexAction(){

    	//$hit = \R::find('product'," hit = '1' LIMIT 8 ");
    	$hits = \R::getAll("SELECT `product`.*, `category`.`titlecat`, `category`.`aliascat` FROM `product` JOIN `category` ON `product`.`category_id` = `category`.`id` WHERE  `product`.`hit` = '1' AND `product`.`status` = '1' LIMIT 8");
        
        $this->setMeta('Интернет-магазин косметики Космо', 'один из крупных интернет-магазинов профессиональной и декоративной косметики', '');

        $this->set(compact('hits'));
    }

}