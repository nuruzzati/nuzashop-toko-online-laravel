<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF pembayaran</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h4> Laporan PDF Pembayaran</h4> 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>pelanggan</th>
				<th>tanggal pembelian</th>
				<th>total pembelian</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pembelian as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->pelanggan->nama_pelanggan}}</td>
				<td>{{$p->tanggal_pembelian}}</td>
				<td>{{$p->total_pembelian}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>