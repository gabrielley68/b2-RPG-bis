<?php
    require ROOT . '/views/layout/header.php'; 
?>
<div class="container">
    <main>
        <h1 class="text-center my-3">
            Mes jeux préférés
        </h1>

        <p>
            <a href="/"><< Retour</a>
        </p>

        
        <form>
            <div class="row mb-1">
                <div class="col-6 offset-3">
                    <div class="input-group">
                        <span class="input-group-text">🔎</span>
                        <input type="text" name="searchName" class="form-control" placeholder="Rechercher par nom"/>
                        <input type="text" name="searchDev" class="form-control" placeholder="Rechercher par développeur"/>
                    </div>
                </div>
            </div>
            <div class="text-center mb-2">
                <button type="submit" class="btn btn-secondary">Valider</button>
            </div>
        </form>

        <div class="row gy-2">
            <?php foreach($filteredGames as $game): ?>
                <div class="card col-6 col-md-4 p-2">
                    <img src="<?= $game['image'] ?>" class="card-img-top" style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $game['name'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            <?= $game['developers'] . " (" . $game['releaseDate'] . ")" ?>
                        </h6>

                        <p class="card-text">
                            <?= $game['description'] ?>
                        </p>

                        <a href="<?= $game['link'] ?>" class="btn btn-primary" target="_blank">
                            Jouez maintenant !
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <a href="/game/add" class="btn btn-success mt-2 mb-5 sticky-bottom shadow-lg" style="bottom: 25px" >+ Ajouter un jeu</a>
    </main>
</div>

<?php
    require ROOT . '/views/layout/footer.php'; 
?>