<html>
<body>

<div id="demo">
<button type="button" onclick="loadDoc()">Click Me</button>
</div>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "myProfile.php");
  xhttp.send();
}
</script>

</body>
</html>
 6  AJAX/Task 1/myProfile.php 
@@ -0,0 +1,6 @@
<html>
<body>
<h1>Hello</h1>

</body>
</html>  