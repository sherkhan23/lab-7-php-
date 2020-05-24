<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="lab-1.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous">
    </script>
<script>
        $(document).ready(function()
        {

            $("#readerViewButton1").click(function()
            {
                $('.header, .footer, .left, .right').fadeOut();
                $('.main').height("100%").fadeIn(1000);
                $('.main').width("100%").fadeIn(1000);

            });
            $("#readerViewButton2").click(function()
            {
                $('.header, .footer, .left, .right').fadeIn();
                $('.main').width("60%", 1000);
                $('.main, .left, .right').height("70%", 1000, "slow");

            });
        });
    </script>
</head>
<body>
  <div class="full">
    <div class="header">
      <h1>website header</h1>
    </div>
    <div class="left">
      <h1>website left part</h1>
    </div>
    <div class="main">
      <h1>website main part</h1>
     <input type="button" value="fadein" id="readerViewButton1">
      <input type="button" value="fadeout" id="readerViewButton2">
    </div>
    <div class="right">
      <h1>website right part</h1>
    </div>
    <div class="footer">
      <h1>website footer</h1>
    </div>
  </div>
</body>
<script>
document.getElementById("readerViewButton").onclick = function() {readerView()};
var ReaderView = false;
function readerView()
{
  if(ReaderView === false)
  {
    document.getElementsByClassName("header")[0].style.display = "none";
    document.getElementsByClassName("footer")[0].style.display = "none";
    document.getElementsByClassName("left")[0].style.display = "none";
    document.getElementsByClassName("right")[0].style.display = "none";
    document.getElementsByClassName("main")[0].style.height = "100%";
    document.getElementsByClassName("main")[0].style.width = "100%";
    ReaderView = true;
  }
  else
  {
    document.getElementsByClassName("header")[0].style.display = "block";
    document.getElementsByClassName("footer")[0].style.display = "block";
    document.getElementsByClassName("left")[0].style.display = "block";
    document.getElementsByClassName("right")[0].style.display = "block";
    document.getElementsByClassName("left")[0].style.height = "70%";
    document.getElementsByClassName("right")[0].style.height = "70%";
    document.getElementsByClassName("main")[0].style.height = "70%";
    document.getElementsByClassName("main")[0].style.width = "60%";
    ReaderView = false;
  }
}
</script>
</html>
