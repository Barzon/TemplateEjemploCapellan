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
        echo '<nav class="navbar navbar-inverse main-menu">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-principal">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="nav-text">Desplegar Menú</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">&nbsp</a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="menu-principal">
                                <ul class="nav navbar-nav">
                                    ' . SystemUtil::bootstrap_main_menu($paramArray, "active") . ' 
                                </ul>
                            </div>
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

        if ($topline == 1 && $sub == 0) {
            $litag = "<li>";
            $hreftag = "";
        } elseif ($topline == 0 && $sub == 0) {
            $litag = "<li>";
            $hreftag = "";
        } elseif ($topline == 1 && $sub == 1) {
            $litag = "<li class='dropdown'>";
            $hreftag = "";
        } elseif ($topline == 0 && $sub == 1) {
            $litag = "<li class='dropdown'>";
            $hreftag = "";
        }

        foreach ($menuArray as $menu => $submenu) {
            //Agregado para crear links en modo MOD REWRITE ON
            //null primer parametro de submenu no tiene link
            if (is_array($submenu[1])) {
                if (!empty($submenu[0]) || $submenu[0] != null) {
                    $link_ = $submenu[0];
                }
                $str .= "<li class='dropdown'>";
                $str .= "<a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>" . $menu . "<span class='caret'></span></a>";
                $str .= "<ul class='dropdown-menu' role='menu'>";
                if ($hreftag == "") {
                    $valsub = 1;
                } else {
                    $valsub = 0;
                }
                $str .= self::bootstrap_main_menu(
                                array(
                                    "level" => $level + 1,
                                    "topline" => 1,
                                    "actual" => $actual,
                                    "sub" => $sub,
                                    "menuArray" => $submenu[1]
                                )
                );
                $str .= "</ul>";
                $str .= "</li>";
            } else {
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
