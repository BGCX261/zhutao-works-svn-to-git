<?php echo $this->element("subnav");?>
<div id="subcont">
<h1>增加用户</h1>
<?php
echo $form->create("Author", array("enctype" => "multipart/form-data"));
echo $form->input('Author.name', array("label" => "姓名"));
echo $form->input('Author.sex', array(
    "label" => "性别",
    "options" => array("male" => '男', "female" => '女')
));
echo $form->input('Author.intro', array('rows' => '3', "label" => "简介"));

echo $form->input("Author.icon", array("type" => "file", "label" => "上传照片"));

echo $form->input("Author.phone", array("label" => "座机电话"));
echo $form->input("Author.cellphone", array("label" => "手机", "maxLength" => "13"));
echo $form->input("Author.address", array("label" => "通信地址"));
echo $form->input("Author.homepage", array("label" => "个人主页"));
echo $form->input("Author.email", array("label" => "Email"));
echo $form->end("提交数据");
?>
</div>
