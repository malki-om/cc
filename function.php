<?php	
function check()
{$num=0;
  var_dump($_REQUEST);

  	if(!empty(($_REQUEST)))
	{
		if(empty(trim($_REQUEST["inpuexpi"])))
		{
			$GLOBALS['errex']="Merci de saisir l'email de l'expiditeur";
		}else
		{
			$GLOBALS['valex']=trim($_REQUEST["inpuexpi"]);
			$num++;

		}
		
		
		
		
		if(empty(trim($_REQUEST["inpudest"])))
		{
		  $GLOBALS['errdes']="Merci de saisir l'email de destinataire";

		}else
		{
         $GLOBALS['valdes']=trim($_REQUEST["inpudest"]);
			$num++;

		}
		
		
		
		if(empty(trim($_REQUEST["inpuobj"])))
		{
			$GLOBALS['errob']="Merci de tapez l'objet";

		}else
		{
         $GLOBALS['valob']=trim($_REQUEST["inpuobj"]);
			$num++;

		}
		
		
		
		
		if(empty(trim($_REQUEST["inpumesa"])))
		{
         $GLOBALS['errmg']="Merci de tapez le message";

		}else
		{
		 $GLOBALS['valmg']=$_REQUEST["inpumesa"];
			$num++;

		}
		
		
	}
   if ($num==4)
	{
		$GLOBALS['si']=true;
	}
	
}


?>



