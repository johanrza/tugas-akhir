<?php
if(isset($_GET['alert'])){
    if($_GET['alert']=='gagal'){
?>
    <button class="close toastsDefaultWarning"></button>
    <?php
    }elseif($_GET['alert']=="berhasil"){ ?>
        <button class="close toastsDefaultSuccess"></button>
    <?php
    }elseif($_GET['alert']=="hapus"){ ?>
        <button class="close toastsDefaultInfo"></button>
    <?php
    }elseif($_GET['alert']=="berhasilupdate"){?>
        <button class="close toastsDefaultSuccessUpdate"></button>
    <?php
    }
}
?>