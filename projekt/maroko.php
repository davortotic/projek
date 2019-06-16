<!doctype html>

<html>
<head>
        
        <link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet'>
        <title>MAROKO - AVIONOM IZ BEOGRADA</title>
        <script  type="text/javascript" src="jquery-3.2.1.js"></script>
        <script type="text/javascript" src="jquery-validation-1.16.0\dist\jquery.validate.js"></script>
        <script type="text/javascript" src="andaluzijajs.js"></script>
        <meta charset="utf8"> 
        <style>
       body{
  background-color:gray;
    margin: 0;
    padding: 0;
    overflow-y: scroll;
    overflow-x: hidden;
  }
  .wrapper{
    
  margin: 0;
  padding: 0;

    
  }
  
  .one {
    width: 100%;
    height: 12vw;
   position: relative;
   
  }
  .one-a{
    width:30vw;
    height: 100%;
    display: inline-block;
    position: absolute;
    left: 0;
  }
  .one-a img{
  width:100%;
    height:100%;
    background: white;
  }
  
  .one-b{
    width:70vw;
    height: 100%;
    display: inline-block;
    position: absolute;
   right: 0;
   margin-top: 0;
   
  }
  .one-b-a{
  background-color: white;
  height: 4vw;
  vertical-align: top;
  }
  
  .one-b-a img{
    height: 2vw;
    padding-top: 10px;
    background: white;
  }
  .img{
    position: absolute;
    right: 0;
    margin-right: 5%;
  }
  
  .one-b-b{
  height: 8vw;
  background-color: white;
  position: relative;
  }
  
  nav {
    top: 0;
    left: 0;
    right: 0;
  width: 100%;
  height: 100px;
  padding: 10px;
  box-sizing: border-box;
  z-index: 99999;
  
  }
  nav ul{
    margin: 0;
    padding: 0px;
  list-style: none;
  display: flex;
    
  }
  nav ul li{
      margin-right: 6%;
  }
  nav ul li a{
   color: cornflowerblue;
   text-decoration: none;
   display: block;
   font-size: 1.2em;
   margin: 0;
   padding: 10px;
  }
  nav ul li a:hover{
    background-color: cornflowerblue;
    color: white;
    border-radius: 5px;
  }
  input.error{
    border: 1px solid red;
  }
  .error{
    color: red;
    font-size: 0.8em;
  }
  .two {
    width: 100%;
    height: 82vw;
    position: absolute;

  }
  .two img{
    max-height: 100%;
    max-width: 100%;
  }
  .name  {
      font-family: 'Calligraffitti';
      /* float: left; */
      font-size: 10vw;
      color: white;
      margin-left: 5%;
      margin-top: 10%;
  }
  .clearfix{
    clear: both;
  }
  
  .three {
    width: 100%;
    height: 30vw;
    position: absolute;
    bottom: 0;
    background-color: white;
  }
  
  .three-a{
    width:50%;
    height: 100%;
    display: inline-block;
    position: absolute;
   left: 0;
   margin-top: 0;
   border-right: 1px solid lightblue;
  }
  .three-b{
    width:50%;
    height: 100%;
    display: inline-block;
    position: absolute;
   right: 0;
   display: table;
  }
  
  .kontakt{
    height: 20vw;
    margin-left: 10%;
    display: table-row;
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
  }
  .forma{
    width: auto;
    padding-left: 2%;
    padding:5% 10%;
  }
  input{
  margin-bottom: 2%;
  height: 2vw;
  width: 20vw;
  border-radius:2px;
  border-style: none;
  background-color: whitesmoke;
  border: 1px solid blue;
  color: black !important
  }
  input:hover,.poruka:hover{
    background-color: lightblue;
    color: black !important;
  }
  
  label{
    color: darkblue;
  }
  .poruka{
    height: 4vw;
    width: 20vw;
    border-radius:2px;
  border-style: none;
  background-color: whitesmoke;
  border: 1px solid blue;
  }
  .posalji{
    height: 3vw;
    border-radius: 2px;
    border:1px solid blue;
    background-color: whitesmoke;
    color: darkblue;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
  }
  .posalji:hover{
    background-color: lightblue;
    
  }
  fieldset{
    width: 25vw;
    padding: 0;
    margin-left:20%;
    margin-top:5%;
  color: darkblue;
  }
  fieldset{
    border: 1px solid blue;
    border-radius: 2px;
  }
  .upute{
    padding-left: 2%;
    padding-bottom: 5%;
  height: 5vw;
  font-size: 1em;
  font-family: Arial, Helvetica, sans-serif;
  color: blue;
  width: 40vw;
  margin-left: 10%;
  text-align: center;
  }
  .upute img{
    height: 8vw;
    width: 20vw;
    
  }
  

  iframe{
    width:40vw;
    height:18vw;
    border:0;
    padding: 10px;
  margin-left: 10%;
  }
  .black{
      position: fixed;
      top: 0;
      height: 4vw;
      background-color: white;
  }
  nav.black{
    padding-left: 20%;
  }
  
  @media screen and (max-width: 992px) {
    .one{
      display: block; 
      position: relative;
      width: 100%;
    }
    .one div .logo{
      width:52%;
    }
    .one-b-a{
      height: 60px;
    }
    .one .one-b-a img{
      width: 5%;
      height: 30px;
    }
    .one div{
      display: block;
      width: 100%;
      position: relative; 
      text-align: center;
    }
    .one div ul,.one div ul li{
      display: block;
      width: 100%;
    }
    .two{
      margin-top: 250px!important;
     
    }
    .drugi{
      top:250px;
    }
    .three{
      margin-top: 270px!important;
      top:100;
    }
  }    
    .prvi,.drugi{
        display: inline-block;
        position: relative;
    }
    .prvi{
        left: 0;
        width: 70%;
        margin-top: 100px;
    background-color: whitesmoke;
    }
    .drugi{
    left:70vw;
    width: 30%;
    
    margin-top: 100px;
    border-left: 1px solid lightblue;
    
}
h3{
    color: cornflowerblue;
    padding-left: 10px;
    border-bottom: 3px solid cornflowerblue;
    
}
.prvi h3{
    width: 90px;
    margin-left: 10px;

}
.drugi h3{
    width: 120px;
    margin-left: 10px;
}
.drugi a{
    font-size: 1em;
    margin-left: 10px;
}
.drugi a{
    text-decoration: none;
    color: cornflowerblue;
    padding: 10px;
}
.drugi a:hover{
    background-color: cornflowerblue;
    color: white;
    border-radius: 5px;
}
.drugi img{
    margin-top: 120px;
    margin-left: 10px;
    width: 100%;
}
#rate{
    margin-top: 70px;
    width: 100%;
}
.text{
    margin:10px;
}

