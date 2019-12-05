<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "blue").slideUp(5000).slideDown(5000);
  });
});
</script>
</head>
<body>

<p id="p1">HI RAJIV SINGH!!</p>

<button>Click </button>

</body>
</html>
