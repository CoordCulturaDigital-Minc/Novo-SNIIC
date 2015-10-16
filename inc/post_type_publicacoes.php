<?php
// Dê um Find Replace (CASE SENSITIVE!) em Publicacoes pelo nome do seu post type 

class Publicacoes
{
    const NAME = 'Publicacao';
    const MENU_NAME = 'Publicacoes';

    /**
     * alug do post type: deve conter somente minúscula 
     * @var string
     */
    protected static $post_type;

    static function init()
    {
        // o slug do post type
        self::$post_type = strtolower(__CLASS__);

        add_action('init', array(self::$post_type, 'register'), 0);

        add_action( 'init', array(__CLASS__, 'register_taxonomies') ,10);
        
        //add_action( 'pre_get_posts', array(__CLASS__, 'add_to_search') ,10);
        
        add_action( 'admin_init', array(__CLASS__, 'add_metabox') ,10);
        
        
        
        //add_filter('menu_order', array(self::$post_type, 'change_menu_label'));
        //add_filter('custom_menu_order', array(self::$post_type, 'custom_menu_order'));
        add_action('save_post',array(__CLASS__, 'on_save'));
    }
    
    static function add_to_search($query) {
    
        if ($query->is_search()) {
            
            $query->post_type = array('post', 'publicacoes');
        }
    
    }
    
    static function add_metabox() {
        
        add_meta_box("my-pdf", "PDF da Publicação", array(__CLASS__, "pdf_metabox"), "publicacoes", "normal", "low");
        add_meta_box("publicacoes-fonte", "Fonte da Publicação", array(__CLASS__, "fonte_metabox"), "publicacoes", "normal", "low");
        
    }
    
    static function register()
    {
        register_post_type(self::$post_type, array(
            'labels' => array(
                'name' => _x(self::NAME, 'post type general name', 'SLUG'),
                'singular_name' => _x('Publicacoes', 'post type singular name', 'SLUG'),
                'add_new' => _x('Adicionar Novo', 'image', 'SLUG'),
                'add_new_item' => __('Adicionar novo Publicacoes', 'SLUG'),
                'edit_item' => __('Editar Publicacoes', 'SLUG'),
                'new_item' => __('Novo Publicacoes', 'SLUG'),
                'view_item' => __('Ver Publicacoes', 'SLUG'),
                'search_items' => __('Search Publicacoess', 'SLUG'),
                'not_found' => __('Nenhum Publicacoes Encontrado', 'SLUG'),
                'not_found_in_trash' => __('Nenhum Publicacoes na Lixeira', 'SLUG'),
                'parent_item_colon' => ''
            ),
            'public' => true,
            'rewrite' => array('slug' => 'publicacoes'),
            'capability_type' => 'post',
            'hierarchical' => true,
            'map_meta_cap ' => true,
            'menu_position' => 6,
            'has_archive' => true, //se precisar de arquivo
            'supports' => array(
                'title',
                'editor',
                'page-attributes'
            ),
            'taxonomies' => array('taxonomia')
            )
        );
    }

    static function register_taxonomies()
    {
        // se for usar, descomentar //'taxonomies' => array('taxonomia') do post type (logo acima)

        $labels = array(
            'name' => _x('Tipos', 'taxonomy general name', 'SLUG'),
            'singular_name' => _x('Tipo', 'taxonomy singular name', 'SLUG'),
            'search_items' => __('Buscar Tipos', 'SLUG'),
            'all_items' => __('Todos os Tipos', 'SLUG'),
            'parent_item' => __('Tipo pai', 'SLUG'),
            'parent_item_colon' => __('Tipo pai:', 'SLUG'),
            'edit_item' => __('Editar Tipo', 'SLUG'),
            'update_item' => __('Atualizar Tipo', 'SLUG'),
            'add_new_item' => __('Adicionar Tipo', 'SLUG'),
            'new_item_name' => __('Novo nome de Tipo', 'SLUG'),
        );

        register_taxonomy('tipo', self::$post_type, array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            )
        );
        
