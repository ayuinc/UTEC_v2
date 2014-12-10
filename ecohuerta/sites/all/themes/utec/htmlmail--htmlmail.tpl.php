<?php

/**
 * @file
 * Sample template for HTML Mail test messages.
 */
global $base_url;
?>
<div class="htmlmail-body">
  <table border="0" align="center" cellpadding="0" cellspacing="0" style="background-color: white;">
    <tr>
      <td>
        <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="800"><img  src="<?php echo $base_url."/".$theme_path;?>/img/header.jpg"></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="800" colspan="3" >
        <table border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="800" colspan="2" align="left" style="color:#444444;font-family: arial;font-size: 18px;font-weight: normal;padding-top: 0;padding-left:33px;padding-bottom: 30px;line-height:1.5;">
              <?php echo nl2br($body); ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td width="800" colspan="2" align="center" style="background:#00bbe4;color:white;font-family: arial;font-size: 18px;font-weight: normal;padding-top: 10px;padding-bottom: 10px;">
        Ingrese a <a style="outline:none; color:white; text-decoration:none;font-family: arial;" href="http://www.ingenioenaccion.com" target="_blank">www.ingenioenaccion.com</a>
      </td>
    </tr>
  </table>
</div>
<?php if ($debug): ?>
<hr />
<div class="htmlmail-debug">
  <dl><dt><p>
    To customize this test message:
  </p></dt><dd><ol><li><p><?php if (empty($theme)): ?>
    Visit <u>admin/config/system/htmlmail</u>
    and select a theme to hold your custom email template files.
  </p></dt><dd><ol><li><p><?php elseif (empty($theme_path)): ?>
    Visit <u>admin/appearance</u>
    to enable your selected <u><?php echo ucfirst($theme); ?></u> theme.
  </p></dt><dd><ol><li><p><?php endif; ?>
    Copy the
    <a href="http://drupalcode.org/project/htmlmail.git/blob_plain/refs/heads/7.x-2.x:/htmlmail--htmlmail.tpl.php"><code>htmlmail--htmlmail.tpl.php</code></a>
    file to your <u><?php echo ucfirst($theme); ?></u> theme directory
    <u><code><?php echo $theme_path; ?></code></u>.
  </p></li><li><p>
    Edit the copied file.
  </p></li></ol></dd></dl>
</div>
<?php endif;
