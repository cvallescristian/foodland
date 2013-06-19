<?php
header('Content-Type: text/html; charset=ISO-8859-1'); 

/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require '../src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '465093490216172',
  'secret' => 'b343e3c320a0f89d747e81753c37cb61',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) 
{
  $logoutUrl = $facebook->getLogoutUrl();
} else 
{
  //$loginUrl = $facebook->getLoginUrl();
  $loginUrl = $facebook->getLoginUrl(array('scope' => 'email,offline_access,publish_stream,user_birthday,user_work_history,user_education_history,user_hometown,user_location'));
}

// This call will always work since we are fetching public data.
$naitik = $facebook->api('/naitik');

?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
	  table
		{
		border-collapse:collapse;
		}
		table,th, td
		{
		border: 1px solid black;
		}
    </style>
  </head>
  <body>
    <h1>php-sdk</h1>

    <?php if ($user): ?>
      <a href="<?php echo $logoutUrl; ?>">Desvincular Cuenta Facebook</a>
    <?php else: ?>
      <div>
        Login usando OAuth 2.0 en PHP SDK:
        <a href="<?php echo $loginUrl; ?>">Ingresar con Facebook</a>
      </div>
    <?php endif ?>

    <!-- <h3>PHP Session</h3> 
    <pre><?php //print_r($_SESSION); ?></pre> -->

    <?php if ($user): ?>
      
      <h3>Perfil Usuario</h3>
      <pre>
	  <?php 
		//print_r($user_profile); 
		echo "<table>";
		echo "<tr><td>Imagen de Perfil:</td><td><img src='https://graph.facebook.com/".$user."/picture'></td></tr>";
		
		foreach ($user_profile as $id => $datos) 
		{
			if($id == "first_name") echo "<tr><td>Nombres:</td><td>".utf8_decode($datos)."</td></tr>";
			if($id == "last_name") echo "<tr><td>Apellidos:</td><td>".utf8_decode($datos)."</td></tr>";
			if($id == "link")
			{
				$datos1 = explode("http://www.facebook.com/",$datos);
				echo "<tr><td>Usuario Facebook:</td><td>".utf8_decode($datos1[1])."</td></tr>";
			}
			if($id == "birthday") echo "<tr><td>Fecha Nacimiento:</td><td>".utf8_decode($datos)."</td></tr>";
			if($id == "gender")
			{
				if($datos == "male") echo "<tr><td>Sexo:</td><td>Masculino</td></tr>";
				if($datos == "female") echo "<tr><td>Sexo:</td><td>Femenino</td></tr>";
			}
			if($id == "email") echo "<tr><td>E-mail:</td><td>".utf8_decode($datos)."</td></tr>";
			if($id == "hometown")
			{
				foreach ($datos as $id_h => $datos_h) 
				{
					if($id_h == "name")
					{
						echo "<tr><td>Ciudad de Origen:</td><td>".utf8_decode($datos_h)."</td></tr>";
					}
				}
			}
			if($id == "location")
			{
				foreach ($datos as $id_l => $datos_l) 
				{
					if($id_l == "name")
					{
						echo "<tr><td>Ciudad Actual:</td><td>".utf8_decode($datos_l)."</td></tr>";
					}
				}
			}
			if($id == "education")
			{
				echo "<tr><td>Educacion:</td><td></td></tr>";
				
				foreach ($datos as $id_e => $datos_e) 
				{
					foreach($datos_e as $id_ee => $datos_ee)
					{
						if($id_ee == "school") 
						{
							foreach($datos_ee as $id_eee => $datos_eee)
							{
								if($id_eee == "name") echo "<tr><td></td><td>Institucion:</td><td>".utf8_decode($datos_eee)."</td></tr>";
							}
						}
						if($id_ee == "year") 
						{
							foreach($datos_ee as $id_eee => $datos_eee)
							{
								if($id_eee == "name") echo "<tr><td></td><td>Año Egreso:</td><td>".utf8_decode($datos_eee)."</td></tr>";
							}
						}
						if($id_ee == "type") 
						{
							if($datos_ee == "Elementary School") echo "<tr><td></td><td>Nivel:</td><td>Enseñanza Basica</td></tr>";
							if($datos_ee == "High School") echo "<tr><td></td><td>Nivel:</td><td>Enseñanza Basica</td></tr>";
							if($datos_ee == "College") echo "<tr><td></td><td>Nivel:</td><td>Universidad</td></tr>";
						}
						
					}
					echo "<tr><td colspan='3'></td></tr>";
				}
			}
		}
		echo "</table>";
	  
	  ?>
	  </pre>
    <?php else: ?>
      <strong><em>No estás conectado.</em></strong>
    <?php endif ?>


  </body>
</html>
