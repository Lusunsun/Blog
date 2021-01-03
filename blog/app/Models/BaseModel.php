<?php


namespace App\Models;

use Illuminate\Support\Facades\DB;

abstract class BaseModel
{
    /**
     * 表名
     *
     * @var string
     */
    public static string $table;

    public function __construct(string $table)
    {
        self::$table = $table;
    }

    /**
     * 获取db实例
     *
     */
    public function getDb()
    {
        return DB::table(self::$table);
    }
}
