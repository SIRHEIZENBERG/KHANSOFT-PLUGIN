<?php

/**
 * Plugin Name: Khansoft Tech Form
 * Plugin URI: https://yourdomain.com/plugins/contact-form-plugin/
 * Description: This is a custom form plugin for Khan Soft Tech.
 * Version: 1.0.0
 * Author: Malcolm Macharia
 * Author URI: https://example.com/
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    die('You cannot be here');
}

function khansoft_tech_forms()
{
    add_menu_page(
        'Khansoft Tech Forms',
        'Khansoft Tech Forms',
        'manage_options',
        'khansoft-tech-forms',
        'khansoft_tech_forms_main',
        'dashicons-menu',
        2
    );

    add_submenu_page(
        'khansoft-tech-forms',
        'Student Application',
        'Student Application',
        'manage_options',
        'student-application-menu',
        'student_application_menu_main',
        'dashicons-media-document'
    );

    add_submenu_page(
        'khansoft-tech-forms',
        'Contacts',
        'Contacts',
        'manage_options',
        'contacts-menu',
        'contacts_menu_main',
        'dashicons-media-document'
    );

    add_submenu_page(
        'khansoft-tech-forms',
        'Job Applications',
        'Job Applications',
        'manage_options',
        'job-application-menu',
        'job_application_menu_main',
        'dashicons-media-document'
    );

    add_submenu_page(
        'khansoft-tech-forms',
        'LPN Applications',
        'LPN Applications',
        'manage_options',
        'lpn-application-menu',
        'lpn_application_menu_main',
        'dashicons-media-document'
    );
}

add_action('admin_menu', 'khansoft_tech_forms');


function student_application_menu_main()
{
    // Define $students array as an example
    $students = array(
        array('name' => 'John Doe', 'phone' => '123-456-7890'),
        array('name' => 'Jane Smith', 'phone' => '234-567-8901'),
        array('name' => 'Bob Johnson', 'phone' => '345-678-9012'),
        array('name' => 'Malcolm X', 'phone' => '345-678-9012')
    );

    // Define table header
    $table = '<table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';

    // Define table rows using data from $students array
    foreach ($students as $student) {
        $table .= '<tr>
                     <td>' . $student['name'] . '</td>
                     <td>' . $student['phone'] . '</td>
                     <td class="action"><a class="btn btn-success" href="' . add_query_arg(array('name' => $student['name'], 'phone' => $student['phone']), plugins_url('details.php', __FILE__)) . '">View Details</a></td>
                  </tr>';
    }

    // Close table tags
    $table .= '</tbody>
              </table>';

    // Output table and styling
    echo '<!DOCTYPE html>
          <html>
            <head>
              <title>Student Application</title>
              <link rel="stylesheet" type="text/css" href="' . plugins_url('style.css', __FILE__) . '">
            </head>
            <body>
              <h1>Student Application</h1>
              ' . $table . '
            </body>
          </html>';
}


function contacts_menu()
{
}


function contacts_menu_main()
{
    // Define $contacts array as an example
    $contacts = array(
        array('name' => 'John Doe', 'phone' => '123-456-7890'),
        array('name' => 'Jane Smith', 'phone' => '234-567-8901'),
        array('name' => 'Bob Johnson', 'phone' => '345-678-9012'),
        array('name' => 'Malcolm X', 'phone' => '345-678-9012')
    );

    // Define table header
    $table = '<table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';

    // Define table rows using data from $contacts array
    foreach ($contacts as $contact) {
        $table .= '<tr>
                     <td>' . $contact['name'] . '</td>
                     <td>' . $contact['phone'] . '</td>
                     <td class="action"><a class="btn btn-success" href="' . add_query_arg(array('name' => $contact['name'], 'phone' => $contact['phone']), plugins_url('details.php', __FILE__)) . '">View Details</a></td>
                  </tr>';
    }

    // Close table tags
    $table .= '</tbody>
              </table>';

    // Output table and styling
    echo '<!DOCTYPE html>
          <html>
            <head>
              <title>Contacts</title>
              <link rel="stylesheet" type="text/css" href="' . plugins_url('style.css', __FILE__) . '">
            </head>
            <body>
              <h1>Contacts</h1>
              ' . $table . '
            </body>
          </html>';
}


function job_application_menu()
{
}

function job_application_menu_main()
{
    // Define $job_applications array as an example
    $job_applications = array(
        array('name' => 'John Doe', 'phone' => '123-456-7890'),
        array('name' => 'Jane Smith', 'phone' => '555-555-5555'),
        array('name' => 'Bob Johnson', 'phone' => '999-999-9999'),
        array('name' => 'Malcolm X', 'phone' => '345-678-9012')
    );

    // Define table header
    $table = '<table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';

    // Define table rows using data from $job_applications array
    foreach ($job_applications as $job_application) {
        $table .= '<tr>
                     <td>' . $job_application['name'] . '</td>
                     <td>' . $job_application['phone'] . '</td>
                     <td class="action"><a class="btn btn-success" href="' . add_query_arg(array('name' => $job_application['name'], 'phone' => $job_application['phone']), plugins_url('details.php', __FILE__)) . '">View Details</a></td>
                  </tr>';
    }

    // Close table tags
    $table .= '</tbody>
              </table>';

    // Output table and styling
    echo '<!DOCTYPE html>
          <html>
            <head>
              <title>Job Application</title>
              <link rel="stylesheet" type="text/css" href="' . plugins_url('style.css', __FILE__) . '">
            </head>
            <body>
              <h1>Job Application</h1>
              ' . $table . '
            </body>
          </html>';
}

function lpn_application_menu()
{
}
function lpn_application_menu_main()
{
    // Define $lpn_applications array as an example
    $lpn_applications = array(
        array('name' => 'John Doe', 'phone' => '123-456-7890'),
        array('name' => 'Jane Smith', 'phone' => '555-555-5555'),
        array('name' => 'Bob Johnson', 'phone' => '987-654-3210'),
        array('name' => 'Malcolm X', 'phone' => '345-678-9012')
    );

    // Define table header
    $table = '<table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';

    // Define table rows using data from $lpn_applications array
    foreach ($lpn_applications as $lpn_application) {
        $table .= '<tr>
                     <td>' . $lpn_application['name'] . '</td>
                     <td>' . $lpn_application['phone'] . '</td>
                     <td class="action"><a class="btn btn-success" href="' . add_query_arg(array('name' => $lpn_application['name'], 'phone' => $lpn_application['phone']), plugins_url('details.php', __FILE__)) . '">View Details</a></td>
                  </tr>';
    }

    // Close table tags
    $table .= '</tbody>
              </table>';

    // Output table and styling
    echo '<!DOCTYPE html>
          <html>
            <head>
              <title>LPN Application</title>
              <link rel="stylesheet" type="text/css" href="' . plugins_url('style.css', __FILE__) . '">
            </head>
            <body>
              <h1>LPN Application</h1>
              ' . $table . '
            </body>
          </html>';
}
