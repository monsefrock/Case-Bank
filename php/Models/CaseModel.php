<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseModel extends Model
{
    protected $table = 'cases';
    public $timestamps = false;
    protected $fillable = [
        'case_text',
        'case_m_cat',
        'case_s_cat',
        'case_type',
        'case_difficulty'
    ];
}
