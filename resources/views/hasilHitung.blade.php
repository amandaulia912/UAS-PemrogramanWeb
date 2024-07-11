@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan SAW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Hasil Perhitungan SAW</h2>

        <!-- Table for Weights -->
        <h3>Bobot Kriteria</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                </tr>
            </thead>
            <tbody>
                @foreach($weights as $kriteria => $bobot)
                <tr>
                    <td>{{ $kriteria }}</td>
                    <td>{{ $bobot }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Table for Normalized Values -->
        <h3>Nilai Normalisasi</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alternatifs as $index => $alternatif)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $alternatif->nama_perusahaan }}</td>
                    <td>{{ number_format($alternatif->normalized->C1, 2) }}</td>
                    <td>{{ number_format($alternatif->normalized->C2, 2) }}</td>
                    <td>{{ number_format($alternatif->normalized->C3, 2) }}</td>
                    <td>{{ number_format($alternatif->normalized->C4, 2) }}</td>
                    <td>{{ number_format($alternatif->normalized->C5, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Table for SAW Calculation Results -->
        <h3>Hasil Perhitungan SAW</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>Nilai SAW</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alternatifs as $index => $alternatif)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $alternatif->nama_perusahaan }}</td>
                    <td>{{ $alternatif->C1 }}</td>
                    <td>{{ $alternatif->C2 }}</td>
                    <td>{{ $alternatif->C3 }}</td>
                    <td>{{ $alternatif->C4 }}</td>
                    <td>{{ $alternatif->C5 }}</td>
                    <td>{{ number_format($alternatif->saw_value, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
