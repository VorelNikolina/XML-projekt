<!DOCTYPE html>
<html>
<head>
    <title>Naslovnica</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Nikolina Vorel" />
    <meta name="description" content="JMBAG:0246097167" />
    <link rel="stylesheet" type="text/css" href="nogomet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@500&display=swap" rel="stylesheet">
</head>
<a name="vrh"></a>
<header>
<body>
    <div class="header">
        <h1 id="logonogomet">Nogomet</h1>
        <form id="zaglavlje" action="" method="post">
            <p>Korisničko ime: </p><input type="text" name="username" id="name" placeholder="Username" >
            <p>Lozinka: </p><input type="password" name="password" id="password"  placeholder="Password" ><br /><br />
            <input type="submit" name="ok" value="Login">
            <input type="reset" value="Reset">
        </form>
</header>

<div id="jedan">

<?php 

$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$ans = $_POST;

	if (empty($ans["username"]))  {
        	echo "Korisnički račun nije unesen.";
		
    		}
	else if (empty($ans["password"]))  {
        	echo "Lozinka nije unesena.";
		
    		}
	else {
		$username = $ans["username"];
		$password = $ans["password"];
	
		provjera($username, $password);
	}
}


function provjera($username, $password) {
	

	$xml=simplexml_load_file("korisnik.xml");
	
	
	foreach ($xml->user as $usr) {
  	 	$usrn = $usr->username;
		$usrp = $usr->password;
		$usrime = $usr->ime;
		$usrprezime = $usr->prezime;
		if($usrn == $username){
			if($usrp == $password){
				echo "Prijavljeni ste kao $usrime $usrprezime.";
				return;
				}
			else{
				echo "Netočna lozinka.";
				return;
				}
			}
		}
		
	echo "Korisnik ne postoji.";
	return;
}
?>


