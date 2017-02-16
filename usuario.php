<?php

class usuario 
{
    private $datos = [
        "id" =>"",
        'username' =>''
        'nombre' =>'',
        'apellidos' =>'',
        'email' =>''
    ];

    public static function login($username,$passwd)
    {
        $datos =['data'=>['login'=>'']];
        $cnn = new Conexion();
        $sql = sprintf("select * from  usuarios where username='%s' and passwd='%s'", $username,md5($passwd);
        $rst = $cnn->query($sql);
        if(!$rst)
        {
            //return "error en la consulta";
            $datos['data']['login']='fail';
        }
        else
        {
            if($rst->num_rows == 1)
            {
                $usuario = new usuario();
                $r = $rst->fetch_assoc();// va a ser un arreglo asociativo del resultset
                $usuario->id=$r['id'];
                $usuario->username=$r['username'];
                $usuario->nombre=$r['nombre'];
                $usuario->apellidos=$r['apellidos'];
                $usuario->email=$r['email'];
                
                $datos['data']['login']=true;
                $datos['data']['usuario']=$usuario->datos;
                //return $usuario;
            }
            else
            {
               //return "no hay registros";
               $datos['data']['login']=false;
            }
        }
        return json_encode($datos, json_pretty_print); 
    }
     public function __get($campo)
    {
       return $this->datos[$campo];
    }
    public function __set($campo,$valor)
    {
        $this->datos[$campo]=$valor;
    }
}
//$usuario = new usuario();
//$usuario->username ="jesus";
//echo $usuario->username;
$usuario = usuario::login('jesus','123');