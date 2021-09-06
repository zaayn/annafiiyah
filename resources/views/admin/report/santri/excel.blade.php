<html>
<head>
    <title>Laporan - {{ \Carbon\Carbon::parse(date('d-m-Y'))->format('d M Y') }}</title>
    <style type="text/css">
        .hr { width: 100%;border-style: solid;border-top-width: 0.5px;border-bottom-width: 0.5px;margin-top: 5px;margin-bottom: 25px }
        #table-santri-detail td, #table-detail-transaksi td, #table-item-transaksi td, #table-item-transaksi th { font-size: 9pt; }

        #table-santri-detail .title-detail-santri { width: 30%; }
        #table-detail-transaksi { margin-bottom: 20px; margin-top: 20px }
        #detail-profile h2 { margin-bottom: 0 }
        #detail-profile h6 { margin-bottom: 0 }
    </style>
    <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Laporan Santri-".date('d-m-Y').".xls");
    ?>
</head>
<body>
    <div class="hr"></div>
    <table border="0" width="100%" id="table-item-transaksi">
        <thead>
            <tr>
                <th>No</th>
                <th width="20%">Nama Santri</th>
                <th width="20%">Tempat, Tanggal Lahir</th>
                <th width="20%">Jenis Kelamin</th>
                <th width="20%">No Telepon Ortu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($model as $i => $santri)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $santri->santri_name }}</td>
                    <td>{{ $santri->santri_birth_place }}, 
                        {{ \Carbon\Carbon::parse($santri->santri_birth_date)->format("d M Y") }}
                    </td>
                    <td>{{ $santri->santri_gender == 'man' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    <td>{{ $santri->santri_parent_telephone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> 