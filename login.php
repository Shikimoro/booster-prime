<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Вход в административную панель</title>|
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="app flex-row align-items-center"> 
<div class="container position-absolute top-50 start-50 translate-middle" >
	<div class="row justify-content-center">
	  <div class="col-12 col-md-8 col-lg-4">
		  <h2 class="text-center mb-4">Войти</h2>
		  <div class="card">
			  <div class="card-body">
				  <form class="col-md-12 p-t-10" role="form" method="POST" action="admin/authorization.php">
					  <div class="form-group">
						  <label class="control-label" for="email">Email</label>
							<div>
							  	<input type="text" class="form-control" placeholder="Введите логин" name="login">
								</div>
					  </div>

					  <div class="form-group">
						  <label class="control-label" for="password">Пароль</label>
						  	<div>
						  		<input type="password" class="form-control" placeholder="Введите пароль" name="password">
							</div>
					  </div>

					  <div class="form-group">
						  <div>
							  <div class="checkbox">
								  <label>
									  <input type="checkbox" name="remember"> Запомнить меня
								  </label>
							  </div>
						  </div>
					  </div>

					  <div class="form-group">
						  <div>
							  <button type="submit" class="btn btn-block btn-primary">
								  Войти
							  </button>
						  </div>
					  </div>
				  </form>
			  </div>
		  </div>						  
  </div>
</div>
  
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>