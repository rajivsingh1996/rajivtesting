<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
     alert("The paragraph is now hidden");
  });
  $("#show").click(function(){
    $("p").show();
    alert("The paragraph is now show");
  });
});
</script>
</head>
<body>

<p> hi rajiv what you want Hide OR Show.</p>

<button id="hide">Hide</button>
<button id="show">Show</button>

</body>
</html>
