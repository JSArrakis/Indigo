<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
</head>
<body>
	<?php
        if(isset($_POST['field1']) && isset($_POST['field2'])) {
            $data = $_POST['field1'] . '-' . $_POST['field2'] . "\n";
            $ret = file_put_contents('data/mydata.txt', $data, FILE_APPEND);
            if($ret === false) {
                echo "There was an error writing this file";
            } else {
                echo "$ret bytes written to file";
            }
        } else {
            die('no post data to process');
        }
    ?>
</body>
</html>
