<?php
 //* Template de la page infosprofil
?>

<div class="wrapper">
	<div class="container">

		<section class="home-blog">

            <h1>Mon compte </h1>

            <h3>Les données natives du current user</h3>



     
<?php
    $current_user = wp_get_current_user();

    printf(  $current_user->user_login  ) . '<br />';

    printf( __( 'User email: %s', 'textdomain' ), esc_html( $current_user->user_email ) ) . '<br />';
    printf( __( 'User first name: %s', 'textdomain' ), esc_html( $current_user->user_firstname ) ) . '<br />';
    printf( __( 'User last name: %s', 'textdomain' ), esc_html( $current_user->user_lastname ) ) . '<br />';
    printf( __( 'User display name: %s', 'textdomain' ), esc_html( $current_user->display_name ) ) . '<br />';

    echo '<br>';
    echo "Mon ";


    printf( __( 'User ID: %s', 'textdomain' ), esc_html( $current_user->ID ) );
?>

            <h1>Les métas users qu'on a créé</h1>

            <img class="AvatarBody" id="Placeholder2DAvatarImage" alt="" src="http://avatar.xboxlive.com:80/avatar/<?php echo ($curauth->gamertag); /*le body avatar*/ ?>/avatar-body.png" />
    <form action="" method="POST">
    
        <div class="form-group">
            <label for="exampleFormControlInput1">PSEUDO</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $current_user->user_login ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">NOM</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $current_user->user_lastname ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">PRÉNOM</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $current_user->user_firstname ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">ÉCOLE</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Bordeaux</option>
            <option>Paris</option>
            <option>Lyon</option>
            <option>Toulouse</option>
            <option>Nantes</option>
            <option>Dakar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Classe</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Classe1</option>
            <option>Classe2</option>
            <option>Classe3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">LAB</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>DEV</option>
            <option>MARKETING</option>
            <option>DESIGN</option>
            
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Sexe</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Homme</option>
            <option>Femme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">MAIL</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $current_user->user_email ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">TEL</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="telephone" value="<?php echo get_user_meta($current_user->ID)['telephone'][0] ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">DOMICILE</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="domicile" value="<?php echo get_user_meta($current_user->ID)['domicile'][0] ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">ENTREPRISE</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="entreprise" value="<?php echo get_user_meta($current_user->ID)['entreprise'][0] ?>">
        </div>

        <input type="submit" value="Validez les modifications">

        <!--<button class="btn btn-primary">Primary</button>  -->


        


    </form>

    <?php 

    echo "<h2>les nouvelles données</h2>";
    echo "<br>";
    echo get_user_meta($current_user->ID)['ecole'][0];
    echo "<br>";
    echo get_user_meta($current_user->ID)['classe'][0];
    echo "<br>";
    echo get_user_meta($current_user->ID)['lab'][0];
    echo "<br>";
    echo get_user_meta($current_user->ID)['entreprise'][0];

    echo "<br>";





      update_user_meta($current_user->ID, "entreprise", $_POST['entreprise']);
      update_user_meta($current_user->ID, "telephone", $_POST['telephone']);
      update_user_meta($current_user->ID, "domicile", $_POST['domicile']);
      





        ?>
        
<?php
        /*var_dump($current_user->ID);*/





?>





















    <?php
    $birthday = get_user_meta($current_user->ID)['birthday'][0];
    echo $birthday;
    echo '<br>';
    $tel = get_user_meta($current_user->ID)['telephone'][0];
    echo $tel;
    echo '<br>';
    $sexe = get_user_meta($current_user->ID)['sexe'][0];
    echo $sexe;

    





    ?>
           


            



            	
		</section>
	
	</div> <!--container-->
</div> <!--wrapper-->

