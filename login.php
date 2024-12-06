<?php
include("header.html")
?>
<form action="login_action.php" method="post">
    <table class="table2">
        <tr>
            <td class="register_table_text"> نام کاربری </td>
            <td><input type="text" id="username" name="username"></td>
        </tr>
        <tr>
            <td class="register_table_text"> کلمه عبور</td>
            <td><input type="text" id="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td class="register_table_text"><input type="submit" value="ثبت نام">
            <input type="reset" value="ریست"></td>
        </tr>
    </table>
</form>
<?php
include("footer.html")
?>