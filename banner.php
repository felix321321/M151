<?php
// Output the HTML code for the menu bar
echo "<div style='display: flex; justify-content: space-between; align-items: center; padding: 10px; background-color: #f2f2f2;'>";
echo "<div>";
echo "<h1></h1>";
echo "</div>";
echo "<div style='display: flex; justify-content: flex-end;'>";
echo "<div style='margin-right: 10px;'>";
echo "<button onclick='location.href=\"addrecipe.php\";'>Add recipe</button>";
echo "</div>";
echo "<div style='margin-right: 10px;'>";
echo "<button onclick='location.href=\"mainpage.php\";'>All recipes</button>";
echo "</div>";
echo "<div style='margin-right: 10px;'>";
echo "<button onclick='location.href=\"myaccount.php\";'>My account</button>";
echo "</div>";
echo "<div style='margin-right: 10px;'>";
echo "<button onclick='location.href=\"myrecipes.php\";'>My recipes</button>";
echo "</div>";
echo "<button onclick='location.href=\"logout.php\";'>Logout</button>";
echo "</div>";
echo "</div>";
?>