<?php
class AuthorsController extends AppController
{
    var $name = "Author";
    function index()
    {
        $this->set("authors",  $this->Author->find("all"));
    }
    function beforeValidate()
    {
        if (!empty($this->data['Author']))
        {
            $this->data['Author']['icon'] = $this->data['Author']['icon']['tmp_name'];
            return true;
        }
    }
    function add()
    {
        global $ROOT;
        global $HOST;
        if (!empty($this->data['Author']))
        {
            if(!empty($this->data['Author']['icon']['name']))
            {
            $name = $this->data['Author']['icon']['tmp_name'];
            $size = $this->data['Author']['icon']['size'];
            $filename = $this->data['Author']['icon']['name'];
            $suffix = explode(".", $filename);
            $suffix = $suffix[count($suffix)-1];

            $filecontent = fread(fopen($name, "r"), $size);
            $newname = "image/".time().".".$suffix;
            $fh = fopen($ROOT.$newname, "w");
            fwrite($fh, $filecontent);
            $this->data['Author']['icon'] = $newname;
            }
            else
            {
                $this->data['Author']['icon'] = "";
            }
            if ($this->Author->save($this->data['Author']))
            {
                $this->flash("新作者已经添加成功!", '/authors/');
            }
        }
    }
}

?>
