<html>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="chat.js"></script>

<body onload="setInterval('chat.update()', 5000)">
<h2> Chat </h2>
<p>PlaceHolder:</p>
<div id="log">

</div>
<p>PlaceHolder:</p>

<form>
    <textarea id="sent" name="sent" maxlength="255"></textarea>
</form>

<script>
    var username = 'Andrew';

    var chat = new Log();

    $('#sent').keydown(function(e) {
//        alert('keyup');
        if (e.keyCode == 13) {

            var text = $('#sent').val();
            console.log()
            var maxLength = $('#sent').attr("maxlength");
            var length = text.length;

            // send
            if (length <= maxLength + 1) {
                chat.send(text, username);

                alert(text);
                $(this).val("");
            } else {
                chat.send ($(this).val(text.substring(0, maxLength)));
            }
        }
    });

</script>

</body>

</html>