<?php

class SaveSearch
{
    const NAME = 'Publicacao';
    const MENU_NAME = 'Publicacoes';

    protected static $post_type;

    static function init()
    {

		if (!get_option('saveSearchTable')) {
			global $wpdb;
			
			$wpdb->query("CREATE TABLE IF NOT EXISTS save_search_index (
				term varchar(255),
				count int(11) DEFAULT 1,
				single bool DEFAULT false
			)");
			
			$wpdb->query("CREATE TABLE IF NOT EXISTS save_search_log (
				term varchar(255),
				date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
			)");
			
			update_option('saveSearchTable', 1);
		}
		
		add_action('pre_get_posts', array(__CLASS__, 'save') );
        
    }
    
    static function save() {
		
		$search = get_search_query();
		
		if (!is_search() || !$search)
			return;
		
		
		$singles = explode(' ', $search);
		
		global $wpdb;
		if (sizeof($singles) > 1) {
			foreach ($singles as $single) {
				self::updateIndex($single, true);
			}
		}
		$wpdb->insert('save_search_log', array('term' => trim(strtolower($search))) );
		self::updateIndex($search);
		
	}
	
	static function updateIndex($term, $single = false) {
	
		global $wpdb;
		$term = trim(strtolower($term));
		$cur = $wpdb->get_var( $wpdb->prepare("SELECT count FROM save_search_index WHERE single = %d AND term = %s", $single ? 1 : 0, $term) );
		if ($cur)
			$wpdb->update('save_search_index', array('count' => $cur+1, 'single' => $single), array('term' => $term) );
		else
			$wpdb->insert('save_search_index', array('term' => $term, 'single' => $single) );
	
	}
    
    // retorna o número de vezes que o termo mais buscado foi buscado
    static function getTopCount() {
		global $wpdb;
		return $wpdb->get_var("SELECT count FROM save_search_index ORDER BY count DESC LIMIT 1");
	}
	
	// retorna array com termos mais buscados, padrão 5
	static function getTopTerms($count = 5) {
		global $wpdb;
		return $wpdb->get_col("SELECT term FROM save_search_index ORDER BY count DESC LIMIT $count");
	}

}
SaveSearch::init();

