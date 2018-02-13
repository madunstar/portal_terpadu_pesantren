<?php
class Layout_pendaftaran {
    private $ci;
    function __construct() {
        $this->ci = & get_instance();;
    }
    public $header = 'adminpendaftaran/template/header';
	//public $menu = 'template/menu';
    public $footer = 'adminpendaftaran/template/footer';
    public $endhtml = 'adminpendaftaran/template/endhtml';

    public $headerfront = 'calonsantri/template/header';
    public $headerreg = 'calonsantri/template/headerregister';
	//public $menu = 'template/menu';
    public $footerfront = 'calonsantri/template/footer';
	  public $endhtmlfront= 'calonsantri/template/endhtml';

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

    function renderregister($view,$data = null,$js = null){
        $this->ci->load->view($this->headerreg);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footerfront);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtmlfront);
    }

}
