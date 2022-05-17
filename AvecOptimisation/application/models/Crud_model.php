<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{
	public function listeContenus($numeropage)
	{
		if($numeropage == null)
		{
			$numeropage=1;
			$start=$numeropage;
			$finale=$start+1;

			if($start == 2)
			{
				$start = 3;
				$finale = 4;
			}
		}
		else{
			$start=$numeropage;
			$finale=$start+1;

			if($start == 2)
			{
				$start = 3;
				$finale = 4;
			}
		}
		$sql="Select * from Contenus where id>='".$start."' and id<='".$finale."' ";
		$query=$this->db->query($sql);
		$liste = array();
		foreach ($query->result_array() as $row) 
		{
			$liste[] = $row;
		}
		return $liste;
	}
	public function listeContenusFO($numeropage)
	{
		if($numeropage == null)
		{
			$numeropage=1;
			$start=$numeropage;
			$finale=$start+1;

			if($start == 2)
			{
				$start = 3;
				$finale = 4;
			}
		}
		else{
			$start=$numeropage;
			$finale=$start+3;

			if($start == 2)
			{
				$start = 3;
				$finale = 4;
			}
		}
		$sql="Select * from Contenus where id>='".$start."' and id<='".$finale."' ";
		$query=$this->db->query($sql);
		$liste = array();
		foreach ($query->result_array() as $row) 
		{
			$liste[] = $row;
		}
		return $liste;
	}
	public function getById($id)
	{
		$sql = sprintf("Select * from Contenus where id='%d'", $id);
		$query=$this->db->query($sql);
		$data=array();
		foreach ($query->result_array() as $row) 
		{
			$data[] = $row;
		}
		return $data;
    }
	public function insertContenus($titre,$photo,$resumee,$contexte,$date,$source)
	{
		$sql="Insert into Contenus (titre,photo,resumee,contexte,datepublication,source) values('".$titre."','".$photo."','".$resumee."','".$contexte."','".$date."','".$source."')";
		$query=$this->db->query($sql);
	}
	public function deleteContenus($id)
	{
		$sql="Delete from Contenus  where id='".$id."' ";
		$query=$this->db->query($sql);
	}
	public function updateContenus($id,$titre,$photo,$resumee,$contexte,$date,$source)
	{
	   $sql="Update Contenus set titre='".$titre."', photo='".$photo."', resumee='".$resumee."', contexte='".$contexte."', datepublication='".$date."', source='".$source."' where id='".$id."' ";
       $query=$this->db->query($sql);
	}
}
?>
