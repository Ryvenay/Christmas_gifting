<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pull'])) {
        require_once PROTECTED_DIR."huzasManager.php";
        if(array_key_exists('id', $_SESSION)){
            $pullSuccess = pullUser($_SESSION['id']);
        }
        else {
            $pullSuccess = pullUserWithoutId();
        }

        if($pullSuccess > 0 && $pullSuccess != false) {
            $pulledUser = getUserById(getPullById($pullSuccess)['huzott_id']);
            $_SESSION['pulled'] = $pulledUser['id'];
        }
    }
    else if(array_key_exists('pulled', $_SESSION)) {
        $pulledUser = getUserById($_SESSION['pulled']);
    }
?>

<?php if(isset($pulledUser)): ?>
    <div class="row">
        <div class="col-md-6 col-12">
            <h2>Köszönjük a részvételt</h2>
            <p>Hamarosan megrendezésre kerül a nemzetközi huzogató rendezvény. Addig is kellemes ajándék vásárlást kívánunk. </p>
        </div>
        <div class="col-md-6 col-12">
            <div class="pullRes">
                <h4>Akit húztál:</h4>
                <h3><?=$pulledUser['name']; ?></h3>
            </div>
        </div>
    </div>
    
<?php else: ?>
    <?php if(isset($pullSuccess) && $pullSuccess ==false ): ?>
        <div class="alert alert-danger" role="alert">
            Hiba történt. Lehetséges hogy még nincs elég jelentkező, próbáld újra később.
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h2>Húzz valakit</h2>
            <p>Katints a gomra és húzd ki valakinek a nevét, akinek ajándékot fogsz vásárolni. Ha még nem regisztráltál az eseményre, lentebb megteheted.</p>
        </div>
        <div class="col-md-6 col-sm-12">
            <form method="POST" class="row g-6">
            <div class="col-auto d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary mb-3 " name="pull">Húzás</button>
            </div>
            </form>
        </div>
    </div>
<?php endif; ?>


<?php if(!array_key_exists('id', $_SESSION)): ?>
        <?php require_once PROTECTED_DIR."signup.php"; ?>
<?php endif; ?>