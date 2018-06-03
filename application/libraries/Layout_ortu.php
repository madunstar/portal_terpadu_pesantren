<?php
class Layout_ortu {
    private $ci;
    function __construct() {
        $this->ci = & get_instance();;
    }
    public $header = 'orangtua/template/header';
    public $headerp = 'orangtua/template/headerp';
	//public $menu = 'template/menu';
    public $footer = 'orangtua/template/footer';
    public $endhtml = 'orangtua/template/endhtml';

    public $headerfront = 'orangtua/template/header';

	//public $menu = 'template/menu';
    public $footerfront = 'orangtua/template/footer';
	  public $endhtmlfront= 'orangtua/template/endhtml';

    function render($view,$data = null,$js = null){
        $this->ci->load->view($this->header);
        $this->ci->load->view($view,$data);
        $this->ci->load->view($this->footer);
        if ($js!=NULL) {
            $this->ci->load->view($js,$data);
        }
        $this->ci->load->view($this->endhtml);
    }

    function renderp($view,$data = null,$js = null){
        $this->ci->load->view($this->headerp);
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
