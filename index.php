<?php require_once('connections/conexionRH.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formSolicitud")) {
  $insertSQL = sprintf("INSERT INTO solicitud_empleo (fechaSolicitud, solicita1, solicita2, solicita3, numTrabajador, status1) VALUES (%s, %s, %s, %s, %s, 'nueva solicitud')",
                       GetSQLValueString($_POST['fechaSolicitud'], "date"),
                       GetSQLValueString(utf8_decode($_POST['solicita1']), "text"),
                       GetSQLValueString(utf8_decode($_POST['solicita2']), "text"),
                       GetSQLValueString(utf8_decode($_POST['solicita3']), "text"),
                       GetSQLValueString($_POST['numTrabajador'], "text"),
					   GetSQLValueString($_POST['status1'], "text"));

  mysql_select_db($database_conexionRH, $conexionRH);
  $Result1 = mysql_query($insertSQL, $conexionRH) or die(mysql_error());

  $insertGoTo = "/sql/Recursos Humanos/mensajeDeEnvio.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formSolicitud")) {
  $insertSQL = sprintf("INSERT INTO referencias_personales (nomRef1, direccRef1, telRef1, ocupRef1, tiempConocerlo1, nomRef2, direccRef2, telRef2, ocupRef2, tiempConocerlo2, nomRef3, direccRef3, telRef3, ocupRef3, tiempConocerlo3) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString(utf8_decode($_POST['nomRef1']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccRef1']), "text"),
                       GetSQLValueString($_POST['telRef1'], "text"),
                       GetSQLValueString(utf8_decode($_POST['ocupRef1']), "text"),
                       GetSQLValueString(utf8_decode($_POST['tiempConocerlo1']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomRef2']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccRef2']), "text"),
                       GetSQLValueString($_POST['telRef2'], "text"),
                       GetSQLValueString(utf8_decode($_POST['ocupRef2']), "text"),
                       GetSQLValueString(utf8_decode($_POST['tiempConocerlo2']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomRef3']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccRef3']), "text"),
                       GetSQLValueString($_POST['telRef3'], "text"),
                       GetSQLValueString(utf8_decode($_POST['ocupRef3']), "text"),
                       GetSQLValueString(utf8_decode($_POST['tiempConocerlo3']), "text"));

  mysql_select_db($database_conexionRH, $conexionRH);
  $Result1 = mysql_query($insertSQL, $conexionRH) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formSolicitud")) {
  $insertSQL = sprintf("INSERT INTO experiencia_laboral (tiemPresEmpl1DE, tiemPresEmpl1A, nomEmpl1, direccEmpl1, telEmpl1, puesDesmEmpl1, suelInicEmpl1, suelFinEmpl1, separaEmple1, nomJefEmpl1, puesJefEmpl1, tiemPresEmpl2DE, tiemPresEmpl2A, nomEmpl2, direccEmpl2, telEmpl2, puesDesmEmple2, suelInicEmpl2, suelFinEmpl2, separaEmpl2, nomJefEmpl2, puesJefEmpl2, tiemPresEmpl3DE, tiemPresEmpl3A, nomEmpl3, direccEmpl3, telEmpl3, puesDesmEmpl3, suelInicEmpl3, suelFinEmpl3, separaEmpl3, nomJefEmpl3, puesJefEmpl3, podriSolicInfUs, noCualSonSusRazones) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['tiemPresEmpl1DE'], "text"),
                       GetSQLValueString($_POST['tiemPresEmpl1A'], "text"),
                       GetSQLValueString(utf8_decode($_POST['nomEmpl1']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccEmpl1']), "text"),
                       GetSQLValueString($_POST['telEmpl1'], "text"),
                       GetSQLValueString(utf8_decode($_POST['puesDesmEmpl1']), "text"),
                       GetSQLValueString($_POST['suelInicEmpl1'], "text"),
                       GetSQLValueString($_POST['suelFinEmpl1'], "text"),
                       GetSQLValueString(utf8_decode($_POST['separaEmple1']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomJefEmpl1']), "text"),
                       GetSQLValueString(utf8_decode($_POST['puesJefEmpl1']), "text"),
                       GetSQLValueString($_POST['tiemPresEmpl2DE'], "text"),
                       GetSQLValueString($_POST['tiemPresEmpl2A'], "text"),
                       GetSQLValueString(utf8_decode($_POST['nomEmpl2']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccEmpl2']), "text"),
                       GetSQLValueString($_POST['telEmpl2'], "text"),
                       GetSQLValueString(utf8_decode($_POST['puesDesmEmple2']), "text"),
                       GetSQLValueString($_POST['suelInicEmpl2'], "text"),
                       GetSQLValueString($_POST['suelFinEmpl2'], "text"),
                       GetSQLValueString(utf8_decode($_POST['separaEmpl2']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomJefEmpl2']), "text"),
                       GetSQLValueString(utf8_decode($_POST['puesJefEmpl2']), "text"),
                       GetSQLValueString($_POST['tiemPresEmpl3DE'], "text"),
                       GetSQLValueString($_POST['tiemPresEmpl3A'], "text"),
                       GetSQLValueString(utf8_decode($_POST['nomEmpl3']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccEmpl3']), "text"),
                       GetSQLValueString($_POST['telEmpl3'], "text"),
                       GetSQLValueString(utf8_decode($_POST['puesDesmEmpl3']), "text"),
                       GetSQLValueString($_POST['suelInicEmpl3'], "text"),
                       GetSQLValueString($_POST['suelFinEmpl3'], "text"),
                       GetSQLValueString(utf8_decode($_POST['separaEmpl3']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomJefEmpl3']), "text"),
                       GetSQLValueString(utf8_decode($_POST['puesJefEmpl3']), "text"),
                       GetSQLValueString(utf8_decode($_POST['podriSolicInfUs']), "text"),
                       GetSQLValueString(utf8_decode($_POST['noCualSonSusRazones']), "text"));

  mysql_select_db($database_conexionRH, $conexionRH);
  $Result1 = mysql_query($insertSQL, $conexionRH) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formSolicitud")) {
  $insertSQL = sprintf("INSERT INTO escolaridad (nomPrima, direccPrima, fechPrimaDE, fechPrimaA, anioPrima, tituloPrima, nomSecu, direccSecu, fechSecuDE, fechSecuA, anioSecu, tituloSecu, nomPrepa, direccPrepa, fechPrepaDE, fechPrepaA, anioPrepa, tituloPrepa, nomProfes, direccProfes, fechProfesDE, fechProfesA, anioProfes, tituloProfes, nomEscActual, horaEscActual, carreraEscActual, gradEscActual) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString(utf8_decode($_POST['nomPrima']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccPrima']), "text"),
                       GetSQLValueString($_POST['fechPrimaDE'], "text"),
                       GetSQLValueString($_POST['fechPrimaA'], "text"),
                       GetSQLValueString(utf8_decode($_POST['anioPrima']), "text"),
                       GetSQLValueString(utf8_decode($_POST['tituloPrima']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomSecu']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccSecu']), "text"),
                       GetSQLValueString($_POST['fechSecuDE'], "text"),
                       GetSQLValueString($_POST['fechSecuA'], "text"),
                       GetSQLValueString(utf8_decode($_POST['anioSecu']), "text"),
                       GetSQLValueString(utf8_decode($_POST['tituloSecu']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomPrepa']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccPrepa']), "text"),
                       GetSQLValueString($_POST['fechPrepaDE'], "text"),
                       GetSQLValueString($_POST['fechPrepaA'], "text"),
                       GetSQLValueString(utf8_decode($_POST['anioPrepa']), "text"),
                       GetSQLValueString(utf8_decode($_POST['tituloPrepa']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomProfes']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccProfes']), "text"),
                       GetSQLValueString($_POST['fechProfesDE'], "text"),
                       GetSQLValueString($_POST['fechProfesA'], "text"),
                       GetSQLValueString(utf8_decode($_POST['anioProfes']), "text"),
                       GetSQLValueString(utf8_decode($_POST['tituloProfes']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomEscActual']), "text"),
                       GetSQLValueString($_POST['horaEscActual'], "text"),
                       GetSQLValueString(utf8_decode($_POST['carreraEscActual']), "text"),
                       GetSQLValueString(utf8_decode($_POST['gradEscActual']), "text"));

  mysql_select_db($database_conexionRH, $conexionRH);
  $Result1 = mysql_query($insertSQL, $conexionRH) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formSolicitud")) {
  $insertSQL = sprintf("INSERT INTO documentacion (curp, afore, rfc, imss, cartillaMilitar, pasaporte, licManejo, clasNumLicManejo, docPermiteTrbja) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['curp'], "text"),
                       GetSQLValueString($_POST['afore'], "text"),
                       GetSQLValueString($_POST['rfc'], "text"),
                       GetSQLValueString($_POST['imss'], "text"),
                       GetSQLValueString($_POST['cartillaMilitar'], "text"),
                       GetSQLValueString($_POST['pasaporte'], "text"),
                       GetSQLValueString($_POST['licManejo'], "text"),
                       GetSQLValueString($_POST['clasNumLicManejo'], "text"),
                       GetSQLValueString($_POST['docPermiteTrbja'], "text"));

  mysql_select_db($database_conexionRH, $conexionRH);
  $Result1 = mysql_query($insertSQL, $conexionRH) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formSolicitud")) {
  $insertSQL = sprintf("INSERT INTO datos_personales (apPaterPerson, apMaterPerson, nomPerson, edadPerson, direccPerson, telPerson, sexoPerson, municipioPerson, cdPostalPerson, lugarNacimPerson, diaNacimPerson, mesNacimPerson, anioNacimPerson, nacionPerson, emailPerson, personDepenUs, personViveCon, estadoCivilPerson) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString(utf8_decode($_POST['apPaterPerson']), "text"),
                       GetSQLValueString(utf8_decode($_POST['apMaterPerson']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomPerson']), "text"),
                       GetSQLValueString(utf8_decode($_POST['edadPerson']), "text"),
                       GetSQLValueString(utf8_decode($_POST['direccPerson']), "text"),
                       GetSQLValueString($_POST['telPerson'], "text"),
                       GetSQLValueString($_POST['sexoPerson'], "text"),
                       GetSQLValueString(utf8_decode($_POST['municipioPerson']), "text"),
                       GetSQLValueString($_POST['cdPostalPerson'], "text"),
                       GetSQLValueString(utf8_decode($_POST['lugarNacimPerson']), "text"),
                       GetSQLValueString($_POST['diaNacimPerson'], "text"),
                       GetSQLValueString($_POST['mesNacimPerson'], "text"),
                       GetSQLValueString($_POST['anioNacimPerson'], "text"),
                       GetSQLValueString(utf8_decode($_POST['nacionPerson']), "text"),
                       GetSQLValueString(utf8_decode($_POST['emailPerson']), "text"),
                       GetSQLValueString($_POST['personDepenUs'], "text"),
                       GetSQLValueString($_POST['personViveCon'], "text"),
                       GetSQLValueString(utf8_decode($_POST['estadoCivilPerson']), "text"));

  mysql_select_db($database_conexionRH, $conexionRH);
  $Result1 = mysql_query($insertSQL, $conexionRH) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formSolicitud")) {
  $insertSQL = sprintf("INSERT INTO datos_familiares (nomPadre, viveFinaPadre, direccPadre, ocupaPadre, nomMadre, viveFinaMadre, direccMadre, ocupaMadre, nomEsposo, viveFinaEsposo, direccEsposo, ocupaEsposo, nomEdadHijos) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString(utf8_decode($_POST['nomPadre']), "text"),
                       GetSQLValueString($_POST['viveFinaPadre'], "text"),
                       GetSQLValueString(utf8_decode($_POST['direccPadre']), "text"),
                       GetSQLValueString(utf8_decode($_POST['ocupaPadre']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomMadre']), "text"),
                       GetSQLValueString($_POST['viveFinaMadre'], "text"),
                       GetSQLValueString(utf8_decode($_POST['direccMadre']), "text"),
                       GetSQLValueString(utf8_decode($_POST['ocupaMadre']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomEsposo']), "text"),
                       GetSQLValueString($_POST['viveFinaEsposo'], "text"),
                       GetSQLValueString(utf8_decode($_POST['direccEsposo']), "text"),
                       GetSQLValueString(utf8_decode($_POST['ocupaEsposo']), "text"),
                       GetSQLValueString(utf8_decode($_POST['nomEdadHijos']), "text"));

  mysql_select_db($database_conexionRH, $conexionRH);
  $Result1 = mysql_query($insertSQL, $conexionRH) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formSolicitud")) {
  $insertSQL = sprintf("INSERT INTO conocimientos_generales (idiomaDomin1, habla1, lee1, escribe1, idiomaDomin2, habla2, lee2, escribe2, idiomaDomin3, habla3, lee3, escribe3, idiomaDomin4, habla4, lee4, escribe4, maquinaOficTallManejar, funcionOficDomina, softwareDomina) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString(utf8_decode($_POST['idiomaDomin1']), "text"),
                       GetSQLValueString($_POST['habla1'], "text"),
                       GetSQLValueString($_POST['lee1'], "text"),
                       GetSQLValueString($_POST['escribe1'], "text"),
                       GetSQLValueString(utf8_decode($_POST['idiomaDomin2']), "text"),
                       GetSQLValueString($_POST['habla2'], "text"),
                       GetSQLValueString($_POST['lee2'], "text"),
                       GetSQLValueString($_POST['escribe2'], "text"),
                       GetSQLValueString(utf8_decode($_POST['idiomaDomin3']), "text"),
                       GetSQLValueString($_POST['habla3'], "text"),
                       GetSQLValueString($_POST['lee3'], "text"),
                       GetSQLValueString($_POST['escribe3'], "text"),
                       GetSQLValueString(utf8_decode($_POST['idiomaDomin4']), "text"),
                       GetSQLValueString($_POST['habla4'], "text"),
                       GetSQLValueString($_POST['lee4'], "text"),
                       GetSQLValueString($_POST['escribe4'], "text"),
                       GetSQLValueString(utf8_decode($_POST['maquinaOficTallManejar']), "text"),
                       GetSQLValueString(utf8_decode($_POST['funcionOficDomina']), "text"),
                       GetSQLValueString(utf8_decode($_POST['softwareDomina']), "text"));

  mysql_select_db($database_conexionRH, $conexionRH);
  $Result1 = mysql_query($insertSQL, $conexionRH) or die(mysql_error());
}

mysql_select_db($database_conexionRH, $conexionRH);
$query_puestoSolicitado = "SELECT * FROM puestos";
$puestoSolicitado = mysql_query($query_puestoSolicitado, $conexionRH) or die(mysql_error());
$row_puestoSolicitado = mysql_fetch_assoc($puestoSolicitado);
$totalRows_puestoSolicitado = mysql_num_rows($puestoSolicitado);

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formSolicitud")) {
	
	$nombreDirectorio = "documentacion/"; //variable publica
	//curriculumVitae
	if(is_uploaded_file($_FILES['curriculumVitae']['tmp_name']))
	{
	$curriculumVitae = $_FILES['curriculumVitae']['name'];
	$nombreCompleto1 = $nombreDirectorio.$curriculumVitae;
	if(is_file($nombreCompleto1))
	{
	
	$id_unico = time();
	
	$curriculumVitae = $id_unico." - ".$curriculumVitae;
	}
	move_uploaded_file($_FILES['curriculumVitae']['tmp_name'],$nombreDirectorio.$curriculumVitae);
	}
	else
	print "<br> No se ha podido subir el archivo <br>";
	
	
	//cartaRecomendacion1
	if(is_uploaded_file($_FILES['cartaRecomendacion1']['tmp_name']))
	{
	$cartaRecomendacion1 = $_FILES['cartaRecomendacion1']['name'];
	$nombreCompleto2 = $nombreDirectorio.$cartaRecomendacion1;
	if(is_file($nombreCompleto2))
	{
	$id_unico = time();
	$cartaRecomendacion1 = $id_unico." - ".$cartaRecomendacion1;
	}
	move_uploaded_file($_FILES['cartaRecomendacion1']['tmp_name'],$nombreDirectorio.$cartaRecomendacion1);
	}
	else
	print "<br> No se ha podido subir el archivo <br>";
	
	
	//cartaRecomendacion2
	if(is_uploaded_file($_FILES['cartaRecomendacion2']['tmp_name']))
	{
	$cartaRecomendacion2 = $_FILES['cartaRecomendacion2']['name'];
	$nombreCompleto3 = $nombreDirectorio.$cartaRecomendacion2;
	if(is_file($nombreCompleto3))
	{
	$id_unico = time();
	$cartaRecomendacion2 = $id_unico."  ".$cartaRecomendacion2;
	}
	move_uploaded_file($_FILES['cartaRecomendacion2']['tmp_name'],$nombreDirectorio.$cartaRecomendacion2);
	}
	else
	print "<br> No se ha podido subir el archivo <br>";
	
	
	//ActaNacimiento
	if(is_uploaded_file($_FILES['ActaNacimiento']['tmp_name']))
	{
	$ActaNacimiento = $_FILES['ActaNacimiento']['name'];
	$nombreCompleto3 = $nombreDirectorio.$ActaNacimiento;
	if(is_file($nombreCompleto3))
	{
	$id_unico = time();
	$ActaNacimiento = $id_unico." - ".$ActaNacimiento;
	}
	move_uploaded_file($_FILES['ActaNacimiento']['tmp_name'],$nombreDirectorio.$ActaNacimiento);
	}
	else
	print "<br> No se ha podido subir el archivo <br>";
	
	
	//ife
	if(is_uploaded_file($_FILES['ife']['tmp_name']))
	{
	$ife = $_FILES['ife']['name'];
	$nombreCompleto4 = $nombreDirectorio.$ife;
	if(is_file($nombreCompleto4))
	{
	$id_unico = time();
	$ife = $id_unico." - ".$ife;
	}
	move_uploaded_file($_FILES['ife']['tmp_name'],$nombreDirectorio.$ife);
	}
	else
	print "<br> No se ha podido subir el archivo <br>";
	
	
	//comprobanteDomicilio
	if(is_uploaded_file($_FILES['comprobanteDomicilio']['tmp_name']))
	{
	$comprobanteDomicilio = $_FILES['comprobanteDomicilio']['name'];
	$nombreCompleto5 = $nombreDirectorio.$comprobanteDomicilio;
	if(is_file($nombreCompleto5))
	{
	$id_unico = time();
	$comprobanteDomicilio = $id_unico." - ".$comprobanteDomicilio;
	}
	move_uploaded_file($_FILES['comprobanteDomicilio']['tmp_name'],$nombreDirectorio.$comprobanteDomicilio);
	}
	else
	print "<br> No se ha podido subir el archivo <br>";
	
	
	//certificadoMedico
	if(is_uploaded_file($_FILES['certificadoMedico']['tmp_name']))
	{
	$certificadoMedico = $_FILES['certificadoMedico']['name'];
	$nombreCompleto6 = $nombreDirectorio.$certificadoMedico;
	if(is_file($nombreCompleto6))
	{
	$id_unico = time();
	$certificadoMedico = $id_unico." - ".$certificadoMedico;
	}
	move_uploaded_file($_FILES['certificadoMedico']['tmp_name'],$nombreDirectorio.$certificadoMedico);
	}
	else
	print "<br> No se ha podido subir el archivo <br>";
	
	
	//doc_probatorio_act_profes_realiza
	if(is_uploaded_file($_FILES['doc_probatorio_act_profes_realiza']['tmp_name']))
	{
	$doc_probatorio_act_profes_realiza = $_FILES['doc_probatorio_act_profes_realiza']['name'];
	$nombreCompleto7 = $nombreDirectorio.$doc_probatorio_act_profes_realiza;
	if(is_file($nombreCompleto7))
	{
	$id_unico = time();
	$doc_probatorio_act_profes_realiza = $id_unico." - ".$doc_probatorio_act_profes_realiza;
	}
	move_uploaded_file($_FILES['doc_probatorio_act_profes_realiza']['tmp_name'],$nombreDirectorio.$doc_probatorio_act_profes_realiza);
	}
	else
	print "<br> No se ha podido subir el archivo <br>";
	
	
	//doc_probatorio_act_docentes_realizad
	if(is_uploaded_file($_FILES['doc_probatorio_act_docentes_realizad']['tmp_name']))
	{
	$doc_probatorio_act_docentes_realizad = $_FILES['doc_probatorio_act_docentes_realizad']['name'];
	$nombreCompleto8 = $nombreDirectorio.$doc_probatorio_act_docentes_realizad;
	if(is_file($nombreCompleto8))
	{
	$id_unico = time();
	$doc_probatorio_act_docentes_realizad = $id_unico." - ".$doc_probatorio_act_docentes_realizad;
	}
	move_uploaded_file($_FILES['doc_probatorio_act_docentes_realizad']['tmp_name'],$nombreDirectorio.$doc_probatorio_act_docentes_realizad);
	}
	else
	print "<br> No se ha podido subir el archivo <br>"; 
	
	
  $insertSQL = sprintf("INSERT INTO documentos_requeridos (curriculumVitae, cartaRecomendacion1, cartaRecomendacion2, ActaNacimiento, ife, comprobanteDomicilio, certificadoMedico, doc_probatorio_act_profes_realiza, doc_probatorio_act_docentes_realizad, comentarios) VALUES ('$curriculumVitae', '$cartaRecomendacion1', '$cartaRecomendacion2', '$ActaNacimiento', '$ife', '$comprobanteDomicilio', '$certificadoMedico', '$doc_probatorio_act_profes_realiza', '$doc_probatorio_act_docentes_realizad', %s)",
                       GetSQLValueString(utf8_decode($_POST['curriculumVitae']), "text"),
                       GetSQLValueString(utf8_decode($_POST['cartaRecomendacion1']), "text"),
                       GetSQLValueString(utf8_decode($_POST['cartaRecomendacion2']), "text"),
                       GetSQLValueString(utf8_decode($_POST['ActaNacimiento']), "text"),
                       GetSQLValueString(utf8_decode($_POST['ife']), "text"),
                       GetSQLValueString(utf8_decode($_POST['comprobanteDomicilio']), "text"),
                       GetSQLValueString(utf8_decode($_POST['certificadoMedico']), "text"),
                       GetSQLValueString(utf8_decode($_POST['doc_probatorio_act_profes_realiza']), "text"),
                       GetSQLValueString(utf8_decode($_POST['doc_probatorio_act_docentes_realizad']), "text"),
					   GetSQLValueString(utf8_decode($_POST['comentarios']), "text"));

  mysql_select_db($database_conexionRH, $conexionRH);
  $Result1 = mysql_query($insertSQL, $conexionRH) or die(mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<title>Expediente Laboral</title>

<style type="text/css">
body {
	background-image: url(img-rh/utrm.jpg);
	background-repeat: no-repeat;
	background-repeat-x: no-repeat;
	background-repeat-y: no-repeat;
	background-position: top;
	background-position-x: 50%;
	background-position-y: 0%;
	}
body {
	font:bold 13px "Trebuchet MS", Arial, Helvetica, sans-serif; 
}
.colorLetra {
	color: #F00;
}

form.cmxform label.error, label.error {
	color: red;
}
</style>
<script type="text/javascript" src="jquery-validation-1.11.1/lib/jquery-1.9.0.js"></script>
<script type="text/javascript" src="jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="jquery-validation-1.11.1/dist/additional-methods.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	$("#formSolicitud").validate({
		rules: {
			emailPerson: {
                required: true,
                email: true
            },
		    curriculumVitae: {
				required: true
			},
			cartaRecomendacion1: {
				required: true
			},
			cartaRecomendacion2: {
				required: true
			},
			ActaNacimiento: {
				required: true
			},
			ife: {
				required: true
			},
			comprobanteDomicilio: {
				required: true
			},
			certificadoMedico: {
				required: true
			},
			doc_probatorio_act_profes_realiza: {
				required: true
			},
			doc_probatorio_act_docentes_realizad: {
				required: true

			}
			
		},
        messages : {
			solicita1: {
				required: "Seleccione un puesto."
			},
			apPaterPerson: {
                required: "Ingrese su apellido paterno."
            },
			apMaterPerson: {
                required: "Ingrese su apellido materno."
            },
			nomPerson: {
                required: "Ingrese su(s) nombre(s)."
            },
			nacionPerson: {
                required: "Ingrese su nacionalidad."
            },
			lugarNacimPerson: {
                required: "Ingrese su lugar de origen."
            },
			direccPerson: {
                required: "Ingrese su dirección."
            },
			municipioPerson: {
                required: "Ingrese su municipio."
            },
			cdPostalPerson: {
                required: "Ingrese su código postal."
            },
			emailPerson: {
                required: "Ingrese su correo electrónico.",
                email: "Ingrese un correo electrónico valido."
            },
			estadoCivilPerson: {
                required: "Ingrese su estado civil."
            },
			curp: {
				required: "Ingrese su curp."
			},
			curriculumVitae: {
				required: "Proporcione su currículum vitae.",
				accept: "Este archivo no es PDF."
			},
			cartaRecomendacion1: {
				required: "Proporcione su carta de recomendación.",
				accept: "Este archivo no es PDF."
			},
			cartaRecomendacion2: {
				required: "Proporcione su carta de recomendación.",
				accept: "Este archivo no es PDF."
			},
			ActaNacimiento: {
				required: "Proporcione su acta de nacimiento.",
				accept: "Este archivo no es PDF."
			},
			ife: {
				required: "Proporcione su ife.",
				accept: "Este archivo no es PDF."
			},
			comprobanteDomicilio: {
				required: "Proporcione su comprobante.",
				accept: "Este archivo no es PDF."
			},
			certificadoMedico: {
				required: "Proporcione su certificado médico.",
				accept: "Este archivo no es PDF."
			},
			doc_probatorio_act_profes_realiza: {
				required: "Proporcione su documento probatorio de actividades profesionales realizadas.",
				accept: "Este archivo no es PDF."
			},
			doc_probatorio_act_docentes_realizad: {
				required: "Proporcione su documento probatorio de actividades docentes realizadas.",
				accept: "Este archivo no es PDF."
			}
				
		 }
      });    
  });
</script>
</head>
<body>
<form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="formSolicitud" id="formSolicitud">
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div align="center">
    <table width="1000" border="0">
      <tr>
        <th width="334" height="68" scope="col"><p>EXPEDIENTE LABORAL</p></th>
        <th width="10" scope="col">&nbsp;</th>
        <th width="321" scope="col">&nbsp;</th>
        <th width="323" scope="col">&nbsp;</th>
      </tr>
    </table>
    <table width="800" height="194" border="0">
      <tr>
        <td width="154">&nbsp;</td>
        <td width="355" height="21">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="left">Puesto Solicitado I:</div></td>
        <td height="51"><div align="left">
          <p>
            <select name="solicita1" id="solicita1" required>
            <option value="">   </option>
              <?php
do {  
?>
              <option value="<?php echo $row_puestoSolicitado['puestos']?>"><?php echo $row_puestoSolicitado['puestos']?> </option>
              <?php
} while ($row_puestoSolicitado = mysql_fetch_assoc($puestoSolicitado));
  $rows = mysql_num_rows($puestoSolicitado);
  if($rows > 0) {
      mysql_data_seek($puestoSolicitado, 0);
	  $row_puestoSolicitado = mysql_fetch_assoc($puestoSolicitado);
  }
?>
            </select>
          </p>
        </div></td>
        <td width="277"><div align="left">Número de Trabajador:
            <label>
              <input name="numTrabajador" type="text" id="numTrabajador" size="15"/>
<span class="colorLetra">Exclusivo para personal institucional. </span></label>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">Puesto Solicitado II: <span class="colorLetra">Puesto opcional.</span></div></td>
        <td height="47"><div align="left">
          <select name="solicita2" id="solicita2" >
            <option value="">   </option>
            <?php
do {  
?>
            <option value="<?php echo $row_puestoSolicitado['puestos']?>"><?php echo $row_puestoSolicitado['puestos']?></option>
            <?php
} while ($row_puestoSolicitado = mysql_fetch_assoc($puestoSolicitado));
  $rows = mysql_num_rows($puestoSolicitado);
  if($rows > 0) {
      mysql_data_seek($puestoSolicitado, 0);
	  $row_puestoSolicitado = mysql_fetch_assoc($puestoSolicitado);
  }
?>
          </select>
        </div></td>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="left">
          <p>Puesto Solicitado III: <span class="letras"><span class="colorLetra">Puesto opcional.</span></span></p></div></td>
        <td height="47"><div align="left">
          <select name="solicita3" id="solicita3">
            <option value=""> </option>
            <?php
do {  
?>
            <option value="<?php echo $row_puestoSolicitado['puestos']?>"><?php echo $row_puestoSolicitado['puestos']?></option>
            <?php
} while ($row_puestoSolicitado = mysql_fetch_assoc($puestoSolicitado));
  $rows = mysql_num_rows($puestoSolicitado);
  if($rows > 0) {
      mysql_data_seek($puestoSolicitado, 0);
	  $row_puestoSolicitado = mysql_fetch_assoc($puestoSolicitado);
  }
?>
          </select>
        </div></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <table width="800" border="0">
      <tr>
        <td width="794" scope="col"><p align="center">Llene los campos de este formulario.<br />
          <strong class="colorLetra">Nota:</strong> La información  aquí proporcionada será tratada confidencialmente.</p></td>
        </tr>
    </table>
    <table width="800" height="39" border="0">
      <tr>
        <td width="794" height="30" scope="col"><div align="center">
          <p><strong></br>DATOS PERSONALES</strong></p>
        </div></td>
      </tr>
</table>
    <table width="800" height="61" border="0">
      <tr>
        <td width="166" height="24"><div align="left">
          <div align="left">Apellido Paterno: </div>
          <div align="left">
            <input name="apPaterPerson" type="text" id="apPaterPerson" size="25" required="required"/>
          </div>
        </div></td>
        <td width="169"><div align="left">Apellido Materno:
          <input name="apMaterPerson" type="text" id="apMaterPerson" size="25" required="required"/>
        </div></td>
        <td width="199"><div align="left">Nombre(s):
          <input name="nomPerson" type="text" id="nomPerson" size="30" required="required"/>
        </div></td>
        <td width="95"><div align="left">
          <div align="left">Edad:
            <input name="edadPerson" type="text" id="edadPerson" size="12" />
          </div>
        </div></td>
        <td width="118"><div align="left">Sexo:</div>
          <div align="left">
            <select name="sexoPerson" id="sexoPerson" required>
              <option value=" "></option>
              <option value="Hombre">Hombre</option>
              <option value="Mujer">Mujer</option>
            </select>
          </div></td>
        <td width="27">&nbsp;</td>
      </tr>
    </table>
    <table width="800" height="28" border="0">
      <tr>
        <td width="166" height="24"><div align="left">Nacionalidad:<br />
          <input name="nacionPerson" type="text" id="nacionPerson" size="25" required="required"/>
        </div>
          </label></td>
        <td width="169"><div align="left">
          <div align="left">Lugar de Nacimiento: </div>
          <div align="left">
            <input name="lugarNacimPerson" type="text" id="lugarNacimPerson" size="25" required="required"/>
          </div>
        </div></td>
        <td width="254"><div align="left">Fecha de Nacimiento: </div>
          <div align="left">
            <select name="diaNacimPerson" id="diaNacimPerson" >
              <option value="">Día</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
              </select>
            <select name="mesNacimPerson" id="mesNacimPerson">
              <option value="">Mes</option>
              <option value="Enero">Enero</option>
              <option value="Febrero">Febrero</option>
              <option value="Marzo">Marzo</option>
              <option value="Abril">Abril</option>
              <option value="Mayo">Mayo</option>
              <option value="Junio">Junio</option>
              <option value="Julio">Julio</option>
              <option value="Agosto">Agosto</option>
              <option value="Septiembre">Septiembre</option>
              <option value="Octubre">Octubre</option>
              <option value="Noviembre">Noviembre</option>
              <option value="Diciembre">Diciembre</option>
              </select>
            <select name="anioNacimPerson" id="anioNacimPerson">
              <option value="">Año</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
              <option value="1969">1969</option>
              <option value="1968">1968</option>
              <option value="1967">1967</option>
              <option value="1966">1966</option>
              <option value="1965">1965</option>
              <option value="1964">1964</option>
              <option value="1963">1963</option>
              <option value="1962">1962</option>
              <option value="1961">1961</option>
              <option value="1960">1960</option>
              </select>
          </div></td>
        <td width="193"><div align="left">Teléfono Particular:
          <input name="telPerson" type="text" id="telPerson" size="25" />
        </div></td>
        </tr>
    </table>
    <table width="800" height="61" border="0">
      <tr>
        <td width="342" height="24"><div align="left">Dirección:
          <input name="direccPerson" type="text" id="direccPerson" size="57" required="required"/>
        </div></td>
        <td width="199"><div align="left">Municipio:
          <input name="municipioPerson" type="text" id="municipioPerson" size="30" required="required"/>
        </div></td>
        <td width="202"><div align="left">Código postal: <br />
          <input name="cdPostalPerson" type="text" id="cdPostalPerson" size="15" maxlength="5" required="required" />
        </div></td>
        <td width="39">&nbsp;</td>
        </tr>
    </table>
    <table width="800" height="52" border="0">
      <tr>
        <td width="213" height="48"><div align="left">Correo electrónico:<br />
          <input name="emailPerson" type="text" id="emailPerson" size="32" required="required"/>
        </div></td>
        <td width="145"><div align="left">Estado Civil:
          <input name="estadoCivilPerson" type="text" id="estadoCivilPerson" size="20" required="required"/>
        </div>
          <div align="left"></div></td>
        <td width="99"><div align="left">Vive con:
          <select name="personViveCon" id="personViveCon">
            <option value=""></option>
            <option value="Padres">Padres</option>
            <option value="Familia">Familia</option>
            <option value="Parientes">Parientes</option>
            <option value="Solo">Solo</option>
          </select>
        </div></td>
        <td width="327"><div align="left">Personas que dependen de usted:
          <select name="personDepenUs" id="personDepenUs">
            <option value=""></option>
            <option value="Hijos">Hijos</option>
            <option value="Cónyuge">Cónyuge</option>
            <option value="Padres">Padres</option>
            <option value="Otros">Otros</option>
            <option value="Ninguno">Ninguno</option>
          </select>
        </div></td>
      </tr>
    </table>
    <div align="left"></div>
    <table width="800" height="39" border="0">
      <tr>
        <td width="794" height="30" scope="col"><div align="center">
          <p><strong></br>
            DOCUMENTACIÓN</strong></p>
        </div></td>
      </tr>
    </table>
    <table width="800" height="119" border="0">
      <tr>
        <td height="54"><div align="left">CURP:
          <input name="curp" type="text" id="curp" size="26" required="required"/>
        </div></td>
        <td><div align="left">AFORE:
          <input name="afore" type="text" id="afore" size="26" />
        </div></td>
        <td><div align="left">RFC:
          <input name="rfc" type="text" id="rfc" size="26" />
        </div></td>
        <td><div align="left">Número de Seguro Social:
          <input name="imss" type="text" id="imss" size="26" />
        </div></td>
      </tr>
      <tr>
        <td width="188" height="59"><div align="left">Cartilla del Servicio Militar:
          <input name="cartillaMilitar" type="text" id="cartillaMilitar" size="26" />
        </div></td>
        <td width="188"><div align="left">Pasaporte:
          <input name="pasaporte" type="text" id="pasaporte" size="26" />
        </div></td>
        <td width="188"><div align="left">¿Tiene Licencia de Manejo?
          <input name="licManejo" type="text" id="licManejo" size="26" />
        </div></td>
        <td width="218"><div align="left">Clase y Número de Licencia:
          <input name="clasNumLicManejo" type="text" id="clasNumLicManejo" size="26" />
        </div></td>
      </tr>
    </table>
    <table width="800" height="55" border="0">
      <tr>
        <td width="662" height="35"><div align="left">Si es extranjero ¿Qué documento le permite trabajar en el país?
          <input name="docPermiteTrbja" type="text" id="docPermiteTrbja" size="25" />
        </div></td>
      </tr>
    </table>
    <label for="enfermedad_cronica"></label>
    <table width="800" height="39" border="0">
      <tr>
        <td width="893" height="30" scope="col"><div align="center">
          <p><strong></br>
            DATOS FAMILIARES</strong></p>
        </div></td>
      </tr>
  </table>
    <table width="800" height="160" border="0">
      <tr>
        <td width="96" scope="col">&nbsp;</td>
        <td width="181" height="21" scope="col"><div align="center">Nombre</div></td>
        <td width="89" scope="col"><div align="center">Vive/Finado</div></td>
        <td width="246" scope="col"><div align="center">Dirección</div></td>
        <td width="166" scope="col"><div align="center">Ocupación</div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Padre:</div></td>
        <td height="43" scope="col"><div align="center">
          <input name="nomPadre" type="text" id="nomPadre" size="30" />
        </div></td>
        <td scope="col"><div align="center">
          <select name="viveFinaPadre" id="viveFinaPadre">
            <option value=""></option>
            <option value="Vive">Vive</option>
            <option value="Finado">Finado</option>
          </select>
        </div></td>
        <td scope="col"><div align="center">
          <input name="direccPadre" type="text" id="direccPadre" size="40" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="ocupaPadre" type="text" id="ocupaPadre" size="15" />
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Madre:</div></td>
        <td height="43" scope="col"><div align="center">
          <input name="nomMadre" type="text" id="nomMadre" size="30" />
        </div></td>
        <td scope="col"><div align="center">
          <select name="viveFinaMadre" id="viveFinaMadre">
            <option value=""></option>
            <option value="Vive">Vive</option>
            <option value="Finado">Finado</option>
          </select>
        </div></td>
        <td scope="col"><div align="center">
          <input name="direccMadre" type="text" id="direccMadre" size="40" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="ocupaMadre" type="text" id="ocupaMadre" size="15" />
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Esposo(a):</div></td>
        <td height="43" scope="col"><div align="center">
          <input name="nomEsposo" type="text" id="nomEsposo" size="30" />
        </div></td>
        <td scope="col"><div align="center">
          <select name="viveFinaEsposo" id="viveFinaEsposo">
            <option value=""></option>
            <option value="Vive">Vive</option>
            <option value="Finado">Finado</option>
          </select>
        </div></td>
        <td scope="col"><div align="center">
          <input name="direccEsposo" type="text" id="direccEsposo" size="40" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="ocupaEsposo" type="text" id="ocupaEsposo" size="15" />
        </div></td>
      </tr>
    </table>
    <table width="800" height="25" border="0">
      <tr>
        <td width="800" height="21" scope="col"><div align="left">Nombre y edades de los hijos:
          <input name="nomEdadHijos" type="text" id="nomEdadHijos" size="94" />
        </div></td>
      </tr>
    </table>
    <table width="800" height="39" border="0">
      <tr>
        <td width="894" height="30" scope="col"><div align="center">
          <p><strong></br>
            ESCOLARIDAD</strong></p>
        </div></td>
      </tr>
    </table>
    <table width="800" height="25" border="0">
      <tr>
        <td width="68" scope="col">&nbsp;</td>
        <td width="185" height="21" scope="col"><div align="center">Nombre de la Escuela</div></td>
        <td width="150" scope="col"><div align="center">Dirección</div></td>
        <td width="171" scope="col"><div align="right">Fechas </div></td>
        <td width="68" scope="col"><div align="right">Años</div></td>
        <td width="110" scope="col"><div align="right">Título Recibido</div></td>
        <td width="18" scope="col">&nbsp;</td>
      </tr>
    </table>
    <table width="800" height="184" border="0">
      <tr>
        <td width="83" scope="col"><div align="left">Primaria:</div></td>
        <td width="120" height="45" scope="col"><div align="center">
          <input name="nomPrima" type="text" id="nomPrima" size="20" />
        </div></td>
        <td width="210" scope="col"><div align="center">
          <input name="direccPrima" type="text" id="direccPrima" size="35" />
        </div></td>
        <td width="66" scope="col"><label for="------"></label>
          <div align="center">
            <select name="fechPrimaDE" id="fechPrimaDE">
              <option value=""></option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
              <option value="1969">1969</option>
              <option value="1968">1968</option>
              <option value="1967">1967</option>
              <option value="1966">1966</option>
              <option value="1965">1965</option>
              <option value="1964">1964</option>
              <option value="1963">1963</option>
              <option value="1962">1962</option>
              <option value="1961">1961</option>
              <option value="1960">1960</option>
            </select>
          </div></td>
        <td width="69" scope="col"><label for="--------"></label>
          <div align="center">
            <select name="fechPrimaA" id="fechPrimaA">
              <option value=""></option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
              <option value="1969">1969</option>
              <option value="1968">1968</option>
              <option value="1967">1967</option>
              <option value="1966">1966</option>
              <option value="1965">1965</option>
              <option value="1964">1964</option>
              <option value="1963">1963</option>
              <option value="1962">1962</option>
              <option value="1961">1961</option>
              <option value="1960">1960</option>
            </select>
          </div></td>
        <td width="81" scope="col"><label for="---------"></label>
          <div align="center">
          <select name="anioPrima" id="anioPrima">
            <option value=""></option>
            <option value="1 Año">1</option>
            <option value="2 Años">2</option>
            <option value="3 Años">3</option>
            <option value="4 Años">4</option>
            <option value="5 Años">5</option>
            <option value="6 Años">6</option>
            <option value="7 Años">7</option>
            <option value="8 Años">8</option>
            <option value="9 Años">9</option>
            <option value="10 Años">10</option>
          </select>
          </div></td>
        <td width="141" scope="col"><div align="left">
          <input name="tituloPrima" type="text" id="tituloPrima" size="12" />
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Secundaria:</div></td>
        <td height="43" scope="col"><div align="center">
          <input name="nomSecu" type="text" id="nomSecu" size="20" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="direccSecu" type="text" id="direccSecu" size="35" />
        </div></td>
        <td scope="col"><label for="----------"></label>
          <div align="center">
            <select name="fechSecuDE" id="fechSecuDE">
              <option value=""></option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
              <option value="1969">1969</option>
              <option value="1968">1968</option>
              <option value="1967">1967</option>
              <option value="1966">1966</option>
              <option value="1965">1965</option>
              <option value="1964">1964</option>
              <option value="1963">1963</option>
              <option value="1962">1962</option>
              <option value="1961">1961</option>
              <option value="1960">1960</option>
            </select>
          </div></td>
        <td scope="col"><div align="center">
          <select name="fechSecuA" id="fechSecuA">
            <option value=""></option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
          </select>
        </div></td>
        <td scope="col"><div align="center">
          <select name="anioSecu" id="anioSecu">
            <option value=""></option>
            <option value="1 Año">1</option>
            <option value="2 Años">2</option>
            <option value="3 Años">3</option>
            <option value="4 Años">4</option>
            <option value="5 Años">5</option>
            <option value="6 Años">6</option>
            <option value="7 Años">7</option>
            <option value="8 Años">8</option>
            <option value="9 Años">9</option>
            <option value="10 Años">10</option>
          </select>
        </div></td>
        <td scope="col"><div align="left">
          <input name="tituloSecu" type="text" id="tituloSecu" size="12" />
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Preparatoria:</div></td>
        <td height="43" scope="col"><div align="center">
          <input name="nomPrepa" type="text" id="nomPrepa" size="20" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="direccPrepa" type="text" id="direccPrepa" size="35" />
        </div></td>
        <td scope="col"><label for="---------"></label>
          <div align="center">
            <select name="fechPrepaDE" id="fechPrepaDE">
              <option value=""></option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
              <option value="1969">1969</option>
              <option value="1968">1968</option>
              <option value="1967">1967</option>
              <option value="1966">1966</option>
              <option value="1965">1965</option>
              <option value="1964">1964</option>
              <option value="1963">1963</option>
              <option value="1962">1962</option>
              <option value="1961">1961</option>
              <option value="1960">1960</option>
            </select>
          </div></td>
        <td scope="col"><div align="center">
          <select name="fechPrepaA" id="fechPrepaA">
            <option value=""></option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
          </select>
        </div></td>
        <td scope="col"><div align="center">
          <select name="anioPrepa" id="anioPrepa">
            <option value=""></option>
            <option value="1 Año">1</option>
            <option value="2 Años">2</option>
            <option value="3 Años">3</option>
            <option value="4 Años">4</option>
            <option value="5 Años">5</option>
            <option value="6 Años">6</option>
            <option value="7 Años">7</option>
            <option value="8 Años">8</option>
            <option value="9 Años">9</option>
            <option value="10 Años">10</option>
          </select>
        </div></td>
        <td scope="col"><div align="left">
          <input name="tituloPrepa" type="text" id="tituloPrepa" size="12" />
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Profesional:</div></td>
        <td height="43" scope="col"><div align="center">
          <input name="nomProfes" type="text" id="nomProfes" size="20" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="direccProfes" type="text" id="direccProfes" size="35" />
        </div></td>
        <td scope="col"><div align="center">
          <select name="fechProfesDE" id="fechProfesDE">
            <option value=""></option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
          </select>
        </div>
          </label></td>
        <td scope="col"><div align="center">
          <select name="fechProfesA" id="fechProfesA">
            <option value=""></option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
          </select>
        </div></td>
        <td scope="col"><div align="center">
          <select name="anioProfes" id="anioProfes">
            <option value=""></option>
            <option value="1 Año">1</option>
            <option value="2 Años">2</option>
            <option value="3 Años">3</option>
            <option value="4 Años">4</option>
            <option value="5 Años">5</option>
            <option value="6 Años">6</option>
            <option value="7 Años">7</option>
            <option value="8 Años">8</option>
            <option value="9 Años">9</option>
            <option value="10 Años">10</option>
          </select>
        </div></td>
        <td scope="col"><div align="left">
          <input name="tituloProfes" type="text" id="tituloProfes" size="12" />
        </div></td>
      </tr>
    </table>
    <table width="800" height="39" border="0">
      <tr>
        <td width="387" scope="col"><div align="left">Estudios que efectua en la actualidad:</div></td>
        <td width="403" height="35" scope="col">&nbsp;</td>
      </tr>
    </table>
    <table width="800" height="45" border="0">
      <tr>
        <td width="221" height="41" scope="col"><div align="left">Escuela:
          <input type="text" name="nomEscActual" id="nomEscActual" />
        </div>
          <label for="-------"></label>
          <div align="left"></div></td>
        <td width="183" scope="col"><div align="left">Horario:
          <input name="horaEscActual" type="text" id="horaEscActual" size="12" />
        </div>
          <label for="--------------"></label>
          <div align="left"></div></td>
        <td width="184" scope="col"><div align="left">Carrera:
          <input name="carreraEscActual" type="text" id="carreraEscActual" size="15" />
        </div>
          <label for="---------------"></label>
          <div align="left"></div></td>
        <td width="194" scope="col"><div align="left">Grado:
          <input name="gradEscActual" type="text" id="gradEscActual" size="10" />
        </div>
          <label for="----------"></label>
          <div align="left"></div></td>
      </tr>
    </table>
    <table width="800" height="39" border="0">
      <tr>
        <td width="78" height="30" scope="col"><div align="center">
          <p><strong></br>
            CONOCIMIENTOS GENERALES</strong></p>
        </div></td>
      </tr>
    </table>
    <table width="800" height="159" border="0">
      <tr>
        <td width="287" height="35" scope="col"><div align="left">Idiomas que domina:
          <select name="idiomaDomin1" id="idiomaDomin1">
            <option value=""></option>
            <option value="Africano">Africano</option>
            <option value="Albanés">Albanés</option>
            <option value="Alemán">Alemán</option>
            <option value="Amharico">Amharico</option>
            <option value="Arabe">Arabe</option>
            <option value="Armenio">Armenio</option>
            <option value="Bengali">Bengali</option>
            <option value="Bieloruso">Bieloruso</option>
            <option value="Birmanés">Birmanés</option>
            <option value="Bulgaro">Bulgaro</option>
            <option value="Catalan">Catalan</option>
            <option value="Checo">Checo</option>
            <option value="Chino">Chino</option>
            <option value="Coreano">Coreano</option>
            <option value="Croata">Croata</option>
            <option value="Danés">Danés</option>
            <option value="Dari">Dari</option>
            <option value="Dzongkha">Dzongkha</option>
            <option value="Escocés">Escocés</option>
            <option value="Eslovaco">Eslovaco</option>
            <option value="Esloveniano">Esloveniano</option>
            <option value="Español">Español</option>
            <option value="Estoniano">Esperanto</option>
            <option value="Faroese">Faroese</option>
            <option value="Farsi">Farsi</option>
            <option value="Finlandés">Finlandés</option>
            <option value="Francés">Francés</option>
            <option value="Gaelico">Gaelico</option>
            <option value="Galese">Galese</option>
            <option value="Gallego">Gallego</option>
            <option value="Griego">Griego</option>
            <option value="Hebreo">Hebreo</option>
            <option value="Hindi">Hindi</option>
            <option value="Holandés">Holandés</option>
            <option value="Hungaro">Hungaro</option>
            <option value="Inglés">Inglés</option>
            <option value="Indonesio">Indonesio</option>
            <option value="Inuktitut (Eskimo)">Inuktitut (Eskimo)</option>
            <option value="Islandico">Islandico</option>
            <option value="Italiano">Italiano</option>
            <option value="Japonés">Japonés</option>
            <option value="Khmer">Khmer</option>
            <option value="Kurdo">Kurdo</option>
            <option value="Lao">Lao</option>
            <option value="Laponico">Laponico</option>
            <option value="Latviano">Latviano</option>
            <option value="Lituano">Lituano</option>
            <option value="Macedonio">Macedonio</option>
            <option value="Malayés">Malayés</option>
            <option value="Maltés">Maltés</option>
            <option value="Maya">Maya</option>
            <option value="Nepali">Nepali</option>
            <option value="Noruego">Noruego</option>
            <option value="Pashto">Pashto</option>
            <option value="Polaco">Polaco</option>
            <option value="Portugués">Portugués</option>
            <option value="Rumano">Rumano</option>
            <option value="Ruso">Ruso</option>
            <option value="Serbio">Serbio</option>
            <option value="Somali">Somali</option>
            <option value="Suahili">Suahili</option>
            <option value="Sueco">Sueco</option>
            <option value="Tagalog-Filipino">Tagalog-Filipino</option>
            <option value="Tajik">Tajik</option>
            <option value="Tailandés">Tailandés</option>
            <option value="Tibetano">Tibetano</option>
            <option value="Triginia">Tigrinia</option>
            <option value="Tonganés">Tonganés</option>
            <option value="Turco">Turco</option>
            <option value="Turkmenistano">Turkmenistano</option>
            <option value="Ucraniano">Ucraniano</option>
            <option value="Uzbekistano">Uzbekistano</option>
            <option value="Vasco">Vasco</option>
            <option value="Vietnamés">Vietnamés</option>
          </select>
        </div>
          <div align="left"></div></td>
        <td width="161" scope="col"><div align="left">% que habla:
          <input name="habla1" type="text" id="habla1" size="6" />
        </div>
          <div align="left"></div></td>
        <td width="144" scope="col"><div align="left">% que lee:
          <input name="lee1" type="text" id="lee1" size="6" />
        </div></td>
        <td width="190" scope="col"><div align="left">% que escribe:
          <input name="escribe1" type="text" id="escribe1" size="6" />
          </label>
        </div>
          <div align="left"></div></td>
      </tr>
      <tr>
        <td height="40" scope="col"><div align="left">Idiomas que domina:
          <select name="idiomaDomin2" id="idiomaDomin2">
            <option value=""></option>
            <option value="Africano">Africano</option>
            <option value="Albanés">Albanés</option>
            <option value="Alemán">Alemán</option>
            <option value="Amharico">Amharico</option>
            <option value="Arabe">Arabe</option>
            <option value="Armenio">Armenio</option>
            <option value="Bengali">Bengali</option>
            <option value="Bieloruso">Bieloruso</option>
            <option value="Birmanés">Birmanés</option>
            <option value="Bulgaro">Bulgaro</option>
            <option value="Catalan">Catalan</option>
            <option value="Checo">Checo</option>
            <option value="Chino">Chino</option>
            <option value="Coreano">Coreano</option>
            <option value="Croata">Croata</option>
            <option value="Danés">Danés</option>
            <option value="Dari">Dari</option>
            <option value="Dzongkha">Dzongkha</option>
            <option value="Escocés">Escocés</option>
            <option value="Eslovaco">Eslovaco</option>
            <option value="Esloveniano">Esloveniano</option>
            <option value="Español">Español</option>
            <option value="Estoniano">Esperanto</option>
            <option value="Faroese">Faroese</option>
            <option value="Farsi">Farsi</option>
            <option value="Finlandés">Finlandés</option>
            <option value="Francés">Francés</option>
            <option value="Gaelico">Gaelico</option>
            <option value="Galese">Galese</option>
            <option value="Gallego">Gallego</option>
            <option value="Griego">Griego</option>
            <option value="Hebreo">Hebreo</option>
            <option value="Hindi">Hindi</option>
            <option value="Holandés">Holandés</option>
            <option value="Hungaro">Hungaro</option>
            <option value="Inglés">Inglés</option>
            <option value="Indonesio">Indonesio</option>
            <option value="Inuktitut (Eskimo)">Inuktitut (Eskimo)</option>
            <option value="Islandico">Islandico</option>
            <option value="Italiano">Italiano</option>
            <option value="Japonés">Japonés</option>
            <option value="Khmer">Khmer</option>
            <option value="Kurdo">Kurdo</option>
            <option value="Lao">Lao</option>
            <option value="Laponico">Laponico</option>
            <option value="Latviano">Latviano</option>
            <option value="Lituano">Lituano</option>
            <option value="Macedonio">Macedonio</option>
            <option value="Malayés">Malayés</option>
            <option value="Maltés">Maltés</option>
            <option value="Maya">Maya</option>
            <option value="Nepali">Nepali</option>
            <option value="Noruego">Noruego</option>
            <option value="Pashto">Pashto</option>
            <option value="Polaco">Polaco</option>
            <option value="Portugués">Portugués</option>
            <option value="Rumano">Rumano</option>
            <option value="Ruso">Ruso</option>
            <option value="Serbio">Serbio</option>
            <option value="Somali">Somali</option>
            <option value="Suahili">Suahili</option>
            <option value="Sueco">Sueco</option>
            <option value="Tagalog-Filipino">Tagalog-Filipino</option>
            <option value="Tajik">Tajik</option>
            <option value="Tailandés">Tailandés</option>
            <option value="Tibetano">Tibetano</option>
            <option value="Triginia">Tigrinia</option>
            <option value="Tonganés">Tonganés</option>
            <option value="Turco">Turco</option>
            <option value="Turkmenistano">Turkmenistano</option>
            <option value="Ucraniano">Ucraniano</option>
            <option value="Uzbekistano">Uzbekistano</option>
            <option value="Vasco">Vasco</option>
            <option value="Vietnamés">Vietnamés</option>
          </select>
        </div></td>
        <td scope="col"><div align="left">% que habla:
          <input name="habla2" type="text" id="habla2" size="6" />
        </div></td>
        <td scope="col"><div align="left">% que lee:
          <input name="lee2" type="text" id="lee2" size="6" />
        </div></td>
        <td scope="col"><div align="left">% que escribe:
          <input name="escribe2" type="text" id="escribe2" size="6" />
        </div></td>
      </tr>
      <tr>
        <td height="38" scope="col"><div align="left">Idiomas que domina:
          <select name="idiomaDomin3" id="idiomaDomin3">
            <option value=""></option>
            <option value="Africano">Africano</option>
            <option value="Albanés">Albanés</option>
            <option value="Alemán">Alemán</option>
            <option value="Amharico">Amharico</option>
            <option value="Arabe">Arabe</option>
            <option value="Armenio">Armenio</option>
            <option value="Bengali">Bengali</option>
            <option value="Bieloruso">Bieloruso</option>
            <option value="Birmanés">Birmanés</option>
            <option value="Bulgaro">Bulgaro</option>
            <option value="Catalan">Catalan</option>
            <option value="Checo">Checo</option>
            <option value="Chino">Chino</option>
            <option value="Coreano">Coreano</option>
            <option value="Croata">Croata</option>
            <option value="Danés">Danés</option>
            <option value="Dari">Dari</option>
            <option value="Dzongkha">Dzongkha</option>
            <option value="Escocés">Escocés</option>
            <option value="Eslovaco">Eslovaco</option>
            <option value="Esloveniano">Esloveniano</option>
            <option value="Español">Español</option>
            <option value="Estoniano">Esperanto</option>
            <option value="Faroese">Faroese</option>
            <option value="Farsi">Farsi</option>
            <option value="Finlandés">Finlandés</option>
            <option value="Francés">Francés</option>
            <option value="Gaelico">Gaelico</option>
            <option value="Galese">Galese</option>
            <option value="Gallego">Gallego</option>
            <option value="Griego">Griego</option>
            <option value="Hebreo">Hebreo</option>
            <option value="Hindi">Hindi</option>
            <option value="Holandés">Holandés</option>
            <option value="Hungaro">Hungaro</option>
            <option value="Inglés">Inglés</option>
            <option value="Indonesio">Indonesio</option>
            <option value="Inuktitut (Eskimo)">Inuktitut (Eskimo)</option>
            <option value="Islandico">Islandico</option>
            <option value="Italiano">Italiano</option>
            <option value="Japonés">Japonés</option>
            <option value="Khmer">Khmer</option>
            <option value="Kurdo">Kurdo</option>
            <option value="Lao">Lao</option>
            <option value="Laponico">Laponico</option>
            <option value="Latviano">Latviano</option>
            <option value="Lituano">Lituano</option>
            <option value="Macedonio">Macedonio</option>
            <option value="Malayés">Malayés</option>
            <option value="Maltés">Maltés</option>
            <option value="Maya">Maya</option>
            <option value="Nepali">Nepali</option>
            <option value="Noruego">Noruego</option>
            <option value="Pashto">Pashto</option>
            <option value="Polaco">Polaco</option>
            <option value="Portugués">Portugués</option>
            <option value="Rumano">Rumano</option>
            <option value="Ruso">Ruso</option>
            <option value="Serbio">Serbio</option>
            <option value="Somali">Somali</option>
            <option value="Suahili">Suahili</option>
            <option value="Sueco">Sueco</option>
            <option value="Tagalog-Filipino">Tagalog-Filipino</option>
            <option value="Tajik">Tajik</option>
            <option value="Tailandés">Tailandés</option>
            <option value="Tibetano">Tibetano</option>
            <option value="Triginia">Tigrinia</option>
            <option value="Tonganés">Tonganés</option>
            <option value="Turco">Turco</option>
            <option value="Turkmenistano">Turkmenistano</option>
            <option value="Ucraniano">Ucraniano</option>
            <option value="Uzbekistano">Uzbekistano</option>
            <option value="Vasco">Vasco</option>
            <option value="Vietnamés">Vietnamés</option>
          </select>
        </div></td>
        <td scope="col"><div align="left">% que habla:
          <input name="habla3" type="text" id="habla3" size="6" />
        </div></td>
        <td scope="col"><div align="left">% que lee:
          <input name="lee3" type="text" id="lee3" size="6" />
        </div></td>
        <td scope="col"><div align="left">% que escribe:
          <input name="escribe3" type="text" id="escribe3" size="6" />
        </div></td>
      </tr>
      <tr>
        <td height="36" scope="col"><div align="left">Idiomas que domina:
          <select name="idiomaDomin4" id="idiomaDomin4">
            <option value=""></option>
            <option value="Africano">Africano</option>
            <option value="Albanés">Albanés</option>
            <option value="Alemán">Alemán</option>
            <option value="Amharico">Amharico</option>
            <option value="Arabe">Arabe</option>
            <option value="Armenio">Armenio</option>
            <option value="Bengali">Bengali</option>
            <option value="Bieloruso">Bieloruso</option>
            <option value="Birmanés">Birmanés</option>
            <option value="Bulgaro">Bulgaro</option>
            <option value="Catalan">Catalan</option>
            <option value="Checo">Checo</option>
            <option value="Chino">Chino</option>
            <option value="Coreano">Coreano</option>
            <option value="Croata">Croata</option>
            <option value="Danés">Danés</option>
            <option value="Dari">Dari</option>
            <option value="Dzongkha">Dzongkha</option>
            <option value="Escocés">Escocés</option>
            <option value="Eslovaco">Eslovaco</option>
            <option value="Esloveniano">Esloveniano</option>
            <option value="Español">Español</option>
            <option value="Estoniano">Esperanto</option>
            <option value="Faroese">Faroese</option>
            <option value="Farsi">Farsi</option>
            <option value="Finlandés">Finlandés</option>
            <option value="Francés">Francés</option>
            <option value="Gaelico">Gaelico</option>
            <option value="Galese">Galese</option>
            <option value="Gallego">Gallego</option>
            <option value="Griego">Griego</option>
            <option value="Hebreo">Hebreo</option>
            <option value="Hindi">Hindi</option>
            <option value="Holandés">Holandés</option>
            <option value="Hungaro">Hungaro</option>
            <option value="Inglés">Inglés</option>
            <option value="Indonesio">Indonesio</option>
            <option value="Inuktitut (Eskimo)">Inuktitut (Eskimo)</option>
            <option value="Islandico">Islandico</option>
            <option value="Italiano">Italiano</option>
            <option value="Japonés">Japonés</option>
            <option value="Khmer">Khmer</option>
            <option value="Kurdo">Kurdo</option>
            <option value="Lao">Lao</option>
            <option value="Laponico">Laponico</option>
            <option value="Latviano">Latviano</option>
            <option value="Lituano">Lituano</option>
            <option value="Macedonio">Macedonio</option>
            <option value="Malayés">Malayés</option>
            <option value="Maltés">Maltés</option>
            <option value="Maya">Maya</option>
            <option value="Nepali">Nepali</option>
            <option value="Noruego">Noruego</option>
            <option value="Pashto">Pashto</option>
            <option value="Polaco">Polaco</option>
            <option value="Portugués">Portugués</option>
            <option value="Rumano">Rumano</option>
            <option value="Ruso">Ruso</option>
            <option value="Serbio">Serbio</option>
            <option value="Somali">Somali</option>
            <option value="Suahili">Suahili</option>
            <option value="Sueco">Sueco</option>
            <option value="Tagalog-Filipino">Tagalog-Filipino</option>
            <option value="Tajik">Tajik</option>
            <option value="Tailandés">Tailandés</option>
            <option value="Tibetano">Tibetano</option>
            <option value="Triginia">Tigrinia</option>
            <option value="Tonganés">Tonganés</option>
            <option value="Turco">Turco</option>
            <option value="Turkmenistano">Turkmenistano</option>
            <option value="Ucraniano">Ucraniano</option>
            <option value="Uzbekistano">Uzbekistano</option>
            <option value="Vasco">Vasco</option>
            <option value="Vietnamés">Vietnamés</option>
          </select>
        </div></td>
        <td scope="col"><div align="left">% que habla:
          <input name="habla4" type="text" id="habla4" size="6" />
        </div></td>
        <td scope="col"><div align="left">% que lee:
          <input name="lee4" type="text" id="lee4" size="6" />
        </div></td>
        <td scope="col"><div align="left">% que escribe:
          <input name="escribe4" type="text" id="escribe4" size="6" />
        </div></td>
      </tr>
    </table>
    <table width="800" height="141" border="0">
      <tr>
        <td width="794" height="43" scope="col"><div align="left">Máquinas de taller u oficina que sepa manejar:
          <input name="maquinaOficTallManejar" type="text" id="maquinaOficTallManejar" size="74" />
        </div>
          <label for="-------"></label>
          <div align="left"></div></td>
      </tr>
      <tr>
        <td height="40" scope="col"><div align="left">Funciones de oficina que domina:
          <input name="funcionOficDomina" type="text" id="funcionOficDomina" size="88" />
        </div>
          <label for="----"></label>
          <div align="left"></div></td>
      </tr>
      <tr>
        <td height="40" scope="col"><div align="left">Software que domina:  
          <input name="softwareDomina" type="text" id="softwareDomina" size="100" />
          </div>
          <label for="-----"></label>
          <div align="left"></div></td>
      </tr>
      </table>
    <table width="800" height="39" border="0">
      <tr>
        <td width="794" height="30" scope="col"><div align="center">
          <p><strong></br>
            EXPERIENCIA LABORAL</strong></p>
        </div></td>
      </tr>
    </table>
    <table width="800" height="33" border="0">
      <tr>
        <td width="182" scope="col"><div align="center"></div></td>
        <td width="200" height="29" scope="col"><div align="center">Empleo Actual o Último</div></td>
        <td width="200" scope="col"><div align="center">Empleo Anterior</div></td>
        <td width="200" scope="col"><div align="center">Empleo Anterior</div></td>
        </tr>
    </table>
    <table width="800" height="54" border="0">
      <tr>
        <td width="182" scope="col"><div align="left">Tiempo que prestó sus servicios:</div></td>
        <td width="98" height="50" scope="col"><div align="center">Fecha Inicial</div>
          <label for="-------"></label>
          <div align="center">
            <input name="tiemPresEmpl1DE" type="text" id="tiemPresEmpl1DE" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Fecha Final</div>
          <label for="------"></label>
          <div align="center">
            <input name="tiemPresEmpl1A" type="text" id="tiemPresEmpl1A" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Fecha Inicial</div>
          <label for="--------"></label>
          <div align="center">
            <input name="tiemPresEmpl2DE" type="text" id="tiemPresEmpl2DE" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Fecha Final</div>
          <label for="------"></label>
          <div align="center">
            <input name="tiemPresEmpl2A" type="text" id="tiemPresEmpl2A" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Fecha Inicial</div>
          <label for="-------"></label>
          <div align="center">
            <input name="tiemPresEmpl3DE" type="text" id="tiemPresEmpl3DE" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Fecha Final</div>
          <label for="--------"></label>
          <div align="center">
            <input name="tiemPresEmpl3A" type="text" id="tiemPresEmpl3A" size="8" />
          </div></td>
        </tr>
    </table>
    <table width="800" height="203" border="0">
      <tr>
        <td width="182" scope="col"><div align="left">Nombre de la Empresa:</div></td>
        <td width="200" height="46" scope="col"><label for="nombre_empresa_actual"></label>
          <div align="center">
            <input name="nomEmpl1" type="text" id="nomEmpl1" size="25" />
          </div></td>
        <td width="200" scope="col"><div align="center">
          <input name="nomEmpl2" type="text" id="nomEmpl2" size="25" />
        </div></td>
        <td width="200" scope="col"><div align="center">
          <input name="nomEmpl3" type="text" id="nomEmpl3" size="25" />
        </div></td>
        </tr>
      <tr>
        <td scope="col"><div align="left">Dirección:</div></td>
        <td height="50" scope="col"><div align="center">
          <input name="direccEmpl1" type="text" id="direccEmpl1" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="direccEmpl2" type="text" id="direccEmpl2" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="direccEmpl3" type="text" id="direccEmpl3" size="25" />
        </div></td>
        </tr>
      <tr>
        <td scope="col"><div align="left">Teléfono:</div></td>
        <td height="47" scope="col"><div align="center">
          <input name="telEmpl1" type="text" id="telEmpl1" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="telEmpl2" type="text" id="telEmpl2" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="telEmpl3" type="text" id="telEmpl3" size="25" />
        </div></td>
        </tr>
      <tr>
        <td scope="col"><div align="left">Puesto que desempeñaba:</div></td>
        <td height="50" scope="col"><div align="center">
          <input name="puesDesmEmpl1" type="text" id="puesDesmEmpl1" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="puesDesmEmple2" type="text" id="puesDesmEmple2" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="puesDesmEmpl3" type="text" id="puesDesmEmpl3" size="25" />
        </div></td>
        </tr>
    </table>
    <table width="800" height="55" border="0">
      <tr>
        <td width="182" scope="col"><div align="left">Sueldos:</div></td>
        <td width="98" height="51" scope="col"><div align="center">Inicial</div>
          <label for="---------"></label>
          <div align="center">
            <input name="suelInicEmpl1" type="text" id="suelInicEmpl1" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Final</div>
          <label for="----------"></label>
          <div align="center">
            <input name="suelFinEmpl1" type="text" id="suelFinEmpl1" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Inicial</div>
          <label for="-----------"></label>
          <div align="center">
            <input name="suelInicEmpl2" type="text" id="suelInicEmpl2" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Final</div>
          <label for="----------"></label>
          <div align="center">
            <input name="suelFinEmpl2" type="text" id="suelFinEmpl2" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Inicial</div>
          <label for="-------"></label>
          <div align="center">
            <input name="suelInicEmpl3" type="text" id="suelInicEmpl3" size="8" />
          </div></td>
        <td width="98" scope="col"><div align="center">Final</div>
          <label for="--------"></label>
          <div align="center">
            <input name="suelFinEmpl3" type="text" id="suelFinEmpl3" size="8" />
          </div></td>
        </tr>
    </table>
    <table width="800" height="137" border="0">
      <tr>
        <td width="182" scope="col"><div align="left">Motivo de su separación:</div></td>
        <td width="200" height="43" scope="col"><div align="center">
          <input name="separaEmple1" type="text" id="separaEmple1" size="25" />
        </div></td>
        <td width="200" scope="col"><div align="center">
          <input name="separaEmpl2" type="text" id="separaEmpl2" size="25" />
        </div></td>
        <td width="200" scope="col"><div align="center">
          <input name="separaEmpl3" type="text" id="separaEmpl3" size="25" />
        </div></td>
        </tr>
      <tr>
        <td scope="col"><div align="left">Nombre de su Jefe Directo:</div></td>
        <td height="43" scope="col"><div align="center">
          <input name="nomJefEmpl1" type="text" id="nomJefEmpl1" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="nomJefEmpl2" type="text" id="nomJefEmpl2" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="nomJefEmpl3" type="text" id="nomJefEmpl3" size="25" />
        </div></td>
        </tr>
      <tr>
        <td scope="col"><div align="left">Puesto de su Jefe Directo:</div></td>
        <td height="43" scope="col"><div align="center">
          <input name="puesJefEmpl1" type="text" id="puesJefEmpl1" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="puesJefEmpl2" type="text" id="puesJefEmpl2" size="25" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="puesJefEmpl3" type="text" id="puesJefEmpl3" size="25" />
        </div></td>
        </tr>
    </table>
    <table width="800" height="47" border="0">
      <tr>
        <td width="146" scope="col"><div align="left">¿Podríamos solicitar información de Usted? </div>
          <label for="podriamos_solicitar_info_usted"></label></td>
        <td width="53" scope="col"><div align="left">
          <select name="podriSolicInfUs" id="podriSolicInfUs">
            <option value=""></option>
            <option value="No">No</option>
            <option value="Si">Si</option>
          </select>
        </div></td>
        <td width="587" height="43" scope="col"><label for="respuesta_no_solici_info_usted"></label>
          <div align="left">En caso de ser &quot;no&quot; su respuesta.  ¿Cuáles son sus razones?
            <input name="noCualSonSusRazones" type="text" id="noCualSonSusRazones" size="30" />
          </div></td>
      </tr>
    </table>
    <table width="800" height="39" border="0">
      <tr>
        <td width="794" height="30" scope="col"><div align="center">
          <p><strong></br>
            REFERENCIAS PERSONALES</strong> <br/>
            <span class="colorLetra">Favor de no incluir parientes o jefes anteriores.</span></p>
        </div></td>
      </tr>
    </table>
    <table width="800" height="169" border="0">
      <tr>
        <td width="170" scope="col"><div align="center">Nombre</div></td>
        <td width="190" height="29" scope="col"><div align="center">Dirección</div></td>
        <td width="110" scope="col"><div align="center">Teléfono</div></td>
        <td width="130" scope="col"><div align="center">Ocupación</div></td>
        <td width="178" scope="col"><div align="center">Tiempo de conocerlo</div></td>
      </tr>
      <tr>
        <td scope="col"><div align="center">
          <input name="nomRef1" type="text" id="nomRef1" size="25" />
        </div></td>
        <td height="44" scope="col"><div align="center">
          <input name="direccRef1" type="text" id="direccRef1" size="30" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="telRef1" type="text" id="telRef1" size="18" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="ocupRef1" type="text" id="ocupRef1" size="18" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="tiempConocerlo1" type="text" id="tiempConocerlo1" size="15" />
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="center">
          <input name="nomRef2" type="text" id="nomRef2" size="25" />
        </div></td>
        <td height="43" scope="col"><div align="center">
          <input name="direccRef2" type="text" id="direccRef2" size="30" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="telRef2" type="text" id="telRef2" size="18" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="ocupRef2" type="text" id="ocupRef2" size="18" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="tiempConocerlo2" type="text" id="tiempConocerlo2" size="15" />
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="center">
          <input name="nomRef3" type="text" id="nomRef3" size="25" />
        </div></td>
        <td height="43" scope="col"><div align="center">
          <input name="direccRef3" type="text" id="direccRef3" size="30" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="telRef3" type="text" id="telRef3" size="18" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="ocupRef3" type="text" id="ocupRef3" size="18" />
        </div></td>
        <td scope="col"><div align="center">
          <input name="tiempConocerlo3" type="text" id="tiempConocerlo3" size="15" />
        </div></td>
      </tr>
    </table>
    <table width="800" height="39" border="0">
      <tr>
        <td width="794" height="30" scope="col"><div align="center">
          <p><strong></br>
            DOCUMENTACIÓN DIGITAL OBLIGATORIA</strong> <br />
            <span class="colorLetra">Favor de subir toda la información pedida. Tipos de archivo: PDF</span></p>
        </div></td>
      </tr>
</table>
    <table width="800" height="317" border="0">
      <tr>
        <td width="185" scope="col"><div align="left">Currículum Vitae:</div></td>
        <td width="604" height="43" scope="col"><div align="left">
          <label>
            <input type="file" name="curriculumVitae" id="curriculumVitae" required="required" accept="application/pdf"/>
          </label>
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Carta de recomendación 1:</div></td>
        <td height="43" scope="col"><div align="left">
          <label for="carta de recomendacion"></label>
          <label for="cartaRecomendacion1"></label>
          <input type="file" name="cartaRecomendacion1" id="cartaRecomendacion1" required="required" accept="application/pdf"/>
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Carta de recomendación 2:</div></td>
        <td height="43" scope="col"><div align="left">
          <input type="file" name="cartaRecomendacion2" id="cartaRecomendacion2" required="required" accept="application/pdf"/>
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Acta de Nacimiento:</div></td>
        <td height="43" scope="col"><div align="left">
          <input type="file" name="ActaNacimiento" id="ActaNacimiento" required="required" accept="application/pdf"/>
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Credencial del Lector:</div></td>
        <td height="43" scope="col"><div align="left">
          <input type="file" name="ife" id="ife" required="required" accept="application/pdf"/>
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Comprobante de Domicilio:</div></td>
        <td height="43" scope="col"><div align="left">
          <input type="file" name="comprobanteDomicilio" id="comprobanteDomicilio" required="required"  accept="application/pdf"/>
        </div></td>
      </tr>
      <tr>
        <td scope="col"><div align="left">Certificado Medico:</div></td>
        <td height="43" scope="col"><div align="left">
          <input type="file" name="certificadoMedico" id="certificadoMedico" required="required" accept="application/pdf"/>
        </div></td>
      </tr>
    </table>
    <table width="800" height="92" border="0">
      <tr>
        <td width="499" height="43" scope="col"><div align="left">Documento probatorio de las actividades profesionales realizadas en el sector:</div></td>
        <td width="291" scope="col"><div align="left">
          <input type="file" name="doc_probatorio_act_profes_realiza" id="doc_probatorio_act_profes_realiza" required="required" accept="application/pdf"/>
        </div></td>
      </tr>
      <tr>
        <td height="43" scope="col"><div align="left">Documento probatorio de las actividades docentes realizadas:</div></td>
        <td scope="col"><div align="left">
          <input type="file" name="doc_probatorio_act_docentes_realizad" id="doc_probatorio_act_docentes_realizad" required="required" accept="application/pdf"/>
        </div></td>
      </tr>
    </table>
    <table width="800" height="66" border="0">
      <tr>
        <td width="533" height="62" scope="col"><div align="left">Comentarios abiertos respecto a su informacion proporcionada o no proporcionada:</div></td>
        <td width="257" scope="col"><div align="left">
          <label for="textarea"></label>
          <textarea name="comentarios" id="comentarios" cols="34" rows="2"></textarea>
        </div></td>
      </tr>
    </table>
    <table width="800" height="131" border="0">
      <tr>
        <td width="464" height="127" scope="col"><div align="center">
          <input type="submit" name="enviar" id="enviar" value="Enviar Información" />
        </div></td>
      </tr>
    </table>
</div>
</div>
<input type="hidden" name="fechaSolicitud" id="fechaSolicitud" />
<input type="hidden" name="MM_insert" value="formSolicitud" />
</form>
</body>
</html>
<?php
mysql_free_result($puestoSolicitado);
?>