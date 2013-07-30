<?php

class Application_Model_DbTable_Terms extends Zend_Db_Table_Abstract
{

    protected $_name = 'terms';

    public function getTerms($id){
    	
    	$id = (int)$id;
    	$row = $this->fetchRow(' id = ' . $id );
    	
    	if (! $row) {
    		throw new Exception('there are no terms under id = ' . $id. '. Make another query.');
    	}    	
    	return $row->toArray();      	
    }
}

