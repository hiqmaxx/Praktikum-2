<!DOCTYPE html>
<html>
<head>
   <title>Hasil Registrasi</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/ bootstrap@5.3.2/dist/css/ bootstrap.min.css" rel="stylesheet" >
</head>
<body>
   <div class="container mt-5">
      <h1>Hasil Registrasi</h1>
      <table class="table table-striped mt-3">
            <tbody>
               @foreach($data as $key => $value)
                  <tr>
                        <th scope="row">{{ ucfirst($key) }}</th>
                        <td>{{ $value }}</td>
                  </tr>
               @endforeach
            </tbody>
      </table>
   </div>
</body>
</html>