<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	
	.thead-blue {
		background-color: #2a73bb !important;
		border-color: #2a73bb !important;
		color: white;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Hope and Wellness!</h1>

	<div id="body">
		<h2> People from Web </h2>

		<table width="600" class="table table-striped table-hover">
		
			<thead class="thead-blue">
		
				<tr>

					<th scope="col">Id</th>

					<th scope="col">Name</th>

					<th scope="col">Email</th>

					<th scope="col">Mobile</th>

					<th scope="col">Message</th>
					
					<th scope="col">Date</th>

				</tr>
				
			</thead>
			
			<tbody>

				<?php $i = 1; foreach ($user_list as $u_key){ ?>

				<tr>

					<td><?php echo $i; ?></td>

					<td><?php echo $u_key->name. ' ' .$u_key->last ?></td>

					<td><?php echo $u_key->email; ?></td>

					<td><?php echo $u_key->phone; ?></td>

					<td><?php echo $u_key->message; ?></td>
					
					<td><?php echo date("m-d-Y", strtotime($u_key->create_at)); ?></td>

				</tr>

				<?php $i++;}?>
		
			</tbody>

		</table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds by OdLir</p>
</div>

</body>
</html>