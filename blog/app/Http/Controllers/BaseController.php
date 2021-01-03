<?php


namespace App\Http\Controllers;

use App\Services\BaseService;
use PHPUnit\Util\Exception;

abstract class BaseController
{
    /**
     * Services命名空间
     */
    const SERVICE_NAMESPACE = 'App\Services';

    /**
     * Controller后缀
     */
    const CONTROLLER_SUFFIX= 'Controller';

    /**
     * Service后缀
     */
    const SERVICE_SUFFIX= 'Service';

    /**
     * Service容器
     *
     * @var array
     */
    private static array $servicesContainer = [];

    /**
     * 获取Service实例(单例模式)
     *
     * @param string $controllerName
     * @return BaseService
     * @throws Exception
     */
    protected function getServiceInstance(string $controllerName) : BaseService
    {
        $serviceName = str_replace(self::CONTROLLER_SUFFIX, '', basename($controllerName));

        $classPath = self::SERVICE_NAMESPACE . '\\' . $serviceName . self::SERVICE_SUFFIX;

        if (!class_exists($classPath)) {
            throw new Exception('当前Service不存在: ' . $classPath);
        }

        if (!in_array($serviceName, self::$servicesContainer)) {
            self::$servicesContainer[$serviceName] = new $classPath;
        }

        return self::$servicesContainer[$serviceName];
    }
}
