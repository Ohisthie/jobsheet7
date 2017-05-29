<html>
<body>
<?php
$kampusku ="STEKOM"
$alamat1 ="Jl. Majapahit 304 Semarang";
$alamat2 ="Jl. Majapahit 605 Semarang";
?>
echo"<form action=\"Linkform4.php\" method=\"POST\">";
echo"Mengirim 3 variabel sekaligus ke halaman Linkform4.php<br>";
echo"<input name=\"kampusku\" type=\"hidden\" value=\"$kampusku\">";
echo"<input name=\"alamat1\" type=\"hidden\" value=\"$alamat1\">";
echo"<input name=\"alamat2\" type=\"hidden\" value=\"$alamat2\">";
echo"<br><input name=\"kirimkan\" type=\"submit\" value=\"Kirimkan\">";
echo"</form>"
</body>
</html>