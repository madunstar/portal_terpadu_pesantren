<?php
class Layout {
    private $ci;
    function __construct() {
        $this->ci = & get_instance();;
    }
    public $header = 'back-end/template/header';
	//public $menu = 'template/menu';
    public $footer = 'back-end/template/footer';
    public $endhtml = 'back-end/template/endhtml';
    
    public $headerfront = 'front-end/template/header';
	//public $menu = 'template/menu';
    public $footerfront = 'front-end/template/footer';
	public $endhtmlfront= 'front-end/template/endhtml';
    
    function render($view,$data = null,$js = null){
        $this->ci->load->view($this->header);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtml);
    }

    function renderfront($view,$data = null,$js = null){
        $this->ci->load->view($this->headerfront);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footerfront);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtmlfront);
    }

}
