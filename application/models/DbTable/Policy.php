<?php

class Application_Model_DbTable_Policy extends Zend_Db_Table_Abstract
{

    protected $_name = 'policy';
    
    public function getPolicy($id){
    	
    	$id = (int)$id;
    	
    	$row = $this->fetchRow(' id = '.$id);
    	if (!$id){
    		
    		throw new Exception('there is no policy onder id of '.$id);
    	}
    	return $row->toArray();
    	
    }


}

