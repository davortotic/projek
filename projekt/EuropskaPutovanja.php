<!DOCTYPE html>
<html>

<head>
    <link href="europskastyle.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet'>
    <title>EUROPSKA PUTOVANJA</title>
    <script  type="text/javascript" src="jquery-3.2.1.js"></script>
    <script type="text/javascript" src="jquery-validation-1.16.0\dist\jquery.validate.js"></script>
    <!-- <script type="text/javascript" src="europskajs.js"></script> -->
    <meta charset="utf8"> 
    <style>
body{
    text-align:center;
        background-color:gray;

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
  height: auto;
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
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

.three {
  width: 100%;
  height: 30vw;
  position: absolute;
  bottom: 0;
  background-color: white
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
    margin-top: 350px!important;
  } 
    .three{
    margin-top: 200px!important;
     top:100; 
  } 
  .three-a,.three-b{
      top:100;
  }
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

.caption p{
    color: black;
}
.item img{
    border-radius: 10px;
}
.caption h3{font-size:26px;color:#215985;}
h2{
    font-size: 40px;
   
    color:#215985;
    margin-left: 20px;
   
    width: 380px;
}

.item{
    display: inline-block;
    margin-left: 20px;
}
input{
  border-radius: 3px;
}
.caption{
    display: inline-block;
    margin-left: 20px;
}
.three{
  display: none;
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
          <h2>Europska putovanja</h2>
          <a class="thumbnail" href="andaluzija.php">
            <div class="item" class="first">
            <img src="andaluzija.jpeg" width="320" height="200" alt="ANDALUZIJA - avionom iz Sarajeva">        
                 

        </div>
        <div class="caption" >
                <p class="price">od <span>1.599,00</span> KM</p>
          <h3>ANDALUZIJA - avionom iz Sarajeva</h3>
   
   <p>U terminu: 16.-22.10.2019. 7 dana/6 noćenja</p>  
            
 </div>
 </a>
 <a class="thumbnail" href="amsterdam.php">
 
 <div class="clearfix"></div>
              <div class="item">
              <img src="amsterdam.jpeg" width="320" height="200" alt="AMSTERDAM - AVIONOM IZ ZAGREBA">       
                        
</div>
<div class="caption">
        <p class="price">od <span>712,00</span> KM</p>
  <h3>AMSTERDAM - avionom iz Zagreba</h3>

<p>21.06., 16.08. - GARANTIRANI POLASCI! </p>  
    
</div>
</a>
<div class="clearfix"></div>
<a class="thumbnail" href="pariz.php">
    <div class="item">
            <img src="pariz.jpeg" width="320" height="200" alt="PARIZ-AVIONOM IZ ZAGREBA">          
            
  </div>
  <div class="caption">
        <p class="price">od <span>550,00</span> KM</p>
  <h3>PARIZ - AVIONOM IZ ZAGREBA</h3>

<p>Termin: 13.02. - 17.02. 2019.</p>  
    
</div>
</a>

      <div class="three">
        
        <div class="three-a">
            <div class="upute">
                <img src="bv2.gif">
            </div>
          <div class="map">
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46428.66645767419!2d17.786220993774133!3d43.339548657955035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134b43a43b6340a9%3A0x14f32b2d4e37c5a!2sMostar+88000!5e0!3m2!1shr!2sba!4v1527687932403" ></iframe>

         </div>
        </div>
        
        
      </div>
</div>
 
</div>


</body>
<html>