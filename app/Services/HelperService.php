<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class HelperService
{

    public static function getClassName(object $class): string
    {
        $class = get_class($class);
        return strtolower(substr($class, strrpos($class, '\\') + 1));
    }


    public function generateUniqueID(Model $model, string $column = "unique_id", ?string $prefix = null): string
    {
        $class_name = static::getClassName($model);
        $length = config("rules.$class_name.$column.digits");

        $unique_id = $prefix . mt_rand(pow(10, $length - 1), pow(10, $length) - 1);

        while ($this->checkIfUniqueIDExists($model, $unique_id, $column) === true) {
            $this->generateUniqueID($model, $column, $prefix);
        }
        return $unique_id;
    }

    protected function checkIfUniqueIDExists(Model $model, string $uniqueID, string $column): bool
    {
        return $model::where($column, $uniqueID)->exists();
    }
}
