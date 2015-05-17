<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){  
    	$num =  M('comment')->count(); //获取评论总数
    	$this->assign('num',$num);
        $data=array();
    	$data=$this->getCommlist();//获取评论列表
    	$this->assign("commlist",$data);
        $this->display('index');
    }

    /**
	*添加评论
    */
    public function addComment(){

    	$data=array();
    	if((isset($_POST["comment"]))&&(!empty($_POST["comment"]))){
    		$cm = json_decode($_POST["comment"],true);//通过第二个参数true，将json字符串转化为键值对数组
    		$cm['create_time']=date('Y-m-d H:i:s',time());
    		$newcm = M('comment');
    		$id = $newcm->add($cm);

    		$cm["id"] = $id;
    		$data = $cm;

    		$num =  M('comment')->count();//统计评论总数
    		$data['num']= $num;

    	}else{
    		$data["error"] = "0";
    	}
    	

    	echo json_encode($data);
    }

    

    /**
	*递归获取评论列表
    */
    protected function getCommlist($parent_id = 0,&$result = array()){    	
    	$arr = M('comment')->where("parent_id = '".$parent_id."'")->order("create_time desc")->select();   
    	if(empty($arr)){
    		return array();
    	}
    	foreach ($arr as $cm) {  
    		$thisArr=&$result[];
    		$cm["children"] = $this->getCommlist($cm["id"],$thisArr);    
    		$thisArr = $cm; 				    	    		
    	}
    	return $result;
    }

}