<?php

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect('login');
    } else {
        $level = $ci->session->userdata('level');

        $userAccess = $ci->db->get_where('user', [
            'level' => $level,
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('login/blok');
        }
    }
}