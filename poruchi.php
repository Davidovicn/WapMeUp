<?php
#################################################
#####             * WapMeUp 2.0*             ####
#####             **************             ####
#####            Autor skripte               ####
#####              Zer0_NRG                  ####
#####   mail: portalscg@gmail.com            ####
#####   sajt: wap.g-takeover.com             ####
#################################################
include('config.php');
include('header.php');
?>
<card id="id1" title="Naruchi">
<p align="center">
<b>Izaberite koji host paket zelite</b><br/>
<select name='host'>
<option value=' <?php echo $poklon + $interes ;?>'> Poklon (<?php echo $poklon + $interes ;?>din.)</option>
<option value=' <?php echo $osnovni + $interes ;?>'> Osnovni(<?php echo $osnovni + $interes ;?>din.)</option>
<option value=' <?php echo $napredni + $interes ;?>'> Napredni(<?php echo $napredni + $interes ;?>din.)</option>
<option value=' <?php echo $extremni + $interes ; ?>'> Extremni(<?php echo $extremni + $interes  ;?>din.)</option>
</select><br/>
<b>Izaberite domen koji zelite da registrujete</b><br/>
<select name='domen'>
<option value=' <?php echo $com ;?>'>.com(<?php echo $com  ;?> evra)</option>
<option value=' <?php echo $net ; ?>'>.net(<?php echo $net ;?> evra)</option>
<option value=' <?php echo $org ;?>'>.org(<?php echo $org ;?> evra)</option>
<option value=' <?php echo $biz ;?>'>.biz(<?php echo $biz ;?> evra) </option>
<option value=' <?php echo $eu ;?>'>.eu(<?php echo $eu ;?> evra)</option>
<option value=' <?php echo $cc ;?>'>.cc(<?php echo $cc ;?> evra) </option>
<option value=' <?php echo $info ;?>'>.info(<?php echo $info ;?> evra)</option>
<option value=' <?php echo $tv ;?>'>.tv(<?php echo $tv ; ?> evra)</option>
</select><br/>
Ispishite minimum tri moguca imena za vash sajt po prioritetu<br/>
<b>Ime sajta(prioritet1)</b>
<input name='pri1' title='pri1' type='text' /><br/>
<b>Prioritet 2</b>
<input name='pri2' title='pri2' type='text' value=''/><br/>
<b>Prioritet 3</b>
<input name='pri3' title='pri3' type='text' value=''/><br/>
<b>Vashe ime:</b>
<input name='ime' title='ime' type='text' value=''/><br/>
<b>Prezime: </b>
<input name='prezime' title='prezime' type='text' value=''/><br/>
<b>Adresa 1</b>
<input name='adresa1' title='adresa1' type='text' value=''/><br/>
<b>Adresa 2</b>
<input name='adresa2' title='adresa2' type='text' value=''/><br/>

<b>Grad</b>
<input name='grad' title='grad' type='text' value=''/><br/>
<b>Poshtanski broj</b>
<input name='zip' title='zip' type='text' value=''/><br/>
<b>E-mail:</b>
<input name='mail' title='mail' type='text' value=''/><br/>
<b>Mob(br.):</b>
<input name='mob' title='mob' type='text' value='@'/><br/>
<b>Fix:</b>
<input name='fix' title='fix' type='text' value=''/><br/>
<anchor title="Ok">Poruchi <br/>
<?php
echo '<go href="naruchi.php?nick=$nick&amp;pass=$pass" method="post">';
?>
<postfield name="host" value="$(host)"/>
<postfield name="domen" value="$(domen)"/>
<postfield name="pri1" value="$(pri1)"/>
<postfield name="pri2" value="$(pri2)"/>
<postfield name="pri3" value="$(pri3)"/>
<postfield name="ime" value="$(ime)"/>
<postfield name="prezime" value="$(prezime)"/>
<postfield name="adresa1" value="$(adresa1)"/>
<postfield name="adresa2" value="$(adresa2)"/>
<postfield name="grad" value="$(grad)"/>
<postfield name="zip" value="$(zip)"/>
<postfield name="mail" value="$(mail)"/>
<postfield name="mob" value="$(mob)"/>
<postfield name="fix" value="$(fix)"/>
</go>
</anchor><br/><br/>
<?php
include ("footer.php");
?>
