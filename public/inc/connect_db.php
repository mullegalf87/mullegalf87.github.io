<?php
$OFFLINE = FALSE;

if ($OFFLINE) {
	ini_set('error_reporting', E_ALL);
	ini_set("display_errors", 1);
} else {
	$dbhostname = "127.0.0.1";
	$dbusername = "root";
	$dbpassword = "AklkOodX0Rc7LVvs";
	$dbbasename = "homelav";
}

/**/
/*
function connectServer($dbhostname, $dbusername, $dbpassword)
{
	return mysqli_connect($dbhostname, $dbusername, $dbpassword);
}

function connectDb($dbbasename, $sLocalConn)
{
	mysqli_select_db($sLocalConn, $dbbasename);
}

$mConn = connectServer($dbhostname, $dbusername, $dbpassword);
if ($mConn)
{
	connectDb($dbbasename, $mConn);
}
else
{
	echo "Failed connection with database!";
	die();
}

function querySql($sSQL, $sLocalConn)
{
	//echo($sSQL."<br />");
	$rsRecordSet = mysqli_query($sLocalConn, $sSQL);
	if ($rsRecordSet)
		return $rsRecordSet;
	else
		return false;
}

function numRowsRecordset($rRecordset)
{
	$numrows = mysqli_num_rows($rRecordset);
	//var_dump(debug_backtrace());
	return $numrows;
}

function fetchAssocRecordset($rRecordset)
{
	$fetchassoc = mysqli_fetch_assoc($rRecordset);
	//var_dump(debug_backtrace());
	return $fetchassoc;
}

function lastInsertId($sLocalConn)
{
	return mysqli_insert_id($sLocalConn);
}

function closeConnection($sLocalConn)
{
	mysqli_close($sLocalConn);
	return;
}
*/

/* OBJECT CONNECTION */
function dbOpen()
{
	global $dbhostname, $dbusername, $dbpassword, $dbbasename;
	try {
		$db = new PDO("mysql:host=".$dbhostname.";dbname=".$dbbasename , $dbusername, $dbpassword);
	} catch(PDOException $e) {
		echo $e->getMessage();
		die();
	}
	return $db;
}

function dbBeginTransaction($oDb)
{
	return $oDb->beginTransaction();
}

function queryPrepare($oDb, $sSQL)
{
	return $oDb->prepare($sSQL);
}

function queryInsertId($oDb)
{
	return $oDb->lastInsertId();
}

function dbCommit($oDb)
{
	return $oDb->commit();
}

function dbRollback($oDb)
{
	return $oDb->rollBack();
}

function dbClose($oDb)
{
	$oDb = NULL;
}

/* OBJECT STATEMENT */

function bindParam($stmt, $paramMark, $paramValue, $data_type = PDO::PARAM_STR, $length = 0)
{
	if ($length > 0) {
		return $stmt->bindParam($paramMark, $paramValue, $data_type, $length);
	} else {
		return $stmt->bindParam($paramMark, $paramValue, $data_type);
	}
}

function queryExecute($stmt, $params = NULL)
{
	//$stmt->debugDumpParams();
	//echo("<br /><br />/n/n");
	if (is_array($params)) {
		try {
			queryStringDebug($stmt->queryString, $params);
			return $stmt->execute($params);
		} catch(PDOException $e) {
			return $e->getMessage();
		}
		queryStringDebug($stmt->queryString, $params);
		return $stmt->execute($params);
	} else {
		try {
			return $stmt->execute();
		} catch(PDOException $e) {
			return $e->getMessage();
		}
	}
}

function queryNumRows($stmt)
{
	return $stmt->rowCount();
}

function resultFetchAssoc($stmt)
{
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

function queryClose($stmt)
{
	return $stmt->closeCursor();
}

function queryStringDebug($querystring, $data) {
	$indexed = ($data==array_values($data));
	foreach($data as $k=>$v) {
		if (is_string($v)) {
			$v = "'$v'";
		}
		if ($indexed) {
			$querystring = preg_replace('/\?/', $v, $querystring, 1);
		} else {
			$querystring = str_replace($k, $v, $querystring);
		}
	}
	$hostVars = "HTTP_REFERER: ".$_SERVER['HTTP_REFERER']."\n";
	$hostVars.= "HTTP_USER_AGENT: ".$_SERVER['HTTP_USER_AGENT']."\n";
	$hostVars.= "REMOTE_ADDR: ".$_SERVER['REMOTE_ADDR']."\n";
	$hostVars.= "REMOTE_PORT: ".$_SERVER['REMOTE_PORT'];

	$sSql = "INSERT INTO log_sql (id_operatore, querystring, vars) VALUES (?,?,?)";
	$dbLocalConn = dbOpen();
	$rsLog = queryPrepare($dbLocalConn, $sSql);
	bindParam($rsLog, 1, $_SESSION['op']);
	bindParam($rsLog, 2, $querystring);
	bindParam($rsLog, 3, $hostVars);
	queryExecute($rsLog);
	queryClose($rsLog);
	dbClose($dbLocalConn);
}

$dbConn = dbOpen();
?>