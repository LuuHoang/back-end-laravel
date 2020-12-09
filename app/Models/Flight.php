<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Flight extends Model
{
    //protected $table='tbl_post'; // muốn custorm tên bảng lại
    //protected $primarykey='id_column'; // ten cot khoa chính
    //protected $dateformat ='d-m-f'; // định dang lại kiểu ngày tháng
    use HasFactory,Notifiable;

}
