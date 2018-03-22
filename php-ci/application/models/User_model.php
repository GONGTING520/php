<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    // 注册存储用户
    public function save($username, $pwd, $realname, $tel){
        //第一个参数为表名，第二个参数为关联数组
        $this -> db -> insert('t_user', 
        array(
            'username' => $username,
            'user_password' => $pwd,
            'realname' => $realname,
            'tel' => $tel
        ));
        
        //获取影响的行数
        return $this -> db -> affected_rows();
    }
    
    // public function query($arr){
    //     $str = implode(',', $arr);
    //     echo $str;
    //     return $this -> db -> query("SELECT $str FROM t_user");
    // }

    // 检测登陆是否成功
    public function query_by_name($username, $pwd){
        $query = $this->db->get_where('t_user', array(
            "username" => $username,
            "user_password" => $pwd
        ));

        return $query -> row();
        // return $query -> result();
    }

    // 查询所有数据
    public function query_all(){
        return $this->db->get('t_user')->result();
    }

    // 根据id删除用户
    public function delete_by_id($user_id)
    {
        $this->db->delete('t_user',array("user_id"=>$user_id));
        return $this->db->affected_rows();
    }

    // 根据user_id查询数据
    public function query_by_id($user_id){
        return $this->db->get_where('t_user', array(
            "user_id" => $user_id
        ))->row();
    }

    // 更新数据
    public function update($user_id, $username, $pwd, $realname, $tel){
        $this->db->replace('t_user', array(
            "user_id"=>$user_id,
            "username"=>$username,
            "user_password"=>$pwd,
            "realname"=>$realname,
            "tel"=>$tel
        ));
        
        return $this->db->affected_rows();
    }
}
?>