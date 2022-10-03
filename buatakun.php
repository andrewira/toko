<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat akun</title>
    <link rel="stylesheet" href="buatakun.css">
</head>
<body>
    
</body>
</html>
<div class="container text-center">
    <div class="row">
      <div class="col align-self-start">
<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1>DAFTAR</h1>
      <p>Silakan isi formulir ini untuk membuat akun</p>
      <hr>
  
      <label for="nama"><b>nama depan</b></label>
      <input type="text" placeholder="" name="nama" required>

      <label for="nama"><b>nama belakang</b></label>
      <input type="text" placeholder="" name="nama" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="masukan Email" name="email" required>
  
      <label for="psw"><b>kata sandi</b></label>
      <input type="password" placeholder="masukan kata sandi" name="psw" required>
  
      <label for="psw-repeat"><b>konfirmasi</b></label>
      <input type="password" placeholder="ulang kata sandi" name="psw-repeat" required>
  
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> ingat saya
      </label>
  
      
  
      <div class="clearfix">
        <button type="submit" class="signupbtn">DAFTAR</button>
      </div>
      <p>sudah memiliki akun?<a href="login.php" style="color:dodgerblue">masuk akun</a>.</p>
      </div>
    </div>
   </div>
  </form>