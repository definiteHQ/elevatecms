<?php
use App\Models\Setting;

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

if (!function_exists('google_analytics'))
{
    function google_analytics()
    {
        $html = "";
        $settings = Setting::where('key', 'site_ga')->first();

        if ( $settings->count() > 0 AND !empty($settings->value) ) {
            $html = "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ <br> (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),<br>m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)<br>})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');<br><br>ga('create', '".$settings->value."', 'auto');<br>ga('send', 'pageview');";
        }

        return $html;
    }
}
