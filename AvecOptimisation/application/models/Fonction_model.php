<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fonction_model extends CI_Model
{
	public function loginAdministrateur($login,$mdp)
	{
		$sql="Select * from Administrateur where login=%s and mdp=%s ";
		$sql=sprintf($sql,$this->db->escape($login),$this->db->escape($mdp));
		$query=$this->db->query($sql);
		$result = -1;
		foreach ($query->result_array() as $row) 
		{
			$result = $row['id'];
		}
		return $result;
	}
	public function getNomAdmin($id)
	{
		$sql="Select prenom from Administrateur where id=".$id;
		$query=$this->db->query($sql);
		$arr = array(); 
		foreach ($query->result_array() as $row)
		{
			$arr[] =  $row['prenom'];
		}  
		return $arr[0];
	}
}
?>
