<?php
//coded by Arpit Jain
if(isset($_POST["user"]) && isset($_POST["msg"])) 
{
  //logger code !! which will log data in abcd.txt file 
  $file = fopen("abcd.txt", "a");  // open file abcd.txt
        fputs($file,$_POST["user"].": message= ".$_POST["msg"]."\r\n");  //put data in abcd.txt 
        fclose($file);  //close file 
      
        echo " Added successfully!";  // echo success 

}
?>
<?php 
 include 'justhtml.php';  //include justhtml.php // (its just html :D
?>
<htmL>

<script> //i love js xD
window.setInterval("reloadIFrame();", 2000); // set  reload iframe time to 2s
function reloadIFrame() {  
 document.getElementById("ajchat").src=ajchat.src;
}
</script>
//iframe code 
    <iframe id="ajchat" src="abcd.txt" style="border-width:0" width=100% height=100% frameborder="0" scrolling="no"></iframe>
