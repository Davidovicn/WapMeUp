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
##########################################
##### Kalkulacija cene ###################
##########################################

$cena_hosta=$poklon + $interes    ;
$mesechno=$cena_hosta / 12     ;
$u_evru=$cena_hosta / $evro ;
##############################################
#####Odavde pochinje standardna wml strana ###
##############################################
?>
<card id="id1" title="Poklon">
<p align="left">
<b>Poklon</b> <br/>
Ovaj paket je prvenstveno namenjen za poklanjanje . Ako imate nekog dragog ko zeli i hoce da nauchi tajnu web i wap razvoja mozete mu pokloniti ovaj paket.<br/>
<b>Karakteristike</b>  <br/>
<u>Platforma Servera:</u> Linux/unix<br/>
<u>webspace:</u> 50 mb <br/>
<u>Mesechni saobracaj (trafic):</u>Neogranicheno<br/>
<u>Poddomeni:</u>Neogranicheno<br/>
<u>Kontrol panel:</u> CONFIXX Pro<br/>
<b>e-mail</b><br/>
<u>POP3-Mail/IMAP:</u>Neogranicheno<br/>
<u>Spam i Virus Zashtita:</u>da<br/>
<u>mail server(mail.vashdomen.com):</u>da<br/>
<u>Webmail:</u>da<br/>
<u>Catch-All-Mails:</u>da<br/>
<u>Mailing-liste:</u>5<br/>
<b>Pristup serveru</b><br/>
<u>FTP nalozi:</u>Neogranicheno<br/>
<u>Web-FTP:</u>da<br/>
<b>Aplikacije, baze, prtokoli</b><br/>
<u>PHP:</u>da<br/>
<u>SSL:</u>da<br/>
<u>CGI:</u>da<br/>
<u>mySQL baze:</u>5<br/>
<u>phpMyAdmin:</u>da<br/>
<u>Cronjobs:</u>5<br/>
<u>@-domains:</u>5<br/>
<u>DNS-Wildcards:</u>da<br/>
<u>Zashtita direktorijuma lozinkom:</u>da<br/>
<u>Editovanje error stranica(404 etc.):</u>da<br/>
<u>frontpage:</u>da<br/>
<u>Samostalni BackUp:</u>da<br/>
<b>Tehnichka podrshka</b><br/>
Telefonom (u radno vreme)<br/>
E-mailom (u radno vreme)<br/>
TicketSystem (24/h)<br/>
Automatski BackUp (24h)<br/>
Mesechno: <b><?php echo $mesechno ; ?> din.</b><br/>
Ukupno:<b><?php echo  $cena_hosta ; ?>  din.</b><br/>
Ukupno u evru: <b><?php echo $u_evru ?> Evra</b><br/>
<a href='poruchi.php'>Naruchi ovaj paket</a><br/>
<small>Uz svaki kupljeni host paket obavezna ukpovina nekog od ponudjenih domena.</small><br/>
(C)G-Team
</p>
</card>
</wml>