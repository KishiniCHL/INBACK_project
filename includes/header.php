<?php
session_start();
?>
<header>
    <div class="top">
        <div class="top_left">
            <a href="#" id="burger-menu">☰</a>
            <a href="/index.php">
                <img id="inback_logo" src="img\logo1_texte.png" alt="Logo INBACK" />
            </a>
        </div>
        <div class="lien_top">
            <nav class="menu">
                <ul>
                    <li class="tab"><a href="/index.php">Accueil</a></li>
                    <li class="tab"><a href="/marque.php">Notre marque</a></li>
                    <li class="tab"><a href="/abonnement.php">Abonnement</a></li>
                    <li class="tab"><a href="/blog.php">Blog</a></li>
                    <?php
                    if(isset($_SESSION['mail']) && $_SESSION['admin'] == "1"): ?>
                        <li class="tab"><a href="/admin_article.php">Admin article</a></li>
                        <li class="tab"><a href="/admin_avis.php">Admin avis</a></li>
                    <?php endif; ?>
                </ul>
            </nav>

            <?php
            if(isset($_SESSION['mail'])): ?>
                <div class="menu_user">
                    <a href="deconnexion.php"><button class="bouton_connexion">Deconnexion</button></a>
                </div>
            <?php else: ?>
                <div class="menu_user">
                    <a href="inscription.php"><button class="bouton_connexion">Inscription</button></a>
                    <a href="connexion.php"><button class="bouton_connexion">Connexion</button></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>