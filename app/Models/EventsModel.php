<?php

namespace App\Models;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use App\Helpers\Common;

class EventsModel extends Model
{
    use HasFactory;

    protected $table = "events";


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
