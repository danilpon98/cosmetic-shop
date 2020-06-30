<?php

namespace app\controllers;

use ishop\Cache;
use app\models\About;

class AboutController extends AppController {

    public function indexAction(){
        
        $this->setMeta('О компании', 'Информация о компании', 'доставка, оплата, гарантии');

    }

    public function callAction(){
    	if (!empty($_POST)) {
    		$about = new About();
    		$data = $_POST;
    		if(!$about->validate($data)){
                $about->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }
            About::mailFeedback($data);
    	}
    	redirect();
    }

}