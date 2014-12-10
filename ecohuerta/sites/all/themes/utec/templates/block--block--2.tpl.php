<?php
global $base_path, $user;
?>
<div class="content block-login "<?php print $content_attributes; ?>>
    <?php
    if ($user->uid) {
        ?>
        Bienvenido, <?php echo $user->name ?> |
        <a class="iniciar inline-block" href="<?php echo $base_path ?>user/logout">
            cerrar sesión
        </a>
    <?php } else { ?>
        <a class="iniciar login inline-block" href="<?php echo $base_path ?>user">
            <?php print $content ?>
        </a>
    <?php } ?>
</div>
