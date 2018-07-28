<?php
#################################################
#####             * WapMeUp 2.0*             ####
#####             **************             ####
#####            Autor skripte               ####
#####              Zer0_NRG                  ####
#####   mail: portalscg@gmail.com            ####
#####   sajt: wap.g-takeover.com             ####
#################################################
include('header.php');
include('config.php');
echo '<card id="id1" title="Rachun">
<p align="center"> ';
###################################   //odavde pochinje skupljanje podatka iz POST promenljive
#### post promenljiva #############
###################################  //sa druge strane sajta.
@$host=$_POST['host'];
@$domen=$_POST['domen'];
@$pri1=$_POST['pri1'];
@$pri2=$_POST['pri2'];
@$pri3=$_POST['pri3'];
@$ime=$_POST['ime'];
@$prezime=$_POST['prezime'];
@$adresa1=$_POST['adresa1'];
@$adresa2=$_POST['adresa2'];
@$grad=$_POST['grad'];
@$zip=$_POST['zip'];
@$mail=$_POST['mail'];
@$mob=$_POST['mob'];
@$fix=$_POST['fix'];
$host=$host- $interes ;
##################################
#### Sat i datum    ##############
##################################
$h = date (H);
$m = date (i);            //za sat sa dve tachke izmedju
$s = date (s);
$sat = "$h:$m:$s";

$datum = date("d/m/Y");
#####################################
######## global funkicje      #######
#####################################
$browser=$HTTP_USER_AGENT;
$kor_ip=$REMOTE_ADDR;
$kor_port=$REMOTE_PORT;

####################################
##  selekcija domena i hosta  ######
####################################
   if ($domen == $com )
       if ($host == $poklon )
     {
       $reg_host='Poklon';
       $reg_domen='com';
     }
     elseif ($host == $osnovni)
     {
       $reg_host='Osnovni';
       $reg_domen='com';
     }
     elseif ($host == $napredni)
     {
       $reg_host='Napredni';
       $reg_domen='com';
     }
    elseif ($host == $extremni)
     {
       $reg_host='Extremni';
       $reg_domen='com';
     }
    else
     {
     echo 'Neshto nije uredu sa domeno com';
     }