        $labels = array(
            'name' => _x('Temas', 'taxonomy general name', 'SLUG'),
            'singular_name' => _x('Tema', 'taxonomy singular name', 'SLUG'),
            'search_items' => __('Buscar Temas', 'SLUG'),
            'all_items' => __('Todos os Temas', 'SLUG'),
            'parent_item' => __('Tema pai', 'SLUG'),
            'parent_item_colon' => __('Tema pai:', 'SLUG'),
            'edit_item' => __('Editar Tema', 'SLUG'),
            'update_item' => __('Atualizar Tema', 'SLUG'),
            'add_new_item' => __('Adicionar Tema', 'SLUG'),
            'new_item_name' => __('Novo nome de Tema', 'SLUG'),
        );

        register_taxonomy('tema', self::$post_type, array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            )
        );
    }

    static function change_menu_label($stuff)
    {
        global $menu, $submenu;
        foreach ($menu as $i => $mi) {
            if ($mi[0] == self::NAME) {
                $menu[$i][0] = self::MENU_NAME;
            }
        }
        return $stuff;
    }

    static function custom_menu_order()
    {
        return true;
    }
    
    static function pdf_metabox() {
        global $post;
        $link    = get_post_meta($post->ID, 'pdf-link', true);
        echo '<div class="link_header">';
        $query_pdf_args = array(
                'post_type' => 'attachment',
                'post_mime_type' =>'application/pdf',
                'post_status' => 'inherit',
                'posts_per_page' => -1,
                'post_parent' => $post->ID
                );
        $query_pdf = new WP_Query( $query_pdf_args );
        $pdf = array();
        echo '<select name="pdf-link">';
        //echo '<option class="pdf_select">SELECT pdf FILE</option>';
        foreach ( $query_pdf->posts as $file) {
           if($link == $file->guid){
              echo '<option value="'.$file->guid.'" selected="true">'.$file->guid.'</option>';
                 }else{
              echo '<option value="'.$file->guid.'">'. $file->guid.'</option>';
                 }
        }
        echo '</select><br /></div>';
        echo '<p>Faça upload de um PDF nesta publicação e selecione aqui o arquivo.</p>';
    }
    
    static function fonte_metabox() {
        global $post;
        $fonte    = get_post_meta($post->ID, 'fonte-nome', true);
        $link    = get_post_meta($post->ID, 'fonte-link', true);
        echo '<div class="link_header">';
        
        ?>
        <p>
        <b>Nome da fonte</b><br/>
        <input type="text" name="fonte-nome" value="<?php echo $fonte; ?>" />
        </p>
        <p>
        <b>Link da fonte</b><br/>
        <input type="text" name="fonte-link" value="<?php echo $link; ?>" />
        </p>
        <?php
    }
    

    /**
     * Chamado pelo hook save_post
     * @param int $post_id
     * @param object $post
     */
    static function on_save($post_id)
    {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;

        global $post;
        if ($post->post_type == self::$post_type) {
            update_post_meta($post->ID, "pdf-link", $_POST["pdf-link"]);
            update_post_meta($post->ID, "fonte-link", $_POST["fonte-link"]);
            update_post_meta($post->ID, "fonte-nome", $_POST["fonte-nome"]);
        }
    }

}
Publicacoes::init();

function the_pdf_link(){
        global $post;
        echo get_post_meta($post->ID, 'pdf-link', true);
        
        //TODO, se não tiver nenhum, pega o primeiro
}

function get_pdf_link(){
    global $post;

    if( get_post_type() !== 'publicacoes' )
        return false;
    
    $pdf_link = get_post_meta($post->ID, 'pdf-link', true);

    if( !empty($pdf_link) )
        return "<a href='" . $pdf_link . "' target='_blank' title='Baixar PDF'>Baixar PDF</a>";

    return false;
}

function get_fonte_link(){
    global $post;

    if( get_post_type() !== 'publicacoes' )
        return false;
    
    $fonte_link = get_post_meta($post->ID, 'fonte-link', true);

    if( !empty( $fonte_link ) )
        return "Fonte: <a href='" . $fonte_link . "' target='_blank'>". get_post_meta($post->ID, 'fonte-nome', true) ."</a>";

    return false;
}

function sniic_publicacoes_content_filter( $content ) {

    if( get_post_type() !== 'publicacoes' )
        return $content;
    
    $content = $content . get_pdf_link();

    if( !empty( get_fonte_link() ) )
     $content = $content . " - " . get_fonte_link();
   
    return $content;
}
add_filter( 'the_content', 'sniic_publicacoes_content_filter' );
