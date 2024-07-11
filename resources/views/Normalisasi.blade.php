@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hasil Perhitungan</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <!-- Tabel Normalisasi -->
                            <h4 class="mb-3">Tabel Normalisasi</h4>
                            <table class="table table-bordered mb-4">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Normalisasi C1</th>
                                        <th>Normalisasi C2</th>
                                        <th>Normalisasi C3</th>
                                        <th>Normalisasi C4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alternatifs as $key => $alternatif)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $alternatif->nama }}</td>
                                        <td>{{ $alternatif->C1 }}</td>
                                        <td>{{ $alternatif->C2 }}</td>
                                        <td>{{ $alternatif->C3 }}</td>
                                        <td>{{ $alternatif->C4 }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Tabel Hasil Perhitungan SAW -->
                            <h4 class="mb-3">Tabel Hasil Perhitungan SAW</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nilai SAW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alternatifs as $key => $alternatif)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $alternatif->nama }}</td>
                                        <td>{{ $alternatif->normalized_saw }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
