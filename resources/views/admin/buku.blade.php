@extends('layouts.dash')
@section('content')
<div class="card mt-4">
 <div class="card-header">Pesanan Terbaru</div>
 <div class="card-body">
  <div class="table-responsive">
   <table class="table table-striped table-hover">
    <thead>
     <tr>
      <th>ID Pesanan</th>
      <th>Nama Pelanggan</th>
      <th>Status</th>
      <th>Total</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td>#1234</td>
      <td>Budi Santoso</td>
      <td><span class="badge text-bg-success">Selesai</span></td>
      <td>Rp 500.000</td>
     </tr>
     <tr>
      <td>#1235</td>
      <td>Ani Yulianti</td>
      <td><span class="badge text-bg-warning">Pending</span></td>
      <td>Rp 250.000</td>
     </tr>
    </tbody>
   </table>
  </div>
 </div>
</div>
@endsection