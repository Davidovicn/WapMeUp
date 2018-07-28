<?php
#################################################
#####             * WapMeUp 2.0*             ####
#####             **************             ####
#####            Autor skripte               ####
#####              Zer0_NRG                  ####
#####   mail: portalscg@gmail.com            ####
#####   sajt: wap.g-takeover.com             ####
#################################################

##########################
#### Osnovni setup #######
##########################
$admin_mail='portalscg@gmail.com'; //Ovde ide vasha e-mail adresa
$sajt_mail="server@g-takeover.com";   //Neka lepa adresica za vash onbox kada se prijavi novi korisnik
$evro='80'; //trenutni kurs evra
$interes='0'; //Zarachunaj svoju zaradu :)
$ime_sajta="G-takeover.com";     //Ime vasheg sajta samo zbog evidencije u bazi autora
$url_adr="http://wap.g-takeover.com";  //Adresa vasheg sajta takodje zbog evidencije
#############################
#### Cena domena ############
#############################
$biz='12';
$cc='27';
$eu='19';
$info='6';
$net='9';
$org='11';
$tv='31';
$com='10';
########################
## Cena hostova ########
########################

$poklon='564';
$osnovni='806';
$napredni='1348';
$extremni='3236';

##############################
#### Mail funkcija ###########
##############################
// ovaj mail se automatski shalje korisniku koji registruje svoj sajt.
$tema='Porudzbenica';
$sajt_tema="Neko je naruchio";

$kor_mail="
$datum  $sat
                  REGISTRACIJA HOSTINGA   \n
                                            \n
                                            \n
Prijavili ste se za registraciju domena i hosta na http:\\wap.g-takeover.com .
Vashi registracioni podaci su:\n
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
Ako navedneni podaci nisu ispravni poshaljite poruku admnistratoru u roku od 24 h. \n
Uplatu za registraciju domena mozete izvrshiti u svakoj filijali komercijalne banke na tekuci rachun  br: \n
205-10015481548070977-52 \n \n
S poshtovanjem \n
G-Team \n

Ovaj mail je generisan na osnovu vasheg zahteva tako da na isti nemozete odgovoriti opcijom replay.
Kontakt mail: portalscg@gmail.com
\n";

// ovaj mail se shalje onome ko je administrator sajta.

$za_admin="
NOVI HOST PAKET NARUCHEN \n
                                   \n
              $datum  $sat          \n
                                    \n
Naruchilac: $ime $prezime            \n
Paket:$reg_host     \n
Po ceni od: $host_cena   \n
Domen: $reg_domen        \n
Po ceni od: $rach_evra     \n
Ukupna cena:$sve_ukupno din. \n
Ukupna cena u evru: $sve_evro  \n
Predvideo je registraciju sledeca tri domena:  \n
1.) $pri1.$reg_domen                          \n
2.) $pri2.$reg_domen                         \n
3.) $pri3.$reg_domen                         \n
Adresa 1: $adresa1                            \n
Adresa 2: $adresa2                           \n
Grad: $grad                                 \n
Zip: $zip                                   \n
e-mail: $mail                               \n
mob: $mob                                   \n
fix: $fix                                  \n
browser: $browser                          \n
ip: $kor_ip                                \n
port: $kor_port ";
////////////////////////////////////////////////////////////
//// Za pisanje svog teksta morash znati da ako zelish  ////
//// da napravish novi red koji se obichno postize pri- ////
//// tiskom na taster enter koristicesh komandu \n      ////
////////////////////////////////////////////////////////////
//// U ovoj verziji automatskog maila josh uvek nije do ////
//// stupna funkcija za manipulaciju fontom zbog lep-   ////
//// sheg izgleda. Za to mi treba html ali nisam imao   ////
//// vremena da to odradim. Ali u drugoj verziji BICE   ////
////////////////////////////////////////////////////////////

############################################################
#**********************************************************#
#*                      Napomena!!!                       *#
#*  Nemojte editovati nishta vishe ispod. Sledeci deo je  *#
#*  namenjen meni. Naime kada se na vashem sajtu obradi   *#
#*  neka prodaja ja cu odmah biti izveshten o tome. Posle *#
#*  toga ochekujte da vas kontaktiram. Tako cemo utvrditi *#
#*  shta dalje.                                           *#
#**********************************************************#
############################################################

$autor_mail="
             Nova Registracija                                \n
          $datum  $sat                                      \n
Na sajtu $ime_sajta \n                                    \n
$url_adr  .
Administratorov mail: $admin_mail                                            \n
                                                      \n
Registrovan je host: $reg_host  i domen: $reg_domen \n
Naruchilac: $ime $prezime                      \n
 Predvideo je registraciju sledeca tri domena:  \n
1.) $pri1.$reg_domen                          \n
2.) $pri2.$reg_domen                         \n
3.) $pri3.$reg_domen                         \n
Adresa 1: $adresa1                            \n
Adresa 2: $adresa2                           \n
Grad: $grad                                 \n
Zip: $zip                                   \n
e-mail: $mail                               \n
mob: $mob                                   \n
fix: $fix                                  \n
browser: $browser                          \n
ip: $kor_ip                                \n
port: $kor_port \n ";

?>
