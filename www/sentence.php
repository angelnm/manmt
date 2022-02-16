<?
function sentence_translation($sentence, $id){
	$html = '';

	$html .= '<tr>';
	$html .= 	'<td>';
	$html .= 		'<div style="margin-left:7%">';
	$html .=			'Sentence #'.($id+1);
	$html .=		'</div>';
	$html .=	'</td>';
	$html .= 	'<td>';
	$html .=		'<div class="stats_trans">';
	$html .=			'<p id="chars_typ_'.$id.'"><span>0</span> Characters Typed</p>';
	$html .=			'<p id="mouse_act_'.$id.'"><span>0</span> Mouse Actions</p>';
	$html .=		'</div>';
	$html .= 	'</td>';
	$html .= '</tr>';

	$html .= '<tr>';
	$html .= 	'<td>';
	$html .= 		'<textarea style="padding:20px" disabled name="source_sentence_'.$id.'" id="sourceinmt_'.$id.'">'.$sentence.'</textarea>';
	$html .= 	'</td>';
	$html .= 	'<td>';
	$html .= 		'<div class="editableArea" name="hypothesis_'.$id.'" id="hypothesis_'.$id.'">';
	$html .= 			'Click in the translate button to obtain a translation.';
	$html .=		'</div>';
	$html .= 	'</td>';
	$html .= '</tr>';

	$html .= '<tr>';
	$html .= 	'<td>';
	$html .= 		'<div style="float: right;">';
	$html .= 			'<form onsubmit="write_interactive_translation('.$id.'); return false;">';
	$html .= 				'<button type="submit" class="button">Translate!</button>';
	$html .= 			'</form>';
	$html .= 		'</div>';
	$html .= 	'</td>';
	$html .= 	'<td>';
	$html .= 		'<div style="float: right;">';
	$html .= 			'<form onsubmit="accept_translation('.$id.'); return false;">';
	$html .= 				'<button type="submit" class="button">Accept translation</button>';
	$html .= 			'</form>';
	$html .= 		'</div>';
	$html .= 	'</td>';
	$html .= '</tr>';

	echo $html;
}
?>
