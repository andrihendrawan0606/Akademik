<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak PDF</title>
    <style>
    table {
    border-left: 0.01em solid #ccc;
    border-right: 0;
    border-top: 0.01em solid #ccc;
    border-bottom: 0;
    border-collapse: collapse;
    }
    table td {
    border-left: 0;
    border-right: 0.01em solid #ccc;
    border-top: 0;
    border-bottom: 1px solid #ddd;
    }
    table th {
    background-color: grey;
    color: white;
    border-left: 0;
    border-right: 0.01em solid #ccc;
    border-top: 0;
    border-bottom: 1px solid #ddd;
}
    </style>
</head>
<body>

    <div class="card-header header-elements-inline">
        <h3 class="card-title">Data Nilai Ulangan Harian UTS Dan UAS</h3>
    </div>
    <div class="identitas">

        <div>Nama Siswa : {{$identitas->nama}}</div>
        <div>Kelas : {{$identitas->kelas}}</div>
        <div>Jurusan : {{$identitas->jurusan}}</div>

    </div>
    <br>
    <br>
    <div class="table-responsive">
     
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>KD 3,25 </th>
                    <th>KD 3,26 </th>
                    <th>KD 3,27 </th>
                    <th>KD 3,28 </th>
                    <th>KD 3,29 </th>
                    <th>KD 3,30 </th>
                    <th>KD 3,31 </th>
                    <th>KD 3,32 </th>
                    <th>KD 3,33 </th>
                    <th>KD 3,34 </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>1</td>
                    <td>{{$nilaisiswa->kd325}}</td>
                    <td>{{$nilaisiswa->kd326}}</td>
                    <td>{{$nilaisiswa->kd327}}</td>
                    <td>{{$nilaisiswa->kd328}}</td>
                    <td>{{$nilaisiswa->kd329}}</td>
                    <td>{{$nilaisiswa->kd330}}</td>
                    <td>{{$nilaisiswa->kd331}}</td>
                    <td>{{$nilaisiswa->kd332}}</td>
                    <td>{{$nilaisiswa->kd333}}</td>
                    <td>{{$nilaisiswa->kd334}}</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>