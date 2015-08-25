<?php

class Author extends AppModel {
    var $name = 'Author';
    //var $scaffold;
    var $validate = array(
    'name' => array(
        'rule' => "notEmpty",
        'require' => true,
        'message' => '姓名不能为空'
        ),
    'intro' => array(
        'require' => true,
        'message' => '简介不能为空',
        'rule' => "notEmpty"
        ),
    'email' => array(
        'rule' => 'email',
        'message' => '请提供正确的email地址',
        'allowEmpty' => true
        ),

    'phone' => array(
        'rule' => 'numeric',
        'message' => '只能为数字',
        'allowEmpty' => true
        ),
    'cellphone' => array(
        'rule' => 'numeric',
        'message' => '只能为数字',
        'allowEmpty' => true
        )

);



}

?>
