<!doctype html>

<html>
<head>
        
        <link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet'>
        <title>INDIJA - AVIONOM IZ SARAJEVA</title>
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
                                        <h1 class="h2">INDIJA - AVIONOM IZ SARAJEVA</h1>          
                                      <p class="lead clearfix">Termin: 20.11.- 27.11.2019.</p>     
                                      </div>
                           
                                 <div class="col-md-12 ">
                                 <div class="thumbnail">
                                     <img src="indija.jpeg" width="740" height="415" alt="INDIJA - AVIONOM IZ SARAJEVA" rel="image_src" class="responsive">                  <p class="price">od <span>1.859,00</span> KM</p>
                                        </div>
                                 </div>
                                 
                                 </div>
                                 <div class="page-text">
                                        <h4 style="text-align: center;">INDIJA - AVIONOM IZ SARAJEVA</h4>
                                
                                <p style="text-align: center;">ZLATNI TROUGAO</p>
                                
                                <p style="text-align: center;">DELHI &ndash; JAIPUR - AGRA</p>
                                
                                <p style="text-align: center;">TRI GRADA, TRI RELIGIJE U ZLATNOM TROUGLU INDIJE ČUDESAN DELHI, GRAD VJEČNE LJUBAVI - AGRA I RUŽIČASTI DŽAJPUR...</p>
                                
                                <p style="text-align: center;"><br />
                                <em>Zapanjujuća raznolikost religije, jezika i kulture u Indiji je jedinstvena. Ovo raznovrsno dru&scaron;tvo sa bogatom kulturnom ba&scaron;tinom, spada među najstarije na svijetu. Indijska kultura ima vi&scaron;e od 4.500. godina. Nevjerovatan niz kultura, religija i etničkih zajednica žive u harmoniji. Svaki region u Indiji ima neuporedivu historiju, različitost kultura i jezika, znamenitosti i ljepote predjela...</em></p>
                                
                                <p style="text-align: center;">POLAZAK: 20.11.2019. I&nbsp;POVRATAK: 27.11.2019.</p>
                                
                                <p>&nbsp;</p>
                                
                                <p><strong>1. DAN SARAJEVO &ndash; DOHA &ndash; DELHI </strong></p>
                                
                                <p style="text-align: justify;">Sastanak putnika na Medjunarodnom aerodromu Sarajevo sa vodičem Golden toursa-a u 08:25 sati. Polijetanje za Dohu u 11:55 sati (let QR294). Slijetanje u Dohu u 18:45 sati. Nastavak leta za Delhi u 20:05 (let QR578). Obroci i pića u avionu su uključena.</p>
                                
                                <p style="text-align: justify;"><strong>2. DAN DELHI </strong></p>
                                
                                <p style="text-align: justify;">Dolazak u Delhi planiran je u 02:05 sati ujutro. NAPOMENA: Putnici predaju prtljag na aerodromu Sarajevo, a preuzimaju na aerodromu Delhi. Dozvoljena težina prtljaga do 30 kg + 8 kg ručnog prtljaga. Na aerodromu vas čeka predstavnik lokalne agencije. Transfer do hotela u Delhiju, prijava i odmor. Doručak u hotelu. Nakon doručka slijedi obilazak Novog Delhija, koji je početkom 20.vijeka bio pod vla&scaron;ću Britanaca. Proći ćete pored Predsjedničke kuće, Ra&scaron;trapati Bavan i dvije zgrade Sekreterijata gdje je centar Vladinih zbivanja. Obilazak Džama Masdžid (džamije): ovo je najveća džamija u Indiji, sa dvori&scaron;tem u kome može da stane 25.000 vjernika. Izgradnja je počela 1644. godine i zavr&scaron;ena je kao posljednje arhitektonsko djelo &Scaron;ah Džahana, Mugolskog cara koji je sagradio Tadž Mahal i Crvenu tvrđavu. Uživajte u vožnji taksi-biciklom ili rik&scaron;om u poznatoj ulici Čandni Čok. Kapija Indije, spomenik indijskim vojnicima poginulim u Prvom svjetskom ratu boreći se na strani britanske armije. Oko kapije se nalaze palate nekada&scaron;njih kneževa koje su danas javne zgrade i muzeji. Kutab minaret, je sa 73 metra drugi najvi&scaron;i minaret u Indiji. Poznat kao jedan od najranijih i najpoznatijih primjera indo-islamske arhitekture. Okružen je sa nekoliko drugih antičkih i srednjevjekovnih objekata i ru&scaron;evina, koje su poznate kao Kutab kompleks. Ovaj kompleks se nalazi na UNESCO listi Svjetske kulturne ba&scaron;tine. Vožnja pored Lotos hrama , poznatog i pod nazivom Bahai hram. Dizajn hrama je inspirisan cvijetom lotosa koji predstavlja simbol mira, čistoće, ljubavi i besmrtnosti, i nacionalni je cvijet Indije. Odlazak do svetog hrama Bangla Sahib, jednog od najvažnijih hodočasničkih lokacija u Delhiju. U nastavku posjeta Humajunovoj grobnici, grobnica mogulskog cara Humajun u Delhiju. Izgradnju grobnice je naručila njegova prva žena Bega Begum 1569-1570. godine, a dizajnirao ju je Mirak Mirza Gijas, persijski arhitekta. Grobnica je 1993. godine stavljena na UNESCO listu Svjetske kulturne ba&scaron;tine, i od tada je restaurirana. Ova grobnica, sagrađena od kombinacije bijelog mermera i crvenog pje&scaron;čara je odraz rane mogulske arhitekture i dala je svoj pečat kasnijoj (ova grobnica se smatra prototipom kasnije sagrađenog, čuvenog Tadž Mahala). Večera. Noćenje.</p>
                                
                                <p style="text-align: justify;"><strong>3.DAN DELHI &ndash; JAIPUR (272 km)</strong></p>
                                
                                <p style="text-align: justify;">Doručak. Odjava i hotela. Obilazak veličanstvene Crvene tvrđave (obilazak tvrđave spolja), a pored nje se nalazi Čandni Čovk, živopisna pijaca u starom dijelu grada. Obilazak Radž Gat &ndash; memorijal Mahatme Gandija. Crna mermerna platforma koja obilježava mjesto kremacije Gandija, 31. januara 1948. godine. Na kraju ploče se nalazi kutija u kojoj gori vječni plamen. Na memorijalu se nalazi epitaf (&lsquo;O&rsquo;Ram&rsquo;, &scaron;to u prevodu znači &ldquo;O Bože&rdquo;), za koje se vjeruje da su posljednje riječi Gandija. Memorijal je dizajnirao Vanu G.Buta. Dizajniran je tako da prikazuje jednostavnost života Mahatme Gandija. Posljednjih godina, običaj je da strani državnici koji posjete Indiju, odaju počast Gandiju u Radž Gatu, polažući cvijeće ili vjence na platformu. Komemorativna ceremonija se održava svakog petka. Molitve se drže u Radž Gatu na Gandijev rođendan i godi&scaron;njicu smrti. Polazak za Jaipur. Vožnja cca 5-6 sati. Dolazak u Jaipur. Smje&scaron;taj u hotel. Večera u hotelu. Noćenje.</p>
                                
                                <p style="text-align: justify;"><strong>4. DAN JAIPUR </strong></p>
                                
                                <p style="text-align: justify;">Doručak. Polazak u 07.00 sati u razgled tvrđave Amber, udaljene 11 km od grada. Tvrđava Amber, smje&scaron;tena na brdu, najljep&scaron;i je primjer Radžput arhitekture. Unutra&scaron;njost tvrđave je bogato ukra&scaron;ena slonovačom, ogledalima, staklom i izuzetnim slikama. Poslijepodne obilazak jednog od najzanimljivijih gradova Indije. Stari dio poznat je kao Ružičasti grad, u čijoj su izgradnji učestvovali najbolji majstori i umjetnici iz raznih krajeva. Ovo je grad sa izuzetno zanimljivom atmosferom. Obilazak Gradske palate, koja je danas dobrim dijelom pretvorena u muzej, zatim čuvene observatorije Džantar Mantar, iz 1726. g. Razgledanje Palate vjetrova ili Hava Mahala, koja predstavlja najljep&scaron;i primjer arhitekture toga vremena. Povratak u hotel. Večera. Noćenje.</p>
                                
                                <p><strong>5. DAN JAIPUR - FATEHPUR SIKRI - AGRA (250 km) </strong></p>
                                
                                <p style="text-align: justify;">Odjava iz hotela. U 09.00 sati polazak za Agru. Na putu posjeta Fatehpur Sikri napu&scaron;tenom gradu u crvenoj pje&scaron;čari. Podigao ga je car Akbar kao svoju prijestolnicu od 1571 do 1584 godine. To je bio istinski bajkovit grad i njegove &ldquo;ru&scaron;evine&rdquo; su jo&scaron; uvijek u prvobitnom stanju. Građevine u Fatehpur Sikriju su svrstane među najvažnije na listi Svjetske ba&scaron;tine UNESCO-a. Dolazak u Džajpur. Džajpur: Glavni grad države Radžastana popularno poznat kao &ldquo;ružičasti grad&rdquo; zbog roze boje koja se nalazi na zgradama u starom utvrđenom gradu. (u Radžaputskoj kulturi, roze boja je tradicionalno povezana sa gostoprimstvom). Grad duguje svoje ime, velikom ratniku, astronomu Maharadži Džai Singu II (1699-1744). Smje&scaron;taj u hotel. Večera. Noćenje.</p>
                                
                                <p><strong>6. DAN AGRA</strong></p>
                                
                                <p style="text-align: justify;">Posjeta simbolu bezuslovne ljubavi i najpoznatijoj građevini na svijetu Tadž Mahalu. Sagradio ga je &Scaron;ah Džahan u znak sjećanja na svoju voljenu ženu Mumtaz Mahal. Izgradnja je počela 1631. godine, učestvovalo je 20.000 ljudi, trajala je 22 godine. Na ulazu u mauzolej stoji natpis &ldquo;Du&scaron;o, odmaraj u umjetnosti. Vrati se Gospodu u miru i neka On bude s` tobom&rdquo;. Pjesnik Tagore kaže da je &ldquo;Tadž Mahal suza na obrazu vemena&rdquo;. Priča se da svake godine tokom ki&scaron;ne sezone na mauzolej padne samo jedna kap ki&scaron;e. Popodne posjeta slavnoj crvenoj tvrđavi Agri koja je ba&scaron;tama povezana sa Tadž Mahalom. Nalazi se na obali rijeke Jamune. Gradnju masivne tvrđave je započeo car Akbar 1565. godine, a zavr&scaron;io je njegov unuk &Scaron;ah Džahan. Cijela tvrđava je oblikovana u obliku polumjeseca sa 21 metar visokim zidinama prema Jamuna rijeci. Imala je 2,4 kilometra zidina od crvenog pje&scaron;čara. Zidine su imale dvoja vrata: Delhijska vrata i vrata Lahorea. Delhijska vrata su bila najveća vrata i vodila su u unutra&scaron;nja vrata. Po&scaron;to jo&scaron; uvijek indijska vojska koristi tvrđavu u Agri Delhijska vrata nisu dostupna turistima. Mjesto je veoma značajno zbog historije arhitekture. Mogu se vidjeti najinteresantnije mje&scaron;avine islamske i hinduske arhitekture. Tvrđava je uvr&scaron;tena u svjetsku kulturnu ba&scaron;tinu UNESCO-a.. Povratak u hotel. Večera. Noćenje.</p>
                                
                                <p><strong>7. DAN AGRA &ndash; DELHI (230 km) </strong></p>
                                
                                <p style="text-align: justify;">Doručak. Nastavak autobusom do Delhija, cca 3 &ndash; 4 sata. Na putu prema Delhiju posjeta Sikandri mauzoleju cara Akbara. Izgradnju mauzoleja je započeo sam Akbar ali smrt ga je spriječila u namjeri da zavr&scaron;i izgradnju, tako da je taj posao dovr&scaron;io njegov sin. Ova struktura je savr&scaron;en spoj hindu, hri&scaron;ćanskih, islamskih, budističkih motiva. Vidjet ćemo Mauzolej I'timād-Ud-Daulah za kojeg kazu da je poslužio kao inspiracija za gradnju Tadža Mahala. Smje&scaron;taj u hotel. Večera. Noćenje.</p>
                                
                                <p><strong>8. DAN DELHI &ndash; DOHA - SARAJEVO </strong></p>
                                
                                <p style="text-align: justify;">Preuzimanje lunch paketa. U ponoć je planiran transfer do aerodroma u Delhiju. Prijava za let (QR579) na relaciji Delhi &ndash; Doha, let u 03:45 sati. Obrok i piće u avionu. Dolazak u Dohu planiran je u 05:45 sati. Nastavak leta (QR293) na relaciji Doha &ndash; Sarajevo, planiran je u 07:00 sati. Obrok i piće u avionu. NAPOMENA: Putnici predaju prtljag na aerodromu u Delhiju, a preuzimaju na aerodromu Sarajevo. Dozvoljena težina prtljaga do 30 kg + 8 kg ručnog prtljaga. Dolazak u Sarajevo planiran je u 11.00 sati. Kraj usluge.</p>
                                
                                <p style="text-align: center;"><strong>CIJENA: 1.859,00 KM</strong></p>
                                
                                <p><strong>U cijenu putovanja uračunato je:</strong></p>
                                
                                <ul>
                                    <li>avio prevoz (ekonomska klasa) na navedenim relacijama Sarajevo &ndash; Doha &ndash; Delhi - Doha &ndash; Sarajevo aviokompanijom Qatar Airways,</li>
                                    <li>bus transferi prema programu putovanja i sva razgledanja prema programu putovanja,</li>
                                    <li>rana prijava + 1 doručak po dolasku u hotel u Delhi 21.11.2019.</li>
                                    <li>2 nocenja na bazi polupansiona u Agri u hotelu 5*,</li>
                                    <li>2 noćenja na bazi polupansiona u Jaipuru u hotelu 5*</li>
                                    <li>2 noćenja na bazi polupansiona u Delhiju u hotelu 5*,</li>
                                    <li>lokalni vodiči tokom ture,</li>
                                    <li>usluge Golden tours-ovog stručnog pratioca grupe tokom putovanja (od polaska do povratka),</li>
                                    <li>tro&scaron;kovi organizovanja putovanja.</li>
                                </ul>
                                
                                <p><strong>U cijenu putovanja nije uračunato:</strong></p>
                                
                                <ul>
                                    <li>aerodromske i druge takse 490,00 KM - plaćaju se u agenciji,</li>
                                    <li>polisa obaveznog međunarodnog putnog zdravstvenog osiguranja 15 KM, za sobe preko 60 godina polisa iznosi 30 KM.</li>
                                    <li>obavezna doplata za ulaznice u objekte koji se posjećuju prema programu putovanja - 200,00 KM po osobi: *(plaćaju se gotovinski predstavniku agencije Golden tours po dolasku na Aerodrom u Sarajevo, prije polaska na putovanje)</li>
                                    <li>Delhi (Kutab minaret, Humajunova grobnica, vožnja rik&scaron;ama)</li>
                                    <li>Agra (Tadž Mahal, crvena Agra tvrđava, Sikandra, mauzolej I'timād-Ud-Daulah i Fatehpur Sikri)</li>
                                    <li>Jaipur (Tvrđava Amber, Gradska palata, observatorij Džantar Mantar, Palata vjetrova ili Hava Mahala)</li>
                                    <li>jahanje slonova u Džajpuru tokom penjanja na Amber tvrđavu (ova stavka jeste uračunata ali zavisiće od broja raspoloživih slonova na licu mjesta),</li>
                                    <li>doplata za 1 / 1 sobu 630,00 KM,</li>
                                    <li>tro&scaron;kovi viziranja paso&scaron;a (trenutna cijena elektonske vize sa tro&scaron;kovima viziranja 110,00 KM),</li>
                                    <li>izleti i obroci koji nisu navedeni u programu,</li>
                                    <li>bak&scaron;i&scaron; za lokalne vodiče i vozače koji je uobičajen u ovom dijelu svijeta i iznosi 20 EUR po osobi (plaća se na licu mjesta stručnom vodiču Golden tours-a)</li>
                                    <li>individualni tro&scaron;kovi putnika.</li>
                                </ul>
                                
                                <p style="text-align: justify;"><strong>Plaćanje:</strong> Prilikom rezervacije uplaćuje se 50% od ukupne cijene aranžmana, a ostatak iznosa 15 dana do polaska.</p>
                                
                                <p style="text-align: justify;"><strong>Viza: </strong>Viza je potrebne državljanima BiH. Viza se zavr&scaron;ava elektronski i agencija Golden tours posreduje u izradi vize.</p>
                                
                                <p style="text-align: justify;">Za elektronsku aplikaciju je potrebna sljedeća dokumentacija:</p>
                                
                                <ul>
                                    <li style="text-align: justify;">dvije fotografije u JPG formatu skorijeg datuma na bijeloj pozadini (minimalna veličina 10KB, a maksimalna 1MB)</li>
                                    <li>kopija prve strane paso&scaron;a u boji u PDF fromatu (minimalna veličina 10KB, a maksimalna 300KB).</li>
                                </ul>
                                
                                <p>Paso&scaron; mora da važi minimum 6 mjeseci od datuma ulaska na teritoriju Indije i mora da ima najmanje dvije cijele prazne strane.</p>
                                
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
                                
                                <p><strong>Valuta: </strong>Valuta je indijski rupee (1 EUR=75,68 INR). Zamjenu novca možete vr&scaron;iti u mjenjačnicama.</p>
                                
                                <p><strong>Klima:</strong> Indija ima tri godi&scaron;nja doba zimu, ki&scaron;nu/sezonu monsuna i ljeto. Najprijatnije vrijeme za posjetu većem dijelu zemlje je tokom hladnijeg perioda, od novembra do sredine februara, mada postoje i regionalne varijacije.</p>
                                
                                <p><strong>Zdravstvene / bezbjedonosne instrukcije:</strong> Pijte samo fla&scaron;iranu vodu. Nemojte jesti hranu kupljenu na ulici. Radi lične bezbjednosti putnici moraju da se pridržavaju instrukcija vodiča tokom putovanja o svim kretanjima mimo programa putovanja.</p>
                                
                                <p><strong>Preporuke za putovanje:</strong> Putnicima se preporučuje da ponesu na put udobnu obuću za pje&scaron;ačenje, ko&scaron;ulje dugih rukava od prirodnih materijala, kremu sa za&scaron;titnim faktorom.</p>
                                
                                
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