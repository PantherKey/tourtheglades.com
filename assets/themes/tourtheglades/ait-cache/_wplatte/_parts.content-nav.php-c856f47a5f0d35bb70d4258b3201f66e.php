<?php //netteCache[01]000495a:2:{s:4:"time";s:21:"0.31875500 1372952917";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:105:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/content-nav.php";i:2;i:1372952423;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/content-nav.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'mj5c59jded')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if($GLOBALS["wp_query"]->max_num_pages > 1): ?>
	<nav id="<?php echo htmlSpecialChars($location) ?>">
		<?php ob_start() ;echo $template->printf(__('%s Newer posts', 'ait'), '<span class="meta-nav">&larr;</span>') ;$prev = ob_get_clean() ?>

		<?php ob_start() ;echo $template->printf(__('%s Older posts', 'ait'), '<span class="meta-nav">&rarr;</span>') ;$next = ob_get_clean() ?>

		<div class="nav-previous"><?php previous_posts_link($prev) ?></div>
		<div class="nav-next"><?php next_posts_link($next) ?></div>
	</nav>
<?php endif; 
