<!DOCTYPE html><html lang='en' class=''>
<head>
    <title>Send a Message</title>
</head>
<body>
    <textarea name="" id="msg" cols="30" rows="3" placeholder="Enter Message"></textarea>
    <br>
    <button onclick="send()">Send</button>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
function send()
{
    var msg = $('#msg').val();

	$.ajax({
            type: 'ajax',
            method: 'get',
            url: "https://platform.clickatell.com/messages/http/send?apiKey=QxR0ZrzqR8qGLGP-r-qq3Q==&to=639051650467&content="+msg,
            dataType: 'json',
            success: function(response){
                $('#msg').val('');
                $('#msg').focus();
                alert("Message sent!");
            },
            error: function(response){
              alert('Error');
              console.log(response.responseText);
            }
    });
}
</script>
</body></html>