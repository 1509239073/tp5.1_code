<?php
namespace app\index\controller;

use think\Controller;

/**
 * ��ҳ������
 * Class Index
 * @package app\index\controller
 */
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
