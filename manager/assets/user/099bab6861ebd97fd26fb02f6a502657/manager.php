<?php

    if (defined('LOADED') == false)
        exit;

    return [
        'paging' => [
            'file_home_list' => 0,
            'file_view_zip' => 0,
            'file_edit_text' => 0,
            'mysql_list_data' => 5,
        ],

        'enable_disable' => [
            'button_save_on_javascript' => true,
            'auto_focus_input_last' => true,
            'count_checkbox_file_javascript' => true,
            'count_checkbox_mysql_javascript' => true,
            'list_file_double' => true,
            'list_database_double' => true,
            'header_fixed' => true,
        ],

        'auto_redirect' => [
            'file_rename' => true,
            'file_chmod' => true,
            'create_directory' => true,
            'create_file' => true,
            'create_database' => true,
            'rename_database' => true,
        ],

    ];

?>