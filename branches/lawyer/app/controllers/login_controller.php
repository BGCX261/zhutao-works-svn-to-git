<?php

class LoginController extends AppController
{
    var $uses = array("Author");
    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']))
        {
           $username = $_POST['username'];
           $password = $_POST['password'];
           $res = $this->Author->query("select * from authors where name='" . $username . "' and password='" . $password . "'");
           if (count($res) == 0)
           {
               $this->flash("用户名或者密码错误!", "/pages/admin/");
           }
           else
           {
               $this->Session->write('user', $res[0]['authors']['name']);
               $this->redirect(array("controller" => "pages", "action" => "/manage/"));
           }
        }
        else
        {
               $this->flash("用户名或者密码不能为空!", "/pages/admin/");
        }

    }
}

?>
