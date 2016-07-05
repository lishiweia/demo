<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
        @include("stu.menu")
        <h3>浏览学生信息</h3>
        <table width="700" border="1">
            <tr>
                <th>学号</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>班级号</th>
                <th>操作</th>
            </tr>
			@foreach ($list as $stu)
				<tr>
					<td>{{ $stu->id }}</td>
					<td>{{ $stu->name }}</td>
					<td>{{ $stu->age }}</td>
					<td>{{ $stu->sex }}</td>
					<td>{{ $stu->class }}</td>
					<td><a href = "/stu/{{ $stu->id }}/edit">编辑</a> 详情 ｜ <a href = "/stu/{{ $stu->id }}/destroy">删除</td>
				</tr>
			@endforeach
        </table>
		<br/>
			<?php echo $list->render(); ?>
        </center>
		
    </body>
</html>