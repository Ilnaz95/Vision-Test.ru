<div id="idClinics">
	<?php
    require_once 'simple_html_dom.php';
    $data = file_get_html('http://spravka.properm.ru/cat/optika');
    if($data->innertext!='' and count($data->find('.fname'))){
	   echo '<ul>';
	   $i=0;
	   foreach($data->find('.fname') as $name){
            $address = $data->find('.address', $i)->plaintext; $i++;
		    echo '<li class="clinics"><a href="http://spravka.properm.ru/'.$name->href.'" target="_blank">'.'<br/>'.$name->plaintext.'<br/>'. $address.'</a></li>';
	   }
	   echo '</ul>';
    }
    $data->clear();// подчищаем за собой
    unset($data);
    ?>
</div>