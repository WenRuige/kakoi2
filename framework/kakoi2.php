<?php


trait kakoi2
{
    private $methods = array();

    //添加一个方法,(1)方法名称,(2)是否可回调
    public function addMethod($methodName, $methodCallable)
    {
        if (!is_callable($methodCallable)) {
            throw new InvalidArgumentException('That Function can not callback;');
        }
        $this->methods[$methodName] = Closure::bind($methodCallable, $this, get_class());
    }

    //调取不存在的方法,会默认调取__call 方法,$args->可以动态传参
    public function __call($methodName, array $args)
    {
        if (isset($this->methods[$methodName])) {
            return call_user_func_array($this->methods[$methodName], $args);
        }

    }
}

//容器类别
trait container
{


}

