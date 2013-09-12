<?php
if ( !defined( '_PS_VERSION_' ) )
  exit;
 
class blockactcupones extends Module
  {
	  public function __construct()
	    {
	    $this->name = 'blockactcupones';
	    $this->tab = 'Test';
	    $this->version = 1.0;
	    $this->author = 'Firstname Lastname';
	    $this->need_instance = 0;
	 
	    parent::__construct();
	 
	    $this->displayName = $this->l( 'My module' );
	    $this->description = $this->l( 'Description of my module.' );
	    }
	 

	  public function install()
	  {
	  if ( parent::install() == false OR !$this->registerHook( 'leftColumn' ) )
	    return false;
	  return true;
	  }


	  public function uninstall()
	  {
	  if ( !parent::uninstall() )
	    Db::getInstance()->Execute( 'DELETE FROM `' . _DB_PREFIX_ . 'blockactcupones`' );
	    parent::uninstall();
	  }

	public function hookLeftColumn( $params )
	  {
	  global $smarty;
	  return $this->display( __FILE__, 'blockactcupones.tpl' );
	  }
	 
	public function hookRightColumn( $params )
	  {
	  return $this->hookLeftColumn( $params );
	  }
  }
?>
