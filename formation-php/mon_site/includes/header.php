    <?php
    $menu = [
        "Accueil" => "accueil", 
        "A propos" => "about",
        "Contact" => "contact",
        "RGPD" => "rgpd" //ajouté en plus mais n'existe pas donc not found
    ];
    ?>   
    
    <nav>
        <?php foreach ($menu as $cléPageTableau => $valeurPageTableau): ?>
        <a class="<?php if ($valeurPageTableau === $page) echo 'active'?>" href="<?="/?page=$valeurPageTableau" ?>"><?php echo $cléPageTableau ?></a> 
        <?php endforeach; ?>
    </nav>
