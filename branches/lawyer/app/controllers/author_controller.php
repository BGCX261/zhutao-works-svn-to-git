<?php

class AuthorController extends AppController
{
    var $name = "Author";
    function index()
    {
        $this->set("authors",  $this->Author->find("all"));
        $this->pageTitle = "作者";
        $this->set("CSS", "default");
    }
    function add()
    {
        $this->pageTitle="增加新用户";
        if ($this->Session->check("user"))
        {
            $this->layout = "manage";
        }
        else
        {
            $this->flash("请先登录!", "/pages/admin/");
        }
        if (!empty($this->data['Author']))
        {
            if ($this->Author->save($this->data['Note']))
            {
                $this->flash("新作者已经添加成功!", '/pages/manage/');
            }
        }
    }
}

?>
