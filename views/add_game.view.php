<?php require ROOT . '/views/layout/header.php'; ?>

<div class="container">
    <form class="mt-3" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name">  
        </div>
        <div class="mb-3">
            <label for="studio" class="form-label">Studio</label>
            <input type="text" class="form-control" id="studio" name="studio">  
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date de sortie</label>
            <input type="number" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="text" class="form-control" id="url" name="url">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>

<?php require ROOT . '/views/layout/footer.php'; ?>