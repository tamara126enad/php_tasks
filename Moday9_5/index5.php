<?php
echo "<body id='body1'>";
$weather=array("&#x1F327; rain","&#x2600; sunshine","&#x1F325; clouds","&#x1F32A; hail","&#x2603; sleet","&#x2603; snow","&#x1F32B; wind");
echo "<br><h1>We've seen all kinds of weather this month.<br> At the beginning of the month,
we had $weather[5] and $weather[6].<br> Then came $weather[1] with a few $weather[2] 
and some $weather[0].<br> At least we didn't get any $weather[3] or $weather[4].</h1>";
?>
<style><?php include '../style.css'; ?> </style>