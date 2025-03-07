<!DOCTYPE html>
<html>
<head>
   <title>Form Registrasi</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Tambahkan link ke CSS atau JS jika diperlukan -->
   <link href="https://cdn.jsdelivr.net/npm/ bootstrap@5.3.2/dist/ css/bootstrap.min.css" rel="stylesheet" >
</head>
</head>
<body>
<div class="container mt-5">
      <h2>Form Registrasi</h2>
      <form action="/submit" method="post" class="mt-4">
            @csrf
            <div class="form-group">
               <input type="text" class="form-control" name="nama" placeholder="Nama" required>
            </div>
            <div class="form-group">
               <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
               <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
               <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
            </div>
            <div class="form-group">
               <select class="form-control" name="profesi">
                  <option value="Developer">Developer</option>
                  <option value="Desainer">Desainer</option>
                  <option value="Architect">Architect</option>
                  <option value="Manager">Manager</option>
               </select>
            </div>
            <div class="form-group">
               <div>
                  <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                  <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
               </div>
            </div>
            <div class="form-check mb-3">
               <input type="checkbox" class="form-check-input" name="setuju" id="setuju" required>
               <label class="form-check-label" for="setuju">Saya Setuju</label>
            </div>
            <button type="submit" id="daftarBtn" class="btn btn-primary" disabled>Daftar</button>
      </form>
   </div>
   
   <script src="https://cdn.jsdelivr.net/npm/ bootstrap@5.3.2/dist/js/ bootstrap.bundle.min.js" ></script>
   <script>
      document.getElementById('setuju').onchange = function() {
            document.getElementById('daftarBtn').disabled = !this.checked;
      };
   </script>
</body>
</html>