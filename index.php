$accessori_cat_list = get_the_terms(get_the_ID(), 'accessori_cat');
$term_list = wp_get_post_terms(get_the_ID(), 'accessori_cat', array('parent' => 0));
foreach ($term_list as $single_cat) {
  $child_list = wp_get_post_terms(get_the_ID(), 'accessori_cat', array('parent' => $single_cat->term_id));

}
