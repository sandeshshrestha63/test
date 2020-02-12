<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	use SoftDeletes;

    protected $table = "students";

	protected $fillable = ['first_name','middle_name','last_name','address','city','email','phone','parents_name'];
	
	protected $appends = ['full_name'];
	
	public function getFullNameAttribute(){
    	return $this->first_name." ".$this->middle_name." ".$this->last_name;
    }

    public function saveStudent($data)
    {
    	$this->first_name = $data['first_name'];
    	$this->middle_name = $data['middle_name'];
    	$this->last_name = $data['last_name'];
    	$this->address = $data['address'];
    	$this->city = $data['city'];
    	$this->email = $data['email'];
    	$this->phone = $data['phone'];
    	$this->parents_name = $data['parents_name'];
    	$this->save();
    	return 1;
    }
    public function updateStudent($data)
    {
    	$student = $this->find($data['id']);
    	$student->first_name = $data['first_name'];
    	$student->middle_name = $data['middle_name'];
    	$student->last_name = $data['last_name'];
    	$student->address = $data['address'];
    	$student->city = $data['city'];
    	$student->email = $data['email'];
    	$student->phone = $data['phone'];
    	$student->parents_name = $data['parents_name'];
    	$student->save();
    	return 1;
    }

}
