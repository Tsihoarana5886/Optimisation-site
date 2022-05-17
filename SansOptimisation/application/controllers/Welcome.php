<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Crud_model');
		$numeropage=$this->input->get('numeropage');
		$contenus=$this->Crud_model->listeContenusFO($numeropage);
		$data['contenus']= $contenus;
		$this->load->view('frontOffice/listeFrontoffice',$data);
	}
	public function connecter()
	{
		$this->load->view('backOffice/login');
	}
	public function connexionAdmin()
	{
		$this->load->model('Fonction_model');
		$login=$this->input->post('login');
		$mdp=$this->input->post('mdp');
		$res = $this->Fonction_model-> loginAdministrateur($login, $mdp);
		if($res == -1)
		{
			$data = array('error_message' =>'Login ou mot de passe incorrect ');
			$this->load->view('backOffice/login',$data);
		}
		else
		{
			session_start();
            $_SESSION['id']= $res;
			
			$data['prenom']= $this->Fonction_model->getNomAdmin($_SESSION['id']);
			$this->load->view('backOffice/pagebackoffice',$data);
		}
	 }
	public function pageBack()
	{
		$this->load->view('pagebackoffice');
	}
	public function logOut()
    {
    	session_start();
      	session_destroy();
        $this->load->view('backOffice/login');
    }
	public function ajouter()
	{
		$this->load->view('backOffice/ajoutBackoffice');
	}
	public function ajoutContenus()
	{
		$this->load->model('Crud_model');
		$titre=$this->input->post('titre');
		$photo=$this->input->post('photo');
		$resumee=$this->input->post('resumee');
		$contexte=$this->input->post('contexte');
		$datepublication=$this->input->post('datepublication');
		$source=$this->input->post('source');
		$exec=$this->Crud_model->insertContenus($titre,$photo,$resumee,$contexte,$datepublication,$source);
		$this->listeContenus();
		header('Location:listeContenus');
	}
	public function supprimerContenus()
	{
		$this->load->model('Crud_model');
		$id=$this->input->get('id');
		$exec=$this->Crud_model->deleteContenus($id);
		$this->listeContenus();
		header('Location:listeContenus');
	}
	public function modifierContenus()
	{
		$this->load->model('Crud_model');
		$id=$this->input->get('id');
		$contenus=$this->Crud_model->getById($id);
		$data['contenus']= $contenus;
		$this->load->view('backOffice/modifierBackoffice',$data);
	}
	public function modification()
	{
		$this->load->model('Crud_model');
		$id=$this->input->get('id');
		$titre=$this->input->get('titre');
		$photo=$this->input->get('photo');
		$resumee=$this->input->get('resumee');
		$contexte=$this->input->get('contexte');
		$date=$this->input->get('datepublication');
		$source=$this->input->get('source');
		$exec=$this->Crud_model->updateContenus($id,$titre,$photo,$resumee,$contexte,$date,$source);
		$this->listeContenus();
		header('Location:listeContenus');
	}
	public function listeContenus()
	{
		$this->load->model('Crud_model');
		$numeropage=$this->input->get('numeropage');
		$contenus=$this->Crud_model->listeContenus($numeropage);
		$data['contenus']= $contenus;
		$this->load->view('backOffice/listeBackoffice',$data);
	}
	public function detailsBackOffice()
	{
		$this->load->model('Crud_model');
		$id=$this->input->get('id');
		$contenus=$this->Crud_model->getById($id);
		$data['contenus']= $contenus;
		$this->load->view('backOffice/detailsBackoffice',$data);
	}
	public function listeFrontOffice()
	{
		$this->load->model('Crud_model');
		$numeropage=$this->input->get('numeropage');
		$contenus=$this->Crud_model->listeContenus($numeropage);
		$data['contenus']= $contenus;
		$this->load->view('frontOffice/listeFrontoffice',$data);
	}
	public function detailsFrontOffice()
	{
		$this->load->model('Crud_model');
		$id=$this->input->get('id');
		$contenus=$this->Crud_model->getById($id);
		$data['contenus']= $contenus;
		$this->load->view('frontOffice/detailsFrontoffice',$data);
	}
}