</div>



    <ul>
        <li><a href="#općenito">Općenito</a></li>
        <li><a href="#povijest">Povijest nogometa</a></li>
        <li><a href="#suvremenaigra">Suvremena igra</a></li>
        <li><a href="#pravila">Pravila</a></li>
        <li><a href="#igralište">Igralište</a></li>
        <li><a href="#oprema">Oprema</a></li>
        <li><a href="#suđenje">Suđenje</a></li>
        <li><a href="#prekršaji">Prekršaji</a></li>
        <li><a href="#zaleđe">Zaleđe</a></li>
        <li><a href="#vraćanjelopte">Vraćanje lopte u igru</a></li>
    </ul>
    <a href="#vrh"><img class="slika" src="images/up.png"/></a>
    <div id="opcenitoonogometu"><p>
        <a name="povijest"></a>
        <a name="općenito"></a>
        <h2>Općenito o nogometu</h2><br />
        </p>Nogomet je sport u kojemu se dvije momčadi od 11 igrača nadmeću na pravokutnom igralištu travnate površine.
        Cilj igre jest postizanje više pogodaka od protivničke momčadi bilo kojim dijelom tijela osim rukom.
        Vratar je jedini igrač kojemu je dozvoljeno igrati rukama, doduše samo unutar jasno označenog pravokutnika
        ispred vlastitih vrata.
        Svim igračima dopušteno je proizvoljno kretanje po terenu, iako pravilo zaleđa ograničava napadačke kretnje
        ovisno o položaju lopte i protivničke obrane.
    </p>
    </div>
    <div id="slika1"><img id="slikaopcenito" src="images/opcenito.jpg" alt="slika nogometaša"/></div>
    <br />
    <div id="povijestnogometa"><p>
        <h2>Povijest nogometa</h2><br />
        Igre s loptom zabilježene su i prije nove ere; <em>cuju</em> bijaše jedna od razbibriga drevne Kine, kao i
        <em>harpastum</em> u Rimskoj Republici te njegov izravni starogrčki predak <em>fainínda</em> (φαινίνδα).
        Svaki od navedenih antičkih sportova bio je natjecateljske prirode, namijenjen desetorici do petnaestorici igrača po sastavu.
        Teren za igru, duljine dvjestotinjak metara, omeđen je sa svake  strane stativama ispred kojih bi vratar pokušavao spriječiti protivničke pokušaje zabijanja pogotka.
        Lopta se nije smjela uputiti suigraču bližem protivničkom golu.
        Dodavalo se i nogama i rukama, momčadi su se neprestano  izmjenjivale u posjedu zbog protivničkog pritiska i grešaka u predaji lopte, a pogodaka uglavnom bijaše vrlo malo.
        Razne inačice sportova s loptom igrale su se po terenima engleskih sveučilišta tijekom ranog 19. stoljeća.
        Kako je nogomet postupno postajao igra vještine a ne snage, igra  rukom postala je prepreka.
        Sve izraženije razlike između nogometa kakvog danas poznajemo te igara iz kojih je nastao dovele su do potrebe za osnivanjem krovnog nogometnog tijela na području čitave Engleske.
        The Football Association, engleski nogometni savez, osnovan je  26. listopada 1863. godine u Londonu na inicijativu Ebenezera Cobba Morleyja.
        Nakon šeste sjednice u prosincu iste godine, zauvijek je zabranjeno bilo kakvo kontroliranje lopte u terenu rukom, kao i saplitanje, držanje protivnika rukama te udaranje svake vrste.
     </p>
   </div>
   <div id="slika2"><img id="slikapovnog" src="images/povijest.jpg"></div>
    <br />
    <div id="suvremenaigra"><p>
        <a name="suvremenaigra"></a>
        <h2>Suvremena igra</h2><br />
        Nogometna utakmica dvoboj je dvaju momčadi od 11 igrača (10 u  polju + vratar) pod nadzorom glavnoga suca i njegovih pomoćnika na propisno označenom igralištu zadovoljavajućih dimenzija.
        Utakmica traje 90 minuta, a igrači odlaze na petnaestominutni  odmor nakon prvih 45 minuta. Trener momčadi organizira svoje igrače u željenu formaciju, ovisno o strategiji koju smatra prikladnom za svaki pojedini dvoboj.
        Međutim, desetorica igrača „u polju” imaju potpunu slobodu  kretanja u svim smjerovima.
        Momčad koja postigne više pogodaka proglašava se pobjedničkom, a nagrađuje se trima bodovima ili prolazom u sljedeću fazu natjecanja.
        Poraz ne donosi nikakve bodove.
        Moguće je odigrati i neodlučeno (neriješeno, remi); u ligaškom sustavu obje momčadi dobivaju po jedan bod, a u eliminacijskom (kup-sustavu) rješenje pitanja pobjednika ovisi o jasno navedenim propozicijama natjecanja.
    </p>
    </div>
    <div><img id="slikasuvremenaigra" src="images/berni.png"></div>
    <br />
    <div id="ulaznice">
        <img id="ulaznice1" src="images/ulaznice.png">
        <h2>Ulaznice</h2>
        <p>
            Kupi ulaznice za nadolazeće utakmice Juventusa.<br />
            Dođi i podrži "Staru damu" svojim navijanjem.<br />
            <a href="https://www.juventus.com/en/tickets/standard/first-team-men/" id="link">Saznaj više</a>
        </p>
    </div>
    <div id="rodendan">
        <img id="rodendan1" src="images/rodendan.png">
        <h2>Rođendan</h2>
        <p>
            Želiš proslaviti rođendan kao pravi Dinamovac u svom najdražem klubu?<br />
            Pozovi svoje prijatelje na najbolji rođendan ikad!<br />
            <a href="https://www.gnkdinamo.hr/hr/Club/Birthdays" id="link">Saznaj više</a>
        </p>
    </div>
    <div id="pravila"><p>
        <a name="pravila"></a>
        <h2>Pravila</h2><br />
        Sedamnaest je zasebnih pravila opisanih u IFAB-ovom (IFAB - International Football Association Board) službenom pravilniku.
        Njima je uređen gotovo svaki detalj nogometne igre, od igraće opreme do načina nastavka igre nakon prekida.
        Ostatak toga dokumenta odnosi se na tumačenje svakog pravila iz sudačkog kuta.
        Neobične, pravilnikom nepredviđene situacije riješavaju se nepisanim pravilom, zdravom logikom.
        Glavni sudac vodi glavnu i konačnu riječ neposredno prije, za vrijeme te nedugo nakon utakmice. 
        Svi sudionici utakmice, uključujući tehnička osoblja momčadi i gledateljstvo, pod sudačkom su nadležnošću.
     </p>
    </div>
    <br />
    <div id="igraliste"><p>
        <a name="igralište"></a>
        <h3>Igralište</h3><br />
        Mjesto odigravanja utakmice prirodna je ili umjetna travnata površina različitih mjera.
        Poprišta međunarodnih utakmica duljine su 100—110 m, a širine 64—75 m.
        Niti jedan teren ne smije biti veći od 120 x 90 m, dok ni najskučeniji klupski seniorski tereni ne smiju biti kraći od 90 m niti uži od 60 m.
        Sve crte na igralištu moraju biti jasno vidljive, debljine do 12 cm. Na gol-liniji sa svake strane postavljen je gol dimenzija 7,32 x 2,44 m.
        Kazneni prostor širi se po 16,5 m lijevo i desno od unutrašnjosti stativâ te 16,5 m prema naprijed.
        Polukrug na vrhu kaznenog prostora jest dio kružnice polumjera 9,15 m čije je središte tzv. „bijela točka”, mjesto odakle se izvode kazneni udarci.
     </p>
    </div>
    <div><img id="slikateren" src="images/igraliste.jpg"></div>
    <br />
    <div id="oprema"><p>
        <a name="oprema"></a>
        <h3>Oprema</h3><br />
        Četvrto pravilo nogometne igre zahtjeva od svih igrača nošenje   pet predmeta: majice kratkih ili dugih rukava, kratkih hlača, štitnika za potkoljenice („kostobrana”), dugih čarapa („štucni”) i obuće.
        Vratarima je dozvoljeno igrati u dugim hlačama.
        Osim propisane opreme, svi igrači smiju nositi grijače za ruke i  noge dok su iste boje kao i odjeća, rukavice, posebno oblikovane naočale i maske za lice i sl.
        Dioptrijske naočale, nakit, privjesci i ostali predmeti opasni po samog igrača ili ostale sudionike utakmice najstrože su zabranjeni.
        Boje jedne momčadi moraju se vidno razlikovati od protivničke,   zbog čega svaka momčad barata barem po jednom pretežno svijetlom i tamnom opremom.
        Vratar nosi boje različite od suigrača, protivnika i sudaca.
        Sudačka postava također nastupa u usklađenoj opremi, tradicionalno potpuno crnoj od glave do pete, no ipak ponešto raznolikijoj posljednjih nekoliko desetljeća.
     </p>
    </div>
    <div><img id="slikadres" src="images/dres.png"></div>
    <br />
    <div id="sudenje">
     <p>
        <a name="suđenje"></a>
        <h3>Suđenje</h3><br />
        Glavni sudac utakmice zadužen je za provedbu svih pravila u djelo.
        U tome naumu pomažu mu dva linijska suca smještena iza aut-linija, čiji su prioriteti prokazivanje zaleđa i prelaska lopte izvan granica mahanjem zastavicom.
        Međutim, „pomoćnici” ukazuju na momčad kojoj pripada lopta nakon njenog napuštanja granica igrališta te prekršaje u njihovoj neposrednoj blizini.
        Glavni sudac trudi se nametnuti autoritet igračima za vrijeme   utakmice, dok u isto vrijeme pokušava učiniti se „nevidljivim”.
        Sudac koristi zviždaljku pri svakoj značajnoj odluci.
        Može se odlučiti na usmenu opomenu, opomenu žutim kartonom ili  isključenje igrača crvenim kartonom, ovisno o prekršaju.
     </p>
    </div>
    <br />
    <div id="stadion">
        <img id="stadion1" src="images/stadion.png">
        <h2>Stadion</h2>
        <p>
            Šetnja oko stadiona Santiago Bernabéu uz priču o povijesti kluba i grada, zanimljivosti o navijačima i navijačkoj tradiciji u Madridu.<br />
            <a href="https://www.realmadrid.com/en/tickets/tour-bernabeu" id="link">Saznaj više</a>
        </p>
    </div>
    <div id="prekrsaji">
        <a name="prekršaji"></a>
        <h3>Prekršaji</h3><br />
        Momčad koja pretrpi prekršaj izvodi slobodni udarac (izravni ili neizravni) s mjesta gdje se dogodio prekršaj ili jedanaesterac ako je prekršaj izboren u protivničkom kaznenom prostoru.
        Sljedeći potezi smatraju se prekršajima za izravni slobodni udarac: udaranje, saplitanje, guranje, rušenje, držanje, skakanje na protivnika te namjerno igranje rukom.
        Guranje protivnika tijelom ili ramenom dozvoljeno je isključivo u trku za loptom te je dozvoljeno zaklanjati ("graditi") loptu tijelom.
        Jedan od prekršaja za neizravni slobodni udarac upravo je „simuliranje” — iznuđivanje prekršaja glumom.
        Ostali prekršaji za neizravni slobodni udarac jesu i opasna igra (previsoko podignuto stopalo, igranje džonom, ali i preniska igra glavom) i ometanje vratara pri ispuštanju lopte iz ruku.
    </div>
    <img id="slikasudenje" src="images/sudac.jpg">
    <div id="kartoni">
        <a name="kartoni"></a>
        <h4>Kartoni</h4><br />
        Kartonima su podložni isključivo igrači.
        Sudac može opomenuti žutim ili isključiti crvenim kartonom bilo kojeg igrača na terenu ili zamjenu na klupi.
        Drugi žuti karton istome igraču donosi njegovo isključenje te isti mora odmah napustiti teren i tehnički prostor.
        Isključeni igrač ne smije se mijenjati pa momčad do kraja utakmice ima igrača manje, a isključena neiskorištena zamjena ne smije ući u igru.
        Žuti karton dodjeljuje se za prigovor sucu riječju ili djelom, opetovane prekršaje, otezanje s vraćanjem lopte u igru, skidanje opreme, nepoštivanje propisane udaljenosti pri prekidu i neovlašteni ulazak ili izlazak iz igre.
        Izravni crveni karton pokazuje se igraču koji izrazito grubo i opasno nasrne na protivnika.
        Nekoliko je pogibeljnih vrsta „startova” (uklizavanja) kojima nema mjesta ni u jednom sportu i vrlo lako prouzroče teške ozljede: nasrtaj džonom kopačke na protivničku nogu, klizeći start s objema nogama u zraku te zakašnjeli nasrtaj na protivnika.
        Namjerni udarci laktom, šakom ili glavom također donose crveni karton.
    </div>
    <div id="slikakartoni"><img id="slikakartoni1" src="images/kartonii.jpg"></div>
    <br /><br />
    <!-- <div id="kazneniudarac">
        <a name="kazneniudarac"></a>
        <h4>Kazneni udarac</h4><br />
        Prekršaji za izravni slobodni udarac koje momčad napravi u vlastitom kaznenom prostoru kažnjavaju se „najstrožom kaznom” — jedanaestercem.
        Svi igrači, osim izvođača i vratara, izlaze iz šesnaesterca i dijela kruga na njegovu vrhu koji označava propisanu udaljenost od lopte.
        Vratar smije kretati se po crti, ali naprijed ne smije sve dok izvođač ne zamahne nogom.
        Izvođač ne smije stati u potpunosti ni u jednom dijelu zaleta.
    </div> -->
    <div id="slobodniudarac">
        <h4>Slobodni udarac</h4><br />
        Dvije su vrste slobodnog udarca: izravni i neizravni, poznat i kao „indirekt”. 
        Za razliku od izravnog, pogodak iz neizravnog ne može se postići jednim, izvođačevim, dodirom lopte. 
        Drugim riječima, lopta koja ne dodirne nikoga na putu u mrežu iz indirekta, pa ni protivnika, ne vodi se kao pogodak nego gol aut za protivničku momčad.
        Neizravni slobodni udarac u protivničkom kaznenom prostoru može biti dosuđen na udaljenosti manjoj od 9,15 m. 
        U takvoj situaciji, igrači u živom zidu koji se nalaze unutar 9,15 m od lopte moraju stati na gol-liniju, a istrčavanje im je dozvoljeno u trenutku izvođenja lopte.
    </div>
    <br />
    <div id="zalede"><p>
        <a name="zaleđe"></a>
        <h3>Zaleđe</h3><br />
        Prije svega, potrebno je napomenuti kako se vratar smatra ravnopravnim obrambenim igračem prilikom određivanja zaleđa.
        Svaki protivnik koji se, u trenutku upućivanja lopte njemu, cijelim ili dijelom tijela nađe između predzadnjeg braniča i vratara (dakle, zadnja dva braniča) nalazi se u nedozvoljenoj poziciji.
        Zaleđe se ne sudi igraču koji se nalazi na „svojoj” polovici terena niti onome koji je u ravnini s predzadnjim protivnikom.
        Budući da se svako dodavanje smatra novom akcijom, igrač koji se prvotno nalazio u zaleđu — kada je loptu primio njegov suigrač u dozvoljenoj poziciji — stigne vratiti se u ispravan položaj.
        Prilikom označavanja zaleđa, linijski sudac stane u mjestu i podigne zastavicu iznad glave reskim zamahom desne ruke da je glavni sudac može i čuti.
        Nakon sučeva zvižduka za prekid igre, usmjerava ju na neki od tri načina: dolje, ako je zaleđe nastalo na trećini terena najbližoj pomoćniku; ravno, ako je zaleđe po sredini; gore, ako je igrač u zaleđu na najudaljenijoj trećini terena.
     </p>
    </div>
    <br />
    <div id="igraci1"><img id="arsenal" src="images/arsenal.png"/></div>
    <div id="igraci2"><img id="barcelona" src="images/barcelona.png"/></div>
    <div id="igraci3"><img id="borussia" src="images/borussiadortmund.png"/></div>
    <div id="igraci4"><img id="chelsea" src="images/chelsea.png"/></div>
    <p>
        <div id="vracanjelopte">
        <a name="vraćanjelopte"></a>
        <h3>Vraćanje lopte u igru</h3><br />
        Lopta otprilike trećinu utakmice ne smatra se živom, odnosno nije u igri uslijed izlaska izvan granica terena, prekršaja, zaleđa ili postignutog pogotka. 
        Razni su oblici prekida, kao i načini vraćanja lopte u igru.
        </div>
        <div id="pocetniudarac">
        <a name="početniudarac"></a>
        <h4>Početni udarac</h4>
        Na početku svakog poluvremena i nakon postignutog pogotka, momčadi zauzimaju položaje na polovici terena koju brane.
        Lopta se postavlja u središte kruga, a izvodi na način da prvim dodirom nakon sučeva zvižduka prijeđe na protivničku stranu igrališta.
        Protivnički igrači poštuju propisano odstojanje izlaskom iz središnjeg kruga dok se lopta ne izvede.
        </div>
        <div id="golaut">
        <a name="golaut"></a>
        <h4>Gol aut</h4>
        Kada lopta prijeđe gol-liniju nakon što je zadnji dodir s njom ostvario igrač momčadi u napadu, dosuđuje se gol aut.
        Sudac pokazuje spuštenim dlanom na peterac, odakle se lopta izvodi, a linijski sudac zastavicom na isto mjesto.
        Svi igrači moraju napustiti šesnaesterac, a lopta je u igri kad napusti taj prostor.
        Vratar smije prepustiti izvođenje suigraču.
        </div>
        <div id="udaracizkuta">
        <a name="udaracizkuta"></a>
        <h4>Udarac iz kuta</h4>
        Kada loptu preko gol-linije izbaci igrač momčadi u fazi obrane, dosuđuje se udarac iz kuta ("korner").
        Za vrijeme izvođenja udarca, izvođačevi suigrači pune protivnički kazneni prostor.
        Momčad koja brani svoja vrata nastoji ispucati loptu što je dalje moguće.
        </div>
        <div id="igraci5"><img id="nkravnice" src="images/nkravnice.png"></div>
        <div id="igraci6"><img id="porto" src="images/porto.png"></div>
        <div id="igraci7"><img id="rbleipzig" src="images/rbleipzig.png"></div>
        <div id="igraci8"><img id="zenit" src="images/zenit.png"></div>
        <div id="igraci9"><img id="westbrom" src="images/westbrom.png"></div>
        <div id="igraci10"><img id="inter" src="images/inter.png"></div>
        <div id="aut">
        <a name="aut"></a>
        <h4>Aut</h4>
        Kada igrač izbaci loptu preko aut-linije, dosuđuje se ubacivanje sa strane u korist protivničke momčadi.
        Linijski sudac pruža zastavicu u smjeru napada momčadi kojoj lopta pripada.
        Aut se izvodi objema rukama iznad glave.
        Obje izvođačeve noge moraju biti na tlu u trenutku izbačaja.
        </div>
        <div id="slobodniudarci">
        <a name="slobodniudarci"></a>
        <h4>Slobodni udarci</h4>
        Lopta mora mirovati na tlu, a izvodi se isključivo nogom.
        Lopta je u igri u trenutku kad se pomakne nakon udarca.
        </div>
    </p>
    <div id="trofej">
        <img id="trofej1" src="images/trofej.png">
        <h2>Muzej</h2>
        <p>
            Doživi emociju ulaska u teren iz tunela, otkrij područje posvećeno Leu Messiju, pogledaj pet Europskih Kupova i saznaj povijest Kluba.<br />
            <a href="https://www.fcbarcelona.com/en/club/camp-nou/tour" id="link">Saznaj više</a>
        </p>
    </div>
    <div id="igraci11"><img id="panorama" src="images/panorama.jpg"></div>
    <br />
    <table id="tablica" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="8" width="" height="50">Najpoznatiji nogometni klubovi</td>
        </tr>
        <tr>
            <td width="100" height="60">Italija<br /><img id="zastava" src="images/zastavaitalije.png"></td>
            <td width="100" height="">Njemačka<br /><img id="zastava" src="images/zastavanjemacke.svg"></td>
            <td width="100" height="">Francuska<br /><img id="zastava" src="images/zastavafrancuske.svg"></td>
            <td width="100" height="">Španjolska<br /><img id="zastava" src="images/zastavaspanjolske.png"></td>
            <td width="100" height="">Engleska<br /><img id="zastava" src="images/zastavaengleske.jpg"></td>
            <td width="100" height="">Hrvatska<br /><img id="zastava" src="images/zastavahrv.png"></td>
            <td width="100" height="">Portugal<br /><img id="zastava" src="images/zastavaportugala.jpg"></td>
            <td width="100" height="">Rusija<br/><img id="zastava" src="images/zastavarusije.jpg"></td>
        </tr>
        <tr>
            <td width="100" height="60">Juventus<br /><img id="logojuventus" src="images/logojuventus.png"></td>
            <td width="100" height="">Bayern Munchen<br /><img id="logo" src="images/logobayernmunchen.png"></td>
            <td width="100" height="">PSG<br /><img id="logo" src="images/logopsg.svg"></td>
            <td width="100" height="">Real Madrid<br /><img id="logo" src="images/logorealmadrid.png"></td>
            <td width="100" height="">Liverpool<br /><img id="logo" src="images/logoliverpol.png"></td>
            <td width="100" height="">Dinamo<br /><img id="logo" src="images/logodinamo.png"></td>
            <td width="100" height="">Benfica<br /><img id="logo" src="images/logobenfica.png"></td>
            <td width="100" height="">Zenit<br /><img id="logo" src="images/logozenit.png"></td>
        </tr>
        <tr>
            <td width="100" height="60">Milan<br /><img id="logomilan" src="images/logomilan.png"></td>
            <td width="100" height="">RB Leipzig<br /><img id="logorbleipzig" src="images/logorbleipzig.png"></td>
            <td width="100" height="">Lille<br /><img id="logo" src="images/logolille.png"></td>
            <td width="100" height="">Barcelona<br /><img id="logo" src="images/logobarcelona.png"></td>
            <td width="100" height="">Manchester City<br /><img id="logo" src="images/logomanchestercity.png"></td>
            <td width="100" height="">Hajduk<br /><img id="logo" src="images/logohajduk.png"></td>
            <td width="100" height="">Porto<br /><img id="logo" src="images/logoporto.png"></td>
            <td width="100" height="">CSKA<br /><img id="logo" src="images/logocska.png"></td>
        </tr>
        <tr>
            <td width="100" height="60">Roma<br /><img id="logoroma" src="images/logoroma.png"></td>
            <td width="100" height="">Borussia<br />Dortmund<br /><img id="logo" src="images/logoborussiadortmund.svg"></td>
            <td width="100" height="">Rennes<br /><img id="logo1" src="images/logorennes.png"></td>
            <td width="100" height="">Atletico <br />Madrid<br /><img id="logoatletico" src="images/logoatleticomadrid.png"></td>
            <td width="100" height="">Arsenal<br /><img id="logo" src="images/logoarsenal.png"></td>
            <td width="100" height="">Osijek<br /><img id="logo1" src="images/logoosijek.png"></td>
            <td width="100" height="">Sporting<br /><img id="logo" src="images/logosporting.png"></td>
            <td width="100" height="">Spartak<br /><img id="logospartak" src="images/logospartak.png"></td>
        </tr>
    </table>
    <br />
    <footer>
        <form id="prijava">
            <label>
                <h3>Prijavite se na newsletter</h3>
            </label>
            Ne propustite novosti i aktualna događanja<br />iz svijeta nogometa<br />
            <input name="email" type="text" id="email" placeholder="Unesite email"><br />
            <input type="submit" value="Prijavi me">
    </form>
    <p class="ime">
        Nikolina Vorel -- JMBAG: 0246097167
    </footer>
</body>
</html>