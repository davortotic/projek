
<!DOCTYPE html>
<html>

<head>

    <link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet'>
    <title>PARIZ - AVIONOM IZ ZAGREBA</title>
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
                                <h1 class="h2">PARIZ - AVIONOM IZ ZAGREBA</h1>          
                              <p class="lead clearfix">13.02.2019 - 17.02.2019. </p>     
                              </div>
                   
                         <div class="col-md-12 ">
                         <div class="thumbnail">
                         <img src="pariz.jpeg"  width="740" height="415" alt="PARIZ- AVIONOM IZ ZAGREBA" rel="image_src" class="responsive">                  <p class="price">od <span>712,00</span> KM</p>
                                </div>
                         </div>
                         
                         
                         
                     
                     </div>
                <div class="page-text">
                        <h4 style="text-align: center;"><strong>Pariz - romantični grad</strong></h4>
                        
                        <p><strong>Opis aranžmana:</strong></p>
                        
                        <p style="text-align: justify;"><strong>1.dan: ZAGREB - PARIZ</strong>&nbsp;<br />
                        Sastanak putnika u Zračnoj luci Zagreb kod šaltera informacija u 07:00 sati, te prijava za let u Pariz u 09:05. Po slijetanju u Pariz u 11:05, nakon obavljenih formalnosti odlazak na panoramski razgled grada autobusom; Latinska četvrt, Pantheon, poznato sveučilište Sorbonne, Luksemburški vrtovi, Musee d'Orsay, Musee Rodin, Dom des Invalides gdje je smještena grobnica Napoleona Bonapartea, Eiffelov toranj, prelazimo Seinu i dolazimo do Trocadera, te najpoznatije avenije Champs-Elysees sa poznatim Arc de Triomphe – slavolukom pobjede, Nastavljamo do Opere, Place Vendome s poznatim hotelom Ritz i nizom najskupljih draguljarnica, Place de la Concorde, najpoznatiji svjetski muzej Le Louvre, gradska vijećnica - Hotel de Ville, Place de la Bastille... Smještaj u hotel. Nakon kratkog odmora nastavljamo s razgledom grada. Posjet Montmartreu s kojeg se pruža prekrasna panorama na grad. Potpuno bijela crkva Srca Isusovog (Sacre Coeur), do koje se dolazi strmim stepenicama, druga je najviša točka u gradu. Tu je i crkva St. Pierre, te Trg Tertre, gdje slikari svoja djela prodaju izravno sa štafelaja, brojne trgovine i suvenirnice. Slobodno vrijeme. Navečer predlažemo zajednički odlazak na večeru u tipičan pariški restaurant podno Montmartra. Povratak u hotel. Noćenje. </p>
                        <p style="text-align: justify;"><strong>2.dan:  PARIZ</strong>&nbsp;<br />
                        Doručak.  Zajednički odlazak javnim gradskim prijevozom do Eiffelovog tornja koji sa svojom visinom od 320 m dominira cijelim Parizom i privlači poput magneta. Popnite se liftom na 3. kat i uživajte u nezaboravnom pogledu na grad. Poslije predlažemo romantičnu vožnju Seinom (fakultativno) tijekom koje ćete moći doživjeti brojne mostove i spomenike  iz potpuno drugačije perspektive. Slobodno poslijepodne za vlastite programe ili posjet jednom od najpoznatijih svjetskih muzeja – Louvre. Nakon odmora prošetat ćemo najpoznatijom pariškom avenijom Champs-Elysees. Navečer predlažemo odlazak na čuveni pariški cabaret show - Moulin Rouge. Povratak u hotel, noćenje.</p>
                        <p style="text-align: justify;"><strong>3.dan:  PARIZ</strong>&nbsp;<br />
                        Doručak. Preporučamo odlazak u posjet dvorcu Versailles, nekoć kraljevskoj rezidenciji francuskih kraljeva. Nastavak razgleda grada s pratiteljem putovanja javnim gradskim prijevozom i pješice: odlazak do Ille de la Cite s najstarijim pariškim mostom Le Pont Neuf, slavnom katedralom Notre-Dame, Palačom pravde, dalje do uskih uličica Latinske četvrti sa zanimljivim trgom Saint-Michel te do četvrti Marais gdje se nalazi Picassov muzej. Slobodno vrijeme. Povratak u hotel. Noćenje.</p>
                        <p style="text-align: justify;"><strong>4.dan: PARIZ-ZAGREB</strong>&nbsp;<br />
                        Doručak. Slobodno vrijeme. Iza podneva odjava iz hotela i transfer do zračne luke na let za Zagreb u 15:15. Slijetanje u Zagreb u 17:10.</p>
                     
                        
                        <p style="text-align: justify;"><strong>CIJENA PAKET ARANŽMANA UKLJUČUJE:</strong>
                        &nbsp;prijevoz zrakoplovom Croatia Airlinesa prema programu
                        &ndash; transfere autobusom zračna luka– hotel – zračna luka
                        &scaron;smještaj u hotelu 3* u  Parizu na osnovi 3 noćenja s doručkom u dvokrevetnoj sobi
                        &scaron;pratitelja na hrvatskom jeziku tijekom putovanja
                        &scaron;organizaciju i pripremu putovanja</p>
                        
                        <p style="text-align: justify;"><strong>CIJENA PAKET ARANŽMANA NE UKLJUČUJE:</strong>
                        &nbsp;pristojbe zračnih luka  i naknadu za izdavanje putničke karte koje se obvezno plaćaju prilikom rezervacije aranžmana 550,00KM – iznos je promjenljiv do dana izdavanja zrakoplovnih karata
                        &scaron;ulaznice za lokalitete i objekte koji se posjećuju, a nisu navedeni u cijeni aranžmana
                        &scaron;fakultativne izlete
                        &scaron;obroke koji nisu uključeni u cijenu
                        &scaron;doplata za jednokrevetnu sobu 170,00KM</p>
                        
                    

                        
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
                            <option>Pariz</option>
                            
                        </select><br><br>
                        <textarea id="napomena" name="napomena" placeholder="Napomena"></textarea>
                        <button type="submit" id="posaljiupit">Pošalji</button>
                    </form>
                </div>
                    
                
                
            </div>
            
      </div>
      <div class="three">
        
        <div class="three-a">
            
            </div>
          <div class="map">
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46428.66645767419!2d17.786220993774133!3d43.339548657955035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134b43a43b6340a9%3A0x14f32b2d4e37c5a!2sMostar+88000!5e0!3m2!1shr!2sba!4v1527687932403" ></iframe>

         </div>
        </div>
        
        </div>
        
      </div>
</div>
 
</div>

</body>
<html>