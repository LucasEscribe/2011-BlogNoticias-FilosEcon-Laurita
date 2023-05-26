<?php
$links = array("<a href='http://www.google.com.ar'>Google</a>","<a href='http://www.google.com.ar'>Google</a>","<a href='http://www.google.com.ar'>Google</a>","<a href='http://www.google.com.ar'>Google</a>","<a href='http://www.google.com.ar'>Google</a>");

echo ("<table border='2' cellpadding='2' cellspacing='0' align='center'>");
echo ("<tr>");
echo ("<th>Links Interesantes</th>");
echo ("</tr>");

$cant=count($links);

for ($cont=0;$cont<$cant;$cont++) {
echo ("<tr>");
echo ("<td>".$links[$cont]."</td>");
echo ("</tr>");
}

echo ("</table>");
?>