<?php 
$folder = GSDATAOTHERPATH . '/massiveOwnFooter/';
$filename = GSDATAOTHERPATH . '/massiveOwnFooter/OwnFooter.json';
$datee = @file_get_contents($filename);
$data = json_decode($datee);
$thisfilew = GSDATAOTHERPATH .'website.xml';
if (file_exists($thisfilew)) {
	$dataw = getXML($thisfilew);
	$SITENAME = stripslashes($dataw->SITENAME);
	$SITEURL = $dataw->SITEURL;
	$TEMPLATE = $dataw->TEMPLATE;
	$PRETTYURLS = $dataw->PRETTYURLS;
	$PERMALINK = $dataw->PERMALINK;
} else {
	$SITENAME = '';
	$SITEURL = '';
} 


;?>

<script>

if('<?php echo $data->turnon;?>' == "true"){
    
document.querySelector('.gslogo img').setAttribute('src','<?php echo $SITEURL;?>'+'plugins/massiveAdmin/footerfoto/'+'<?php echo $data->ownfootericon;?>');
document.querySelector('.gslogo img').style.maxHeight="30px";
document.querySelector('.gslogo a').setAttribute('href','<?php echo $data->ownfooterlink;?>');
document.querySelector('.gslogo a img').setAttribute('alt','<?php echo $data->ownfootername;?>');
document.querySelector('.footer-left').style.marginTop = "5px";
document.querySelector('.footer-left').innerHTML = <?php echo date('Y');?> +` © <?php echo $data->ownfootername;?>`;

};

</script>

<?php


if(file_exists($filename)){
    echo $data->ownfooter;
}


;?>