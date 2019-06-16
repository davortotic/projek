
<!DOCTYPE html>
<html>

<head>
    <link href="andaluzijastyle.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet'>
    <title>AMSTERDAM - AVIONOM IZ ZAGREBA</title>
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
                    <li><a href="sign-in.php"> PRIJAVA</a></li>
                  <li><a href="logout.php">ODJAVI SE</a></li>
                  </li>
                  
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
                                <h1 class="h2">AMSTERDAM - AVIONOM IZ ZAGREBA</h1>          
                              <p class="lead clearfix">Termin: 21.06 - 24.06.2019. </p>     
                              </div>
                   
                         <div class="col-md-12 ">
                         <div class="thumbnail">
                         <img src="amsterdam.jpeg"  width="740" height="415" alt="AMSTERDAM - AVIONOM IZ ZAGREBA" rel="image_src" class="responsive">                  <p class="price">od <span>712,00</span> KM</p>
                                </div>
                         </div>
                         
                         
                         
                     
                     </div>
                <div class="page-text">
                        <h4 style="text-align: center;"><strong>AMSTERDAM CITY BREAK</strong></h4>

                        <p>&nbsp;</p>
                        
                        <p style="text-align: center;">21.06. - 24.06.2019.&nbsp;</p>
                        
                        <p style="text-align: center;">4 dana/3 noćenja</p>
                        
                        <p style="text-align: center;">Avionom iz Zagreba</p>
                        
                        <p style="text-align: center;"><strong>VRIJEDNOST VI&Scaron;E:&nbsp;uključen izlet Sjeverna Nizozemska &ndash; ZAANDAM, ZAANSE SCHANS I EDAM!!</strong></p>
                        
                        <p>&nbsp;</p>
                        
                      
                        
                        
                        
                        <p>&nbsp;</p>
                        
                       
                        
                        <p style="text-align: center;"><strong>Aerodromske takse&nbsp;(doplata)&nbsp;316,00 KM</strong></p>
                        
                        <p>&nbsp;</p>
                        
                       
                        
                       
                        
                        <p>&nbsp;</p>
                        
                        <p><strong>Opis aranžmana:</strong></p>
                        
                        <p style="text-align: justify;"><strong>1.dan: ZAGREB - AMSTERDAM</strong>&nbsp;<br />
                        Sastanak putnika u Zračnoj luci u Zagrebu kod &scaron;altera informacija dva sata prije polaska aviona. Let&nbsp;KLM na liniji KL1942 iz Zagreba za Amsterdam u poslijepodnevnim satima (redovi letenja u napomeni). Dolazak u Amsterdam, po dolasku transfer autobusom u hotel. Smje&scaron;taj u hotel i odlazak s voditeljem putovanja javnim gradskim prijevozom u sredi&scaron;te grada do trga Dam na kojem se nalazi Kraljevska palača iz 1655. g. i spomenik nizozemskim žrtvama Drugog svjetskog rata, te do poznate amsterdamske Četvrti crvenih svjetiljki. Noćenje.</p>
                        
                        
                        
                        <p style="text-align: justify;"><strong>2. dan: AMSTERDAM/izlet SJEVERNA NIZOZEMSKA: ZAANDAM-ZAANSE SCHANS-EDAM</strong>&nbsp;<br />
                        Doručak. Poslije doručka odlazak na izlet u &bdquo;idiličnu Nizozemsku&ldquo;, Nizozemsku vjetrenjača, kanala, klompi, zelenih pa&scaron;njaka i ribarskih kuća: posjetit ćemo tri ljepu&scaron;kasta mjesta u blizini Amsterdama. Odlazak u Zaandam na rijeci Zaan, udaljen 15 km od sredi&scaron;ta Amsterdama, nekoć sredi&scaron;te nizozemske brodogradnje. Na sjeverozapadu od Zaandama nalazi se Zaanse Schans, muzej na otvorenom koji sa svojim starim vjetrenjačama i &scaron;arenim kućicama priziva davna vremena i pokazuje kako se nekoć živjelo. Posjet manufakturi klompi i sira. Na povratku ćemo posjetiti lijepo sredi&scaron;te ljupkog Edama, gradića poznatog po siru i fantastičnoj brodogradnji. Po povratku u Amsterdam nastavak razgledavanja grada javnim prijevozom i pje&scaron;ice. Odlazak s voditeljem putovanja do četvrti muzeja i vrijeme za individualni posjet slavnom Rijksmuzeju &ndash; najslavniji eksponat ovog muzeja je čuvena Rembrandtova &bdquo;Noćna straža&ldquo;! - i muzeju Van Gogha, bogate kolekcije slika slavnog slikara/vi&scaron;e od 200 njegovih slika, ali i mjestu gdje možete vidjeti i slike nekih drugih impresionističkih slikara. Posjet poznatoj brusionici dijamanata Coster Diamonds uz prikaz izrade nakita i mogućnost kupovine. U večernjim satima fakultativna vožnja brodom kanalima Amsterdama: kanali Kaizersgracht - Herengracht - Prinsengracht - kuća Ane Frank - Zapadna crkva - luka Amsterdama - Waterlooplein - rijeka Amstel. Noćenje.</p>
                        
                        <p style="text-align: justify;"><strong>3.dan: AMSTERDAM/fakultativno izlet JUŽNA NIZOZEMSKA: SCHEVENINGEN-DEN HAAG-ROTTERDAM-GOUDA</strong><br />
                        Doručak. Danas preporučujemo izlet na jug zemlje (doplata prilikom rezervacije aranžmana). Na početku dana posjetit ćemo Scheveningen, sjevernomorsko ljetovali&scaron;te poznato po svojoj dugoj &scaron;etnici i molu koji se dužinom od 400 m prostire u Sj. more. Nakon stanke za &scaron;etnju ili kavu odlazak prema obližnjem Haagu, sredi&scaron;tu nizozemske vlade i prebivali&scaron;tu kraljevske obitelji, trećem gradu po veličini u zemlji. Najvažnija znamenitost grada je Mauritshuis, muzej smje&scaron;ten u klasicističkoj građevini u povijesnom sredi&scaron;tu grada, galerija s neprocjenjivom zbirkom flamanskih i nizozemskih majstora među kojima se ističe Vermeerova &bdquo;Djevojka s bisernom nau&scaron;nicom&ldquo;. Poslije kraćeg slobodnog vremena nastavljamo prema Rotterdamu, &bdquo;Manhattanu na rijeci Maas&ldquo;, najvećoj europskoj luci i gradu koji zadivljuje svojom suvremenom arhitekturom. Potpuno razru&scaron;en u 2. svjetskom ratu, Rotterdam je jedan od najmodernijih gradova Europe, gdje god da se nađete možete vidjeti fantastične primjerke vrhunske arhitekture, među kojima se izdvaja fantastična tržnica sagrađena 2014.g., veličine nogometnog igrali&scaron;ta. Odlazak na Euromast toranj (doplata na licu mjesta), visok 186 m s kojeg se pruža fantastičan pogled na grad. Za kraj dana posjetit ćemo na povratku u Amsterdam prekrasan gradić poznat po siru: Goudu. Sredi&scaron;te gradića vrlo je slikovito: glavnim gradskim trgom dominira gotička gradska vijećnica, a crkva St. Janskerk na južnom dijelu trga najvi&scaron;a je crkva u Nizozemskoj i u sebi skriva najljep&scaron;e crkvene prozore u zemlji. Povratak u Amsterdam u kasnim poslijepodnevnim satima.</p>
                        
                        <p style="text-align: justify;"><strong>4. dan: AMSTERDAM - ZAGREB</strong><br />
                        Doručak. Transfer do zračne luke. Let zrakoplovom KLM na liniji KL1941/1939 iz Amsterdama za Zagreb prema redovima letenja navedenim ispod programa. Dolazak u Zagreb u poslijepodnevnim satima .</p>
                        
                        <p style="text-align: justify;"><strong>CIJENA PAKET ARANŽMANA UKLJUČUJE:</strong>&nbsp;prijevoz zrakoplovom Zagreb &ndash; Amsterdam - Zagreb, ručnu prtljagu do 12 kg, uslugu voditelja putovanja, smje&scaron;taj u hotelu 3* u Amsterdamu u dvokrevetnim sobama na osnovi tri noćenja s doručkom, transfer od/do zračne luke u Amsterdamu, razglede pje&scaron;ice s voditeljem putovanja, izlet Sjeverna Nizozemska, te tro&scaron;kove organizacije i prodaje putovanja</p>
                        
                        <p style="text-align: justify;"><strong>CIJENA PAKET ARANŽMANA NE UKLJUČUJE:</strong>&nbsp;zrakoplovne pristojbe, prtljagu veću od 12 kg (doplata 390 kn za prtljagu do 23 kg), ulaznice za kulturno-povijesne spomenike i muzeje koje nisu navedene kao uključene, karte javnog prijevoza, karte za vlak, putno osiguranje, fakultativne sadržaje te tro&scaron;kove osobnih narudžbi</p>
                        
                        <p style="text-align: justify;"><strong>CIJENE FAKULTATIVNIH SADRŽAJA I ULAZNICA:</strong>&nbsp;(prema stanju iz prosinca 2018. g., mogu biti podložne promjeni): Rijksmuseum 35/mladi ispod 18 gratis; Van Gogh muzej 34 KM; vožnja brodom po kanalima 30 KM; Kuća Ane Frank 18 KM</p>
                        
                       
                        
                        <p style="text-align: center;"><em><strong>MINIMUM PRIJAVLJENIH PUTNIKA: 20</strong></em></p>
                        
                        
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
                                <option selected>Amsterdam</option>
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