.destinacije{
  display: none;
}
.prvalista li{
position: relative;
}
.prvalista li:hover ul{
display: block;
position: absolute;
list-style: none;
top: 100%;
left: 0;
margin: 0;
padding: 0;
z-index: 9999;
}
.prvalista li:hover ul li{
  float: none;
}
.three{
    display: none;
}
.page-text{
    padding: 20px;
}
.row{
    text-align: center;
}
.h2{
    font-size:30px;color:#215985;
}
.ponuda {
    border:1px solid blue;
    width: 350px;
   margin-left: 15px;
   background-color: whitesmoke;
   margin-top: 0;
   padding: 0;
   border-radius: 5px;
   float: left;
}
.upit{
     background-color: #215985;
}
.upit h3{
    width: 100%;
    border: 0;
    margin-left: 90px;
    color: white;
    padding: 20px;
}
input{
    border-radius: 3px;
    background-color: white;
    padding-left: 10px;
  }
  ::placeholder,label{
      color: gray;
      font-size: 15px;
  }
  #lodrasli,#ldjeca{
      margin-left: 15px;
  }
  #odrasli,#djeca{
    width: 40px;
    margin-right: 20px;
  }
  #napomena{
      width: 270px;
      height: 100px;
      border-radius: 3px;
      border: 1px solid blue;
  }
  #posaljiupit{
    background-color: blue;
    border-radius: 3px;
    border-style: none;
    color: white;
    height: 30px;
    width: 70px;
    font-size: 15px;
    margin-left: 200px;
}
.odabir{
    height: 30px;
    border-radius: 3px;
}
        </style>


