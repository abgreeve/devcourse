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
 * Main info
 *
 * @package    tool_devcourse
 * @copyright  2016 Adrian Greeve <adriangreeve.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../../config.php');

// Setting context for the page.
$PAGE->set_context(context_system::instance());
// URL is created and then set for the page navigation.
$url = new moodle_url('/test.php');
$PAGE->set_url($url);
// Heading, headers, page layout.
$PAGE->set_heading('Test stuff');
$PAGE->set_pagelayout('standard');

$output = $PAGE->get_renderer('tool_devcourse');
echo $output->header();
$randomcomment = 'This comment is random';
$page = new \tool_devcourse\output\developer_course_main_page($randomcomment);
// Displaying basic content.
echo $output->render($page);

// Display the footer.
echo $OUTPUT->footer();
