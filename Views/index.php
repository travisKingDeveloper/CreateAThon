<?php
include "../global/RedirectLogin.php;
echo file_get_contents("../global/databaseConnection.php");
echo file_get_contents("../global/header.php");
?>
<div id="chat">
<table>
    <tr>
        <td rowspan="2" style="width:25%;">
            <form method="post">
                <input type="submit" class="submitLink" value="Housing">
            </form>
            <form method="post">
                <input type="submit" class="submitLink" value="Villages">
            </form>
            <form method="post">
                <input type="submit" class="submitLink" value="Crossings">
            </form>
            <form action="login.php" style="margin-top: 20%;">
                <input type="submit" class="logoutLink" value="Logout">
            </form>
        </td>
        <td style="height: 70%;">
            filler 2
        </td>
        <td rowspan="2" style="width:25%;">
            filler 3
        </td>
    </tr>
    <tr>
        <td style="height: 30%; padding: 0;">
            <form style="padding: 0; height: 100%; width: 100%;">
                <textarea style="width:100%; height:100%;" placeholder="Type here and press enter to chat."></textarea>
            </form>
        </td>
    </tr>
</table>
</div>

</body>
</html>
