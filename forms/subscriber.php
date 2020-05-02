<?php

    functionstripCleanToHTML($s){
            returnhtmlentities(trim(strip_tags(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
    }
    functioncleanToHTML($s){
            return strip_tags(htmlentities(trim(stripslashes($s))), ENT_NOQUOTES, "UTF-8");

    }

?><!DOCTYPEhtml>
<htmllang="en">
<head>
    <metacharset="UTF-8" />
    <title>Take the Pledge!</title>
    <linkhref="css/main.css" rel="stylesheet">
</head>
<body>
    <h1 class="form__php">Thanks for signing up to get email updates on the latest discoveries!</h1>
    <dl>
    <?php 
foreach($_POST as $key 
               
        <dt><?php echo $key; ?></dt>
        <?php
        if (is_array($value)){
foreach($value as $array_value){
                $array_value =stripCleanToHTML($array_value); ?>
            <dd><?php echo $array_value; ?></dd>
            <?php
            }
        } else {
            $value =stripCleanToHTML($value); ?>
            <dd><?php echo $value; ?></dd>
            <?php
        }
    }    ?>
    </dl>
</body>
</html>