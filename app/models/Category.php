<?php

namespace app\models;

use ishop\App;

class Category extends AppModel {

    public $attributes = [
        'titlecat' => '',
        'parent_id' => '',
        'keywords' => '',
        'description' => '',
        'aliascat' => '',
    ];

    public $rules = [
        'required' => [
            ['titlecat'],
        ]
    ];

    public function getIds($id){
        $cats = App::$app->getProperty('cats');
        $ids = null;
        foreach($cats as $k => $v){
            if($v['parent_id'] == $id){
                $ids .= $k . ',';
                $ids .= $this->getIds($k);
            }
        }
        return $ids;
    }

}