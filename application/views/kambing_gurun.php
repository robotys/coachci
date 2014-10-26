<!DOCTYPE html>
<html>

<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- start styling -->
	<style>

		body{
			/*background: #ededed;*/
			background: url('<?= base_url('assets/geometry2.png')?>');
		}

		img{
			box-sizing: border-box;
			max-width: 100%;
		}

		th{
			background: #444;
			color: #fff;
		}

		.table-bordered > thead > tr > th{
			border: #444;
		}

		/*body{
			background: #444;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			color: #444;
		}

		h1{
			color: #F00;
		}

		h2{
			color: #00F;
			font-family: Georgia, serif;
			font-style: italic;
			font-size: 1.2em;
		}

		.container{
			width: 800px;
			margin: 0 auto;
			background: #fff;
			padding: 20px;
		}*/

		/*style untuk form*/

		.paper{
			margin-top: 20px;
			box-shadow: 0px 0px 10px #999;
			background: #fff;
			padding-top: 20px;
			border-radius: 6px;
		}

	</style>
	<!-- end styling -->

</head>

<body>

<!-- Tambah div box -->
<div class="container paper">
	<div class="row">
		<div class="col-md-7 col-md-offset-1">
			<h1>Welcome To CoachCI</h1>

			<p>INi adalah cubaan semata-mata</p>

			<p>Dan ini adalah satu paragraph yang panjang. Copy paste je lah. Dan ini adalah satu paragraph yang panjang. Copy paste je lah. Dan ini adalah satu paragraph yang panjang. Copy paste je lah. Dan ini adalah satu paragraph yang panjang. Copy paste je lah. Dan ini adalah satu paragraph yang panjang. Copy paste je lah. Dan ini adalah satu paragraph yang panjang. Copy paste je lah. Dan ini adalah satu paragraph yang panjang. Copy paste je lah</p>

			<h2>Cubaan Image</h2>

			<img src="<?= base_url('assets/dandelion.jpg')?>" />

			<h2>Cubaan List</h2>

			<ul>
				<li>List lah</li>
				<li>List Lagi</li>
				<li>List itu</li>
				<li><a href="http://google.com">Link Google</a></li>
			</ul>


			<h2>Cubaan Ordered List</h2>

			<ul>
				<li>List lah</li>
				<li>List Lagi</li>
				<li>List itu</li>
				<li><a href="http://google.com">Link Google</a></li>
			</ul>

			<h2>Link berderet deret </h2>

			<a href="#">Link 1</a> &nbsp;
			<a href="#">Link 2</a> &nbsp;
			<a href="#">Link 3</a> &nbsp;
			<a href="#">Link 4</a> &nbsp;
			<a href="#">Link 5</a> &nbsp;

			<h2>Table Yeah!</h2>

			<table class="table table-striped table-bordered table-condensed">
				<thead>
					<tr><th>#</th><th>Name</th><th>Email</th></tr>
				</thead>
				<tbody>
					<tr><td>1</td><td>Izwan</td><td>izwan@gmail.com</td></tr>
					<tr><td>1</td><td>Izwan</td><td>izwan@gmail.com</td></tr>
					<tr><td>1</td><td>Izwan</td><td>izwan@gmail.com</td></tr>
					<tr><td>1</td><td>Izwan</td><td>izwan@gmail.com</td></tr>
				</tbody>
			</table>

		<!-- Tutup col 8 -->
		</div>

		<div class="col-md-3">
			<h2>Login:</h2>

			<div class="alert alert-danger">
				<p>Username and Password ERROR</p>
			</div>

			<div class="alert alert-success">
				<p>Login succes. Redirecting to Dashboard in 3..2..1</p>
			</div>

			<form method="post">
				<label>Username:</label><br/>
				<input type="text" name="username" placeholder="yourUsername" class="form-control"/><br/>

				<label>Password:</label><br/>
				<input type="password" name="password" placeholder="yourUsername" class="form-control"/><br/>

				<input type="submit" value="login &raquo;" class="btn btn-primary btn-block">
			</form>

		</div>
					<!-- sdfghjkjhgfd -->
	</div> <!-- Tutup row -->

<!-- tutup container box -->
</div>

</body>

</html>