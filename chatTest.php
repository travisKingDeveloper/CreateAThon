<html>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src=chat.js"></script>

<body onload="setInterval('chat.update()', 1000)">
<h2> Chat </h2>

<div id="log">
    <p>PlaceHolder:</p>
</div>

<form>
    <textarea id="sent" name="sent" maxlength="255"></textarea>
</form>


<script>
    var username = 'Andrew';

    var chat = new Log();


    // watch textarea for key presses
    $("#sent").keydown(function(event) {
        alert("keydown");
        var key = event.which;

        //all keys including return.
        if (key >= 33) {

            var maxLength = $(this).attr("maxlength");
            var length = this.value.length;

            // don't allow new content if length is maxed out
            if (length >= maxLength) {
                event.preventDefault();
            }
        }
    });
    // watch textarea for release of key press
    $('#sent').keyup(function(e) {

        if (e.keyCode == 13) {

            var text = $(this).val();
            var maxLength = $(this).attr("maxlength");
            var length = text.length;

            // send
            if (length <= maxLength + 1) {
                chat.send(text, name);
                $(this).val("");
            } else {
                $(this).val(text.substring(0, maxLength));
            }
        }
    });


</script>


</html>