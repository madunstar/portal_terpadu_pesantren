<?php
class Layout_pendaftaran {
    private $ci;
    function __construct() {
        $this->ci = & get_instance();;
    }
    public $header = 'pendaftaran_backend/template/header';
	//public $menu = 'template/menu';
    public $footer = 'pendaftaran_backend/template/footer';
    public $endhtml = 'pendaftaran_backend/template/endhtml';

    public $headerfront = 'pendaftaran_backend/template/header';
	//public $menu = 'template/menu';
    public $footerfront = 'pendaftaran_backend/template/footer';
	public $endhtmlfront= 'pendaftaran_backend/template/endhtml';

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
