<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head> <title>formulario de usuario</title>
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
        font{
            color: #3366ff;
            font-size: 11px;
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
        table{
            border:1px solid black;
            border-collapse:separate;
            width:500px;
            height:auto;
        }
        th, td {
            border:1px solid black;

        }
      
	</style>
</head>
<body>
    
<center><h1>Nuevo Personal</h1>
    <div class="container"><table class="table table-hover">
            <form action="guardarUs" method="POST">
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="txtEmail"/></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="txtPassword" </td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"</td>
                </tr>
                <tr>
                    <td>Apellidos: </td>
                    <td><input type="text" name="txtApellido"</td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="text" name="txtTelefono" maxlength="9"></td>
                </tr>
                
                <!-- id ASistencia nulo y estado personal true o 1-- eliminar
                -->
                <tr>
                    <!--<td> estado </td>-->
                    <td colspan="2"><input type="hidden" name="txtEstado" value="1"></td>
                </tr>
                
                <tr>
                    <td colspan="2"><center><input type="submit" class=" btn btn-primary" value="Guardar"/>
                    &nbsp;&nbsp; <input type="submit" class="btn btn-primary"  value="Cancelar"/></center></td>
                </tr>
        </form>
    </table></div>
</center>
</body>
</html>
