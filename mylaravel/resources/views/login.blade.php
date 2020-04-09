<html>
	   <head>
		  <title>Login Form</title>
	   </head>

	   <body>

		  @if (count($errors) > 0)
			 <div style="color:red;">
				<ul>
				   @foreach ($errors->all() as $error)
					  <li>{{ $error }}</li>
				   @endforeach
				</ul>
			 </div>
		  @endif

		  <form method="post" action="">
			@csrf
			  <div>
				  Username:<input type="text" name="username"><br>
			  </div>
			  <div class="form-group">
				  Password:<input type="password" name="password"><br>
			  </div>
			  <button type="submit">Login</button>
		  </form>

	   </body>
	</html>

