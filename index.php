<?php
$ip = $_SERVER['REMOTE_ADDR'];

$file = "loggedips.txt";
$text = file_get_contents($file);
$text .= $ip . "\n";
file_put_contents($file, $text);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dox</title>
  <link href="main.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">
    var dot, eventDoc, doc, body, pageX, pageY;
      
    event = event || window.event; // IE-ism
    if (event.pageX == null && event.clientX != null) {
      eventDoc = (event.target && event.target.ownerDocument) || document;
      doc = eventDoc.documentElement;
      body = eventDoc.body;

      event.pageX = event.clientX +
        (doc && doc.scrollLeft || body && body.scrollLeft || 0) -
        (doc && doc.clientLeft || body && body.clientLeft || 0);
      event.pageY = event.clientY +
        (doc && doc.scrollTop  || body && body.scrollTop  || 0) -
        (doc && doc.clientTop  || body && body.clientTop  || 0 );
    }

    dot = document.createElement('div');
    dot.className = "dot";
    dot.style.left = event.pageX + "px";
    dot.style.top = event.pageY + "px";
    document.body.appendChild(dot);
	</script>
  <head>
  <body>
    <p class="main_text">
    ____________________¶¶¶___________________________<br>
    __________________¶¶¶¶¶¶¶_________________________<br>
    ______________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_______________<br>
    ___________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______________<br>
    __________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______________<br>
    _________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______________<br>
    ________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______________<br>
    ______¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______________<br>
    _____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_____________<br>
    ____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_____________<br>
    ____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_____________<br>
    ___¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_____________<br>
    ___¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_____________<br>
    ___¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_____________<br>
    ___¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶___¶¶¶¶¶¶¶¶¶_____________<br>
    ___¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_____¶¶¶¶¶¶¶_____________<br>
    __¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______¶¶¶¶¶¶¶____________<br>
    __¶¶¶¶¶¶¶¶_____¶¶¶¶¶¶¶¶¶¶______¶¶¶¶¶¶¶____________<br>
    __¶¶¶¶¶¶¶______¶¶¶¶¶¶¶¶¶¶______¶¶¶¶¶¶¶____________<br>
    __¶¶¶¶¶¶________¶¶¶¶¶¶¶¶¶______¶¶¶¶¶¶¶____________<br>
    __¶¶¶¶¶¶_______¶¶¶¶¶¶¶¶¶¶¶¶¶¶_¶¶¶¶¶¶¶¶¶___________<br>
    __¶¶¶¶¶¶_______¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶___________<br>
    __¶¶¶¶¶¶_______¶¶¶¶¶¶¶__¶¶¶¶¶¶¶¶¶¶¶¶¶_____________<br>
    __¶¶¶¶¶¶¶______¶¶¶¶¶¶¶__¶¶¶¶¶¶¶¶¶¶________________<br>
    __¶¶¶¶¶¶¶¶_____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶__________________<br>
    __¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______¶¶__________<br>
    ___¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_¶¶_____¶¶¶¶_________<br>
    ___¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶__¶¶¶_¶¶¶____¶¶¶¶¶________<br>
    ____¶¶¶¶¶¶¶¶¶¶¶¶¶¶__¶¶¶¶__¶¶¶_¶¶¶____¶¶¶¶¶________<br>
    _______¶¶¶¶¶___¶¶¶__¶¶¶¶__¶¶¶_¶_______¶¶¶¶¶¶¶¶¶___<br>
    _______________¶¶¶__¶¶¶¶¶_¶¶¶_________¶¶¶¶¶¶¶¶¶___<br>
    ______________¶¶¶¶__¶¶¶¶¶_____________¶¶¶¶¶¶¶¶¶___<br>
    ________¶¶____¶¶¶¶__¶¶¶¶¶____________¶¶¶¶__¶¶¶____<br>
    _______¶¶¶¶¶__¶¶¶¶__¶¶¶¶¶¶______¶¶__¶¶¶¶__________<br>
    ______¶¶¶¶¶¶¶_______¶¶¶_____¶¶¶_¶¶_¶¶¶¶___________<br>
    ______¶¶¶¶¶¶¶___________¶¶¶_¶¶__¶¶¶¶¶¶____________<br>
    ________¶¶¶¶______¶¶___¶¶¶¶_¶¶¶_¶¶¶¶¶_____________<br>
    ______¶¶¶¶¶¶_____¶¶¶¶__¶¶¶¶_¶¶¶¶¶¶¶¶______________<br>
    _____¶¶¶¶¶¶¶¶¶____¶¶¶__¶¶¶¶¶¶¶¶¶¶¶¶¶______________<br>
    _____¶¶¶¶¶¶¶¶¶¶¶¶__¶¶_¶¶¶¶¶¶¶¶¶¶¶¶¶¶______________<br>
    _____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_____________<br>
    _____¶¶¶¶¶____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶____¶¶¶¶______<br>
    _______¶¶_________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_¶¶¶¶¶______<br>
    ____________________¶¶¶¶¶¶¶¶¶¶__¶¶¶¶¶¶¶¶¶¶¶¶______<br>
    ________________________¶¶¶¶¶_______¶¶¶¶¶¶¶¶______<br>
    ________________________¶¶¶¶________¶¶¶¶__________<br>
    ______________________¶¶¶¶_________¶¶¶¶___________<br>
    ________________¶¶¶¶¶¶¶¶¶__________¶¶¶¶___________<br>
    _______________¶¶¶¶¶¶¶¶¶¶_________________________<br>
    ______________¶¶¶¶¶¶¶¶¶¶¶¶________________________<br>
    ______________¶¶¶¶¶¶¶¶¶¶¶¶________________________<br>
    ___________________¶¶¶¶¶¶¶________________________<br>
    ____________________¶¶¶¶¶¶________________________<br>
    ____________________¶¶¶¶¶_________________________
  </p>
  <p>
  Your Dox<br>
  Ip : <?php echo $ip?>
  </p>
    
  </body>
</html>