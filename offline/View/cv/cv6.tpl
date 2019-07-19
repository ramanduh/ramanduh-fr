<div id="cv_content">

<?php 
$cv_fr = 'CV/CV_Ramananjafy_Fr.pdf';  
if (file_exists($cv_fr)) { 
   $cv_fr_date = date ("d/m/Y à H:i:s.", filemtime($cv_fr));  
} 
?>
	
<table>
    <caption>Télécharger au format PDF</caption>
    
    <tr style="height:30px">
	<th style="width:160px">Format Français:</th>
	<td><a href="/CV/CV_Ramananjafy_Fr.pdf">CV_Ramananjafy_Fr.pdf</a><br/><i>Dernière mise-à-jour le <?php echo $cv_fr_date;  ?></i></td>
    </tr>
    <tr style="height:30px">
	<th style="width:160px">Format Canadien:</th>
	<td><a href="/CV/CV_Ramananjafy_Ca.pdf">CV_Ramananjafy_Ca.pdf</a></td>
    </tr>
    <tr style="height:30px">
	<th style="width:160px">Format Anglais:</th>
	<td><a href="/CV/CV_Ramananjafy_En.pdf">CV_Ramananjafy_En.pdf</a></td>
    </tr>
    
</table>

</div>
