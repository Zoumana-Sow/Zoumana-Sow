
<div class="contenair">
    <div class="contenair-header">
         <div class="title">Login Form</div>
    </div>     
    <div class="contenair-contenu">
        <form action="" method="post" id="form-connexion">
            <div class="input-form">
                <div class="icon-form"></div>
                <input type="text" class="form-control" error="error-1" name="login" id="" placeholder="Login">
                <div class="error-form" id="error-1"></div>
            </div>
            <div class="input-form">
                <div class="pass-form"></div>
                <input type="password" class="form-control" error="error-2" name="pwd" id="" placeholder="Password">
                <div class="error-form" id="error-2"></div>
            </div>
            <div class="input-form">
                
                <button type="submit" class="btn-form" name="buton_submit">Connexion</button>
                <a href="" class="link-form">S'inscire pour jouer?</a>
            </div>
        </form>
    </div>

</div>

<?php

if (isset($_POST['buton_submit'])) {
          $login= $_POST['login'];
          $pwd= $_POST['pwd'];
          $result= connexion( $login,$pwd);
          if ($result=="error") {
             echo "Login ou Mot de passe incorrect";  
          }else {
              header("location:index.php?page=".$result);
          }
} 
?>
<script>
    const inputs= document.getElementsByTagName("input");
    for (input of inputs) {
          input.addEventListener("keyup", function (e) {
       if(e.target.hasAttribute("error")) {
             var idDivError= e.target.getAttribute("error");
               document.getElementById(idDivError).innerText=""
           }
           
       })
        
    }


  document.getElementById("form-connexion").addEventListener("submit", function (e) {
      const inputs= document.getElementsByTagName("input");
      var error= false;
      for (input of inputs) {
          if (input.hasAttribute("error")) {
               var idDivError= input.getAttribute("error");

              if (!input.value) {
                 document.getElementById(idDivError).innerText="Ce champ est obligatoire"
                 error= true;   
              }
              
          }
          
      }
      if (error) {
      e.preventDefault();
  }  
  })
  
</script>