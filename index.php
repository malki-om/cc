<?php	
require("function.php");
$errex=$errdes=$errob=$ok=$errmg="";
$valex=$valdes=$valob=$valmg="";
$si=false;
check();
 if ($si==true)
	{
	  $destination=$valdes;
	  $objet=$valob;
	  $message=$valmg;
	  $entete['From']="\"Expediteur\"<".$valex.">";
	  $entete['Replay-To']="\"Expediteur\"<".$valex.">";
	  $entete['X-Priority']="1";
     $envoie=mail($destination,$objet,$message,$entete);
	 if ($envoie==true)
	 {
		$ok="operation faite avec success";
	    $errex=$errdes=$errob=$errmg="";
		$valex=$valdes=$valob=$valmg="";
		$si=false;
	 }else
	 {
		 $ok="le message n a pus etre envoyes merci de ressayer ulterierment ";
	 }
	}

?>




<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>email</title>
   <link rel="stylesheet" href="style.css">
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">    
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
  </head>
  
  
  <body style="	background-color:#e0bf6a;">
      <h1> Application d'envoie de courier </h1>
	 <div class="container">

		 <form class="" action="" method="post" >
			 <div class="form-row">
	              <div class="form-group col-md-6">
			     	 <label for="">Expediteur<span> *</span></label>
                      <input type="email" class="form-control" name="inpuexpi" value="<?php echo $valex;?>"    placeholder=" Tapez votre email !" /> 
                      <p class="error"> <?php echo $errex; ?> </p>

	              </div>
				  
				  
				  
				  <div class="form-group col-md-6">
				     <label for="">Destinataire<span> *</span></label>
                     <input type="email" class="form-control" name="inpudest" value="<?php echo $valdes;?>" placeholder=" Tapez l'email de destinataire !" /> 
				     <p class="error"> <?php echo $errdes; ?></p>

	              </div>

	         </div>
			 
			 
			 
			 <div class="form-row">
				     <label for="">Objet<span> *</span></label>
                     <input type="text" class="form-control" name="inpuobj" value="<?php echo $valob;?>" placeholder=" Tapez l'objet de votre message !" />  
                     <p class="error"> <?php echo $errob; ?></p>
			 
			  </div>



			 <div class="form-row">
				   <label for="">Message<span> *</span></label>
                   <textarea type="email" class="form-control" name="inpumesa"  rows="8" col="30" > <?php echo $valmg;?></textarea/> 
                   <p class="error"> <?php echo $errmg;?> </p>

             </div>
			 
              <p class="comment"><span> *</span> Ces champs sont obligatoires !</p>
			  
              <input type="submit" class="btn btn-leg btn-success btn-block" name="" value="Envoyer"  />  
              <p class="success"> <?php	echo $ok ;
$ok="";			  ?> </p>

			 
			 
		  </form>
	 </div>
	


  </body>
  
  
</html>