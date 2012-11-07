<?php
if(!empty($album['Albumimg'])){
	$first = $album['Albumimg'][0];
	echo $html->para(null,$html->link('Galería de Fotos','/'.$first['src'],array('class'=>'pulsembox','rel'=>'album_'.$album['Album']['id'],'name'=>$first['descripcion'],'title'=>_dec($first['descripcion']))));

	$hidden_album = '';
	foreach ($album['Albumimg'] as $img) {
		$hidden_album.= $html->link(basename($img['src']),'/'.$img['src'],array('class'=>'pulsembox','rel'=>'album_'.$album['Album']['id'],'name'=>$img['descripcion'],'title'=>_dec($img['descripcion'])));
	}
	echo $html->div('hide',$hidden_album);
}
?>