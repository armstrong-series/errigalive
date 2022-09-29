<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Common;


class TicketModel extends Model
{
    use HasFactory;
    protected $table = "tickets";

    protected $appends = [
        'updated_date',
        'created_date'
    ];

    public function getUpdatedDateAttribute(){
        return Common::time_elapsed_string($this->updated_at);
    }

    public function getCreatedDateAttribute(){
        return Common::time_elapsed_string($this->created_at);
    }
}
