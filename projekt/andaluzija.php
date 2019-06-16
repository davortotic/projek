<!DOCTYPE html>
<html lang="hr">

<head>
    <link href="andaluzijastyle.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet'>
  <title>ANDALUZIJA - AVIONOM IZ SARAJEVA</title>
    <script  type="text/javascript" src="jquery-3.2.1.js"></script>
    <script type="text/javascript" src="jquery-validation-1.16.0\dist\jquery.validate.js"></script>
    <script type="text/javascript" src="andaluzijajs.js"></script>
    <meta charset="utf-8"> 
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
                            <h1 class="h2">ANDALUZIJA - AVIONOM IZ SARAJEVA</h1>          
                          <p class="lead clearfix">U terminu: 16.-22.10.2018. 7 dana/6 noćenja</p>     
                          </div>
               
                     <div class="col-md-12 ">
                     <div class="thumbnail">
                         <img src="andaluzija.jpeg" width="740" height="415" alt="ANDALUZIJA - avionom iz Sarajeva" rel="image_src" class="responsive">                  <p class="price">od <span>1.599,00</span> KM</p>
                            </div>
                     </div>
                     
                     </div>
                <div class="page-text">
                        <h4 style="text-align: center;">ANDALUZIJA</h4>
                
                <p style="text-align: center;">MALAGA &ndash; TORREMOLINOS &ndash; RONDA &ndash; SEVILJA &ndash; KORDOBA &ndash; GRANADA &ndash;MALAGA</p>
                
                <p style="text-align: center;">16.10.-22.10.2018</p>
                
                <p style="text-align: center;">7 dana/6 noćenja -&nbsp;avion + autobus</p>
                
                <p style="text-align: justify;">Andaluzija je najjužnija i najveća &scaron;panska regija sa prelijepim gradovima i živopisnim bijelim selima. Sa oko 8 miliona stanovnika i 87.268 km2 povr&scaron;ine, prostranija je i mnogoljudnija od polovine evropskih zemalja. Asocijacija je na najtipičnije slike vezane za &Scaron;paniju: flamenko, borbe bikova, jarke boje i strast. Ljepotom je inspirisala mnoge čuvene pisce, pjesnike i slikare. Zavičaj je slikara velikana, Pabla Pikasa i Velaskeza.&nbsp;U periodu od 711-1492.g. Andaluzijom su vladali Arapi koji su ovdje stvorili najprofinjeniju civilizaciju Srednjeg vijeka!&nbsp;Gradovi i sela dana&scaron;njice ogledalo su pro&scaron;losti i čuvaju veličanstvena remek djela poput velike džamije u Kordobi (danas muzej Meskita) i Alhambra palate u Granadi.&nbsp;Andaluzija je mjesto rođenja kulturne tradicije koja određuje cijelu &scaron;paniju. Prvi koraci flamenka odigrani su upravo ovdje, prve borbe bikova održane su u andaluzijskom gradu Ronda. Čak i tapas, ukusno &scaron;pansko predjelo koje se nalazi na svjetskim menijima, svoje porijeklo ima u Andaluziji!&nbsp;Pođite sa nama u Andaluziju i odu&scaron;evite se ljepotom poznatom u cijelom svijetu! Ovaj program putovanja pripremali smo pažljivo želeći Vam ponuditi samo najbolje. Zato do Andaluzije putujete najboljom evropskom kompanijom &ndash; Turkish Airilines, smje&scaron;teni ste u provjerenim hotelima 4*, a na putovanju Vas prati vrhunski vodič.</p>
                
                <p style="text-align: justify;">&nbsp;</p>
                
                <p><strong>PROGRAM PUTOVANJA</strong></p>
                
                <p>1. DAN, 16.10.2018 (UTORAK), SARAJEVO &ndash; ISTANBUL</p>
                
                <p style="text-align: justify;">Sastanak grupe na Sarajevskom aerodromu u 07,00h. Prijava na let, paso&scaron;ke i carinske formalnosti. Polijetanje aviona za Istanbul TK1022 u 09,00h. Slijetanje u Istanbul u 11,50h. Po dolasku u Istanbul slijedi transfer autobusom do hotela. Smje&scaron;taj u hotel. Fakultativni obilazak stare jezgre sa vodičem, (Sultanahmet, Plava Džamija, Aya Sofija, Kapali čar&scaron;ija) i slobodno vrijeme za shopping sa vodičem . Povratak u hotel u večernjim satima. Noćenje.</p>
                
                <p>2. DAN, 17.10.2018 (SRIJEDA), ISTANBUL &ndash; MALAGA &ndash; TORREMOLINOS</p>
                
                <p style="text-align: justify;">Rani doručak. Nakon doručka slijedi transfer na aerodrom. Polijetanje aviona TK1305 za Malagu u 08,35h sa dolaskom u Malagu u 12,15h.Nakon paso&scaron;ke i carinske kontrole slijedi panoramsko razgledanje Malage, &scaron;panskog lučkog grada smje&scaron;tenog na obalama Mediterana, s brojnim historijskim znamenitostima ali i pulsirajućim modernim životom. Malaga je rodno mjesto slikara Pabla Pikasa i jedan od muzeja je posvećen upravo njegovom opusu.</p>
                
                <p style="text-align: justify;">Osim po &scaron;irokim avenijama s drvoredima palmi i po parkovima sa tropskim biljkama, grad je prepoznatljiv i po mavarskoj tvrđavi Gibralfaro i palati Alkasaba za koju kažu da je bila kao Alhambra ali je tokom vijekova zapostavljena. Panoramski obilazak grada: Plasa de la Mersed, Plasa de Toros, La Malageta, Katedrala, stara jezgra grada, Plasa de la Konstitusion...Slobodno vrijeme za individualne aktivnosti. U dogovoreno vrijeme polazak prema hotelu u Torremolinosu. Smje&scaron;taj u hotel. Večera. Noćenje.</p>
                
                <p>3. DAN, 18.10.2018 (ČETVRTAK), TORREMOLINOS &ndash; RONDA &ndash; SEVILJA (cca 220 km)</p>
                
                <p style="text-align: justify;">Nakon doručka slijedi odlazak autobusom prema Costa del Sol i Marbelji, najpoznatijem ljetovali&scaron;tu ove regije. Marbelja je reputaciju ekskluzivnog ljetovali&scaron;ta stekla jo&scaron; 1950. godine i od tada kao magnet privlači ljude &scaron;irom svijeta. Njenoj ljepoti nisu mogle odoljeti ni brojne poznate ličnosti, a mnoge od njih ovdje imaju kuće ili vikendice. Ostaćete bez daha kada &scaron;etajući ugledate milion dolara vrijedne jahte i luksuzne čamce. Nastavak vožnje planinskim predjelima do Ronde koja se uzdiže na 750m nadmorske visine i čiji se pejzaž može svrstati u svojevrsno čudo prirode. Naime, grad je smje&scaron;ten na vrhu dvije ogromne krečnjačke stijene između kojih je provalija dubine od oko 120m i veliki most Puente Nuevo, glavna atrakcija Ronde. Obilazak grada poznatog i kao mjesto &ldquo;rođenja&ldquo; koride i u kome se nalazi jedna od najstarijih i najljep&scaron;ih kružnih arena u &Scaron;paniji izgrađena 1785. godine. Otac i sin Francisko i</p>
                
                <p style="text-align: justify;">Pedro Romero sredinom 18. vijeka propisali su pravila borbe sa bikovima koja su, uz manje dopune, ostala nepromijenjena do danas. Veliki ljubitelji koride, Ernest Hemingvej i Orson Vels, bili su česti posjetioci Ronde. Nakon &scaron;etnje gradom obilazak Koride i muzeja posvećenog koridi. Slobodno vrijeme za ručak. Nastavak putovanja prema Sevilji, gradu koji je osim po svojoj burnoj historiji poznat i po festivalskoj atmosferi. Sevilja je najveći grad južne &Scaron;panije, četvrti po veličini i svakako jedan od najrasko&scaron;nijih gradova Iberijskog poluostrva. Ona je i grad Don Huana i Karmen, seviljskog berberina i flamenka. Po dolasku u Sevilju slijedi smje&scaron;taj u hotel. Slobodno vrijeme. Navečer fakultativni odlazak na flamenco show. Noćenje.</p>
                
                <p>4. DAN, 19.10.2018. (PETAK), SEVILJA</p>
                
                <p style="text-align: justify;">Nakon doručka slijedi odlazak na panoramsko razgledanje grada: ostaci nekada&scaron;njih arapskih zidina, kula &ldquo;Torre del Oro&rdquo;, vrtovi Muriljo, zdanje Univerziteta koje je nekada bilo Fabrika duhana, parkovi i veleljepne zgrade sagrađene 1929. godine za Svjetsku izložbu u okviru kojih se nalaze paviljoni nekoliko latinoameričkih zemalja. Trg &Scaron;panije &ndash; polukružno zdanje sa mostovima i fontanama koje je 1929, za vrijeme Svjetske izložbe, bio glavni paviljon za izlaganje. Slijedi obilazak parkova Marije Luiz,&nbsp; &scaron;etnja do kvarta Santa Kruz i obilazak treće po veličini katedrale na svijetu (u kamenu temeljcu ovog zdanja uklesano je: &bdquo;Napravićemo ne&scaron;to za &scaron;ta će svi na svijetu misliti da smo ludi!&rdquo;), Kolumbovog groba, kraljevske kapele, oltara... La Hiralde (La Giralda), tornja smje&scaron;tenog odmah uz katedralu.</p>
                
                <p style="text-align: justify;">Ovaj, nekada, minaret džamije pretvoren je u crkveni toranj do čijeg vrha se stiže pje&scaron;ke strmom stazom. Sa vrha tornja pruža se nevjerovatan pogled ne samo na Sevilju već i na obod grada i okolne brežuljke. Slobodno vrijeme za individualne programe. Noćenje.</p>
                
                <p>5. DAN, 20.10.2018. (SUBOTA), SEVILJA &ndash; KORDOBA &ndash; GRANADA (cca 350 km)</p>
                
                <p style="text-align: justify;">Nakon doručka slijedi odjava iz hotela i polazak prema Kordobi. Ovo je grad koji je sačuvao arhitektonske bisere kao &scaron;to su stari rimski most, Meskita džamija i jevrejski kvart. Po dolasku u Kordobu vodimo vas u obilazak Meskite (najveće džamije zapadnog Islama srednjeg vijeka &ndash; poznata i kao Muzej 1.000 stubova), dvori&scaron;ta narandži. Ova džamija je po propasti arapskog halifata pretvorena u crkvu. Danas je muzej na listi UNESCO svjetske kulturne ba&scaron;tine. Sagrađena je između VIII i X vijeka, a ono najljep&scaron;e u njoj je nepregledni niz od preko 850 stubova sa crveno bijelim lukovima od cigle, kamena, jaspisa i granita. Kao i u Sevilji i u Kordobi je postojao veliki jevrejski kvart, jedan od najvećih u Evropi (La Huderija), koju je 1984. UNESCO proglasio svjetskom kulturnom ba&scaron;tinom. U jevrejskom kvartu nalazi se i stara Sinagoga, diskretno smje&scaron;tena usred Jevrejske ulice, sagrađene u mudehar stilu u XIV vijeku.</p>
                
                <p style="text-align: justify;">Potvrda je prosperiteta jevrejske zajednice u doba Kordobskog halifata. Ispred sinagoge se nalazi i statua Ben Maimonidesa, jednog od najčuvenijih filozofa svog vremena. Ovo je i grad Hulija Romera, slikara kome su lokalne cigančice bile modeli za lik Bogorodice, ali i grad čuvenog toreadora El Kordobesa, grad uskih ulica i kuća sa karakterističnim unutra&scaron;njim dvori&scaron;tem (patio). Slobodno vrijeme za &scaron;etnju, individualne obilaske i ručak. Nastavak vožnje prema Granadi. Smje&scaron;taj u hotel u Granadi. Noćenje.</p>
                
                <p>6. DAN, 21.10.2018. (NEDJELJA), GRANADA</p>
                
                <p style="text-align: justify;">Nakon doručka slijedi razgledanje Granade. Grad je smje&scaron;ten na obroncima Sierra Nevade, podijeljen je rijekom Rio Darro na dva dijela, rijekom koja nestaje u podzemlju u samom centru grada da bi se probila do slavne Alhambre i ovdje se sjedinila s Rio Genil.</p>
                
                <p style="text-align: justify;">Obilazak grada u pratnji vodiča: posjeta tvrđavi Alhambra - jedinstveni i veličanstveni primjer arapske arhitekture na prostoru evropskog kontinenta i zadnje arapsko upori&scaron;tu na Iberijskom poluostrvu (Palacios Nazaries, Generalife vrtovi, Alcazaba&hellip;), spu&scaron;tanje u donji dio grada: Katedrala s kraljevskom kapelicom, La Alcaiceria, El Albaicin &ndash; maurski kvart&hellip; Slobodno vrijeme u gradu. Noćenje.</p>
                
                <p>7. DAN, 22.10.2018. (PONEDJELJAK), GRANADA&nbsp; &ndash; MALAGA &ndash; ISTANBUL</p>
                
                <p style="text-align: justify;">Nakon doručka slijedi odjava iz hotela i vožnja do aerodroma u Malagi. Let TK1306 za Istanbul u 13.10h. Dolazak u Istanbul u 18,20. Nastavak putovanja sa istog aerodroma za Sarajevo u 19.20h ( let TK1025). Dolazak u Sarajevo u 20,15h. Kraj putovanja.</p>
                
                <p>&nbsp;</p>
                
                <h4 style="text-align: center;">CIJENA: 1.499,00 KM sa uključenim aerodromskim taksama</h4>
                
                <h4 style="text-align: center;">(first minute za rezervacije do 30.07.2018)</h4>
                
                <h4 style="text-align: center;">Cijena nakon 30.07.2018. iznosi 1.599,00 KM</h4>
                
                <p>&nbsp;</p>
                
                <p><b>U cijenu uključeno:</b></p>
                
                <ul>
                    <li>Avio karta na relaciji Sarajevo-Istanbul-Malaga-Istanbul-Sarajevo sa uključenim aerodromskim taksama,&nbsp;</li>
                    <li>Transfer aerodrom &ndash; hotel &ndash; aerodrom u Istanbulu,&nbsp;</li>
                    <li>1 noćenje na bazi polupansiona u dvokrevetnoj sobi u hotelu 4* u Torremolinosu (Hotel Royal an Andalus 4* ili sličan)&nbsp;</li>
                    <li>2 noćenja sa doručkom u dvokrevetnoj sobi u hotelu 4* u Sevilji, (Hotel Isla Cartuja&nbsp; 4* ili sličan),&nbsp;</li>
                    <li>2 noćenja sa doručkom u dvokrevetnoj sobi u hotelu 4* u Granadi, (Hotel Gran Luna 4* ili sličan)&nbsp;</li>
                    <li>1 noćenja sa doručkom u dvokrevetnoj sobi u hotelu 4* u Istanbulu, ( Hotel Nanda 4* ili sličan)</li>
                    <li>Svi izleti po program bez ulaznica u objekte od interesa</li>
                    <li>Usluge profesionalnog vodiča i kompletna organizacija putovanja,&nbsp;</li>
                </ul>
                
                <p>&nbsp;</p>
                
                <p><strong>U cijenu nije uključeno:</strong></p>
                
                <ul>
                    <li>Ulaznice u objekte od interesa (obavezno Meskita u Kordobi 15,00 EUR, Alhambra u Granadi 35,00 EUR plaća se u agenciji uz aranžman), Muzej koride u Rondi 8,00 EUR, Alkazaba u Malagi 5,00 EUR, katedrala u Sevilji 15,00 EUR, Flamenco show 40 EUR; Fakultativno razgledanje Istanbula sa vodičem 10,00 EUR),&nbsp;</li>
                    <li>Obavezna napojnica za vozača u &Scaron;paniji 30,00 EUR ( plaća se na putovanju)</li>
                    <li>Putničko zdravstveno osiguranje 14,00 KM,&nbsp;</li>
                    <li>Doplata za jednokrevetnu sobu 389,00 KM&nbsp;</li>
                </ul>
                
                <p style="text-align: center;">Program je objavljen 13.03.2018.</p>
                
                <p>&nbsp;</p>
                
                <p>* Agencija zadržava pravo promjene termina letova, ukoliko to učini i avio kompanija.</p>
                
                <p>* Agencija ne odgovara za slučaj ka&scaron;njenja leta, već je to isključiva odgovornost avio kompanije.</p>
                
                <p>* Kalkulacija rađena na bazi minimum 30 putnika.&nbsp;</p>
                
                <p>* Za sve aranžmane važe Centrotours Opći uslovi putovanja.&nbsp;</p>    </div>
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
                                <option selected>Andaluzija</option>
                                <option>Amsterdam</option>
                            <option>Moskva i St Petersburg</option>
                            <option>Stockholm i Helsinki</option>
                        </select><br><br>
                        <textarea id="napomena" name="napomena" placeholder="Napomena"></textarea>
                        <button type="submit" id="posaljiupit">Pošalji</button>
                    </form>
                </div>
                    
                
               
                
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