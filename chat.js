<!-- hide script from old browsers

/**
 * Created by Andrew on 4/1/2016.
 */
var needsUpdate = true;

function Log()
{
this.update = updateLog;
this.send = sendInfo;
}

function sendInfo()
{
    updateLog();
    $.ajax(
        {
            type: "POST",
            url: "chathost.php",
            data: {"function" : 'send', 'message': message, "username":username, 'file': file},
            dataType: 'json',
            success: function(data){
                updateLog();
            }
        }
    )
}

function updateLog()
{
    if(needsUpdate)
    {
        $.ajax(
            {
                type: "POST",
                url: "chathost.php",
                data: {'function': 'update', 'numLines': numLines, 'file': file },
                dataType: "json",
                success: function(data) {
                    if(data.text) {
                        for (var i = 0; i < data.text.length; i++) {
                            $('#sent').append($("" + data.text + ""));
                        }
                    }
                }

                $('#log').scrollTop = $('#log').scrollHeight;
        needsUpdate = false;
        numLines = data.numLines;
    });
    else
        {

        }

    }
    else
    {
        setTimeout(updateLog, 1500);
    }

}

function getStatus()
{

}

-->