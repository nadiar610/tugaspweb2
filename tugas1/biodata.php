<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biodata Nadia</title>
    <style>
      body {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-block: 2rem;
        color: #fff;
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
          url("https://cdn0-production-images-kly.akamaized.net/-TEclxm-ie--UAcQc9XlZFZFxF0=/1200x675/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4982180/original/042673500_1730095950-cara-menggambar-pemandangan.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .profile-container {
        display: flex;          
        gap: 8rem;              
        align-items: flex-start;     
        justify-content: center; 
        margin-bottom: 3rem;  
        flex-wrap: wrap;   
    }

    img {
        display: flex;
        border-radius: 30%;
        width :18rem;
        height : auto;
    }

     h1 {
        display: flex; 
        text-align: center;
        font-size: 3rem;
        margin-bottom: 2rem;
        justify-content: center;
      }

      .tabel {
        text-align: center;
        margin-bottom: 3rem;
      }

      table th,
      td,
      tr {
        border: 1px solid;
      }

      td {
        border: 1px solid;
        padding: 1rem;
      }

      td ul {
        padding: 1rem;
      }

      th {
        padding: 1rem;
        font-weight: bold;
      }

      /* Materi */
      .materi {
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 10px;
        width: 80%;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
        
      }

      .materi h1 {
        text-align: center;
        font-size: 2rem;
        margin: 1rem;
      }

      .materi a {
        margin: 1rem;
        display: inline-block;
        padding: 1rem 3rem;
        width : 10rem;
        font-size: 1.4rem;
        color: #fff;
        text-align: center;
        background-color: #031624;
        border: 1px solid #30ffa4;
        border-radius: 0.5rem;
        box-shadow: 1px 1px 3px rgba(44, 44, 44, 0.5);
      }

      .see {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        justify-content: center;
      }
    </style>
  </head>

  <body>
  <h1>Biodata</h1>
  <div class="profile-container">
    <img src="nadia.png" alt="">
    <!-- Tabel Biodata -->
    <div class="tabel">
      <?php
        echo '<table>';
        echo '
          <tr>
            <th colspan="3">ABOUT ME</th>
          </tr>
          <tr>
            <th>NIM</th>
            <td>:</td>
            <td>09031282328027</td>
          </tr>
          <tr>
            <th>NAMA</th>
            <td>:</td>
            <td>Nadia Ramadhani</td>
          </tr>
          <tr>
            <th>JURUSAN</th>
            <td>:</td>
            <td>Sistem Informasi Reguler</td>
          </tr>
          <tr>
            <th>FAKULTAS</th>
            <td>:</td>
            <td>Ilmu Komputer</td>
          </tr>
          <tr>
            <th>HOBI</th>
            <td>:</td>
            <td>
              <ul type="circle">
                <li>Nonton Film</li>
              </ul>
            </td>
          </tr>';
        echo '</table>';
      ?>
    </div>
    </div>

    <!-- Hero Section Start -->
    <section id="materi" class="materi">
      <h1>Rekap Materi Pembelajaran</h1>
      <div class="see">
        <a href="../pertemuan1/barang.php">Hitung Belanja</a>
        <a href="../pertemuan1/index.php">Tabel</a>
        <a href="../pertemuan2/index.php">Luas Lingkaran</a>
        <a href="../pertemuan2/kubus.php">Volume Kubus</a>
        <a href="../pertemuan2/marquee.php">Marquee</a>
        <a href="../pertemuan2/tag.php">Tag</a> 
      </div>
    </section>
    <!-- Hero Section End -->
  </body>
</html>
