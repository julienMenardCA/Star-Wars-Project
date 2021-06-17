<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/item.css"/>
    <title>Item</title>
</head>

<div class="infos">
    <div>
        <?php
        for($i = 0; $i < sizeof($infos); $i++){
            echo '<b>' . $arrayKeys[$i] . ' : </b>';
            if(empty($infos[$i])){
                echo 'None <br>';
            } else {
                if(is_array($infos[$i])){
                    for($j = 0; $j < sizeof($infos[$i]); $j++){
                        echo '<li>' . $infos[$i][$j] . '</li>';
                    }
                } else {
                    echo $infos[$i] . '<br>';
                }
            }

        }
        ?>
    </div>
</div>
<br>
<a href="index.php/page=home?category=<?= $category ?>&choice=Rechercher">RETOUR</a>