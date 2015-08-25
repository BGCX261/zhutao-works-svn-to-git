<!-- File: /app/views/authors/index.ctp -->
<?php echo $html->css($CSS);?>
<h1>已有的作者</h1>
<table>
<tr>
<th>编号</th>
<th>姓名</th>
<th>性别</th>
<th>头像</th>
<th>座机电话</th>
<th>手机电话</th>
<th>地址</th>
<th>个人主页</th>
<th>email</th>
<th>创建时间</th>
<th>修改时间</th>
</tr>

<!-- Here is where we loop through our $authors array, printing out author info -->
<?php foreach ($authors as $author): ?>
<tr>
<td><?php echo $author['Author']['id']; ?></td>
<td><?php echo $author['Author']['name']; ?></td>
<td><?php echo $author['Author']['sex']; ?></td>
<td><?php echo $author['Author']['icon']; ?></td>
<td><?php echo $author['Author']['phone']; ?></td>
<td><?php echo $author['Author']['cellphone']; ?></td>
<td><?php echo $author['Author']['address']; ?></td>
<td><?php echo $author['Author']['homepage']; ?></td>
<td><?php echo $author['Author']['email']; ?></td>
<td><?php echo $author['Author']['created']; ?></td>
<td><?php echo $author['Author']['modified']; ?></td>
</tr>
<?php endforeach; ?>

</table>
