<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<style>
  body {
    display: flex;
    justify-content: center;
    background-color: #A7ECEE;
  }

  h1 {
    padding-top: 60px;
    text-align: center;
  }

  form {
    text-align: center;
  }

  .card {
    margin-top: 50px;
    background-color: #99DBF5;
    width: 800px;
    height: 300px;
  }
</style>

<body>
  <div class="card">
    <div class="card-body">

      <h1>KALKULATOR</h1>
      <br>
      <form method="POST">
        <input type="number" name="x" size="31"> &nbsp;
        <select name="operasi">
          <option value="tambah">+</option>
          <option value="kali">x</option>
          <option value="kurang">-</option>
          <option value="bagi">/</option>
        </select> &nbsp;
        <input type="number" name="y" size="3"> &nbsp;
        <label>=</label> &nbsp;
        <input type="submit" value="Hitung">
      </form>
      <br>
      <?php
      include "fungsi.php";
      $kalkulator = new Kalkulator();
      if ($_POST) {
        $a = $_POST['x'];
        $b = $_POST['y'];
        if ($_POST['operasi'] == "tambah") {
          echo " <center> Hasil dari " . $a . " + " . $b . " = " . $kalkulator->setTambah($a, $b) . "<br /><br /> </center>";
        } elseif ($_POST['operasi'] == "kali") {
          echo "<center> Hasil dari " . $a . " x " . $b . " = " . $kalkulator->setKali($a, $b) . "<br /><br /> </center>";
        } elseif ($_POST['operasi'] == "kurang") {
          echo "<center> Hasil dari " . $a . " - " . $b . " = " . $kalkulator->setKurang($a, $b) . "<br /><br /> </center>";
        } elseif ($_POST['operasi'] == "bagi") {
          echo "<center> Hasil dari " . $a . " : " . $b . " = " . $kalkulator->setBagi($a, $b) . "<br /><br /> </center>";
        }
      }
      ?>
    </div>
  </div>
</body>

</html>
