<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/item.css"/>
    <title>Item</title>
</head>

<div class="infos">
    <div>
        <?php
        foreach($infos as $info){
            if(!is_array($info)) {
                echo $info . '<br>';
            } else {
                foreach($info as $arrayInfo){
                    echo $arrayInfo . '<br>';
                }
            }
        }
        ?>
    </div>
</div>