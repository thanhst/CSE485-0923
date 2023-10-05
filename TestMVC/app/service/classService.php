<?php
include(APP_ROOT."/app/model/class.php");
include(APP_ROOT."/app/lib/DBconnection.php");
class ClassService{
    public function getAllClass(){
        $DBconnection=new DBconnection();
        $conn= $DBconnection->getConnection();
        $sql="SELECT * FROM lop";
        if($conn!=null){
            $stmt= $conn->prepare($sql);
            $stmt->execute();
            $results= $stmt->fetchAll();
            $allClass=[];
            foreach( $results as $result ){
                $class =new Classs($result[0],$result[1]);
                $allClass[]=$class;
            }
            return $allClass;
        }
    }
    public function addClass($name)
    {
        $DBconnection=new DBconnection();
        $conn= $DBconnection->getConnection();
        $sql="SELECT * FROM lop where tenlop = ?";
        if($conn!=null){
            $stmt= $conn->prepare($sql);
            $stmt->bindParam(1,$name);
            $stmt->execute();
            if($stmt->rowCount()==0){
                $sql="INSERT INTO lop(tenlop) values(?)";
                $stmt= $conn->prepare($sql);
                $stmt->bindParam(1,$name);
                $stmt->execute();
                return true;
            }
        }
        return false;
    }
    public function delete($id)
    {
        
        $DBconnection=new DBconnection();
        $conn= $DBconnection->getConnection();
        $sql="DELETE FROM lop where id = ?";
        if($conn!=null){
            $stmt= $conn->prepare($sql);
            $stmt->bindParam(1,$id);
            $stmt->execute();
            return true;
        }
        return false;
    }
}
?>