<div class="row">
	<div class="col-md-3 col-lg-offset-2">
		<div class="box box-info">
			<h3 align="center" class="box-title">Connexion</h3>
		</div>
		<form class="form-horizontal">
			<div class="box-body">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="user">Pseudo</label>
					<div class="col-sm-10">
						<input id="user" class="form-control" type="text" placeholder="Pseudo"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="Password" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input class="form-control" id="Password" placeholder="Password" type="password">
					</div>
				</div>
				
				<div class="form-group">
					<button type="button" class="btn btn-primary btn-lg active col-lg-offset-4" id="bt_connexion">Connexion</button>
				</div>
			</div>
		</form>
		
	</div>
	<div class="col-md-3 col-lg-offset-2">
		<div class="box box-info">
			<h3 align="center" class="box-title">Inscription</h3>
		</div>
		<form class="form-horizontal">
			<div class="box-body">
				<!-- Champ de saisi du nom-->
				<div class="form-group">
					<label class="col-sm-2 control-label" for="name">Nom</label>
					<div class="col-sm-10">
						<input id="name" class="form-control" type="text" placeholder="Nom"></input>
					</div>
				</div>
				
				<!-- Champ de saisi du prénom-->
				<div class="form-group">
					<label class="col-sm-2 control-label" for="prenom">Prénom</label>
					<div class="col-sm-10">
						<input id="prenom" class="form-control" type="text" placeholder="Prénom"></input>
					</div>
				</div>
				
				<!-- Champ de saisi du pseudo-->
				<div class="form-group">
					<label class="col-sm-2 control-label" for="pseudo">Pseudo</label>
					<div class="col-sm-10">
						<input id="pseudo" class="form-control" type="text" placeholder="Pseudo"></input>
					</div>
				</div>
				
				<!-- Champ de saisi du mdp-->
				<div class="form-group">
					<label for="Password" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input class="form-control" id="Password" placeholder="Password" type="password">
					</div>
				</div>
				
				<!-- Champ de saisi du mail-->
				<div class="form-group">
					<label class="col-sm-2 control-label" for="mail">Email</label>
					<div class="col-sm-10">
						<input id="mail" class="form-control" type="email" placeholder="Email"></input>
					</div>
				</div>
				
				<!-- Champ photo-->
				<div class="form-group">
                  <label for="exampleInputFile">Photo</label>
                  <input id="exampleInputFile" type="file">
                  <p class="help-block">Choix d'une photo</p>
                </div>
				
				
				<div class="form-group">
					<button type="button" class="btn btn-primary btn-lg active col-lg-offset-4" id="bt_connexion">Inscription</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- if isset
/* Test class User
$log="admin";
$mdp="admin";
$user = new App_Model_User();
$user= $user->authenticate($log,$mdp);
var_dump($user);
-->