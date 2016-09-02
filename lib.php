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
 * This page contains navigation hooks for the developer course plugin.
 *
 * @package    tool_devcourse
 * @copyright  2016 Adrian Greeve
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * This function extends the navigation menu and adds a node in the course administration section.
 *
 * @param  navigation_node $navigation Navigation node to extend.
 * @param  stdClass $course Course object
 * @param  context_course $coursecontext Course context
 * @return void.
 */
function tool_devcourse_extend_navigation_course($navigation, $course, $coursecontext) {
    $url = new moodle_url('/admin/tool/devcourse/index.php');
    $devcoursenode = navigation_node::create('Development course', $url, navigation_node::TYPE_CUSTOM, 'Dev course', 'devcourse');
    $navigation->add_node($devcoursenode);
}
