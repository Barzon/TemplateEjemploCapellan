<?php
//definiciones de menu
//define('URL_BASE', 'http://localhost/TemplateEjemploCapellan/');
define('URL_BASE', 'http://www.colegiocapellanpascal.cl/');
/*
 * Debe editar el string entre comillas simples con el nombre del archivo de contenido
 */
$inicio = array(
    'Inicio' => array('inicio', null)
);
$personal_subs = array(
    'Directivos' => array('directivos', null),
    'Docentes' => array('CapellanPascal/nuestrocolegio/personal/002_profesores/profesores.html', null),
    'Apoyo a la Docencia' => array('CapellanPascal/nuestrocolegio/personal/006_apoyo_docencia/apoyo_docencia.html', null),
    'Administrativos' => array('CapellanPascal/nuestrocolegio/personal/003_administrativos/administrativos.html', null)
);
$historia_subs = array(
    'Nuestro Escudo' => array('CapellanPascal/nuestrocolegio/historia/escudo.html', null),
    'Capell&aacute;n E. Pascal' => array('CapellanPascal/nuestrocolegio/historia/capellanpascal.html', null),
    'Colegio Capell&aacute;n Pascal' => array('CapellanPascal/nuestrocolegio/historia/colegiocapellanpascal.html', null),
    'Video de nuestro Colegio' => array('CapellanPascal/Video.html', null)
);
$nuestro_colegio_subs = array(
    'Personal' => array('CapellanPascal/nuestrocolegio/personal/personal.html', $personal_subs),
    'Infraestructura' => array('CapellanPascal/nuestrocolegio/infraestructura/infraestructura.html', null),
    'Historia' => array('CapellanPascal/nuestrocolegio/historia/capellanpascal.html', $historia_subs),
    'Proyecto Educativo' => array('CapellanPascal/circulares/2014/PEI-CCP.pdf', null),
    'Ubicaci&oacute;n' => array('CapellanPascal/circulares/2013/Ubicacion.html', null)
);
$lista_aceptados_subs = array(
    'Lista Aceptados 2015' => array('CapellanPascal/admision/2015/Aceptados4 2015.htm', null)
);
$viajes_subs = array(
    '8vos. Básicos' => array('CapellanPascal/alumnos/viajes/2014/8basico.html', null),
    '3ros. Medios' => array('CapellanPascal/alumnos/viajes/2014/3medios.html', null)
);
$alumnos_subs = array(
    'Cursos 2014' => array('CapellanPascal/alumnos/cursos/2014/cursos.html', null),
    'Horarios' => array('CapellanPascal/Horarios/index.html', null),
    'Viajes de Estudio' => array('CapellanPascal/alumnos/viajes/2014/viajes.html', $viajes_subs),
    'Pastoral' => array('CapellanPascal/alumnos/pastoral/2014/pastoral_2014.htm', null),
    'Actividades' => array('CapellanPascal/alumnos/actividades/actividades.html', null),
    'Biblioteca' => array('CapellanPascal/alumnos/biblioteca/2013/CRA.pdf', null),
    'Centro Alumnos' => array('CapellanPascal/ceal/actividades.html', null),
    'Colegio en Línea' => array('http://intranet.colegiocapellanpascal.cl/sitio/colegio_inicio.php?idcolegio=2', null),
    '&Uacute;tiles Escolares' => array('CapellanPascal/alumnos/utiles/2015/utiles_2015.html', null),
    'Ex-Alumnos' => array('CapellanPascal/alumnos/exalumnos/exalumnos.html', null),
    'Programa Alfa' => array('CapellanPascal/alumnos/Programa alfa/Alfa.htm', null),
    'Men&uacute; Casino' => array('CapellanPascal/alumnos/Menu/Menu.html', null)
);
$circulares_subs = array(
    'Circular Nº1 2015' => array('CapellanPascal/circulares/2015/Circular1_2015.pdf', null),
    'Directivos 2015' => array('CapellanPascal/circulares/2015/Cuadro Directivos.pdf', null),
    'Circular Matrículas 2015' => array('CapellanPascal/circulares/2014/Circular_2015.pdf', null)
);
$principal = array(
    'Nuestro Colegio' => array('CapellanPascal/index.html', $nuestro_colegio_subs),
    'Admisi&oacute;n' => array(null, $lista_aceptados_subs),
    'Alumnos' => array(null, $alumnos_subs),
    'C.G.P. y A.' => array('http://www.pascalinos.cl', null),
    'Circulares' => array(null, $circulares_subs),
    'Contactos' => array('CapellanPascal/contacto.html',null)
);
$menuParametro = array(
    "topline" => 0,
    "sub" => 0,
    "actual" => null,
    "menuArray" => $principal
);
