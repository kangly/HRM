<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    /**
     * 与模型关联的表名
     * @var string
     */
    protected $table = 'candidate';

    /**
     * 指示是否自动维护时间戳
     * @var bool
     */
    public $timestamps = false;
}