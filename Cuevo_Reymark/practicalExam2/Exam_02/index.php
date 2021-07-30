<?php

$newfile = fopen("hello_there.php", "w");
$filecontent = '<?php

// This is a comment

echo "This is a test page!";
echo "Exam number two!";

//This is the end of a comment';
fwrite($newfile, $filecontent);
?>
