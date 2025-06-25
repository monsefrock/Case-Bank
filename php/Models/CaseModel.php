<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as DB;

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

    public static function getCaseRand($type, $difficulty)
    {
        $query = self::where('case_type', $type);
        if ($difficulty !== 'disabled') {
            $query->where('case_difficulty', $difficulty);
        }
        return $query->inRandomOrder()->first();
    }

    public static function getCaseM($type, $catM, $difficulty)
    {
        $query = self::where('case_type', $type)
            ->where('case_m_cat', $catM);
        if ($difficulty !== 'disabled') {
            $query->where('case_difficulty', $difficulty);
        }
        return $query->inRandomOrder()->first();
    }

    public static function getCaseS($type, $catM, $catS, $difficulty)
    {
        $query = self::where('case_type', $type)
            ->where('case_m_cat', $catM)
            ->where('case_s_cat', $catS);
        if ($difficulty !== 'disabled') {
            $query->where('case_difficulty', $difficulty);
        }
        return $query->inRandomOrder()->first();
    }

    public static function getAllCases($type, $catM, $catS, $difficulty)
    {
        return self::getCaseS($type, $catM, $catS, $difficulty);
    }

    public static function getCasesAllFilter($type)
    {
        return self::where('case_type', $type)->get();
    }

    public static function getCasesAllSearch($search)
    {
        return self::where('case_text', 'like', "%$search%")->get();
    }

    public static function getEditCases($id)
    {
        return self::where('id', $id)->get();
    }

    public static function updateCaseData(array $data)
    {
        return self::where('id', $data['case_id'])
            ->update([
                'case_text' => $data['case_text'] ?? '',
                'case_m_cat' => $data['cat'] ?? '',
                'case_s_cat' => $data['sub'] ?? '',
                'case_type' => $data['type'] ?? '',
                'case_difficulty' => $data['difficulty'] ?? ''
            ]);
    }

    public static function deleteCaseById($id)
    {
        return self::where('id', $id)->delete();
    }

    public static function getPoints($caseId)
    {
        return DB::table('cases_points')->where('case_id', $caseId)->get();
    }

    public static function getPoint($pointId)
    {
        return DB::table('cases_points')->where('id', $pointId)->get();
    }

    public static function deletePoint($pointId)
    {
        return DB::table('cases_points')->where('id', $pointId)->delete();
    }

    public static function deletePointWithCase($caseId)
    {
        return DB::table('cases_points')->where('case_id', $caseId)->delete();
    }

    public static function updatePoint(array $data)
    {
        return DB::table('cases_points')
            ->where('id', $data['point_id'])
            ->update([
                'type' => $data['type_point'],
                'titel' => $data['titel_point'],
                'discription' => $data['conte_point']
            ]);
    }

    public static function setPoint(array $data)
    {
        return DB::table('cases_points')->insert([
            'case_id' => $data['id'],
            'type' => $data['type_point'],
            'titel' => $data['titel_point'],
            'discription' => $data['conte_point']
        ]);
    }

    public static function getContent($caseId)
    {
        return DB::table('cases_content')->where('case_id', $caseId)->get();
    }

    public static function setContent(array $data)
    {
        return DB::table('cases_content')->insert([
            'case_id' => $data['case_id'],
            'content' => $data['content_case']
        ]);
    }

    public static function updateContent(array $data)
    {
        return DB::table('cases_content')
            ->where('case_id', $data['case_id'])
            ->update(['content' => $data['content_case']]);
    }

    public static function deleteContent($caseId)
    {
        return DB::table('cases_content')->where('case_id', $caseId)->delete();
    }

    public static function logCase($timestamp, $log, $ip)
    {
        return DB::table('logcase')->insert([
            'timestamp' => $timestamp,
            'ip' => $ip,
            'log' => $log
        ]);
    }

    public static function getMainCat()
    {
        return self::select('case_m_cat')
            ->where('case_m_cat', '!=', '')
            ->groupBy('case_m_cat')
            ->get();
    }

    public static function getSubCat()
    {
        return self::select('case_s_cat')
            ->where('case_s_cat', '!=', '')
            ->groupBy('case_s_cat')
            ->get();
    }

    public static function getTypeCat()
    {
        return self::select('case_type')
            ->where('case_type', '!=', '')
            ->groupBy('case_type')
            ->get();
    }
}
