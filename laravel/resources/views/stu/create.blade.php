<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
		@include("stu.menu")
        <h3>添加学生信息</h3>
        <form action="/stu" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <table width="280" border="0">
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>性别：</td>
                <td><input type="radio" name="sex" value="1"/>男
                    <input type="radio" name="sex" value="2"/>女</td>
            </tr>
            <tr>
                <td>年龄：</td>
                <td><input type="text" name="age"/></td>
            </tr>
            <tr>
                <td>班级：</td>
                <td><input type="text" name="class"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="添加"/>
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>
        </form>
        </center>
    </body>
</html>