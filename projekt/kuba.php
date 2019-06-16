
<!DOCTYPE html>
<html>

<head>
    
    <link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet'>
    <title>KUBA - AVIONOM IZ BEOGRADA</title>
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
  
  .map{
  height: auto;
  padding-bottom: 2%;
  
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
                                <h1 class="h2">KUBA- AVIONOM IZ BEOGRADA</h1>          
                              <p class="lead clearfix">01.07.2019.- 17.07.2019. </p>     
                              </div>
                   
                         <div class="col-md-12 ">
                         <div class="thumbnail">
                         <img src="kuba.jpeg"  width="740" height="415" alt="KUBA - AVIONOM IZ BEOGRADA" rel="image_src" class="responsive">                  
                         <p class="price">od <span>2.880,00</span> KM</p>
                                </div>
                         </div>
                         
                         
                         
                     
                     </div>
                <div class="page-text">
                        <h4 style="text-align: center;"><strong>Havana – Trinidad – Santa Clara – Varadero</strong></h4>

                        <p>&nbsp;</p>
                        
               
                        
                        <p style="text-align: center;">17 dana/16 noćenja</p>
                        
                        <p style="text-align: center;">Avionom iz Beograda</p>
                        
                        
                        
                        
                        <p><strong>Opis aranžmana:</strong></p>
                        
                        <p style="text-align: justify;"><strong>1.dan: BEOGRAD </strong>&nbsp;<br />
                        Sastanak grupe na aerodromu Nikola Tesla u dogovoreno vrijeme (ukoliko vam više
odgovara, postoji mogućnost polazaka sa drugih aerodroma: Zagreb, Budimpešta…). Let za
Havanu sa usputnim presjedanjima.</p>
                        
                        <p style="text-align: justify;"><strong>2. dan: HAVANA</strong>&nbsp;<br />
                        Dolazak u Havanu. Prijevoz do smještaja. Havana vam se na prvi pogled može učiniti kao
neriješiva slagalica, ali ako naučite kako je složite, pred vama će se ukazati prelijepa slika.
Havanu nitko nije mogao izmisliti. Mnogo je neobuzdana, puna kontradiktornosti, a i pored
50 godina zapuštenosti, nestvarno je lijepa. Možda je za to kriva njena turbulentna povijest
koja je i dalje vidljiva duž kolumbijskih ulica punih užarene atmosfere. Možda je kriv
pobjednički duh njenih žitelja ili neumorna energija salse koja se odbija o zidove i navire iz
ljudi. Nemojte dolaziti u Havanu sa spiskom pitanja. Dođite otvorenog uma i budite spremni
na dugo, sporo zavođenje. Prošetajte ulicama Stare Havane i osjetit ćete duboku povezanost
sa prošlošću u impresivnoj tvrđavi pored obale ili na intimnim trgovima. Noćenje.</p>
                        
                        <p style="text-align: justify;"><strong>3.dan:HAVANA</strong><br />Krećemo sa upoznavanjem, grada i lokalnom kulturom. Utapamo se u svijet oko nas koji smo
mogli vidjeti samo na TV-u… Stari američki automobili iz 50-ih godina, trgovine sa
suvenirima posvećenim kubanskoj revoluciji, nasmijani i dobroćudni ljudi, energija grada
koja se ne može opisati riječima. Počinjemo šetnju i obilazimo Staru Havanu (Havana Vieja)
– kulturni i povijesni centar grada: Capitolio, Grand Teatro, kao i omiljeno šetalište lokalaca
Malecon – Avenija pored mora. Kasnije zalazimo malo dublje, u srce starog grada, gdje se
nalazi nekoliko prelijepih starih trgova: Plaza de Armas, Plaza de la Catedral, Plaza Vieja i
pješačka zona Obispo. Poslije ovakvog dana, najbolje se opuštamo uz mojito i nezaobilazni
tompus. Noćenje.
                        </p>
                        
                        <p style="text-align: justify;"><strong>4.dan:HAVANA</strong><br />Dan za odmor. Slobodno vrijeme u Havani ili fakultativni izlet na jednu od prelijepih plaža
nedaleko od Havane – Santa Maria del Mar. Dan rezerviran za kupanje, sunčanje i upijanje
ritmova salse.  Zalazak Sunca na čuvenoj tvrđavi Tres Rejes del Moro – najljepša panorama
Havane. Povratak u večernjim satima. Večer započinjemo ispijanjem čuvenih i danas svjetski
poznatih koktela koji su nastali na Kubi – Daiquiri u „El Floridita“ ili Mojito u „La Bodeguita
del Medio“ – omiljenim mjestima Ernesta Hemingveja. A uvečer – provod na kubanski način
– Casa de la Musica ili neki od drugih barova Havane… Noćenje.
                        </p>
                        <p style="text-align: justify;"><strong>5.dan:HAVANA</strong><br />Obilazak novog dijela Havane (Vedado) počinjemo od najpoznatijeg Trga Revolucije na Kubi
– nacionalni memorial “apostola” kubanske nacije Hosea Martija – toranj visok 139 m, čuveni
mural Ernesta Če Gevare i legendarnog Kamila Sienfuegosa. Nastavljamo do sveučilišta,
hotela Havana Libre i poznate La Rampe – centra novog dijela grada. Nakon pauze za ručak
odlazimo do hotela Nacional, uz piće u prelijepoj bašti sa pogledom na aveniju Malecon i
ocean zavšavamo još jedan uzbudljivi dan u Havani. Noćenje.
                        </p>


                        <p style="text-align: justify;"><strong>6. dan: HAVANA</strong><br />Slobodan dan ili fakultativni cjelodnevni  odlazak u dolinu Vinjales. Čekaju nas prelijepi
predjeli Zapadne Kube. Vidjet ćemo kako žive i rade ljudi van velike prijestolnice i upoznati
se sa pojedinostima po kojima je Kuba svjetski poznata. U gradiću Pinar de Rio obilazimo
tvornicu ruma, a nakon toga idemo u posjetu pećini sa izvorima rijeke San Vinsente, kroz
koju prolazimo pješke i čamcima, istražujući fantastične pećinske ukrase. Pauza za ručak,
nakon koje odlazimo do  nevjerojatnog murala Praistorije – naslikan 60-tih godina prošlog
stoljeća na liticama poznatih Mogotesa jedan je od najvećih murala na svijetu. U povratku
svratit ćemo na plantažu duhana na kojoj ćemo vidjeti kako se uzgaja, suši i ručno mota duhan
od koga se proizvode čuvene kubanske cigarete. Povratak u Havanu u večernjim
satima. Noćenje.
                        </p>
                        <p style="text-align: justify;"><strong>7. dan: HAVANA</strong><br />Slobodan dan za individualne aktivnosti u Havani. U Havani možete posjetite povijesne
spomenike, crkve, tvornice cigareta, galerije, muzeje, noćne klubove i restorane, mjesta sa
UNESCO-ve liste svjetske baštine ili plaže izvan Havane gdje možete da uživate ili odete na

ronjenje. Dok hodate ulicama, glazba će dopirati do vas sa radija iz domova ljudi. Mali
bendovi sviraju u kafićima i barovima glazbu koja se zove „son” koju je popularizirao film
Buena Vista Social Club. Proći ćete pored nekog kafića na otvorenom sa namjerom da
popijete kavu na brzinu, ali tamo će svirati bend sa pjevačem i pet glazbenika. Vi ćete završiti
svoju kavu, ali glazba je toliko zarazna i vesela, da ćete ondje provesti ostatak dana. Ništa nije
tako dobro kao sjedenje u kafiću, u Havani, kada je vrijeme lijepo, a glazba puna života.
Preporučujemo fakultativni obilazak kuće Ernesta Hemingveja, čuvenog pisca i pustolova.
Slobodno vrijeme za posljednje fotografiranje Havane i kupovinu suvenira. Noćenje.
                        </p>
                        <p style="text-align: justify;"><strong>8. dan: HAVANA-Trinidad</strong><br />Ujutru se pakiramo i napuštamo sobe. Putujemo za Trinidad (oko 5h vožnje), a kao da
putujemo u prošlost, jer tamo je vrijeme stalo krajem 19. stoljeća – i dalje stoji. Trinidad je
jedinstven po kolonijalnoj arhitekturi iz vremena šećernih barona i veleposrednika, iz
vremena prije Revolucije. Veliki dio gradića je zaštićen od strane UNESCO-a. Smještamo se
u privatnim kućama kolonijalnog stila (Casa Particular). Ostatak dana provodimo šetajući
starim kaldrmama ovog šarenog mesta. Noćenje.
                        </p>
                        <p style="text-align: justify;"><strong>9. dan: Trinidad</strong><br />Budimo se i uz šalicu jake i mirisne lokalne kave i počinjemo novi pohod na karipsku plažu
na poluotoku Ancon (fakultativno). U blizini Trinidada, na oko 15km nalazi se jedna od
ljepših plaža južne obale Kube. Tamo smo cijeli dan i radimo samo ono što volimo! Uvečer
(po dogovoru) – disko duboko u pećini, popularan među mladim Kubancima i posjetiteljima
Trinidada. Noćenje.
                        </p>
                        <p style="text-align: justify;"><strong>10. dan: Trinidad</strong><br />Slobodan dan ili fakultativni izlet u Nacionalni park Guanajara – Topes de Koljantes, u
okolini Trinidada – čekaju nas divni vodopadi, kupanje u prirodnom slatkovodnom bazenu,
planinarenje tropskom šumom, vidikovac, obilazak plantaža kave.Povratak u kasnim
popodnevnim satima. Uvečer po dogovoru partijamo negdje pod vedrim nebom uz ritmove
salse do kasno u noć. Noćenje.
                        </p>
                        <p style="text-align: justify;"><strong>12. Trinidad – Santa Clara – Varadero</strong><br />Napuštamo Trinidad i krećemo u Santa Klaru, grad u središtu Kube. Uz dužno poštovanje
Havani, Santa Klara je ipak najrevolucionarniji grad na Kubi i to ne samo zbog svoje opsesije
prema Che Gevari, argentinskom doktoru koji je postao revolucionar. U samom geografskom
centru Kube, Santa Klara je grad novih trendova i neiscrpne kreativnosti.Ovaj gradić
najpoznatiji je i po mauzoleju i memorijalu velikog Che Gevare. U muzeju koji je sastavni dio
mauzoleja nalaze se izloženi Cheovi osobni dokumenti, predmeti i uniforme koje je koristio
za vrijeme svog nevjerojatnog života. Fakultativno razgledanje znamenitosti grada uz pratnju
vodiča i slobodno vrijeme. Nastavak puta za Varadero. Dolazak u Varadero u večernjim
satima. Smještanje u sobe. Noćenje.
                        </p>
                        <p style="text-align: justify;"><strong>13 – 16. dan:  Varadero</strong><br />Varadero je najveće i najpopularnije ljetovalište ne samo na Kubi nego na cijelim Karibima.
To nije slučajno. Plažu dugu 20 kilometara, sa bijelim pijeskom i tirkiznim morem, mnogi
smatraju jednom od najljepših na svijetu. Budite jedan od tisuće posjetitelja koji dolaze u
Varadero svake godine da se opuste i uživaju u mirnom moru i toplom suncu ovog karipskog
raja. Varadero ima ponuditi još mnogo toga. Osjetite ukus kubanske kulture u brojnim
galerijama, barovima, tržnicama…uz živu glazbu, cigaretu i čašu ruma.
Slobodni dani za uživanje, odmor i upijanje energije Kariba. Sumiramo utiske kompletnog
putovanja, razgovaramo o revoluciji, sunčamo se, kupamo i odmaramo na plaži koja je
najveća i najljepša na čitavoj Kubi. Bijeli pijesak, kristalno čisto more sa nijansama zelenog i
plavog, šareni kokteli i latino ritmovi…3 noćenja.
                        </p>
                     
                        <p style="text-align: justify;"><strong>CIJENA PAKET ARANŽMANA UKLJUČUJE:</strong>&nbsp;Avio prijevoz (Beograd-Havana-Beograd) sa uključenim svim taksama &ndash; Sve transfere po programu putovanja&scaron;-6 noćenja u Havani u privatnom smještaju (Casa Particular -1/2 ili 1/3 sobe sa privatnim
kupatilom)&scaron;-4 noćenja u Trinidadu u privatnom smještaju (Casa Particular – 1/2 ili 1/3 sobe sa privatnim
kupatilom)&scaron;-4 noćenja u Varaderu u hotelu 3* (1/2 ili 1/3 sobe na bazi all inclusive usluge)&scaron;Troškove organizacije putovanja&scaron;-Stručno vodstvo puta / predstavnika agencije</p>
                        
                        <p style="text-align: justify;"><strong>CIJE-FNA PAKET ARANŽMANA NE UKLJUČUJE:</strong>&nbsp;Individualne troškove&scaron;-Fakultativne izlete i obilaske Hranu -Doplatu za prekoračenje kilaže prtljaga (cijena po kg zavisi od aviokompanije sa kojom se
leti)-Međunarodno putno osiguranje i osiguranje od otkaza putovanja, koje se preporučuje</p>
                        
                        
                        
                        <p style="text-align: center;"><em><strong>MINIMUM PRIJAVLJENIH PUTNIKA: 20</strong></em></p>
                        
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
                                <option >Andaluzija</option>
                                <option >Amsterdam</option>
                            <option>Pariz</option>
                        
                        </select><br><br>
                        <textarea id="napomena" name="napomena" placeholder="Napomena"></textarea>
                        <button type="submit" id="posaljiupit">Pošalji</button>
                    </form>
                </div>
                    
                <img src="call.png">
                <img src="rate.jpg" id="rate">
                
            </div>
            
      </div>
      <div class="three">
        
        <div class="three-a">
            <div class="upute">
                <img src="bv2.gif">
            </div>
          <div class="map">
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46428.66645767419!2d17.786220993774133!3d43.339548657955035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134b43a43b6340a9%3A0x14f32b2d4e37c5a!2sMostar+88000!5e0!3m2!1shr!2sba!4v1527687932403" ></iframe>

         </div>
        </div>
        <div class="three-b">
              <div class="kontakt">
                <fieldset>
                  <legend>Kontaktirajte nas</legend>
                <form class="forma" >
                  <label for="ime">Ime*</label><br>
                  <input type="text" class="ime" name="ime"><br>
                  <label for="prezime">Prezime*</label><br>
                  <input type="text" class="prezime"  name="prezime"><br>
                  <label for="email">Email*</label><br>
                  <input type="email" class="email"  name="email"><br>
                  <label for="poruka">Poruka*</label><br>
                  <textarea  class="poruka"  name="poruka"></textarea>
                  <button type="submit" class="posalji">POŠALJI</button>
                </form>
              </fieldset>
            </div>
        </div>
        
      </div>
</div>
 
</div>

</body>
<html>