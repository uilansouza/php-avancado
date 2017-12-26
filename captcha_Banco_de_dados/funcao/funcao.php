<?php

function validaGet(){
    if(!isset($_GET)){
        exit();
        
    }
}

function valorCaptcha(){
    
}
function formulario(){
    ?>
<form id="formcaptcha" name ="formcaptcha" action ="index.php" method="get">
   
      <input placeholder="Captcha" type="text" tabindex="2" name="captcha" required>
       
</form>



<?php 


}


 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

