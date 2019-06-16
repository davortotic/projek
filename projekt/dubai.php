<!doctype html>

<html>
<head>
        
        <link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet'>
        <title>DUBAI - LET IZ DUBROVNIKA</title>
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
                                                <h1 class="h2">DUBAI - LET IZ DUBROVNIKA</h1>          
                                              <p class="lead clearfix">Termin: 16.10.-21.10.2019.</p>     
                                              </div>
                                   
                                        <div class="col-md-12 ">
                                                <div class="thumbnail">
                                                    <img src="http://www.bhpassport.ba/application/plugins/thumb/?src=/upload/image/fotogalerija/Putovanja/DUBAI.jpg&w=740&h=415&zc=1&hash=94234de22cbee833790659dca5d40f46" width="740" height="415" alt="DUBAI - LET IZ DUBROVNIKA" rel="image_src" class="responsive">                  
                                                    <p class="price">od <span>1.518,00</span> KM</p>
                                                       </div>
                                                </div>
                                                
                                                </div>
                                                
                                              <div class="page-text">
                                                  <h4 style="text-align: center;">DUBAI IZ DUBROVNIKA</h4>
                                          
                                          <p style="text-align: center;">&nbsp;6 DANA AVIONOM</p>
                                          
                                          <p style="text-align: center;">Termin: 16.10.-21.10.2019.</p>
                                          
                                          <p><br />
                                          <strong>1. dan DUBROVNIK &ndash; DUBAI</strong></p>
                                          
                                          <p style="text-align: justify;">Sastanak putnika u Zračnoj luci Dubrovnik kod &scaron;altera informacija u 12:00 sati. Prijava na direktni let avio kompanije FlyDubai (FZ-720). Polijetanje za Dubai u 14:00 sati. Dolazak u Dubai predviđen je u 21:30 sati prema lokalnom vremenu. Po dolasku, doček od lokalnog agenta te prijevoz do hotela 4*. Noćenje.<br />
                                          <br />
                                          <strong>2. dan DUBAI</strong></p>
                                          
                                          <p style="text-align: justify;">Doručak. Odlazak na poludnevno razgledanje grada. Razgled započinje vožnjom do Jumeiraha, najluksuznijeg i najpoznatijeg dijela u Dubaiju. Odlazak do Burj Al Araba, slijedi fotografiranje ispred hotela. Nastavak razgledanja vožnjom po ulici Sheika Zayeda, gdje ćete vidjeti najvi&scaron;u građevinu na svijetu Burj Khalifu. Slijedi vožnja brodićem &bdquo;abra&ldquo; u drugi dio grada, gdje ćete osjetiti egzotične mirise, boje i okusa raznih začina uz &scaron;arenu tržnicu tekstila te posjet najvećem bazaru zlata na svijetu. Nakon posjeta tržnici odlazak na Palm Island, umjetno stvoren otok u obliku palme, na kojem se nalazi luksuzni hoteli jedan od njih je Atlantis The Palm te privatne rezidencije. Slijedi povratak u hotel. Noćenje.</p>
                                          
                                          <p><strong>3. dan DUBAI</strong></p>
                                          
                                          <p style="text-align: justify;">Nakon doručka slobodno za vlastito otkrivanje grada. Preporučamo odlazak na skijanje s pravim zimskim ugođajem, WildWadi zabavni vodeni park ili odlazak na najvi&scaron;u zgradu na svijetu Burj Khalifa. U večernjim satima predlažemo odlazak na tradicionalno krstarenje brodom &bdquo;dhow&ldquo; uz večeru (uz doplatu, transfer uključen). Noćenje.</p>
                                          
                                          <p><strong>4. dan DUBAI</strong></p>
                                          
                                          <p style="text-align: justify;">Doručak. Slobodno prijepodne za vlastite aktivnosti. U poslijepodnevnim satima predlažemo odlazak na fakultativni pustinjski safari (uz doplatu). Tura započinje nezaboravnom vožnjom luksuznim džipovima po pje&scaron;čanim dinama do kampa. Po dolasku u kamp koji je uređen u tradicionalnom arapskom stilu, mogućnost jahanja deva, ukra&scaron;avanje kože kanom ili uživanje u aromatskoj vodenoj luli. Slijedi večera uz ro&scaron;tilj i druge specijalitete te glazbeni program koji kulminira plesom trbu&scaron;ne plesačice. Povratak u hotel. Noćenje.</p>
                                          
                                          <p><strong>5. dan DUBAI &ndash; ABU DHABI &ndash; DUBAI</strong></p>
                                          
                                          <p style="text-align: justify;">Nakon doručka fakultativni odlazak na cjelodnevni izlet u Abu Dhabi, &ldquo;Manhattan&rdquo; Bliskog Istoka (uz doplatu). Abu Dhabi je glavni grad Ujedinjenih Arapskih Emirata, administrativno sredi&scaron;te zemlje te sredi&scaron;te naftne industrije. Na putu se prolazi kroz luku Jebel Ali. Dvosatna vožnja pustinjskim krajolikom. Grad odlikuje mno&scaron;tvom zadivljujućih modernih zdanja s elementima islamske arhitekture. Obilazak džamije Sheika Zayeda, jedne od najvećih i najljep&scaron;ih džamija na svijetu. Slobodno vrijeme za ručak ili shopping. Povratak u Dubai. Noćenje.</p>
                                          
                                          <p><strong>6. dan DUBAI &ndash; DUBROVNIK</strong></p>
                                          
                                          <p style="text-align: justify;">Rani doručak (lunch paket). Odjava iz hotela. Transfer do zračne luke te prijava na direktni let za Dubrovnik (FZ-719). Polijetanje zrakoplova u 10:10 sati s predviđenim slijetanjem u zračnu luku Dubrovnik u 14:10 sati po lokalnom vremenu.</p>
                                          
                                          <p>&nbsp;</p>
                                          
                                          
                                          <p>&nbsp;</p>
                                          
                                          <p><strong>Cijena aranžmana po osobi uključuje:</strong></p>
                                          
                                          <ul>
                                              <li>povratnu avio kartu u ekonomskoj klasi na direktnom letu Dubrovnik- Dubai - Dubrovnik</li>
                                              <li>pratitelja putovanja tijekom putovanja</li>
                                              <li>zrakoplovne pristojbe</li>
                                              <li>povratni transfer (zračna luka &ndash; hotel &ndash; zračna luka)</li>
                                              <li>smje&scaron;taj u hotelu 4* na bazi 5 noćenja s doručkom u dvokrevetnoj sobi</li>
                                              <li>poludnevni razgled Dubaia</li>
                                              <li>organizaciju putovanja i jamčevinu.</li>
                                          </ul>
                                          
                                          <p><strong>Cijena ne uključuje:</strong></p>
                                          
                                          <ul>
                                              <li>doplatu za jednokrevetnu sobu: 450,00 KM</li>
                                              <li>obaveznu lokalnu taksu koja se naplaćuje po sobi po danu: hoteli 4*: AED 15</li>
                                              <li>napojnice za lokalne vodiče i vozače</li>
                                              <li>ulaznice za muzeje i kulturno-povijesne spomenike</li>
                                              <li>dodatne sadržaje i tro&scaron;kove koji nisu predviđeni programom, tro&scaron;kove osobne prirode (piće, dodatni obroci, telefon, karte za javni gradski prijevoz itd.)</li>
                                              <li>putno osiguranje</li>
                                          </ul>
                                          
                                          
                                          
                                          <p><br />
                                          <strong>FAKULTATIVNI IZLETI:</strong></p>
                                          
                                          <ul>
                                              <li>Izlet u Abu Dhabi* 104,00 KM</li>
                                              <li>Pustinjski safari* 104,00 KM</li>
                                              <li>Dhowcruise (večera i transferi uključeni) 110,00 KM</li>
                                              <li>Odlazak na vrh najvi&scaron;e zgrade na svijetu Burj Khalifa 110,00 KM</li>
                                          </ul>
                                          
                                          <p style="text-align: center;">*Izleti su vođeni na engleskom jeziku. Cijena je važeća za uplate prilikom rezervacije aranžmana.<br />
                                          <br />
                                          *Minimalan broj putnika za gore navedene izlete: 20</p>
                                          
                                          <p style="text-align: justify;">Ujedinjeni Arapski Emirati su država na obali Perzijskog zaljeva i Omanskog zaljeva. Nalaze se na istoku Аrapskog poluotoka u Jugozapadnoj Aziji. Graniče na jugu i zapadu sa Saudijskom Arabijom, te na istoku s Omanom. Sastoje se od sedam emirata: Abu Dhabi, Ajman, Dubai, Fujairah, Ras al-Khaimah, Sharjah i Umm al-Qaiwain. Svi su smje&scaron;teni na jugoistočnoj obali Zaljeva osim Fujairah koji izlazi na more na obali Omanskog zaljeva, na istočnoj obali poluotoka Musandam.</p>
                                          
                                          <p style="text-align: justify;">Viza: Za državljane BiH je potreban viza (za proces viziranja potrebno minimalno 10 radnih dana &ndash; u UAE neradni dani su petak i subota)</p>
                                          
                                          <p style="text-align: justify;">Preporuka: Molimo da se o rizičnost putovanja u pojedine zemlje informirate na službenoj stranici Ministarstva vanjskih poslova</p>
                                          
                                          <p style="text-align: justify;">NE ZABORAVITE! Strani državljani dužni su se sami informirati o dokumentima potrebnim za ulazak u određenu zemlju u matičnom Ministarstvu vanjskih poslova ili veleposlanstvu zemlje u koju se putuje. Neispravni putni dokumenti, koji za posljedicu imaju odustajanje od putovanja, ne obvezuju agenciju i organizatora putovanja, te se primjenjuju objavljeni uvjeti otkaza putovanja.</p>
                                          
                                          <p style="text-align: justify;">Paso&scaron; mora vrijediti jo&scaron; najmanje 6 mjeseci od dana povratka iz UAE.</p>
                                          
                                          <p style="text-align: justify;">Putnicima s pečatom države Izrael u paso&scaron;uneće biti omogućen ulazak u UAE.</p>
                                          
                                          <p style="text-align: justify;">Trajanje putovanja: 6 dana / 5 noći</p>
                                          
                                          <p>Minimalan broj putnika: 21.</p>
                                          
                                          <p>Krajnji rok za prijavu: 14 dana prije putovanja ili do popunjenja mjesta</p>
                                          
                                          <p>Preporučujemo osiguranje od posljedica nesretnog slučaja i bolesti na putovanju.</p>
                                          
                                          <p style="text-align: justify;">Prijava za putovanje vrijedi isključivo uz uplatu predujma. Po uplati predujma primit ćete račun koji je ujedno i ugovor o putovanju.</p>
                                          
                                          <p style="text-align: justify;">Minimalan broj putnika za putovanje je 21. Ukoliko se na putovanje ne prijavi dovoljan broj putnika najkasnije 5 dana prije početka paket aranžmana putnička agencija je dužna obavijestiti putnika o otkazu putovanja, te ima pravo izmjene cijene ukoliko dođe do promjene tečaja za vi&scaron;e od 1,5% u odnosu na tečaj na dan izrade programa te ukoliko bi do&scaron;lo do promjene cijene prijevoznika ili hotelijera.<br />
                                          <br />
                                          Zavr&scaron;no pismo &scaron;aljemo 7 dana prije početka putovanja.</p>
                                          
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
                                                          <option selected>Dubai</option>
                                                      <option>Indija</option>
                                                      <option>Madagaskar</option>
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
</html>