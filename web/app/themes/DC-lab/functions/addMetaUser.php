

<?php 




/*   ------------------- ÉCOLE ------------------- */ 

function userMetaEcoleForm($user) {
    ?>
        <h2>Méta user ajoutées</h2>
        <table class="form-table">
            <tr>
                <th><label for="user_ecole">Votre école</label></th>
                <td>
                <select class="form-control"
                        name="user_ecole"
                        id="user_ecole"    
                 >
                    <option name="user_ecole" value="Bordeaux">Bordeaux</option>
                    <option name="user_ecole" value="Paris">Paris</option>
                    <option name="user_ecole" value="Lyon">Lyon</option>
                    <option name="user_ecole" value="Toulouse">Toulouse</option>
                    <option name="user_ecole" value="Nantes">Nantes</option>
                    <option name="user_ecole" value="Dakar">Dakar</option>
                </select>
                    <span class="description">Renseigner votre école</span>
                </td>
            </tr>
        </table>
    <?php
    }
    add_action('show_user_profile', 'userMetaEcoleForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaEcoleForm'); // editing another user
    add_action('user_new_form', 'userMetaEcoleForm'); // creating a new user
	 
	

    function userMetaEcoleSave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'ecole', $_REQUEST['user_ecole']);
    }
    add_action('personal_options_update', 'userMetaEcoleSave');
    add_action('edit_user_profile_update', 'userMetaEcoleSave');
    add_action('user_register', 'userMetaEcoleSave');





/*   ------------------- CLASSE ------------------- */ 

function userMetaClasseForm($user) {
    ?>

        <table class="form-table">
            <tr>
                <th><label for="user_classe">Votre classe</label></th>
                <td>
                <select class="form-control"
                        name="user_classe"
                        id="user_classe"    
                 >
                    <option name="user_classe" value="classe1">classe1</option>
                    <option name="user_classe" value="classe2">classe2</option>
                    <option name="user_classe" value="classe3">classe3</option>
                </select>
                    <span class="description">Renseigner votre classe</span>
                </td>
            </tr>
        </table>
    <?php
    }
    add_action('show_user_profile', 'userMetaClasseForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaClasseForm'); // editing another user
    add_action('user_new_form', 'userMetaClasseForm'); // creating a new user
	 
	

    function userMetaClasseSave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'classe', $_REQUEST['user_classe']);
    }
    add_action('personal_options_update', 'userMetaClasseSave');
    add_action('edit_user_profile_update', 'userMetaClasseSave');
    add_action('user_register', 'userMetaClasseSave');




    /*   ------------------- LAB ------------------- */ 

function userMetaLabForm($user) {
    ?>

        <table class="form-table">
            <tr>
                <th><label for="user_lab">Votre LAB</label></th>
                <td>
                <select class="form-control"
                        name="user_lab"
                        id="user_lab"    
                 >
                    <option name="user_lab" value="Design">Design</option>
                    <option name="user_lab" value="Dev">Dev</option>
                    <option name="user_lab" value="Marketing">Marketing</option>
                   
                </select>
                    <span class="description">Renseigner votre lab</span>
                </td>
            </tr>
        </table>
    <?php
    }
    add_action('show_user_profile', 'userMetaLabForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaLabForm'); // editing another user
    add_action('user_new_form', 'userMetaLabForm'); // creating a new user
	 
	

    function userMetaLabSave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'lab', $_REQUEST['user_lab']);
    }
    add_action('personal_options_update', 'userMetaLabSave');
    add_action('edit_user_profile_update', 'userMetaLabSave');
    add_action('user_register', 'userMetaLabSave');





/*   ------------------- DATE ANNIVERSAIRE ------------------- */ 

