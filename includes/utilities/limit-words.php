<?php

function string_limit_words($string, $word_limit) {

    $words = explode(' ', strip_tags($string), ($word_limit + 1));
    
	if(count($words) > $word_limit) {
		array_pop($words);
	}

	return implode(' ', $words);
}