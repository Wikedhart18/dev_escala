<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    public static function setTypeUrl()
    {
        if ($_SERVER['SERVER_NAME'] == 'localhost') {
            return '/escala';
        } else {
            return '';
        }
    }

    public static function setElementByServer($server, $element)
    {
        if ($_SERVER['SERVER_NAME'] == $server) {
            return $element;
        } else {
            return '';
        }
    }

      public static function get_img($image_id, $type)
    {
        $image_url = wp_get_attachment_url($image_id);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

        if ($type == 'src') {
            return $image_url;
        } else if ($type == 'alt') {
            return $image_alt;
        } else {
            return $image_url;
        }
    }


    public static function setFilePath($file)
    {
        return get_stylesheet_directory_uri() . $file;
    }

    /**
     * Sustituye el año fijo del copyright (p. ej. 2024 ©) por el año actual.
     */
    public static function replaceFooterCopyrightYear($html)
    {
        if (empty($html) || !is_string($html)) {
            return $html;
        }

        $year = date('Y');

        $html = preg_replace(
            '/\b20\d{2}\b(?=\s*(?:©|&copy;|&#169;))/iu',
            $year,
            $html,
            1
        );

        $html = preg_replace(
            '/(?:©|&copy;|&#169;)\s*\b20\d{2}\b/iu',
            '© ' . $year,
            $html,
            1
        );

        return $html;
    }

    public static function get_page_by_template($template = '')
    {
        $args = [
            'post_type' => 'page',
            'fields' => 'ids',
            'nopaging' => true,
            'meta_key' => '_wp_page_template',
            'meta_value' => $template,
        ];
        $pages = get_posts($args);

        return $pages;
    }

    public static function wp_get_menu_array($current_menu)
    {
        $array_menu = wp_get_nav_menu_items($current_menu);
        $menu = [];
        foreach ($array_menu as $m) {
            if (empty($m->menu_item_parent)) {
                $menu[$m->ID] = [];
                $menu[$m->ID]['ID'] = $m->ID;
                $menu[$m->ID]['title'] = $m->title;
                $menu[$m->ID]['url'] = $m->url;
                $menu[$m->ID]['children'] = [];
            }
        }
        $submenu = [];
        foreach ($array_menu as $m) {
            if ($m->menu_item_parent) {
                $submenu[$m->ID] = [];
                $submenu[$m->ID]['ID'] = $m->ID;
                $submenu[$m->ID]['title'] = $m->title;
                $submenu[$m->ID]['url'] = $m->url;
                $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
            }
        }

        return $menu;
    }

    public static function create_bootstrap_menu($menu_id = null, $classSection = null, $specialClass = null)
    {
        if (isset($menu_id) && $menu_id != null && isset($classSection) && $classSection != null) {

            $menu_items = wp_get_nav_menu_items($menu_id);

            $column_1 = null;
            $column_2 = null;

            $menu_list = '<ul id="menu-' . $classSection . '" class="mb-2 navbar-nav mb-md-0 ' . $specialClass . '">';
            $menucount = 1;
            $bool = true;
            foreach ($menu_items as $menu_item) {

                if ($menu_item->menu_item_parent == 0) {

                    $parent = $menu_item->ID;

                    $menu_array = [];
                    $menu_array2 = [];

                    $itemsCount = 0;
                    $two_columns = 0;
                    $child_elements = [];
                    $columns = [
                        'column_1' => [],
                        'column_2' => [],
                    ];

                    foreach ($menu_items as $submenu) {
                        if ($submenu->menu_item_parent == $parent) {
                            array_push($child_elements, $submenu);
                        }
                    }

                    if (ACF_CUSTOM::_getField('enable_menu_parent_principal',  $menu_item->ID) == 1) {

                        if (ACF_CUSTOM::_getField('parent_menu_principal_columns',  $menu_item->ID) === 'parent_1_columns') {
                            $two_columns = 0;
                        }
                        if (ACF_CUSTOM::_getField('parent_menu_principal_columns',  $menu_item->ID) === 'parent_2_columns') {

                            $aux_first = ceil(count($child_elements) / 2);
                            $columns['column_1'] = array_slice($child_elements, 0, $aux_first);
                            $columns['column_2'] = array_slice($child_elements, $aux_first, count($child_elements));
                            $two_columns = 1;
                        }
                    } elseif (count($child_elements) >= 3) {
                        // echo 'division '.ceil(7 / 2);
                        $aux_first = ceil(count($child_elements) / 2);
                        $columns['column_1'] = array_slice($child_elements, 0, $aux_first);
                        $columns['column_2'] = array_slice($child_elements, $aux_first, count($child_elements));
                        $two_columns = 1;
                    }

                    if ($two_columns === 1) {
                        foreach ($columns['column_1'] as $submenu) {
                            if ($submenu->menu_item_parent == $parent) {
                                $bool = true;
                                $containItem = null;

                                if (ACF_CUSTOM::_getField('enable_menu_item_coming_soon', $submenu->ID) == 1) {
                                    $containItem = '<a p1 class="dropdown-item " role="menuitem"  href="#" disabled ><span class="specialItem">';
                                } else {
                                    $containItem = '<a p1 class="dropdown-item " role="menuitem"  href="' . $submenu->url . '" ><span class="specialItem">';
                                }

                                if (ACF_CUSTOM::_getField('enable_menu_item_icon', $submenu->ID) == 1) {
                                    // '.$submenu->title.
                                    if (ACF_CUSTOM::_getField('menu_item_icon', $submenu->ID) != null) {
                                        $containItem .= '<span class="icon">';
                                        $containItem .= ACF_CUSTOM::_getField('menu_item_icon', $submenu->ID);
                                        $containItem .= '</span>';
                                    }
                                }

                                if (
                                    ACF_CUSTOM::_getField('enable_menu_item_coming_soon', $submenu->ID) == 1 &&
                                    ACF_CUSTOM::_getField('coming_soon', $submenu->ID) != null
                                ) {
                                    $a = ACF_CUSTOM::_getField('coming_soon', $submenu->ID);
                                    $containItem .= '<span class="infoItem"><span><button  class="' . implode(" ", $submenu->classes) . '">' . $submenu->title . '</button><small>' . $a . '</small></span>';
                                } else {
                                    $containItem .= '<span class="infoItem"><span><button  class="' . implode(" ", $submenu->classes) . '">' . $submenu->title . '</button></span>';
                                }

                                if (ACF_CUSTOM::_getField('enable_menu_item_description', $submenu->ID) == 1) {
                                    // '.$submenu->title.
                                    if (ACF_CUSTOM::_getField('menu_item_description', $submenu->ID) != null) {
                                        $containItem .= '<p>';
                                        $containItem .= ACF_CUSTOM::_getField('menu_item_description', $submenu->ID);
                                        $containItem .= '</p>';
                                    }
                                }

                                $containItem .= '</span></a>';

                                $menu_array[] = '<li 1 itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-' . $submenu->ID . ' nav-item ">' . $containItem . '</li>';

                            }
                        }
                        foreach ($columns['column_2'] as $submenu) {
                            if ($submenu->menu_item_parent == $parent) {
                                $bool = true;
                                $containItem = null;


                                if (ACF_CUSTOM::_getField('enable_menu_item_coming_soon', $submenu->ID) == 1) {
                                    $containItem = '<a p1 class="dropdown-item " role="menuitem"  href="#" disabled ><span class="specialItem">';
                                } else {
                                    $containItem = '<a p1 class="dropdown-item " role="menuitem"  href="' . $submenu->url . '" ><span class="specialItem">';
                                }

                                if (ACF_CUSTOM::_getField('enable_menu_item_icon', $submenu->ID) == 1) {
                                    // '.$submenu->title.
                                    if (ACF_CUSTOM::_getField('menu_item_icon', $submenu->ID) != null) {
                                        $containItem .= '<span class="icon">';
                                        $containItem .= ACF_CUSTOM::_getField('menu_item_icon', $submenu->ID);
                                        $containItem .= '</span>';
                                    }
                                }

                                if (
                                    ACF_CUSTOM::_getField('enable_menu_item_coming_soon', $submenu->ID) == 1 &&
                                    ACF_CUSTOM::_getField('coming_soon', $submenu->ID) != null
                                ) {
                                    $a = ACF_CUSTOM::_getField('coming_soon', $submenu->ID);
                                    $containItem .= '<span class="infoItem"><span><button  class="' . implode(" ", $submenu->classes) . '">' . $submenu->title . '</button><small>' . $a . '</small></span>';
                                } else {
                                    $containItem .= '<span class="infoItem"><span><button  class="' . implode(" ", $submenu->classes) . '"> ' . $submenu->title . '</button></span>';
                                }

                                if (ACF_CUSTOM::_getField('enable_menu_item_description', $submenu->ID) == 1) {
                                    // '.$submenu->title.
                                    if (ACF_CUSTOM::_getField('menu_item_description', $submenu->ID) != null) {
                                        $containItem .= '<p>';
                                        $containItem .= ACF_CUSTOM::_getField('menu_item_description', $submenu->ID);
                                        $containItem .= '</p>';
                                    }
                                }

                                $containItem .= '</span></a>';

                                $menu_array2[] = '<li 1 itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-' . $submenu->ID . ' nav-item ">' . $containItem . '</li>';
                                // $parents = $submenu->ID;

                                // foreach ($columns['column_2'] as $submenus) {
                                //     if ($submenus->menu_item_parent == $parents) {
                                //         $menu_array2[] .= '<li itemscope="itemscope" class="menu-item nav-item menu-item-'.$submenus->ID.'"><a p2 class="nav-link" href="'.$submenus->url.'" >'.$submenus->title.'</a></li>';
                                //     }
                                // }
                                // $menu_array2[] .= '</ul></li>';
                            }
                        }

                        if ($bool == true && count($menu_array) > 0 && count($menu_array2) > 0) {
                            $href = null;
                            $data_href = null;
                            $openAtt = 'openLink';

                            if (ACF_CUSTOM::_getField('enable_extra_link', $menu_item->ID) == 1) {
                                if (ACF_CUSTOM::_getField('extra_link', $menu_item->ID) != null) {
                                    $href = ACF_CUSTOM::_getField('extra_link', $menu_item->ID);
                                    $data_href = ACF_CUSTOM::_getField('extra_link', $menu_item->ID);
                                } else {
                                    $href = '#';
                                    $data_href = $menu_item->url;
                                    $openAtt = null;
                                }
                            } else {
                                $href = '#';
                                $data_href = $menu_item->url;
                                $openAtt = null;
                            }

                            $menu_list .= '<li 2 class="menu-item menu-item-has-children dropdown menu-item-' . $menu_item->ID . '">';
                            $menu_list .= '<a p3 class="nav-link" href="' . $href . '" data-href="' . $data_href . '" ' . $openAtt . ' data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-' . $menu_item->ID . '" ><span>' . $menu_item->title . '</span> <i class="fas fa-caret-down"></i></a>';

                            $menu_list .= '<div class="dropdown_two_columns dropdown-menu animate slideIn" aria-labelledby="menu-item-dropdown-' . $menu_item->ID . '" role="menu" style="display: none;">' . "\n";
                            $menu_list .= '<ul  >' . "\n";
                            $menu_list .= implode($menu_array);
                            $menu_list .= '</ul>';
                            $menu_list .= '<ul  >' . "\n";
                            $menu_list .= implode($menu_array2);
                            $menu_list .= '</ul>';
                            $menu_list .= '</div>';
                            // $menu_list .= '<ul class="dropdown-menu animate slideIn" aria-labelledby="menu-item-dropdown-'.$menu_item->ID.'" role="menu" style="display: none;">'."\n";
                            // $menu_list .= implode($menu_array);
                            // $menu_list .= '</ul>';
                        } else {
                            // echo "<pre>"; print_r($menu_item);

                            $classElements = null;
                            if (count($menu_item->classes) > 0) {
                                $classElements = implode(' ', $menu_item->classes);
                            }

                            $menu_list .= '<li itemscope="itemscope" class="menu-item nav-item menu-item-' . $menu_item->ID . ' ' . $classElements . ' ">';
                            $menu_list .= '<a p4 class="nav-link " href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                        }
                    }
                    if ($two_columns != 1) {
                        foreach ($menu_items as $submenu) {
                            if ($submenu->menu_item_parent == $parent) {
                                $bool = true;

                                $containItem = null;

                                if (ACF_CUSTOM::_getField('enable_menu_item_coming_soon', $submenu->ID) == 1) {
                                    $containItem = '<a p1 class="dropdown-item" role="menuitem"  href="#" disabled ><span class="specialItem">';
                                } else {
                                    $containItem = '<a p1 class="dropdown-item " role="menuitem"  href="' . $submenu->url . '" ><span class="specialItem">';
                                }

                                if (ACF_CUSTOM::_getField('enable_menu_item_icon', $submenu->ID) == 1) {
                                    // '.$submenu->title.
                                    if (ACF_CUSTOM::_getField('menu_item_icon', $submenu->ID) != null) {
                                        $containItem .= '<span class="icon">';
                                        $containItem .= ACF_CUSTOM::_getField('menu_item_icon', $submenu->ID);
                                        $containItem .= '</span>';
                                    }
                                }

                                if (
                                    ACF_CUSTOM::_getField('enable_menu_item_coming_soon', $submenu->ID) == 1 &&
                                    ACF_CUSTOM::_getField('coming_soon', $submenu->ID) != null
                                ) {
                                    $a = ACF_CUSTOM::_getField('coming_soon', $submenu->ID);
                                    $containItem .= '<span class="infoItem"><span><button  class="' . implode(" ", $submenu->classes) . '">' . $submenu->title . '</button><small>' . $a . '</small></span>';
                                } else {
                                    $containItem .= '<span class="infoItem"><span><button  class="' . implode(" ", $submenu->classes) . '">' . $submenu->title . '</button></span>';
                                }

                                if (ACF_CUSTOM::_getField('enable_menu_item_description', $submenu->ID) == 1) {
                                    // '.$submenu->title.
                                    if (ACF_CUSTOM::_getField('menu_item_description', $submenu->ID) != null) {
                                        $containItem .= '<p>';
                                        $containItem .= ACF_CUSTOM::_getField('menu_item_description', $submenu->ID);
                                        $containItem .= '</p>';
                                    }
                                }

                                $containItem .= '</span></a>';

                                $menu_array[] = '<li 1 itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-' . $submenu->ID . ' nav-item">' . $containItem . '</li><ul>';
                                $parents = $submenu->ID;

                                foreach ($menu_items as $submenus) {
                                    if ($submenus->menu_item_parent == $parents) {
                                        $menu_array[] .= '<li itemscope="itemscope" class="menu-item nav-item menu-item-' . $submenus->ID . '"><a p2 class="nav-link" href="' . $submenus->url . '" >' . $submenus->title . '</a></li>';
                                    }
                                }
                                $menu_array[] .= '</ul></li>';
                            }
                        }

                        if ($bool == true && count($menu_array) > 0) {
                            $href = null;
                            $data_href = null;
                            $openAtt = 'openLink';

                            if (ACF_CUSTOM::_getField('enable_extra_link', $menu_item->ID) == 1) {
                                if (ACF_CUSTOM::_getField('extra_link', $menu_item->ID) != null) {
                                    $href = ACF_CUSTOM::_getField('extra_link', $menu_item->ID);
                                    $data_href = ACF_CUSTOM::_getField('extra_link', $menu_item->ID);
                                } else {
                                    $href = '#';
                                    $data_href = $menu_item->url;
                                    $openAtt = null;
                                }
                            } else {
                                $href = '#';
                                $data_href = $menu_item->url;
                                $openAtt = null;
                            }

                            $menu_list .= '<li 2 class="menu-item menu-item-has-children dropdown menu-item-' . $menu_item->ID . '">';
                            $menu_list .= '<a p3 class="nav-link" href="' . $href . '" data-href="' . $data_href . '" ' . $openAtt . ' data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-' . $menu_item->ID . '" ><span>' . $menu_item->title . '</span> <i class="fas fa-caret-down"></i></a>';

                            $menu_list .= '<div class="no_two_columns dropdown-menu animate slideIn" aria-labelledby="menu-item-dropdown-' . $menu_item->ID . '" role="menu" style="display: none;">' . "\n";
                            $menu_list .= '<ul  >' . "\n";
                            $menu_list .= implode($menu_array);
                            $menu_list .= '</ul>';
                            $menu_list .= '</div>';
                        } else {

                            $classElements = null;
                            if (count($menu_item->classes) > 0) {
                                $classElements = implode(' ', $menu_item->classes);
                            }

                            $menu_list .= '<li itemscope="itemscope" class="menu-item nav-item menu-item-' . $menu_item->ID . ' ' . $classElements . '">';
                            $menu_list .= '<a p4 class="nav-link " href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                        }
                    }
                }

                $menu_list .= '</li>';

                ++$menucount;
            }
        } else {
            $menu_list = '<!-- no menu defined in location -->';
        }

        return $menu_list;
    }
}
