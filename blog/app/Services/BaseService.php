<?php


namespace App\Services;

use App\Models\BaseModel;
use Exception;

class BaseService
{
    /**
     * 模型命名空间
     */
    const MODEL_NAMESPACE = 'App\Models';

    /**
     * 模型容器
     *
     * @var array
     */
    private static array $ModelsContainer = [];

    /**
     * 获取Model实例(单例模式)
     *
     * @param string $modelName
     * @return BaseModel
     * @throws Exception
     */
    protected function getModelInstance(string $modelName) : BaseModel
    {
        $classPath = self::MODEL_NAMESPACE . '\\' . $modelName;

        if (!class_exists($classPath)) {
            throw new Exception('当前Model不存在: ' . $classPath);
        }

        if (!in_array($modelName, self::$ModelsContainer)) {
            self::$ModelsContainer[$modelName] = new $classPath;
        }

        return self::$ModelsContainer[$modelName];
    }
}
