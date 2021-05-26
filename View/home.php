<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/home.css"/>
    <title>Accueil</title>
</head>
<body>
    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fhipwallpaper.com%2Fstar-wars-backgrounds%2F&psig=AOvVaw3f9xZY-qLUBdsAk7dXqnq3&ust=1622124153843000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOD_xcTB5_ACFQAAAAAdAAAAABAE">
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
                <a href="index.php?where=item&category=<?= $category ?>&id=<?= $id[$i] ?>"><?= $result[$i]->getName() ?></a><br>
                <?php
            }
        } else {
            for ($i = 0; $i < sizeof($result); $i++) { ?>
                <a href="index.php?where=item&category=<?= $category ?>&id=<?= $id[$i] ?>"><?= $result[$i]->getTitle() ?></a><br>
                <?php
            }
        }

        if(!isset($_GET['page']) || $_GET['page'] == 1){ ?>
            <a href="<?= '?' . $_SERVER['QUERY_STRING'] . '&page=' . '2' ?>">Page suivante</a>
        <?php
        }
        else if($_GET['page'] == $numberOfPages)
        { ?>
            <a href="<?= '?' . $_SERVER['QUERY_STRING'] . '&page=' . ($_GET['page'] - 1) ?>">Page précédente</a>
        <?php
        } else { ?>
            <a href="<?= '?' . $_SERVER['QUERY_STRING'] . '&page=' . ($_GET['page'] - 1) ?>">Page précédente</a>
            <a href="<?= '?' . $_SERVER['QUERY_STRING'] . '&page=' . ($_GET['page'] + 1) ?>">Page suivante</a>
        <?php
        }
    }
    ?>
</body>
