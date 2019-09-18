<?php
if(isset($_POST["user"]) && isset($_POST["msg"]))
{
  $file = fopen("abcd.txt", "a");
        fputs($file,$_POST["user"].": message= ".$_POST["msg"]."\r\n");
        fclose($file);
      
        echo " Added successfully!";

}
?>
<?php 
 include 'justhtml.php';
?>
<htmL>

<script>
window.setInterval("reloadIFrame();", 2000);
function reloadIFrame() {
 document.getElementById("ajchat").src=ajchat.src;
}
</script>

    <iframe id="ajchat" src="abcd.txt" style="border-width:0" width=100% height=100% frameborder="0" scrolling="no"></iframe>