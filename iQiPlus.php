<?php
    
    /*
     Plugin Name: iQiPlus
     Version:     1.0
     Author:      iQi
     Author URI:  http://wiki.jp.ai/at/iQiPlus
     Plugin URI:  http://plus.jp.ai/
     Description: SNS share tools for japan.
     */
    
    
    // for add to content ...
    function iQiPlus($HTM){
        
        if(!is_single()): return $HTM; endif;
        
        global $post;
        //wp_enqueue_style('iQiPlus', WP_PLUGIN_URL.'/'.dirname(plugin_basename(__FILE__)).'/iQiPlus.css', NULL, '1.0');
        wp_enqueue_style('iQiPlus',plugins_url( 'iQiPlus.css', __FILE__ ), NULL, '1.0');
        
        
        //$STYLE = $post['iqiplusstyle']?$_POST['iqiplusstyle']:'original';
        //$ALIGN = $post['iqiplusalign']?$_POST['iqiplusalign']:'left';
        //$TOTOP = $post['iqiplustotop']?$_POST['iqiplustotop']:'on';
        $STYLE = 'simple';
        $ALIGN = 'left';
        $TOTOP = 'on';
        
        $HTM .= '<div id="iQiPlus" class="clearfix">'."\n";
        $HTM .= '<b><i>iQiPlus</i></b>'."\n";
        $HTM .= '<script>iQiPlusStyle="'.$STYLE.'";iQiPlusAlign="'.$ALIGN.'";iQiPlusTotop="'.$TOTOP.'";</script><script src="http://api.jp.ai/iqi.plus/iqi.plus.wp.js" type="text/javascript"></script>';
        $HTM .= '<br clear="all"></div><!-- #iQiPlus -->';
        
        return $HTM;
    }
    
    add_filter('the_content', 'iQiPlus');
