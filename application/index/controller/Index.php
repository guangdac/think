<?php
namespace app\index\controller;

use think\Controller;
// use think\View;

class Index extends Controller
{
	// http://tp5.com/index.php/index/index/index
    public function index()
    {
		// 获取包含域名的完整URL地址
		$this->assign('domain',$this->request->url(true));
		return $this->fetch('index');
    }
    
    // http://tp5.com/index.php?s=/index/index/page&file=index
    // http://tp5.com/index.php?s=/模块/控制器/操作/[参数名/参数值...]
    // http://tp5.com/index.php/index/index/page/file/project
    public function page($file="index")
    {
        return view($file);
        
        $view = new View();
        return $view->fetch($file);
    }
}

