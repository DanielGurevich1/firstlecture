<?php

if(!empty($_POST)) {
    _d($_POST);
    // atlikti veiksmus ir uzsisaugoti info is posto
    header('Location: http://localhost:8888/firstlecture/webmechanics.php'); // rezultatai yra cia
    header('Bla: Blalal');
    die; // no more info
}
?>

<a href="?kabinetas=nr52&clerk=Peter">Buhalterija</a>
<a href="?kabinetas=nr53&clerk=Peter">Director</a>

<?php

_d($_GET);
_d($_POST);
if (isset($_GET['kabinetas']) && isset($_GET['clerk'])) {
    # code...
    if($_GET['kabinetas'] == 'nr52') {
        echo '<h2>Buhalterija<h2>';
        echo '<p>Darbuotojas:</p>'.$_GET['clerk'];
    } elseif 
        ($_GET['kabinetas'] == 'nr53') {
            echo '<h1>Director<h1>';
            echo '<h4>Vice<h4>'.$_GET['clerk'];
    
        } else {
            echo 'not set';
        }
    }

?>

<form action="" method="post">


<input type="text" name="kabinetas">
<input type="text" name="clerk">

<button type="submit">click</button>
</form>

