<?php
include '../Global/RedirectLogin.php';
echo file_get_contents("../global/header2.php");
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
                <textarea id='chat' style="width:100%; height:100%;"  ></textarea>

            </form>
        </td>
    </tr>
    <tr>
        <td style="height: 30%; padding: 0;">
            <form style="padding: 0; height: 100%; width: 100%;">
                <textarea id='sent' style="width:100%; height:100%;" placeholder="Type here and press enter to chat."></textarea>
            </form>
        </td>
    </tr>
</table>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    var username = 'Andrew';

    $('#sent').keydown(function(e) {
//        alert('keyup');
        if (e.keyCode == 13) {
            if( document.getElementById('chat').value == undefined )
                document.getElementById('chat').value = " ";

            var text = document.getElementById('chat').value;

            text = text + document.getElementById('sent').value
            var maxLength = $('#sent').attr("maxlength");
            var length = text.length;

            // send
            if (length <= maxLength + 1) {
                document.getElementById('chat').value = text;
                alert(text);
//                $('#chat').val($('#chat').val() + text);
            } else {
                document.getElementById('chat').value = text;
                alert(text);
//                val.concat(text);
            }

            document.getElementById('sent').value = '';
        }
    });

    setTimeout(function(){
        window.location.reload(1);
    }, 5000);
</script>

</body>
</html>
