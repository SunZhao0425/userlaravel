<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Muser extends Model
{
    /**
     * 模型关联的表名称
     * @var string
     */
    protected $table = 'musers';

    /**
     * 重定义主键
     *
     * @var string
     */
    protected $primaryKey = 'id';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    /**
     * 模型的默认属性值。
     *
     * @var array
     */
    protected $attributes = [
        'status' => false,
    ];

}
