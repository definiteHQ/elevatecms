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

if (!function_exists('upload'))
{
    function upload($file, $path)
    {
        $filename = str_random(10) . $file->getClientOriginalName();
        
        $file->move($path, $filename);

        return $filename;
    }
}

if (!function_exists('deleteFile'))
{
    /**
     * Delete file savely
     * @return bool
     */
    function deleteFile($path)
    {
        if (file_exists($path) && is_file($path))
        {
            return unlink($path);
        }

        return false;
    }
}
