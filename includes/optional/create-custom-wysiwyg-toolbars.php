<?php

function my_toolbars( $toolbars )
{
    // Uncomment to view format of $toolbars
	
    // dd($toolbars);
	// die;
	
    
	// Add a new toolbar called "Key Points"
	// - this toolbar has only 1 row of buttons
	$toolbars['Key Points' ] = array();
	$toolbars['Key Points' ][1] = array('bold' , 'italic' , 'underline', 'styleselect' );

	$toolbars['Ultra Simple' ] = array();
	$toolbars['Ultra Simple' ][1] = array('bold' , 'italic' , 'underline' );

	$toolbars['Banner' ] = array();
	$toolbars['Banner' ][1] = array('formatselect', 'alignleft' , 'aligncenter' , 'alignright' );
    
	// Edit the "Full" toolbar and remove 'code'
	// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	// if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false )
	// {
    //     unset( $toolbars['Full' ][2][$key] );
	// }
    
	// remove the 'Basic' toolbar completely
	// unset( $toolbars['Basic' ] );
    
	// return $toolbars - IMPORTANT!
	return $toolbars;
}
add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );

