<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Template {
	private $CI ;
	private $var = array();
	private $theme = 'default';
	
	public function __construct(){
		$this->CI = get_instance();
                $this->CI->load->helper('language');
		$this->var['output'] = '';
		$this->var['head'] = '';
		$this->var['crumb'] = '';
		$this->var['left'] = '';
		$this->var['right'] = '';
		$this->var['foot'] = '';
		$this->var['titre'] = $this->CI->router->fetch_method();
		$this->var['charset'] = $this->CI->config->item('charset');
		$this->var['css'] = array();
		$this->var['js'] = array();
	}
	
	
	public function view($name, $data = array(), $position){ 
		$module = $this->module ; 
		switch($position){
			case 'head':{
		                $this->var['head'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			case 'left':{
		                $this->var['left'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			case 'right':{
		                $this->var['right'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			case 'foot':{
		                $this->var['foot'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			case 'crumb':{
		                $this->var['crumb'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			default:{ // will be use for the output
					
		                $this->var['output'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
			}
              }
              
	}

	public function views($name, $data = array(), $position){
		$module = $this->module ; 
		switch($position){
			case 'head':{
		                $this->var['head'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			case 'left':{
		                $this->var['left'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			case 'right':{
		                $this->var['right'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			case 'foot':{
		                $this->var['foot'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			case 'crumb':{
		                $this->var['crumb'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
				break ; 	
			}
			default:{ // will be use for the output
		                $this->var['output'] .= $this->CI->load->view($name, $data, true);
		                $this->CI->load->view('../themes/' .$module.'/'. $this->theme, $this->var);
			}
              }
		return $this;
	}

	public function set_theme($theme){
		if(is_string($theme) and !empty($theme) and file_exists('../poupailaireress/Myapplications/themes/'.$theme.'.php')){
			$this->theme = $theme;
			return true;
		}
		return false;
	}

	
	public function set_titre($titre){
		if(is_string($titre) and !empty($titre)){
			$this->var['titre'] =  $titre;
			return true;
		}else{
			return false;
		}
	}
	
	public function set_charset($charset){
		if(is_string($charset) and !empty($charset)){
			$this->var['charset'] = $charset;
			return true;
		}else{
			return false;
		}
	}
	
        public function set_metadescription($description){
		if(is_string($description) and !empty($description)){
			$this->var['description'] = $description;
			return true;
		}else{
			return false ;
		}
	}

	public function add_css($nom){
		if(is_string($nom) AND !empty($nom)){ 
			$this->var['css'][] = css_url($nom);
			return true;
		}
		return false;
	}
	
	
	public function add_js($nom){
		if(is_string($nom) AND !empty($nom)){
			$this->var['js'][] = js_url($nom);
			return true;
		}
		return false;
	}


}
