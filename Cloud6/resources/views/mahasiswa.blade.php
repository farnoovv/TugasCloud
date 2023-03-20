<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <!--tab-->
    <div class="container my-5">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="mahasiswa-tab" data-bs-toggle="tab" data-bs-target="#mahasiswa-tab-pane" type="button" role="tab" aria-controls="mahasiswa-tab-pane" aria-selected="true">Mahasiswa</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="dosen-tab" data-bs-toggle="tab" data-bs-target="#dosen-tab-pane" type="button" role="tab" aria-controls="dosen-tab-pane" aria-selected="false">Dosen</button>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <!--Mahasiswa-->
            <div class="tab-pane fade show active" id="mahasiswa-tab-pane" role="tabpanel" aria-labelledby="mahasiswa-tab" tabindex="0">
                <div class="container my-5 mx-auto" style="width: 1000px">
                    <table class="table" id="myTable">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th scope="col">Id</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">Fakultas</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <!--sesuaiin database-->
                        <tbody>
                        @foreach ($mahasiswas as $mahasiswa);
                        <tr>
                          <td>{{ $mahasiswa['id'] }}</td>
                          <td>{{ $mahasiswa['nim'] }}</td>
                          <td>{{ $mahasiswa['nama'] }}</td>
                          <td>{{ $mahasiswa['prodi'] }}</td>
                          <td>{{ $mahasiswa['fakultas'] }}</td>
                          <td>{{ $mahasiswa['angkatan'] }}</td>
                          <td>{{ $mahasiswa['email'] }}</td>
                      </tr>
                      @endforeach
                        </tbody>
                      </table>
                </div>
            </div>

          
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>
