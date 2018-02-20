<?php 
    define("TITLE", "TEAM | Frenklin's Fine Dining");
    include('includes/header.php');


?>



<div id="team-members" class="cf">

    <h1>Our Team at Franklin's</h1>
    <p>Idemo malo prezentacija TIMA i to, tdi radio ludlo ba aj jos nesto i jos nest. Evo i neka tacka, neki zarez. Dodam jos malo da ima nekog sadrzaja, i to je to dosta: <strong>The best FOOD. Ever!</strong></p>
    
    
    <hr>
        

    <?php
    
        foreach($teamMembers as $member){
    
    ?>
    
    
        <div class="member">
            
            <img src="img/<?php echo $member['img'];?>.png" alt="<?php echo $member['name']; ?>">
            <h2><?php echo $member['name']; ?></h2>
            <p><?php  echo $member['bio']; ?></p>
        </div>
    
    
    
    <?php
    
        }
    
    ?>




</div><!-- team-members -->

<hr>



















<?php
    include('includes/footer.php');

?>