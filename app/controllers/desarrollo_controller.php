<?php
App::import('Controller','_base/My');
class DesarrolloController extends MyController{
	var $name = 'Desarrollo';
	var $uses = array('Album');

	/* Villas */
	function jaal_ha(){
		$this->set('sub_for_layout','villas');
		$this->set_albums('villas');
		$this->render('/desarrollo/villas');
	}
	function naay_ha(){
		$this->set('sub_for_layout','villas');
		$this->set_albums('villas');
		$this->render('/desarrollo/villas');
	}
	
	/* Departamentos */
	function departamentos(){ 
		$this->set('sub_for_layout','departamentos');
		$this->set_albums('departamentos');
		$this->render('/desarrollo/departamentos');
	}
	function penthouse(){ 
		$this->set('sub_for_layout','departamentos');
		$this->set_albums('departamentos');
		$this->render('/desarrollo/departamentos');
	}

	/* Amenidades */
	function amenidades(){ $this->set('sub_for_layout','amenidades');$this->set('album',$this->Album->find_(array(5,'contain'=>array('Albumimg')))); }
	
	function beforeFilter(){ parent::beforeFilter();$this->set('visible',$this->action); }

	function set_albums($section){
		$albums = array();
		$album_ids = array(
			'villas'=>array('jaal_ha'=>1,'naay_ha'=>2),
			'departamentos'=>array('departamentos'=>3,'penthouse'=>4)
		);

		$tmp =$album_ids[$section];
		foreach ($tmp as $key => $album_id)
			$albums[$key] = $this->Album->find_(array($album_id,'contain'=>array('Albumimg')));
		
		$this->set(compact('albums'));
	}
}
?>