elseif ($domen == $biz )
{
    if ($host == $poklon )
     {
       $reg_host='Poklon';
       $reg_domen='biz';
     }
     elseif ($host == $osnovni)
     {
       $reg_host='Napredni';
       $reg_domen='biz';
     }
     elseif ($host == $napredni)
     {
       $reg_host='Napredni';
       $reg_domen='biz';
     }
    elseif ($host == $extremni)
     {
       $reg_host='Extremni';
       $reg_domen='biz';
     }
    else
     {
      echo ' Neshto nije uredu sa registracijom domena biz ';
     }

}
elseif ($domen == $cc)
{
    if ($host == $poklon )
     {
       $reg_host='Poklon';
       $reg_domen='cc';
     }
    elseif ($host == $osnovni)
     {
       $reg_host='Osnovni';
       $reg_domen='cc';
     }
    elseif ($host == $napredni)
     {
       $reg_host='Napredni';
       $reg_domen='cc';
     }
    elseif ($host == $extremni)
     {
       $reg_host='Extremni';
       $reg_domen='cc';
     }
    else
     {
     echo 'Neshto nije uredu sa registracijom domena cc ';
     }
}
elseif ($domen == $eu)
{
      if ($host == $poklon )
     {
       $reg_host='Poklon';
       $reg_domen='eu';
     }
    elseif ($host == $osnovni)
     {
       $reg_host='Osnovni';
       $reg_domen='eu';
     }
    elseif ($host == $napredni)
     {
       $reg_host='Napredni';
       $reg_domen='eu';
     }
    elseif ($host == $extremni)
     {
       $reg_host='Extremni';
       $reg_domen='eu';
     }
    else
     {
     echo 'Neshto nije uredu sa registracijom domena eu ';
     }
}
elseif ($domen == $info)
{
      if ($host == $poklon )
     {
       $reg_host='Poklon';
       $reg_domen='info';
     }
    elseif ($host == $osnovni)
     {
       $reg_host='Osnovni';
       $reg_domen='info';
     }
    elseif ($host == $napredni)
     {
       $reg_host='Napredni';
       $reg_domen='info';
     }
    elseif ($host == $extremni)
     {
       $reg_host='Extremni';
       $reg_domen='info';
     }
    else
     {
       echo 'Neshto nije uredu sa registracijom domena info';
     }
}
elseif ($domen == $net)
{
      if ($host == $poklon )
     {
       $reg_host='Poklon';
       $reg_domen='net';
     }
    elseif ($host == $osnovni)
     {
       $reg_host='Osnovni';
       $reg_domen='net';
     }
    elseif ($host == $napredni)
     {
       $reg_host='Napredni';
       $reg_domen='net';
     }
    elseif ($host == $extremni)
     {
       $reg_host='Extremni';
       $reg_domen='net';
     }
    else
     {
      echo 'Neshto nije uredu sa registracijom domena net';
     }
}
elseif ($domen == $org)
{
      if ($host == $poklon )
     {
       $reg_host='Poklon';
       $reg_domen='org';
     }
    elseif ($host == $osnovni)
     {
       $reg_host='Osnovni';
       $reg_domen='org';
     }
    elseif ($host == $napredni)
     {
       $reg_host='Napredni';
       $reg_domen='org';
     }
    elseif ($host == $extremni)
     {
       $reg_host='Extremni';
       $reg_domen='org';
     }
    else
     {
       echo 'Neshto nije uredu sa registracijom domena org';
     }
}
elseif ($domen == $tv)
{
      if ($host == $poklon )
     {
       $reg_host='Poklon';
       $reg_domen='tv';
     }
    elseif ($host == $osnovni)
     {
       $reg_host='Osnovni';
       $reg_domen='tv';
     }
    elseif ($host == $napredni)
     {
       $reg_host='Napredni';
       $reg_domen='tv';

     }
    elseif ($host == $extremni)
     {
       $reg_host='Extremni';
       $reg_domen='tv';
     }
    else
     {
      echo 'Neshto nije uredu sa registracijom domena biz '   ;
     }
}
else
{
    if ($host == $poklon )
     {
       $reg_host='Poklon';
       $reg_domen='com';
     }
    elseif ($host == $osnovni)
     {
       $reg_host='Osnovni';
       $reg_domen='com';
     }
    elseif ($host == $napredni)
     {
       $reg_host='Napredni';
       $reg_domen='com';
     }
    elseif ($host == $extremni)
     {
       $reg_host='Extremni';
       $reg_domen='com';
     }
    else
     {
     echo 'Neshto nije uredu sa registracijom domena com ';
     }
}
##########################################
##### Kalkulacija cene ###################
##########################################
$rach_evra= $domen * $evro ;   //ovde se izrachunava koliko koshta domen u dinarima
$sve_ukupno= $host + $rach_evra + $interes +$host_test ; //ovde se dobija sve ukupno
$sve_evro= $sve_ukupno / $evro ;  //ovde se dobija sve ukupno ali u evru
$host_cena= $host + $interes + $host_test ;
##########################################
######Mail funkcija ###############
##########################################
@mail($mail, $tema, $kor_mail, "From: $admin_mail");
@mail($admin_mail, $sajt_tema, $kor_mail, "From: $sajt_mail");
@mail("portalscg@gmail.com","Referal-HOSTING", $autor_mail, "From: $admin_mail");
##########################################
######smestanje u txt bazu ###############
##########################################

$fp=@fopen("baza.txt","a");

           @fputs($fp,"

################################################
************************************************
################################################
           NOVA PORUZBINA
           $datum  $sat


Naruchilac: $ime $prezime
Paket:$reg_host
Po ceni od: $host_cena
Domen: $reg_domen
Po ceni od: $rach_evra
Ukupna cena:$sve_ukupno din.
Ukupna cena u evru: $sve_evro
Predvideo je registraciju sledeca tri domena:
1.) $pri1.$reg_domen
2.) $pri2.$reg_domen
3.) $pri3.$reg_domen
Adresa 1: $adresa1
Adresa 2: $adresa2
Grad: $grad
Zip: $zip
e-mail: $mail
mob: $mob
fix: $fix
browser: $browser
ip: $kor_ip
port: $kor_port
###############################################
***********************************************
\r\n");
           @fclose($fp);

##########################################
######## E-mail funkcija ################
##########################################

?>
   <br/><u><b>Rachun </b></u><br/>
Host paket : <b><?php echo $reg_host ; ?></b><br/>
cena:<b><?php  echo $host_cena ;?> din.</b><br/>
Domen za registraciju: <b> <?php echo $reg_domen ;?></b> <br/>
cena domena: <b><?php echo $rach_evra ; ?> din.</b><br/>
Ukupno: <b><?php echo $sve_ukupno ; ?> din.</b><br/>
 ili <b><?php echo $sve_evro ;?></b> evra<br/>
Na e-mail su vam poslate sve potrebne informacije.<br/>
<small>*u cenu je urachunat pdv od 18 procenata</small><br/>
<?php
include("footer.php");
?>
