<?php

if (!function_exists('error_widget'))
{
    function error_widget($messages, $title = 'Please fix errors below:')
    {
        $template = '<div class="alert alert-danger">
                        <button type="button" aria-hidden="true" class="close">×</button>
                        <span><b>' . $title . '</b></span>
                        <ul>';
        // dd($template);
        foreach ($messages as $key => $message)
        {
            $template .= '<li>' . $message[0] . '</li>';
        }

        $template .= '</ul></div>';

        return $template;
    }
}
