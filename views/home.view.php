<?php
    require ROOT . '/views/layout/header.php'; 
?>

<div class="container">
    <h1>Bienvenue sur le site de Gabriel</h1>
    <p>
        Je suis <?= $username ?>, un développeur Python qui enseigne à MDS.
    </p>
    <p>
        Voici un lien vers la liste de mes jeux : <a href="/games">Ici !</a>
    </p>

    <form>
        <input type="text" name="firstName" placeholder="Prénom">
        <input type="text" name="lastName" placeholder="Nom"/>
        <button type="submit">Valider</button>
    </form>
</div>

<?php
    require ROOT . '/views/layout/footer.php'; 
?>