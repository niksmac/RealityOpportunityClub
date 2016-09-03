<?php 
include('index.tpl');

function getTitle()
{
echo 'Member Search';
}

function ShowContent($rocuname)
{
?>
<form id="form1" name="form1" method="post" action="authpin_code.php">
                  <table width="400" border="0" align="center" cellpadding="4" cellspacing="0" style="margin-bottom:100px;">
                    <tr>
                      <td width="82" height="116">&nbsp;</td>
                      <td width="302">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>PIN Number</td>
                      <td><input name="pinno" type="password" id="pinno" size="20" maxlength="10" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="geninfo">Contact ROC to obtain your PIN</td>
                    </tr>
                    <?php if (isset ($_GET['err'])) { ?>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div class="errorinfodiv">Authentication Failed !</div></td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label class="submit"><input type="submit" name="button" id="button" value="Submit" /></label>
                        <label class="reset"><input type="reset" name="button2" id="button2" value="Reset" /></label></td>
                    </tr>
  </table>
</form><?php 
}

?>