function userMetaBirthdayForm($user) {
    ?>
        <table class="form-table">
            <tr>
                <th><label for="user_birthday">Date anniversaire</label></th>
                <td>
                    <input
                        type="date"
                        value="<?php echo esc_attr(get_user_meta($user->ID, 'birthday', true)); ?>"
                        name="user_birthday"
                        id="user_birthday"
                    >
                    <span class="description">Renseigner votre date d'anniversaire</span>
                </td>
            </tr>
        </table>
    <?php
    }
    add_action('show_user_profile', 'userMetaBirthdayForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaBirthdayForm'); // editing another user
    add_action('user_new_form', 'userMetaBirthdayForm'); // creating a new user
	 
	

    function userMetaBirthdaySave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'birthday', $_REQUEST['user_birthday']);
    }
    add_action('personal_options_update', 'userMetaBirthdaySave');
    add_action('edit_user_profile_update', 'userMetaBirthdaySave');
    add_action('user_register', 'userMetaBirthdaySave');



  /*   ------------------- LE TELEPHONE ------------------- */ 

    
    function userMetaTelForm($user){
        ?>
        
        <table class="form-table">
            <tr>
                <th><label for="user_tel">Numéro de téléphone</label></th>
                <td>
                    <input type="text"
                    value="<?php echo esc_attr(get_user_meta($user->ID, 'telephone', true)); ?>"
                    name="user_telephone"
                    id="user_telephone"
                    >
                    <span class="description">Renseigner votre numéro de téléphone</span>
                </td>
            </tr>
        </table>
        <?php
    }
    add_action('show_user_profile', 'userMetaTelForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaTelForm'); // editing another user
    add_action('user_new_form', 'userMetaTelForm'); // creating a new user


    function userMetaTelSave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'telephone', $_REQUEST['user_telephone']);
    }
    add_action('personal_options_update', 'userMetaTelSave');
    add_action('edit_user_profile_update', 'userMetaTelSave');
    add_action('user_register', 'userMetaTelSave');

     /*   ------------------- LE SEXE ------------------- */ 

     function userMetaSexeForm($user){
        ?>
        
        <table class="form-table">
            <tr>
                <th><label for="user_sexe">Sexe</label></th>
                <td>

                <select class="form-control"
                        name="user_sexe"
                        id="user_sexe"    
                 >
                    <option name="user_sexe" value="Femme">Femme</option>
                    <option name="user_sexe" value="Homme">Homme</option>
                </select>


                    <span class="description">Renseigner votre sexe</span>
                </td>
            </tr>
        </table>
        <?php
    }
    add_action('show_user_profile', 'userMetaSexeForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaSexeForm'); // editing another user
    add_action('user_new_form', 'userMetaSexeForm'); // creating a new user


    function userMetaSexeSave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'sexe', $_REQUEST['user_sexe']);
    }
    add_action('personal_options_update', 'userMetaSexeSave');
    add_action('edit_user_profile_update', 'userMetaSexeSave');
    add_action('user_register', 'userMetaSexeSave');


    
	

    /*   ------------------- LE DOMICILE ------------------- */ 

     function userMetaDomicileForm($user){
        ?>
        
        <table class="form-table">
            <tr>
                <th><label for="user_domicile">Votre adresse</label></th>
                <td>
                    <input type="text"
                    value="<?php echo esc_attr(get_user_meta($user->ID, 'domicile', true)); ?>"
                    name="user_domicile"
                    id="user_domicile"
                    >
                    <span class="description">Renseigner votre adresse de domicile</span>
                </td>
            </tr>
        </table>
        <?php
    }
    add_action('show_user_profile', 'userMetaDomicileForm'); // editing your own profile
    add_action('edit_user_profile', 'userMetaDomicileForm'); // editing another user
    add_action('user_new_form', 'userMetaDomicileForm'); // creating a new user


    function userMetaDomicileSave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'domicile', $_REQUEST['user_domicile']);
    }
    add_action('personal_options_update', 'userMetaDomicileSave');
    add_action('edit_user_profile_update', 'userMetaDomicileSave');
    add_action('user_register', 'userMetaDomicileSave');


    

/*   ------------------- ENTREPRISE ------------------- */ 

function userMetaEntrepriseForm($user){
   ?>
   
   <table class="form-table">
       <tr>
           <th><label for="user_entreprise">Votre entreprise</label></th>
           <td>
               <input type="text"
               value="<?php echo esc_attr(get_user_meta($user->ID, 'entreprise', true)); ?>"
               name="user_entreprise"
               id="user_entreprise"
               >
               <span class="description">Renseigner votre entreprise</span>
           </td>
       </tr>
   </table>
   <?php
}
add_action('show_user_profile', 'userMetaEntrepriseForm'); // editing your own profile
add_action('edit_user_profile', 'userMetaEntrepriseForm'); // editing another user
add_action('user_new_form', 'userMetaEntrepriseForm'); // creating a new user


function userMetaEntrepriseSave($userId) {
   if (!current_user_can('edit_user', $userId)) {
       return;
   }

   update_user_meta($userId, 'entreprise', $_REQUEST['user_entreprise']);
}
add_action('personal_options_update', 'userMetaEntrepriseSave');
add_action('edit_user_profile_update', 'userMetaEntrepriseSave');
add_action('user_register', 'userMetaEntrepriseSave');

















?>

