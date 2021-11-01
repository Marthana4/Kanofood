<!DOCTYPE html>
  <html>
    <head>
	  <title>LAPORAN PAYMENT</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
	  <style type="text/css">
		table tr td{
            font-size:9pt;
        },
		table tr th{
			font-size: 9pt;
		},
        div p{
            font-size: 10pt;
        }
	  </style>
	  <center>
		<h4>Laporan Payment</h4>
	  </center>
      <div class="text-left">
        <p>Date Start : 23-08-2021</p>
        <p>Date End   : 06-09-2021</p>
      </div>
	  <table class='table table-bordered'>
        <thead>
          <tr>
            <th>No</th>
            <th>No.Order</th>
            <th>Pemesan</th>
            <th>Level</th>
            <th>Total Order</th>
            <th>Order Status</th>
            <th>Payment</th>
            <th>Payment remaining</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
         @foreach($payments as $key=>$value)
          <tr>
            <td>{{$key+1}}</td>
            <td>0{{ $value->id_order}}</td>
            <td>{{ $value->name}}</td>
            <td>{{ $value->level}}</td>
            <td>Rp.{{ $value->total_order }}</td>
            <td>{{$value->payment_status}}</td>
            <td>Rp.{{ $value->user_cost }}</td>
            <td>Rp.{{ $value->user_cost_remaining }}</td>
            <td>{{$value->order_date}}</td>
          </tr>
         @endforeach     
        </tbody>
	  </table>
    </body>
  </html>