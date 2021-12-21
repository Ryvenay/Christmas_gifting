
<div class="hero">
    
    <div class="parallax-wrap">
        <div class="jet-parallax-section__layout elementor-repeater-item-b663bd6 jet-parallax-section__scroll-layout">
            <div class="jet-parallax-section__image" style="background-size: contain; background-position: 50% 127%; background-image: url(&quot;https://ld-wp73.template-help.com/wordpress/prod_21235/v1/wp-content/uploads/2018/11/home-bg-px-1.png&quot;); transform: translateY(-34.2px);"></div>
        </div>
        <div class="trees"></div>
        <div class="title-block">
        <div class="green-stuff">
            <img src="<?=PUBLIC_DIR.'home-image-1.png'; ?>" class="image1" >
        </div>
        <h1>Huzogatós</h1>
    </div>
    </div>
    
</div>
    
    
    
<div class="content-wrap">
    <div class="container">

        <?php if(TODAY > START_DATE): ?>
            <?php require_once PROTECTED_DIR."pulling.php"; ?>

        <?php else: ?>
            <?php if(array_key_exists('id', $_SESSION)): ?>
                <h2>Köszönjük a jelentkezést <?=getUserById($_SESSION['id'])['name']; ?></h2>
                <h3>A húzásra hamarosan sor kerül</h3>
            <?php else: ?>
                <?php require_once PROTECTED_DIR."signup.php"; ?>
            <?php endif; ?>
        <?php endif ?>
    </div>

    <div class="container">

        <div class="rules">
            <h1>Szabályok</h1>
            <div class="row">
                <div class="col col-md-4 col-sm-6 col-12">
                    <div class="card rule">
                        <div class="card-body">
                            <h5 class="card-title">Ajándékozási kötelezettség</h5>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ajándékozási kötelezettség</h6> -->
                            <p class="card-text">A részvétel ajándékozási kötelezettséggel jár. Amennyiben mégsem szeretnél részvenni az ajándékozásban, keresd fel az adminisztrátort.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-6 col-12">
                    <div class="card rule" >
                        <div class="card-body">
                            <h5 class="card-title">Ár/Érték</h5>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
                            <p class="card-text">Az ajándékod értéke kb 2000 és 5000 Forint között legyen. Megendedett a digitális ajándék is (Steam gift, subscription, stb...).</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-6 col-12">
                    <div class="card rule">
                        <div class="card-body">
                            <h5 class="card-title">Fontos szabály</h5>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
                            <p class="card-text">A 1999. IX. törvény II. 25§ szerint Miskolc egy cigánytelep. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>