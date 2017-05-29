<?php


//动态追加方法到容器中
trait kakoi2
{
    private $methods = array();

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







