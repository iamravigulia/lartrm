<?php
namespace Edgewizz\Lartrm\Models;

use Illuminate\Database\Eloquent\Model;

class LartrmQues extends Model{
    // public function answers(){
    //     return $this->hasMany('Edgewizz\Lartrm\Models\LartrmAns', 'question_id');
    // }
    protected $table = 'fmt_lartrm_ques';
}