<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller']                        = "home/index";
$route['vn']                                        = "home/index/lang";
$route['eng']                                       = "home/index/lang";
$route['404_override']                              = '';

/*fronend*/
$route['cate-p/(:num)/(:any)']                      = "home/post/index/$1/$2";
$route['cate-p/(:num)/(:any)']                      = "home/post/index/$1/$2";

$route['user/login']                                = "home/user/login";
$route['user/regis']                                = "home/user/regis";
$route['user-logout']                               = "home/user/logout";
$route['user-info']                                 = "home/userpage/userInfo";
$route['user-notifications']                        = "home/userpage/user_notifications";
$route['user-message']                              = "home/userpage/user_message";
$route['user-setup']                                = "home/userpage/user_setup";
$route['user-pay']                                  = "home/userpage/user_pay";
$route['user-history']                              = "home/userpage/user_history";
$route['user-managerfile']                          = "home/userpage/user_managerfile";
$route['user-infocompany']                          = "home/userpage/user_infocompany";

$route['logout']                                    = "home/user/logout";
$route['page/(:num)/intro']                         = "home/page/intro/$1/$2";
$route['page/(:num)/service']                       = "home/page/service/$1/$2";
$route['page/(:num)/recruiter']                     = "home/page/recruiter/$1/$2";
$route['page/(:num)/contact']                       = "home/page/contact/$1/$2";
//post
$route['page/(:num)/news']                          = "home/post";
$route['catepost/view/(:num)/(:any)']               = "home/post/catepost/$1";
$route['itempost/view/(:num)/(:any)']               = "home/post/itempost/$1";

$route['page/3/recruiter']                          = "home/recruiter";
$route['itemrecruiter/view/(:num)/(:any)']          = "home/recruiter/itemrecruiter/$1";
$route['recruiter/search']                         = "home/recruiter/search";

$route['cate-pro/(:num)/(:any)']                    = "home/product/index/$1";
$route['search']                                    = "home/product/search";
$route['item-pro/view/(:num)/(:any)']               = "home/product/detail/$1";

$route['cate-building/(:num)/(:any)']               = "home/building/index/$1";
$route['view-building/(:num)/(:any)']               = "home/building/detail/$1";
$route['cate-building/search/(:any)/(:num)']        = "home/building/search_land/$1/$2";

//shopping
$route['gio-hang']                                  = "home/shop/listView";
$route['gio-hang/step-2']                           = "home/shop/step";
$route['gio-hang/success']                          = "home/shop/success";
$route['cart/add/(:num)']                           = "home/shop/addcart/$1";
$route['cart/add-i/(:num)/(:num)']                  = "home/shop/addcart/$1/$2";
$route['update-cart']                               = "home/shop/updatecart";
$route['delall-cart']                               = "home/shop/emptycart";
$route['del-cart/(:num)']                           = "home/shop/delcart/$1";


//backend
$route['admin']                                     = "admin/home";
$route['admin/vn']                                  = "admin/home/lang";
$route['admin/en']                                  = "admin/home/lang";
$route['admin/admin']                               = "admin/admin";
$route['admin/admin/update_info']                   = "admin/admin/update_info";
$route['admin/admin/edit/(:num)']                   = "admin/admin/form/$1";
$route['admin/admin/del/(:num)']                    = "admin/admin/del/$1";
$route['admin/admin/add']                   		= "admin/admin/form";

$route['admin/cus/1']                         		= "admin/cus/candidate";
$route['admin/cus/2']                         		= "admin/cus/recruiter";
$route['admin/cus/3']                         		= "admin/cus/custormer";
$route['admin/cus/4']                         		= "admin/cus/shop";
$route['admin/cus/update_info']                   	= "admin/cus/update_info";
$route['admin/cus/edit/(:num)']                   	= "admin/cus/form/$1";
$route['admin/cus/del/(:num)']                    	= "admin/cus/del/$1";
$route['admin/cus/add']                   			= "admin/cus/form";

