<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<p id="demo"></p>
<script type="text/javascript">
var day;
switch (day) {
  case 0:
  day='pazar';
  break;
  case 1:
  day='pazartesi';
  break;
  case 2:
  day='Salı';
  break;
  case 3:
  day='Çarşamba';
  break;
  case 4:
  day='Perşembe';
  break;
  case 5:
  day='Cuma'
  break;
  case 6:
  day='Cumartesi';
  case 7:
  break;

  break;
  default:
document.getElementById("deneme").innerHTML = "Bugün " + day;
}
</script>
  </body>
</html>
