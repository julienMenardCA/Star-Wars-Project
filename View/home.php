<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/home.css"/>
    <title>Accueil</title>
</head>
<body>

    <form method="get">
        <label>
            <select name="category">
                <option value="people">Personnage</option>
                <option value="films">Film</option>
                <option value="planets">Planètes</option>
                <option value="species">Espèces</option>
                <option value="starships">Vaisseaux</option>
                <option value="vehicles">Véhicules</option>
            </select>
        </label>
        <input type="submit" name="choice" value="Rechercher">
    </form>

    <?php
    if(!empty($_GET['choice'])){

        if($_GET['category'] !== 'films') {
            for($i = 0; $i < sizeof($result); $i++){ ?>
                <a href="index.php?where=item&category=<?= $category ?>&id=<?= $id[$i] ?>"><?= $result[$i]->get_name() ?></a><br>
                <?php
            }
        } else {
            for ($i = 0; $i < sizeof($result); $i++) { ?>
                <a href="index.php?where=item&category=<?= $category ?>&id=<?= $id[$i] ?>"><?= $result[$i]->get_title() ?></a><br>
                <?php
            }
        }
        echo '<br>';

        if(!isset($_GET['page']) || $_GET['page'] == 1){ ?>
            <a href="<?= '?' . $_SERVER['QUERY_STRING'] . '&page=' . '2' ?>">Page suivante<img style="width: 0.8vw" src="https://image.flaticon.com/icons/png/512/271/271228.png"></a>
        <?php
        }
        else if($_GET['page'] == $numberOfPages)
        { ?>
            <a href="<?= '?' . $_SERVER['QUERY_STRING'] . '&page=' . ($_GET['page'] - 1) ?>"><img style="width: 0.8vw" src="https://image.flaticon.com/icons/png/512/32/32542.png">Page précédente</a>
        <?php
        } else { ?>
            <a href="<?= '?' . $_SERVER['QUERY_STRING'] . '&page=' . ($_GET['page'] - 1) ?>"><img style="width: 0.8vw" src="https://image.flaticon.com/icons/png/512/32/32542.png">Page précédente</a>
            <a href="<?= '?' . $_SERVER['QUERY_STRING'] . '&page=' . ($_GET['page'] + 1) ?>">Page suivante<img style="width: 0.8vw" src="https://image.flaticon.com/icons/png/512/271/271228.png"></a>
        <?php
        }
    }
    ?>
</body>