$route['admin/product']                         	= "admin/product/index";
$route['admin/product/add']                         = "admin/product/form_pro";
$route['admin/product/edit/(:num)']                 = "admin/product/form_pro/$1";

$route['admin/land']                         	    = "admin/land/index";
$route['admin/land/add']                            = "admin/land/form_pro";
$route['admin/land/edit/(:num)']                    = "admin/land/form_pro/$1";

$route['admin/cate/add']                            = "admin/cate/form_cate";
$route['admin/cate/edit/(:num)']                    = "admin/cate/form_cate/$1";
$route['admin/cate/del/(:num)']                     = "admin/cate/del/$1";
$route['admin/cago/add']                            = "admin/cago/form_cate";
$route['admin/cago/edit/(:num)']                    = "admin/cago/form_cate/$1";
$route['admin/cago/del/(:num)']                     = "admin/cago/del/$1";
$route['admin/post/add']                            = "admin/post/form_pro";
$route['admin/post/edit/(:num)']                    = "admin/post/form_pro/$1";
$route['admin/banner/add']                          = "admin/banner/form_pro";
$route['admin/banner/edit/(:num)']                  = "admin/banner/form_pro/$1";

$route['admin/recruiter']                           = "admin/recruiter";
$route['admin/recruiter/add']                       = "admin/recruiter/form";
$route['admin/recruiter/edit/(:num)']               = "admin/recruiter/form/$1";
$route['admin/recruiter/del/(:num)']                = "admin/recruiter/del/$1";

$route['admin/reCate']                           	= "admin/reCate";
$route['admin/position']                           	= "admin/reCate/position";
$route['admin/reCate/position_add']                	= "admin/reCate/position_add";
$route['admin/career']                           	= "admin/reCate/career";
$route['admin/location']                           	= "admin/reCate/location";
$route['admin/wage']                           		= "admin/reCate/wage";
$route['admin/exp']                           		= "admin/reCate/exp";
$route['admin/certificate']                         = "admin/reCate/certificate";

$route['admin/landcate']                           	= "admin/landcate";
$route['admin/landcate/edit/(:num)']                = "admin/landcate/form_cate/$1";
$route['admin/landcate/add']                        = "admin/landcate/form_cate";
$route['admin/landcate/del/(:num)']                 = "admin/landcate/del/$1";
$route['admin/landcate/price']                      = "admin/landcate/price";
$route['admin/landcate/area']                       = "admin/landcate/area";
$route['admin/landcate/location']                   = "admin/landcate/location";

$route['admin/setup/seo']                           = "admin/setup/seo";
$route['admin/setup/info']                          = "admin/setup/info";
$route['admin/setup/cache']                         = "admin/setup/cache";
$route['admin/setup/cache_ajax']                    = "admin/setup/cache_ajax";
$route['admin/setup/del_cachefile']                 = "admin/setup/del_cachefile";

//ajax profile
$route['update-img-user'] 							= "home/ajax/update_img_user";
$route['update-profile-general']					= "home/ajax/update_profile_general";
$route['update-target']								= "home/ajax/update_target_career";
$route['update-education']							= "home/ajax/update_education";
$route['delete-education']							= "home/ajax/delete_education";
$route['update-exp']								= "home/ajax/update_exp";
$route['delete-exp']								= "home/ajax/delete_exp";

$route['update-language']							= "home/ajax/update_language";
$route['view-search']								= "home/ajax/view_search";
$route['remove-cv']									= "home/ajax/remove_cv";
$route['remove-profile']							= "home/ajax/remove_profile";
//change password
$route['change-password']                           = "home/userpage/change_pass";

//profile
$route['user-managerfile/profile-online']			= "home/profile/profile_online";
$route['user-managerfile/file-profile']				= "home/profile/file_profile";
//detail profile
$route['user-managerfile/view-profile/(:num)/(:any)']				= "home/profile/view_profile/$1/$2";		

//employer
$route['employer']									= "home/employer";
//seeker job
$route['seeker-job']								= "home/jobs";

/* End of file routes.php */
/* Location: ./application/config/routes.php */