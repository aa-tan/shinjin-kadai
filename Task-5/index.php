<html>
  <head>
    <meta charset="utf-8">
    <title>Please don't hack me!</title>

<script>
function goChat(){
var name=document.getElementById("name").value;
window.location.href = "./chat.php#"+encodeURIComponent(name);
      }
    </script>

  </head>
  <body>
    <center>
      <h1>Super Secure Chat Room!</h1>
      <hr>
      your name : <input type="text" id="name">
      <br>
      <button onClick="goChat()">Start</button>
    </center>
  <body>
</html>
