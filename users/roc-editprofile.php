<?php 
include('index.tpl');

function getTitle()
{
echo 'Edit Profile';
}

function ShowContent($rocuname)
{
?>
<form id="prof" name="prof" method="post" action="editprofile_code.php">
          <table width="800" border="0" align="center" cellpadding="4" cellspacing="0" class="Contents" style="margin-bottom:100px;">
            <?php 
$qry=mysql_query("select AutoID,MemberID,ActStatus,Name,RefID,ECNo,PanNo,Address,Phone,Occupation,Mobile from members where MemberId='$rocuname'");
while($qrys=mysql_fetch_array($qry))
{
$id=$qrys['AutoID'];
$MemberID=$qrys['MemberID'];
$act_status=$qrys['ActStatus'];
if ($act_status==1)
{
$status="ACTIVE";
}
else if  ($act_status==0)
{
$status="NOT ACTIVE";
}

?>
            <tr>
              <td height="55" align="left" valign="top" class="ContentBlue">&nbsp;</td>
              <td align="left" valign="top" class="ContentBlue">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td width="142" align="left" valign="top" class="ContentBlue">Name</td>
              <td width="4" align="left" valign="top" class="ContentBlue"><strong>:</strong></td>
              <td width="372" align="left" valign="top"><?php echo $qrys['Name']; ?></td>
              </tr>
            <tr align="left" valign="top">
              <td class="ContentBlue">My ROC ID</td>
              <td class="ContentBlue"><strong>:</strong></td>
              <td><?php echo $qrys['MemberID']; ?></td>
              </tr>
            <tr align="left" valign="top">
              <td width="142" class="ContentBlue">I'm Refered By</td>
              <td width="4" class="ContentBlue"><strong>:</strong></td>
              <td><?php echo $qrys['RefID']; ?></td>
              </tr>
            <tr align="left" valign="top">
              <td class="ContentBlue">Status</td>
              <td class="ContentBlue"><strong>:</strong></td>
              <td><?php echo $status; ?></td>
            </tr>
<?php if  (($qrys['ECNo'] =="")){ ?>			
            <tr align="left" valign="top">
              <td width="142" class="ContentBlue">Electral Card</td>
              <td width="4" class="ContentBlue"><strong>:</strong></td>
              <td><input name="ecno" type="text" id="ecno" value="<?php echo $qrys['ECNo']; ?>" /></td>
            </tr>
<?php }
else {
?>		
<input name="ecno" type="hidden" id="ecno" value="<?php echo $qrys['ECNo']; ?>" />

<tr align="left" valign="top">
              <td width="142" class="ContentBlue">Electral Card</td>
              <td width="4" class="ContentBlue"><strong>:</strong></td>
              <td width="372" ><?php echo $qrys['ECNo']; ?></td>
            </tr>

<?php }  if  (($qrys['PanNo'] =="")){?>		
            <tr align="left" valign="top">
              <td width="142" class="ContentBlue">PAN No.</td>
              <td width="4" class="ContentBlue"><strong>:</strong></td>
              <td width="372" class="ContentBlue"><input name="pans" type="text" value="<?php echo $qrys['PanNo']; ?>" /></td>
            </tr>
<?php } else { ?>
<input name="pans" type="hidden" value="<?php echo $qrys['PanNo']; ?>" />
 <tr align="left" valign="top">
              <td width="142" class="ContentBlue">PAN No.</td>
              <td width="4" class="ContentBlue"><strong>:</strong></td>
              <td width="372" ><?php echo $qrys['PanNo']; ?></td>
            </tr>
<?php } ?>
            <tr align="left" valign="top">
              <td width="142" class="ContentBlue">Address</td>
              <td width="4" class="ContentBlue"><strong>:</strong></td>
              <td><textarea name="address" cols="30" rows="3"><?php echo $qrys['Address']; ?></textarea></td>
              </tr>
            <tr align="left" valign="top">
              <td class="ContentBlue">Phone</td>
              <td class="ContentBlue"><strong>:</strong></td>
              <td><input name="phone" type="text" id="phone" value="<?php echo $qrys['Phone']; ?>" /></td>
            </tr>
            <tr align="left" valign="top">
              <td width="142" class="ContentBlue">Mobile</td>
              <td width="4" class="ContentBlue"><strong>:</strong></td>
              <td><input name="mobile" type="text" id="mobile" value="<?php echo $qrys['Mobile']; ?>" /></td>
              </tr>
            <tr align="left" valign="top">
              <td width="142" class="ContentBlue">Occupation</td>
              <td width="4" class="ContentBlue"><strong>:</strong></td>
              <td><input name="occupation" type="text" id="occupation" value="<?php echo $qrys['Occupation']; ?>" /></td>
            </tr>
            <tr>
              <td width="142" class="ContentBlue">&nbsp;</td>
              <td width="4" class="ContentBlue">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="ContentBlue">&nbsp;</td>
              <td class="ContentBlue">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="ContentBlue">&nbsp;</td>
              <td class="ContentBlue">&nbsp;</td>
              <td><label class="submit"><input type="submit" name="Submit" value="Save Changes" onclick="return validateform1(prof)" /></label>
                <label class="reset"><input type="reset" name="Submit2" value="Reset" /></label></td>
            </tr>
            <?php } ?>
  </table>
</form>
<?php 
}

?>