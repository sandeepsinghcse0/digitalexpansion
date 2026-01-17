<?php
class Template
{
    private $template_data = [];
    private $CI;
    function set($content_area, $value)
    {
        $this->template_data[$content_area] = $value;
    }

    function load($template, $view, $view_data = [])
    {
        $this->CI = &get_instance();
        $this->set("content", $this->CI->load->view($view, $view_data, TRUE));
        $this->CI->load->view(($template === 'home' ? '' : $template) . '/layout', $this->template_data);
    }
}
