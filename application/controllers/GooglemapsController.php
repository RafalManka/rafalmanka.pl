<?php

class GooglemapsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function mapAction()
    {
        // action body
    }

    public function processAction()
    {
    	$this->_helper->layout->disableLayout();
    	$this->_helper->viewRenderer->setNoRender(TRUE);
    	
    	
    	define('DB_HOST','localhost');
    	define('DB_USER','root');
    	define('DB_PASS','');
    	define('DB_NAME','');
    	
    	$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die(mysql_error());
    	mysql_select_db(DB_NAME) or die (mysql_error());
    	    	
    	$shopID = $_POST['whichShop'];
    	
    	if (!$shopID) {
    		$shopID = 1;
    	}
    	
    	$result = mysql_query("SELECT lng, lat FROM googlemaps WHERE ID = $shopID");
    	while($query = mysql_fetch_array($result))
    	{
    		$lng= $query['lng'];
    		$lat= $query['lat'];
    	}
    	    	
    	echo "<div id=\"googleMapsApi\">";
    	echo "<iframe id=\"googleMap\" width=\"800\" height=\"900\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.pl/maps?f=q&amp;source=s_q&amp;hl=pl&amp;geocode=&amp;q=";
    	echo $lat.','.$lng."&amp;z=14&amp;iwloc=A&amp;output=embed\">";
    	echo "</iframe>";
    	echo "</div>";
    }


}





