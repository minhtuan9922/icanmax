<?php /* Smarty version 3.1.24, created on 2015-12-26 11:25:12
         compiled from "/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.see_more.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:541362713567e791824f249_69105710%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dfbabe06d4b7b01e10aa52014689ba3efa1dc7f' => 
    array (
      0 => '/home/vnzuicom/public_html/fb/content/themes/default/templates/ajax.see_more.tpl',
      1 => 1451028936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '541362713567e791824f249_69105710',
  'variables' => 
  array (
    'get' => 0,
    'data' => 0,
    '_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_567e791835ab88_15870923',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567e791835ab88_15870923')) {
function content_567e791835ab88_15870923 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '541362713567e791824f249_69105710';
if ($_smarty_tpl->tpl_vars['get']->value == 'newsfeed' || $_smarty_tpl->tpl_vars['get']->value == 'posts_profile' || $_smarty_tpl->tpl_vars['get']->value == 'posts_page' || $_smarty_tpl->tpl_vars['get']->value == 'posts_group') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>

<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'shares') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_snippet'=>true), 0);
?>

<?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'post_comments' || $_smarty_tpl->tpl_vars['get']->value == 'photo_comments') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['comment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
$foreach_comment_Sav = $_smarty_tpl->tpl_vars['comment'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_post.comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['comment'] = $foreach_comment_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'post_likes' || $_smarty_tpl->tpl_vars['get']->value == 'photo_likes' || $_smarty_tpl->tpl_vars['get']->value == 'comment_likes' || $_smarty_tpl->tpl_vars['get']->value == 'blocks') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'pages') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->_loop = true;
$foreach__page_Sav = $_smarty_tpl->tpl_vars['_page'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_page'] = $foreach__page_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'groups') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->_loop = true;
$foreach__group_Sav = $_smarty_tpl->tpl_vars['_group'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_group'] = $foreach__group_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'profile_pages') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->_loop = true;
$foreach__page_Sav = $_smarty_tpl->tpl_vars['_page'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_parent'=>"profile"), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_page'] = $foreach__page_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'profile_groups') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_group'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_group']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->_loop = true;
$foreach__group_Sav = $_smarty_tpl->tpl_vars['_group'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_parent'=>"profile"), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_group'] = $foreach__group_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'friend_requests') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"request"), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'friend_requests_sent') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"cancel"), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'mutual_friends') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"remove"), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'new_people') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"add"), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'friends' || $_smarty_tpl->tpl_vars['get']->value == 'followers' || $_smarty_tpl->tpl_vars['get']->value == 'followings' || $_smarty_tpl->tpl_vars['get']->value == 'members') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->_loop = true;
$foreach__user_Sav = $_smarty_tpl->tpl_vars['_user'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_parent'=>"profile"), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_user'] = $foreach__user_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'notifications') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['notification'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['notification']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->_loop = true;
$foreach_notification_Sav = $_smarty_tpl->tpl_vars['notification'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['notification'] = $foreach_notification_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'conversations') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['conversation'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['conversation']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->_loop = true;
$foreach_conversation_Sav = $_smarty_tpl->tpl_vars['conversation'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['conversation'] = $foreach_conversation_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'messages') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['message'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['message']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
$foreach_message_Sav = $_smarty_tpl->tpl_vars['message'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['message'] = $foreach_message_Sav;
}
?>


<?php } elseif ($_smarty_tpl->tpl_vars['get']->value == 'games') {?>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['_game'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['_game']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_game']->value) {
$_smarty_tpl->tpl_vars['_game']->_loop = true;
$foreach__game_Sav = $_smarty_tpl->tpl_vars['_game'];
?>
	<?php echo $_smarty_tpl->getSubTemplate ('__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->tpl_vars['_game'] = $foreach__game_Sav;
}
?>
<?php }
}
}
?>