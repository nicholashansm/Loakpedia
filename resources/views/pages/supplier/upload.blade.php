<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Supplier - LoakPedia</title>
    <link rel="stylesheet" href="./LoakPedia/supplier/frame_285 copy.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <img src="./LoakPedia/supplier/skins/nadiaartboard_1_1.png" alt="Logo" />
          <h2>
            <span class="registrasi">Registrasi</span>
            <span class="barang">Barang</span>
          </h2>
          <style>
            .registrasi {
              color: #f0f8ff;
            }

            .barang {
              color: black;
            }
          </style>
        </div>

        <div class="profile">
          <div class="profile-image">
            <img src="./LoakPedia/supplier/skins/ellipse_79.png" alt="Profile Picture" />
          </div>
          <div class="profile-name .registrasi">{{ Auth::user()->name }}</div>
        </div>
      </nav>
    </header>

    <div class="wrapper">
      <div class="page active">
        <h2>Informasi Barang</h2>
        <form action="/supplierfilled">
          <div class="input-form">
            <label class="special">Nama Barang</label>
            <input
              type="text"
              placeholder="Masukkan Nama Barang Anda"
              required
            />
          </div>
          <div class="input-form">
            <label>Kategori Barang</label>
            <input type="text" placeholder="Masukkan Kategori Barang Anda" required/>
          </div>
          <div class="input-form-big">
            <label>Deskripsikan Barang Anda</label>
            <textarea placeholder="Deskripsikan Barang Anda"></textarea>
          </div>
          <br />
          <div class="small">
            <div class="input-form">
              <label>Berat</label>
              <input type="text" placeholder="Berat" />
            </div>
            <div class="input-form">
              <label>Panjang</label>
              <input type="text" placeholder="Panjang" />
            </div>

            <div class="input-form">
              <label>Lebar</label>
              <input type="text" placeholder="Lebar" />
            </div>
            <div class="input-form">
              <label>Tinggi</label>
              <input type="text" placeholder="Tinggi" />
            </div>
          </div>
          <div class="input-image">
            <label for="image-upload">Upload Image</label>
            <input type="file" id="image-upload" accept="image/*" required/>
          </div>
          <div class="input-button button">
          <input type="submit" value="Simpan" onclick="validateForm(event)"/>
          </div>
        </form>
      </div>
        </form>
      </div>
    </div>
    <br>
    <script src="./LoakPedia/supplier/script.js"></script>
  </body>
  <br>
</html>
