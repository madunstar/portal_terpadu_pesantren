<?php
class Layout {
    private $ci;
    function __construct() {
        $this->ci = & get_instance();;
    }
    public $header = 'back-end/template/header';
    public $header_login = 'back-end/template/header_login';
    public $headerizin = 'back-end/template/header_perizinan';
    public $headerlaporan = 'back-end/template/header_laporan';
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

    function renderlogin($view,$data = null,$js = null){
        $this->ci->load->view($this->header_login);
        $this->ci->load->view($view,$data);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtml);
    }

    function renderizin($view,$data = null,$js = null){
        $this->ci->load->view($this->headerizin);
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

    function renderlaporan($view,$data = null,$js = null){
        $this->ci->load->view($this->headerlaporan);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtml);
    }


}
