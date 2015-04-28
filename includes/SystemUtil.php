<?php

/*
 * Extracto de funciones base de Epsylon
 */

/**
 * Description of SystemUtil
 *
 * @author Evolution
 */
abstract class SystemUtil {

    public static function createMenuNav($paramArray) {
        echo '<nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">                       
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-principal">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="nav-text">Desplegar Menú</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">&nbsp</a>
                            </div>
							<div class="collapse navbar-collapse" id="menu-principal">
                                <ul class="nav navbar-nav">
                                    ' . self::bootstrap_main_menu($paramArray, "active") . ' 
                                </ul>
                            </div>
                        </nav>';
    }

    //$parent, $level, $topline, $actual = "", $sub = 0, $class_active = "active"
    public static function bootstrap_main_menu($paramArray = null, $class_active = "active") {
        foreach ($paramArray as $key => $val) {
            $$key = $val;
        }
        $str = null;
        if ($class_active == null || empty($class_active))
            $class_active = "active";

        foreach ($menuArray as $menu => $submenu) {
            //Agregado para crear links en modo MOD REWRITE ON
            //null primer parametro de submenu no tiene link
            if (is_array($submenu[1])) {
                if (!empty($submenu[0]) || $submenu[0] != null) {
                    $link_ = $submenu[0];
                }				
				//
				if ($topline == 1 && $sub == 0) {
					$litag = "<li class='dropdown'>";
					$hreftag = "<b class='caret'></b>";
				} elseif ($topline == 0 && $sub == 0) {
					$litag = "<li class='dropdown'>";
					$hreftag = "<b class='caret'></b>";
				} elseif ($topline == 1 && $sub == 1) {
					$litag = "<li class='dropdown dropdown-submenu'>";
					$hreftag = "";
				} elseif ($topline == 0 && $sub == 1) {
					$litag = "<li class='dropdown dropdown-submenu'>";
					$hreftag = "";
				}
				
                $str .= $litag;
                $str .= "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>" . $menu . $hreftag."</a>";
                $str .= "<ul class='dropdown-menu'>";
                $str .= self::bootstrap_main_menu(
                                array(
                                    "level" => $level + 1,
                                    "topline" => 1,
                                    "actual" => $actual,
                                    "sub" => 1,
                                    "menuArray" => $submenu[1]
                                ), "active"
                );
                $str .= "</ul>";
                $str .= "</li>";
            } else {
		if ($topline == 1 && $sub == 0) {
            $litag = "<li>";
            $hreftag = "";
        } elseif ($topline == 0 && $sub == 0) {
            $litag = "<li>";
            $hreftag = "";
        } elseif ($topline == 1 && $sub == 1) {
            $litag = "<li>";
            $hreftag = "";
        } elseif ($topline == 0 && $sub == 1) {
            $litag = "<li>";
            $hreftag = "";
        }

		if ($actual == $submenu[0]) {
                    $a_class = " class='" . $class_active . "'";
                } else {
                    $a_class = "";
                }
                $str .= "<li" . $a_class . "><a href='" . $link_ . "'>" . $menu . "</a></li>";
            }
        }

        return $str;
    }

}
