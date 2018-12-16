<?php
/******************************************************************************\
|*                                                                            *|
|* All text, code and logic contained herein is copyright by Installatron LLC *|
|* and is a part of 'the Installatron program' as defined in the Installatron *|
|* license: http://installatron.com/plugin/eula                               *|
|*                                                                            *|
|* THE COPYING OR REPRODUCTION OF ANY TEXT, PROGRAM CODE OR LOGIC CONTAINED   *|
|* HEREIN IS EXPRESSLY PROHIBITED. VIOLATORS WILL BE PROSECUTED TO THE FULL   *|
|* EXTENT OF THE LAW.                                                         *|
|*                                                                            *|
|* If this license is not clear to you, DO NOT CONTINUE;                      *|
|* instead, contact Installatron LLC at: support@installatron.com             *|
|*                                                                            *|
\******************************************************************************/
@chdir('/home/u802714906/public_html');@set_time_limit(0);$GLOBALS["_fileowner"] = fileowner(__FILE__);if (isset($_SERVER["I_POST"])){parse_str($_SERVER["I_POST"],$_GET);$_POST = $_REQUEST = array_merge($_GET,$_POST);}else if (empty($_REQUEST)){$_REQUEST = array_merge($_GET,$_POST);}set_error_handler("__i_client_error_handler");$GLOBALS["__i_client_error_stack"] = array();function __i_client_error_handler($errno, $errstr, $errfile, $errline){if (!(error_reporting() & $errno)){return;}switch ($errno) {case E_ERROR:case E_USER_ERROR:$GLOBALS["__i_client_error_stack"][] = "Error: ".$errstr." in ".$errfile."[$errline] (PHP ".PHP_VERSION." ".PHP_OS.")";echo '__CLIENT__RESPONCE__START__'.serialize(array(false,$GLOBALS["__i_client_error_stack"]))."__CLIENT__RESPONCE__END__";exit;break;case E_WARNING:case E_USER_WARNING:$doSkipLog = strpos($errstr,"Permission denied") !== false && strpos($errstr,"unlink(") !== false|| strpos($errstr,"chmod(): Operation not permitted") !== false|| strpos($errstr,"wp-content/plugins") !== false;if (!$doSkipLog){$GLOBALS["__i_client_error_stack"][] = $errstr." in ".$errfile."[$errline] (PHP ".PHP_VERSION." ".PHP_OS.")";}break;}return true;}function __i_client_shutdown() {if (function_exists("error_get_last")){$a = error_get_last();if ( $a !== null && $a["type"] === 1 ){$GLOBALS["__i_client_error_stack"][] = "Fatal Error: ".$a["message"]." in ".$a["file"]."[".$a["line"]."]";echo '__CLIENT__RESPONCE__START__'.serialize(array(false,$GLOBALS["__i_client_error_stack"]))."__CLIENT__RESPONCE__END__";}}} register_shutdown_function("__i_client_shutdown");?><?php if ( !isset($_POST["build"]) || !isset($_POST["hash"]) || !isset($_POST["cmd"])|| 5 !== intval($_POST["build"])|| '6l1pmmen18o4k8s8g48ooc004' !== $_POST["hash"] ){echo '__CLIENT__RESPONCE__START__'.serialize(array("I_ACCESS_DENIED",$GLOBALS["__i_client_error_stack"]))."__CLIENT__RESPONCE__END__";exit;}if ( $_POST["cmd"] === "list" ){define("ABSPATH", dirname(__FILE__)."/");include_once(ABSPATH."wp-config',
  components: {
  }
}
</script>
<style>
</style>