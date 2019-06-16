<?php
  $ime = $_POST['ime'];
  $prez = $_POST['prez'];
  $email = $_POST['email'];
  $kori = $_POST['kori'];
  $pass = $_POST['pass'];

  $conn = mysqli_connect('localhost', 'root', '');
  $db = mysqli_select_db($conn, 'projekt');

  if(!$conn) {
      die("Neuspješno povezivanje na bazu");
  }

  $sql = "INSERT INTO korisnik (ID, IME, PREZIME, EMAIL, KORISNICKO_IME, SIFRA) VALUES ('', '$ime', '$prez', '$email', '$kori', '$pass')";

  if(mysqli_query($conn, $sql)){
      echo "Uspješno dodan novi korisnik!";
      header("location:sign-in.php");
  }else {
      echo "Neuspješno upisivanje u bazu ";
  }

  mysqli_close($conn);



?>