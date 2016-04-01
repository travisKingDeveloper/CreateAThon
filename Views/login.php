<?php
echo file_get_contents("../global/RedirectLogin.php");
echo file_get_contents("../global/databaseConnection.php");
echo file_get_contents("../global/header.php");
?>
<div id="login">
    <form method="post" id="loginForm">
        Login Existing User<br/><br/>
        Username: <input type="text" name="id"/><br/><br/>
        Password: <input type="password" name="pass"/><br/><br/>
        <button type="submit" value="submit">Login</button>
        <button type="reset">Cancel</button><br/><br/>
        <a href="https://www.unf.edu/">UNF Home</a> | <a href="https://webapps.unf.edu/myunfid/">Login Help</a> | <a href="http://www.unf.edu/its/Contact_ITS.aspx">Contact ITS Support</a>
    </form>
</div>
<div id="register">
    <form method="post" id="loginForm">
        Register New User<br/><br/>
        Username: <input type="text" name="id"/><br/><br/>
        Password: &nbsp;<input type="password" name="pass"/><br/><br/>
        Re-enter Password: <input type="password" name="pass"/><br/><br/>
        <button type="submit" value="submit">Register</button>
        <button type="reset">Cancel</button><br/><br/>
        <a href="https://www.unf.edu/">UNF Home</a> | <a href="https://webapps.unf.edu/myunfid/">Login Help</a> | <a href="http://www.unf.edu/its/Contact_ITS.aspx">Contact ITS Support</a>
    </form>
</div>
</html>