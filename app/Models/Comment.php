<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // 使用的資料庫表單名稱
    protected $table = 'da';
    // 資料表的KEY 通常為不可重複且累加的標籤
    protected $primaryKey ='id';

    // model 可以使用黑/白名單去設定可變更內容之權限
    protected $fillable = ['text','time','email','author']; // 白名單 只可填欄中資料
    // protected $gurad = ['created_at','update-at','id'] // 黑名單 在之中的欄位不可被填寫修改 黑/白名單二澤一使用
}
