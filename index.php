<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Report main page
 *
 * @package    report
 * @copyright  2019 Paulo Jr
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 /**
  * Estes são como includes de bibliotecas do moodle para poder utilizar variáveis e funções globais
  */
require(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/adminlib.php');

/**
 * Função para configurar o menu do relatório
 */
admin_externalpage_setup('reporteduardoatv2', '', null, '', array('pagelayout'=>'report'));

/**
 * Parte de exibição da tela
 */

 /**
  * O cabeçalho o moodle já colocar o padrao,o mesmo para o footer
  */
echo $OUTPUT->header();

/**
 * Adicionado pelo dev para aparecer no header
 * Neste caso apenas exibe um texto referente a chave 'pluginname'
 */
echo $OUTPUT->heading(get_string('pluginname',  'report_eduardoatv2'));

echo get_string('heading', 'report_eduardoatv2');

echo $OUTPUT->footer();