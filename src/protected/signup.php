<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) 
    {
        if(empty($_POST['name'])) {
            $success = -1;
        }
        else {
            require_once PROTECTED_DIR."huzasManager.php";
            $success = insertSubmission($_POST['name']);
        }
        
    }
?>

<?php if(isset($success) && $success == -1): ?>
    <div class="alert alert-danger" role="alert">
        Add meg a neved!
    </div>
<?php endif; ?>


<?php if(isset($success) && $success > 0): ?>
    <div class="alert alert-primary" role="alert">
        Sikeres jelentkezés!
    </div>

<?php else: ?>
    <div class="row">
        <div class="col col-md-6 col-sm-12 col-12">
            <h2>Jelentkezés</h2>
            <p>Jelentkezz az őrületes karácsonyi huzogatós ajándékozásra, elvileg most nagyon megéri.</p>
        </div>
        <div class="col col-md-6 col-sm-12 col-12">
            <form method="POST" class="row g-6">
                <div class=" gap-2 col-12 mx-auto col-md-6">
                    <input type="text" class="form-control-plaintext" id="name" name="name" placeholder="Név">
                </div>
                <div class="d-grid gap-2 col-12 mx-auto col-md-6">
                    <button type="submit" class="btn btn-primary mb-3" name="add">Jelentkezés</button>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>

