<?php

use Queulat\Post_Query;

class Cc_Chdocument_Post_Query extends Post_Query {
	public function get_post_type() : string {
		return 'cc_chdocument';
	}
	public function get_decorator() : string {
		return Cc_Chdocument_Post_Object::class;
	}
	public function get_default_args() : array {
		return [];
	}
}
