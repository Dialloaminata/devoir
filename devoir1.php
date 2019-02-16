
<?php

$personne=array(

'nom'=>'Diallo',
'prenom'=>'Aminata',
'email'=>'minadialloo5@gmail.com',
'adresse'=>'Baobab',
'telephone'=>'776554277',
'Date de naissance'=>'05/01/98',
'identifiant slaclk'=>'Aminata Diallo'

);

?>
<!DDOCTYPE HTML>
    <HTML lang='fr'>
	  <head>
	     <title>Mon formulaire </title>
		  <style>
		  table,tr,td,th{
			  border:3px solid black ;
			  border-radius:15px  15px 15px ;
			  font-size:35px ;
			  
			  
		  }
		 body{ background:#E9967A;;
		 }
		 </style>
		 </head>
		 
		 <body><center style=" padding-top:8%;">
<table>
<th colspan="4"><a href="na1.JPG"><img src="na1.JPG" 
heigh : 5px ;
width: 6px ;
"/></a></th>
		
		<?php foreach ($personne as $key => $value): ?>
<tr>
<td><?php echo $key;?></td>
<td><?php echo $value;?></td>
</tr>
<?php endforeach ?>
</table>
</center>
</body>
</html>


	
		 </body>
		 </HTML>
		 