</div>
</div>


</div>
<div class='col-xs-2'></div>
</div>

<?php

$site = "http://localhost:8082/SecFinal/Sec";

?>

<?php
$year = date('Y');

echo "<div id='footer'>";
echo "<span id='copyright' style='color: #bbb'>&copy; $year SecurityAware</span>";

echo "<a href='$site/index.php/Home/index' id='terms'>Terms of Service</a>";

echo "<a href='$site/index.php/Home/index' id='privacy'>Privacy Policy</a>";
?>

<?php
if($page_script !== "general.js")
{
	echo "<script type='text/javascript' src='$site/javascript/general.js'></script>";
}

if($page_script !== '')
{
	echo"<script type='text/javascript' src='$site/javascript/$page_script'></script>";
}

echo "</body>";
echo "</html>";
?>




