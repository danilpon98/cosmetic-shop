<?php

namespace app\controllers;

use ishop\Cache;

class CantactsController extends AppController {

    public function indexAction(){
        
        $this->setMeta('Контакты', 'Контактная информация компании ООО Тезносоюз', '');

    }

}