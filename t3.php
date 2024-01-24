<!DOCTYPE html>
<html lang="en">
<head>
<style>button { width:150;background-color: bisque;color:'white'};</style>
<script>
var n=1;
function change_pic()
{
/* //ประโยคตัวเลือก switch */
switch(n)
{
case 1:document.getElementById('pictures').src="v1.jpg";break;

case 2:document.getElementById('pictures').src="v2.jpg";break;


}
//ก ําหนดเงอื่ นไขใชแ้สดงป่มุ Back และ Forward
if (n==1){
document.getElementById('bback').disabled = true;
document.getElementById('bforward').disabled = false;
}
else if (n==9){
document.getElementById('bback').disabled = false;
document.getElementById('bforward').disabled = true;
}
else{
document.getElementById('bback').disabled = false;
document.getElementById('bforward').disabled = false;
}

}
</script>
</head>
<body bgcolor="Gray">
<table align="conter" valign="middle" bordercolor="white" cellpadding=10 border=10>
<td>

    <button id="bback" style="width: 75; cursor:hand" onclick="n--;change_pic(); "disabled>ก่อนหน้ํา</button>
</td>
<td>
<img id= "pictures" src="meme bike.jpg">
</td>
<td>
<!-- <button onclick="n=1;change_pic();">
รูปที่ 1</button><br>
<button onclick="n=2;change_pic();">
รูปที่ 2</button><br> -->



<button id = "bforward" style="width: 75; cursor: hand"
onclick="n++; change_pic();">ถัดไป</button>
</td>
<tr>
</table>
</body>
</html>