</head>
<body>
        <div class="wrapper">
                <div class="one">
                    <div class=" one-a">
                      <img class="logo" src="logo2.jpg">
                    </div>
                    <div class="one-b">
                        <div class="clearfix"></div>
                      
                      <div class="one-b-a">
                        <div class="img">
                      <a href="#"><img src="facebook.png"></a>
                      <a href="#"><img  src="instagram.jpg"></a>
                      <a href="#"><img src="twitter.png"></a>
                    </div>
                      </div>
                      <div class="one-b-b">
                        <nav>
                          <ul class="prvalista">
                            <li><a href="Početna.php">POČETNA</a></li>
                            <li><a href="O nama.php">O NAMA</a></li>
                            <li><a href="#">PUTOVANJA</a>
                              <ul class="destinacije">
                                <li><a href="EuropskaPutovanja.php">EUROPSKA PUTOVANJA</a></li>
                                <li><a href="daleka.php">DALEKE DESTINACIJE</a></li>
                              </ul>
                            </li>
                            <li><a href="sign-in.php"> PRIJAVA</a></li>
                  <li><a href="logout.php">ODJAVI SE</a></li>
                          </ul>
                        </nav>
                      </div>
                      <div class="clearfix"></div>
                      
          
                    </div>
                    
                </div>
                <div class="two">
                  <div class="prvi">
                          <div class="row">
                                <div class="col-md-12">
                                        <h1 class="h2">MAROKO - AVIONOM IZ BEOGRADA</h1>          
                                      <p class="lead clearfix">Termin: 05.04.2019. - 17.04.2019.</p>     
                                      </div>
                           
                                 <div class="col-md-12 ">
                                 <div class="thumbnail">
                                     <img src="maroko.jpeg" width="740" height="415" alt="MAROKO - AVIONOM IZ BEOGRADA" rel="image_src" class="responsive">                
                                       <p class="price">od <span>2.225,00</span> KM</p>
                                        </div>
                                 </div>
                                 
                                 </div>
                                 <div class="page-text">
                                        <h4 style="text-align: center;">MAROKO - AVIONOM IZ BEOGRADA</h4>
                                
                                <p style="text-align: center;">Razgled Marakeša – Bahia palača – Badi palača – Saadijske grobnice – Majorelle vrtovi</p>

                                
                                <p style="text-align: center;"><br />
                                <em>Kraljevina Maroko – zemlja mora, planina, pustinja, začina, deva, ljubaznih ljudi, neprestanog sunca, jedinstvene tradicije, berberskih plemena, nevjerojatne povijesti na sudaru Europe i Afrike, zemlja kontrasta gdje u istom vidnom polju imate palme koje se njišu na pustinjskom pijesku i snježne vrhove planine Atlas odavno predstavlja nepresušnu inspiraciju.</em></p>
                            
                                
                                <p>&nbsp;</p>
                                
                                <p><strong>1. dan: BEOGRAD-BUDIMPEŠTA-MARAKEŠ</strong>Sastanak grupe na dogovorenom mjestu. Transfer do obližnjeg aerodroma – Budimpešta. Let za Marakeš. Po slijetanju u Marakeš, transfer do riada/hotela. Slobodno vrijeme za odmor i pripreme za prvi dodir s gradom. U večernjim satima odlazak do trga Jemaa-El-Fnaa, najvećeg trga Afrike, koji je pod zaštitom UNESCO-a. Mogućnost organiziranja zajedničke večere u nekom od brojnih lokalnih štandova s hranom (po kojima je trg poznat) – svi okusi Maroka na jednom mjestu… Noćenje.</p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>2. dan: MARAKEŠ</strong>
                                Slobodno vrijeme ili krećemo u fakultativni obilazak znamenitosti starog grada – medine: džamija Kutubija, iz XII stoljeća, poznata kao arhitektonski uzor za sve džamije građene u Maroku; Saadinska grobnica sakrivena iza Mulaj Jazidove džamije, poznate po fantastičnom enterijeru sagrađenom u otmjenom kararskom mramoru; Baadi palača – građena po uzoru na Alhambru, nekada najraskošnija, danas gotovo u ruševinama, dočarat će vam moć i sjaj Saadinske sultanske dinastije; palača Bahia – najljepše sačuvano marakeško zdanje iz doba marokanskog sultanata, u kojem nerijetko rođendane slave zvijezde iz svijeta show-bizza, poput Seana Combsa aka Puff Daddyja … Svo vrijeme prolazimo uličicama i tržnice medine, istražujemo berberske rukotvorine, tekstil, začine, zanatlijske radnje… pauza za ručak i predah. U poslijepodnevnim satima odlazimo u skriveni raj u novom dijelu grada (Gueliz) – vrta Majorelle, čudesno djelo pejzažne arhitekture u kojem je živio i stvarao čuveni Yves Saint-Laurent. Slobodno vrijeme. Noćenje.</p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>3. dan: MARAKEŠ-ATLAS</strong>
                                Slobodan dan u Marakešu ili fakultativni odlazak do Atlasa i doline rijeke Urike. Krećemo u novu avanturu, naša prva stanica je tradicionalna berberska kuća, u kojoj ćemo se s domaćinima podružiti, popiti domaći berberski čaj, uz berberski kruh i med. Upoznavanje s načinom života na Atlasu, koji krije mnoštvo tradicionalnih berberskih sela. Nakon toga nastavljamo put dalje i odlazimo do sela Sti Fatma, odakle krećemo u laganu šetnju ka vodopadima Urike. Dolazimo do vodopada gdje ćemo kratko pauzirati. U dogovoreno vrijeme odlazimo do restorana gdje ćemo uživati u egzotičnim ukusima marokanske kuhinje. Slobodno vrijeme. Polazak za Marakeš i slobodno vrijeme u Marakešu. Noćenje.</p>
                                
                                
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>4. dan: MARAKEŠ-ESSAOUIRA</strong>
                                Spremanje i polazak za Essaouiru. Prolazimo kroz Dolinu Argana, u kojoj ćemo posjetiti jednu od mnogobrojnjih uljara u kojoj se prerađuje najpoznatija marokanska biljka, saznat ćemo mnogo toga o procesu prerade, upoznati se sa svojstvima jestivog i kozmetičkog arganovog ulja i mnogim drugim prerađevinama, koje ćemo moći kupiti. Na kraju puta nas čeka Essaouira – „Biser Maroka“, bijeli grad i luka na obalama Atlantika očarat će nas posebnim šarmom i opuštajućom atmosferom. Smještaj u riad. Odlazimo na plažu i uživamo, a u popodnevnim satima šetamo unutar zidina starog grada. Jedinstvenost Essaouire je ta da se obala, uslijed čudnog djelovanja struja tokom noći mijenja, pa plaža svakog dana izgleda drugačije, a tu je i čuveni vjetar alize, koji privlači veliki broj kite- i windsurfera! Slobodno vrijeme za obilazak medine, galerija i umjetničkih radnji, po kojima je grad nadaleko poznat. Noćenje.</p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>5. dan: ESSAOUIRA</strong>
                                Slobodan dan za uživanje na plaži, prvi sat kite-surfinga, fantastičan ručak u nekom od mnogobrojnh ribljih restorana, pravi low budget šoping i sve ostalo u čemu su između ostalih uživali: Winston Churchill, Jimi Hendrix i mnogi drugi, u gradu poznatom po festivalu world musica Gnaoua, “Marokanskom Woodstocku”. Moguć je odlazak do plaže Sidi Kaouki. Odmaramo na plaži, surfamo (opcionalo), uživamo u Atlantiku. Posjeta i selu Diabat, u kojem je navodno 60-ih godina boravio Jimi Hendrix, očaran magijom Essaouire. Noćenje.
                                </p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>6. dan: ESSAOUIRA-RABAT</strong>
                                Spremamo stvari i napuštamo smještaj. Slobodno vrijeme za istraživanje grada. U dogovoreno vrijeme krećemo ka Rabatu. Transfer do Rabata. Rabat je prijestolnica Maroka, grad koji predstavlja mješavinu starog i novog. Smještamo se u sobe. U dogovoru s vodičem prošetat ćemo gradom. Slobodno vrijeme. Noćenje.</p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>7. dan: RABAT</strong>
                                Krećemo u obilazak Rabata – grada koji nam nudi potpuno uživanje: Bab Oudaia uvodi nas u karakteričnu četvrt Kasbah koju nikada nećete zaboraviti, vidjet ćemo Andaluzijski vrt iz perioda Francuske kolonizacije. Obilazimo blistavi mauzolej Kralja Muhameda V, upravo na ovom mjestu se na tisuće Marokanaca zahvaljivalo za nezavisnost Maroka, Hasan toranj i naravno medinu izgrađenu u andaluzijskom stilu. Slobodno vrijeme. Noćenje.</p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>8. dan: RABAT-CASABLANCA</strong>
                                Slobodno vrijeme ili fakultativni obilazak Casablance. Casablanca je kozmopolitsko srce Maroka i njegov glavni atlatski centar, kao i najveći grad države. Elegantne prodavaonice i živahni kafići zajedno s Art Deco vilama i tradicionalnim sukovima (tržnicama) čine Casablancu izuzetno zanimljivim gradom. Moderna Casablanca je mjesto gdje se zapad sastaje i koegzistira s arapskim tradicijama. Obilazimo grad, kupujemo suvenire, snimamo fantastične fotografije… Slobodno vrijeme do polaska za Rabat. Dolazak u Rabat. Noćenje.</p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>9. dan: RABAT-MARAKEŠ</strong>
                                Spremamo stvari i napuštamo smještaj. Slobodno vrijeme do polaska za Marakeš. U dogovoreno vrijeme krećemo ka Marakešu. Dolazak i smještaj u sobe. Slobodno vrijeme. Noćenje. </p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>10. dan: MARAKEŠ-SAHARA</strong>
                                Slobodan dan. Vrijeme za šoping, šetnju po sukovima, bazarima, kupovinu začina, uživanje u hamamu, istraživanje Gueliza i medine. Mogućnost fakultativnog odlaska na dvodnevni izlet – jahanje deva u Sahari i obilazak Visokog Atlasa – prolaz kroz magični Visoki Atlas i najvišu putnu točku u Maroku – Tizi n’Tička. Jahanje deva do berberskog pustinjskog kampa, noćenje u šatorima… </p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>11. dan: SAHARA-AIT BENHADU-MARAKEŠ</strong>
                                Nevjerojatna priroda, mjesto spajanja pustinje i afričkih Alpa u svakome će probuditi avanturistički duh. Posjetit ćemo neke od starih gradova (ksarovi) i proći kroz mnogobrojna berberska sela. Vozimo se i kroz najdužu riječnu dolinu Maroka, koju stvara rijeka Draa – u mjestu Agdez ćemo probati najbolje urme na svijetu, koje dolaze baš iz ovog kraja. Posjetit ćemo i ksar Ait Benhadu, jedan od najpoznatijih na startrans-saharskom karavanskom putu, koji je bio i mjesto snimanja poznatih filmova poput ‘Lawrence od Arabije’, ‘Isus Nazarećanin’, ‘Gladijator’ itd… živopisni krajolici smjenjivat će se munjevitom brzinom pred našim očima. Povratak u Marakeš u večernjim satima. Noćenje.</p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>12. dan: MARAKEŠ-BUDIMPEŠTA</strong>
                                Spremamo stvari i napuštamo smještaj. Slobodno vrijeme za finalni šoping i individualne aktivnosti. Transfer do aerodroma. Let za Budimpeštu…Transfer do Beograda.</p>
                                
                                <p style="text-align: justify;"></p>
                                <p><strong>13. dan: BEOGRAD</strong>
                                Dolazak u Beograd u ranim jutarnjim satima. Kraj programa. </p>
                                
                                <p style="text-align: justify;"></p>
                                

                                
                    
                                
                                <p style="text-align: center;"><strong>CIJENA: 2.225,00 KM</strong></p>
                                
                                <p><strong>U cijenu putovanja uračunato je:</strong></p>
                                
                                <ul>
                                    <li>Dolazak u Beograd u ranim jutarnjim satima. Kraj programa. </li>
                                    <li>Avio prijevoz (Budimpešta – Marakeš – Budimpešta) s uključenim svim pristojbama i ručnom prtljagom od 7 kg</li>
                                    <li>Sve transfere po programu putovanja</li>
                                    <li>6 noćenja u Marakešu u Rijadu (1/2 ili 1/3 sobe sa svojom kupaonicom)</li>
                                    <li>2 noćenja u Essaouiri u Rijadu (1/2 i 1/3 sobe sa svojom kupaonicom)</li>
                                    <li>5 noćenja u Rabatu u Rijadu (1/2 ili 1/3 sobe sa svojom kupaonicom)</li>
                                    <li>Troškove organizacije putovanja</li>
                                    <li>Stručno vođenje puta/ predstavnika agencije </li>
                                    
                                </ul>
                                
                                <p><strong>U cijenu putovanja nije uračunato:</strong></p>
                                
                                <ul>
                                    <li>Doplatu za prtljagu (oko 160KM)</li>
                                    <li>Individualne troškove</li>
                                    <li>Fakultativne izlete i obilaske</li>
                                    <li>Hrana</li>
                                    <li>Doplatu za prekoračenje kilaže prtljage (cijena po kg ovisi o aviokompaniji s kojom se leti)</li>
                                    <li>Međunarodno putno osiguranje i osiguranje od otkaza putovanja, koje se preporučuje</li>
                                    
                                </ul>
                                
                                <p style="text-align: justify;"><strong>Plaćanje:</strong> Prilikom rezervacije uplaćuje se 50% od ukupne cijene aranžmana, a ostatak iznosa 15 dana do polaska.</p>
                                
                                <p style="text-align: justify;"><strong>Viza: </strong>Viza je potrebne državljanima BiH. Viza se zavr&scaron;ava elektronski i agencija Golden tours posreduje u izradi vize.</p>
                                
                                <p style="text-align: justify;">Za elektronsku aplikaciju je potrebna sljedeća dokumentacija:</p>
                                
                                <ul>
                                    <li style="text-align: justify;">dvije fotografije u JPG formatu skorijeg datuma na bijeloj pozadini (minimalna veličina 10KB, a maksimalna 1MB)</li>
                                    <li>kopija prve strane paso&scaron;a u boji u PDF fromatu (minimalna veličina 10KB, a maksimalna 300KB).</li>
                                </ul>
                                
                                
                                
                                <p><strong>- OTKAZNI ROKOVI OD STRANE PUTNIKA ZA OVAJ PROGRAM PUTOVANJA</strong></p>
                                
                                <p>Bez obzira na razlog otkaza svaki putnik koji nakon izvr&scaron;ene rezervacije otkazuje putovanje dužan je organizatoru putovanja nadoknaditi tro&scaron;kove otkaza po već izvr&scaron;enoj rezervaciji prema dole navedenim uslovima:</p>
                                
                                <ul>
                                    <li>od dana rezervacije do 90 dana do polaska na putovanje 100 KM fiksno</li>
                                    <li>od 89 dana do 70 dana do polaska na putovanje 30% od osnovne cijene aranžmana</li>
                                    <li>od 69 dana do 50 dana do polaska na putovanje 50% od osnovne cijene aranžmana</li>
                                    <li>od 49 dana do 30 dana do polaska na putovanje 70% od osnovne cijene aranžmana</li>
                                    <li>od 29 dana do 15 dana do polaska na putovanje 90% od osnovne cijene aranžmana</li>
                                    <li>od 14 dana do 6 dana do polaska na putovanje 100% od osnovne cijene aranžmana</li>
                                    <li>od 5 dana prije polaska na putovanje do putovanja 100% od osnovne cijene aranžmana + sve putničke takse koje na dan objave programa iznose 490 KM.</li>
                                </ul>
                                
                                <p>Preporučujemo policu osiguranja od otkaza putovanja, Triglav osiguranje dd.</p>
                                
                                <p><strong>Napomena</strong>: svaki putnik sa uplatom prvog iznosa rezervacije prihvata gore navedene otkazne rokove.</p>
                                
                                <p>Za realizaciju ovog programa putovanja neophodno je minimum 16 putnika.</p>
                                
                                <p><strong>Valuta: </strong>Valuta je Marokanski dirham (1 EUR=10.85MAD). Zamjenu novca možete vr&scaron;iti u mjenjačnicama.</p>
                                
                                   </div>
                                </div>
                                
          
                            </div>
                            <div class="drugi">
                                    
                                    <div class="ponuda">
                                        <div class="upit">
                                            <h3>Upit za ponudu</h3>
                                        </div>
                                        <form class="forma">
                                            <label for="polazak" >Polazak</label>
                                            <input type="date" id="polazak" name="polazak" placeholder="Polazak" value="Polazak"><br><br>
                                            <label for="povratak" >Povratak</label>
                                            <input type="date" id="povratak" name="povratak" placeholder="Povratak"><br><br>
                                            <input type="text" id="ip" name="ip" placeholder="Ime i prezime"><br><br>
                                            <input type="tel" id="tel" name="tel" placeholder="Telefon"><br><br>
                                            <input type="email" id="email" name="email" placeholder="E-mail"><br><br>
                                            <label for="odrasli" id="lodrasli">Odrasli</label> <input type="number" id="odrasli" name="odrasli">
                                            <label for="djeca" id="ldjeca">Djeca</label> <input type="number" id="djeca" name="djeca"><br><br>
                                            <label for="odabir">Odaberite ponudu</label>
                                            <select class="odabir">
                                              <option >Kuba</option>
                                              <option >Dubai</option>
                                          <option selected>Indija</option>
                                          <option>Maroko</option>
                                            </select><br><br>
                                            <textarea id="napomena" name="napomena" placeholder="Napomena"></textarea>
                                            <button type="submit" id="posaljiupit">Pošalji</button>
                                        </form>
                                    </div>
                                        
                                    
                                    
                                </div>
                                
                          </div>
                                      
                        
</body>
</html>