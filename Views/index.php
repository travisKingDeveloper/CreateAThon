<?php
echo file_get_contents("../global/header2.php");
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
        </td>
        <td style="height: 70%;">
            <form style="padding: 0; height: 100%; width: 100%;">
                <textarea style="width:100%; height:100%;" placeholder="Chat will appear here." disabled></textarea>
            </form>
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
