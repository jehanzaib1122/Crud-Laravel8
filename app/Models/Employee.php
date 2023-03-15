<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Employee extends Model
{
    use HasFactory;
//    protected $table = 'employee_records`';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',

    ];
public function addRecord($data){
// dd($data['name']);
    $employee =DB::table('employee_records')->insert([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'address'=>$data['address'],



    ]);
    return $employee;
}

public function listRecord(){
    $employee =DB::table('employee_records')->get();
    return $employee;
}
public function getRecord($id){
    $employee =DB::table('employee_records')->where('id', $id)->first();
    return $employee;
}

    public function updateRecord($data, $id){
        $employee =DB::table('employee_records')->where('id', $id)
        ->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address'=>$data['address'],
        ]);
        return $employee;
    }
    public  function deleteRecord($id){
        $employee =DB::table('employee_records')->where('id', $id)->delete();
   return $employee;
    }
}
