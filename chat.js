

/**
 * Created by Andrew on 4/1/2016.
 */

var script = document.createElement('script');
script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

var needsUpdate = true;
var numLines = 0;
var file = null;
var message = "";

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
                success: function(data)
                {
                    if (data.text)
                    {
                        for (var i = 0; i < data.text.length; i++)
                        {
                            $('#sent').append($("" + data.text + ""));
                        }
                    }

                    document.getElementById('log').scrollTop = document.getElementsByName('log').scrollHeight;

  // '#log'.scrollTop = $('#log').scrollHeight;
                    needsUpdate = false;
                    numLines = data.numLines;
                }
            }
        );
    }
    else
    {
        setTimeout(updateLog, 1500);
    }
}

function getStatus()
{

}
