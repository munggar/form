<html>

<head>
    <title>Faktur Pembayaran</title>
    <style>
        #tabel {
            font-size: 15px;
            border-collapse: collapse;
        }

        #tabel td {
            padding-left: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body style='font-family:tahoma; font-size:8pt;' onload="javascript:window.print()">
    <center>
        <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                <span style='font-size:12pt'><b>Toko Buku - No Counter</b></span></br>
                28 White tower, Street Name New York City, USA</br>
            </td>
            <td style='vertical-align:top' width='30%' align='left'>
                <b><span style='font-size:12pt'>FAKTUR PENJUALAN</span></b></br>
                No Trans. : {{ $pembelian->id }}</br>
                Tanggal : {{ $pembelian->created_at }}</br>
            </td>
        </table>
        <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                Nama : {{ $pembelian->nama }} </br>
                Alamat : {{ $pembelian->alamat }}
            </td>
            <td style='vertical-align:top' width='30%' align='left'>
                No Telp : {{ $pembelian->telp }}
            </td>
        </table>
        <table cellspacing='0' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;'
            border='1'>

            <tr align='center'>
                <td width='20%'>Nama Buku</td>
                <td width='13%'>Harga</td>
                <td width='4%'>Jumlah</td>
                <td width='7%'>Discount</td>
                <td width='13%'>Total Harga</td>
            <tr align="center">
                <td>{{ $buku->judul }}</td>
                <td>Rp. {{ number_format($buku->harga_jual - $buku->harga_jual*$buku->diskon/100 )}}</td>
                <td>{{ $jumlah }}</td>
                <td>{{ $buku->diskon }} %</td>
                <td style='text-align:right'>Rp.{{ number_format($buku->harga_jual - $buku->harga_jual*$buku->diskon/100 )}}</td>
            </tr>

            @php
                $grandtotal = 0;
                $subtotal = $buku->harga_jual * $buku->jumlah;
                $total = $buku->harga_jual - $buku->harga_jual*$buku->diskon/100;
                $grandtotal += $subtotal = $total;
            @endphp
            <tr>
                <td colspan='4'>
                    <strong><div style='text-align:right'>Total Yang Harus Di Bayar Adalah </div></strong>
                </td>
                <td>
                    <strong><div style='text-align:right'>Rp.{{ number_format($grandtotal) }}</div></strong>
                </td> 
            </tr>
        </table>
        <br>
        <br>

        <table style='width:650; font-size:7pt;' cellspacing='2'>
            <tr>
                <td align='center'>Diterima Oleh, <br> <br> ............ <br> </td>
                <td align='center'>TTD, <br> <br> ........... <br> </td>
            </tr>
        </table>
    </center>
</body>