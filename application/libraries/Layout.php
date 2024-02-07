<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
	private $CI;
	private $var = array();
	
/*
|===============================================================================
| Constructeur
|===============================================================================
*/
	
	public function __construct()
	{
		$this->CI =& get_instance();
		
		// Initialisation
		$this->var['output'] = '';
		// Titre par défaut
		$this->var['titre'] = '';
		
		// desc par défaut
		$this->var['desc'] = '';
		
		// activation wide par defaut
		$this->var['wide'] = false; // pour mettre la page en pleine largeur
		$this->var['wide_redirect_url'] = ""; // si la page est en pleine largeur, une croix apparait et c'est vers cet url que l'on redirige la personne, car il n'aura plus de visu sur le menu...
	}
	
/*
|===============================================================================
| Methodes pour charger les vues
|	. view
|	. views
|===============================================================================
*/
	
	public function view($name, $data = array(), $theme = '')
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		if($theme=="")
			$this->CI->load->view('../themes/default', $this->var);
		else
			$this->CI->load->view('../themes/'.$theme, $this->var);
	}
	
	public function views($name, $data = array())
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		return $this;
	}
	
/*
|===============================================================================
| Methodes pour modifier les variables envoyées au layout
|	. set_titre
|===============================================================================
*/
	public function set_titre($titre)
	{
		if(is_string($titre) AND !empty($titre))
		{
			$this->var['titre'] = $titre;
			return true;
		}
		return false;
	}
	
	public function set_desc($desc)
	{
		if(is_string($desc) AND !empty($desc))
		{
			$this->var['desc'] = $desc;
			return true;
		}
		return false;
	}
	
	public function set_wide_screen($wide, $url ="") // url de redirection vers une page si l'utilisateur clique sur la croix
	{
		if(is_bool($wide) AND !empty($wide))
		{
			$this->var['wide'] = $wide;
			$this->var['wide_redirect_url'] = $url;
			return true;
		}
		return false;
	}
}