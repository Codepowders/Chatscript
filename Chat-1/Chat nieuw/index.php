<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact form</title>
<link rel="stylesheet" href="style.css" type="text/css" />

<!-- javascript -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="chat.js"></script>
<script type="text/javascript">
  var name = prompt("Enter your chat name:", "Guest");
  if (!name || name === ' ') {name = "Guest";}
  name = name.replace(/(<([^>]+)>)/ig,"");
  $("#name-area").html("You are: <span>" + name + "</span>");
  var chat =  new Chat();
  $(function(){
  chat.getState();
  $("#sendmessage").keydown(function(event){
  var key = event.which;
  if (key >= 33){
  var maxLength = $(this).attr("maxlength");
  var length = this.value.length;
  if (length >= maxLength){
  event.preventDefault();}}
    		 																																																});
  $('#sendmessage').keyup(function(e){
  if (e.keyCode == 13){
  var text = $(this).val();
  var maxLength = $(this).attr("maxlength");
  var length = text.length;
  if (length <= maxLength + 1) {
  chat.send(text, name);
  $(this).val("");
  } else {
  $(this).val(text.substring(0, maxLength));
  }}});});
</script>
</head>
<div>


<body onload="setInterval('chat.update()', 1000)">

<!-- Chat section -->
<div id="pageborder">
  <h2><b>keep in touch!</b></h2>
<div id="chat-wrap"><div id="chatpage"></div></div>
<form id="send-message-area">
<textarea id="sendmessage" maxlength = '100' ></textarea>
</form>
</div>

</body>

</html>
