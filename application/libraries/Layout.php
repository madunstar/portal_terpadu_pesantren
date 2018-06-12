<?php
class Layout {
    private $ci;
    function __construct() {
        $this->ci = & get_instance();;
    }
    public $header = 'back-end/template/header';
    public $header_login = 'back-end/template/header_login';
    public $headerizin = 'back-end/template/header_perizinan';
    public $headerizinp = 'back-end/template/header_perizinan_p';
    public $headerlaporan = 'back-end/template/header_laporan';
    public $headerlaporanp = 'back-end/template/header_laporan_p';
    public $headerakd = 'back-end/template/header_akademik';
    public $headerakdp = 'back-end/template/header_akademik_p';
	//public $menu = 'template/menu';
    public $footer = 'back-end/template/footer';
    public $footer2 = 'back-end/template/footer2';
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

    function render2($view,$data = null,$js = null){
        $this->ci->load->view($this->header);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer2);
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

    function renderizin2($view,$data = null,$js = null){
        $this->ci->load->view($this->headerizin);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer2);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtml);
    }

    function renderizinp($view,$data = null,$js = null){
        $this->ci->load->view($this->headerizinp);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtml);
    }

    function renderizinp2($view,$data = null,$js = null){
        $this->ci->load->view($this->headerizinp);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer2);
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

    function renderlaporanp($view,$data = null,$js = null){
        $this->ci->load->view($this->headerlaporanp);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtml);
    }

    function renderakd($view,$data = null,$js = null){
        $this->ci->load->view($this->headerakd);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtml);
    }

    function renderakdp($view,$data = null,$js = null){
        $this->ci->load->view($this->headerakdp);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtml);
    }


}
