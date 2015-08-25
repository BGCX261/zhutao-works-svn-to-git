<?php

class PagesController extends AppController
{
    var $uses = array();
    public function home()
    {
        if ($this->Session->check("user"))
        {
            $this->layout = "manage";
        }
        $this->pageTitle = "首页";
    }
    public function admin()
    {
        if ($this->Session->check("user"))
        {
            $this->layout = "manage";
            $this->pageTitle = "登录后台";
            $name = $this->Session->read("user");
            $this->redirect(array("controller" => "pages", "action" => "manage"));
        }
    }
    public function manage()
    {
        $this->layout = "manage";
        $this->pageTitle = "管理页面";
        if ($this->Session->check("user"))
        {
            $name = $this->Session->read("user");
            $this->set("name", $name);
        }
        else
        {
            $this->flash("请先登录!", "/pages/admin/");
        }
    }
    public function logout()
    {
        if ($this->Session->check("user"))
        {
            $this->Session->delete("user");
            $this->redirect(array("controller" => "pages", "action" => "admin"));
        }
        else
        {
            $this->flash("请先登录!", "/pages/admin/");
        }
    }
}

?>
