<?php 
 $massiveHiddenSection = GSDATAOTHERPATH . '/massiveHiddenSection/';
 $filejson ='userhidden.json';
 $finaljson = $massiveHiddenSection.$filejson;

    $datee = @file_get_contents( $finaljson);
    $data = json_decode($datee);
 

?>

<script>

document.body.setAttribute('data-login','<?php echo $_COOKIE['GS_ADMIN_USERNAME'];?>');




const userHideListString = '<?php echo $data->hideuser;?>';
const userAfterSplit = userHideListString.split(',');


userAfterSplit.forEach(e=>{


    if(e == document.body.getAttribute('data-login')){
        console.log('tak!');
   





 
 
 
if(document.querySelector("#nav_pages")!==null){
if('<?php echo $data->hidepages;?>' == "hide"){document.querySelector("#nav_pages").remove()};
};

if(document.querySelector("#nav_upload")!==null){
if('<?php echo $data->hidefiles;?>' == "hide"){document.querySelector("#nav_upload").remove()};
};

if(document.querySelector("#nav_theme")!==null){
if('<?php echo $data->hidethemes;?>' == "hide"){document.querySelector("#nav_theme").remove()};
};

if(document.querySelector("#nav_plugins")!==null){
if('<?php echo $data->hideplugin;?>' == "hide"){document.querySelector("#nav_plugins").remove()};
};


if(document.querySelector("#nav_backups")!==null){
if('<?php echo $data->hidebackup;?>' == "hide"){document.querySelector("#nav_backups").remove()};
};


if(document.querySelector("#nav_i18n_gallery")!==null){
if('<?php echo $data->hidei18n;?>' == "hide"){document.querySelector("#nav_i18n_gallery").remove()};
};

if(document.querySelector(".support")!==null){
if('<?php echo $data->hidesupport;?>' == "hide"){document.querySelector(".support").remove()};
};

if(document.querySelector('#sb_massiveAdmin')!==null){
if('<?php echo $data->hidesettings;?>' == "hide"){
    document.querySelectorAll('#sb_massiveAdmin').forEach(x=>{
        x.remove();
});
};
};

if(document.querySelector(`a[href="settings.php#profile"]`)!==null){
if('<?php echo $data->hidesettings;?>' == "hide"){document.querySelector('a[href="settings.php#profile"]').remove()};
};

    };


});

</script>