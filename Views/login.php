<?php
echo file_get_contents("../global/header.php");
?>
<div id="login">
    <form method="post" id="loginForm">
        UNF ID: &nbsp;&nbsp;<input type="text" name="id"/><br/><br/>
        Password: <input type="password" name="pass"/><br/><br/>
        <button type="submit" value="submit">Login</button>
        <button type="reset">Cancel</button><br/><br/>
        UNF Home | Login Help | Contact ITS Support | Student Guest Login
    </form>
</div>
</html>