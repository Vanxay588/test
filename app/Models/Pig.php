<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pig extends Model
{
    use HasFactory;

    public $table = 'pigs';

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const SEX_SELECT = [
        'ขนาดถังน้ำมัน' => 'ขนาดถังน้ำมัน',
    ];

    public const TYPE_SELECT = [
        'น้ำมันเชื้อเพลิง' => 'น้ำมันเชื้อเพลิง',
    ];

    public const SPECIES_SELECT = [
        'ประเภทน้ำมันเชื้อเพลิง' => 'ประเภทน้ำมันเชื้อเพลิง',
    ];

    protected $fillable = [
        'date',
        'pig_pro_doc_no',
        'license',
        'origin',
        'key',
        'ref_doc_no',
        'week_date',
        'species',
        'sex',
        'type',
        'weigh',
        'age',
        'ror_3_doc_no',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
