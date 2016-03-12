<?php
namespace System;

class Students
{
	public static function Render( $Request, $Response, $Service, $App )
	{
		return $App->Twig->render( 'students.html', [
			'title' => 'Students',
			'tab' => 'students',
		] );
	}
}
