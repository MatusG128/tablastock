<?php
class articulo
{
	private $pdo;
    
    public $idarticulo;
    public $id_provedor;
    public $nombre_articulo;
    public $descripcion;
    public $unidad_medida;
    public $cantidad;
	public $minimo;
	public $maximo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM articulo");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idarticulo)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM articulo WHERE idarticulo = ?");
			          

			$stm->execute(array($idarticulo));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idarticulo)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM articulo WHERE idarticulo = ?");			          

			$stm->execute(array($idarticulo));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE articulo SET 
						id_provedor          = ?, 
						nombre_articulo        = ?,
                        descripcion        = ?,
						unidad_medida            = ?, 
						cantidad           = ?
						minimo          = ?
                     	maximo            = ?

				    WHERE idarticulo = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->id_provedor, 
                        $data->nombre_articulo,
                        $data->descripcion,
                        $data->unidad_medida,
                        $data->cantidad,
						$data->minimo,
						$data->maximo,
						

                        $data->idarticulo
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `articulo` (id_provedor,nombre_articulo,descripcion,unidad_medida,cantidad,minimo,maximo)

		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_provedor, 
                    $data->nombre_articulo,
                    $data->descripcion,
                    $data->unidad_medida,
                    $data->cantidad,
					$data->minimo,
					$data->maximo

                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

?>
