<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use DB;

class Common extends Model
{
	  use Notifiable;
   // use HasOwner;

    protected $withDefaultOwnerOnCreate = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
      public $timestamps = false;

    protected $hidden = [
        'password', 'remember_token', 'updated_at',
    ];
    
	
	public static function insertdata($table,$data){
		return DB::table($table)->insert($data);
	}	
	
	public static function getdays(){
       for($i=1;$i<8;$i++)
    $weekdays [] = date("l",mktime(0,0,0,3,28,2009)+$i * (3600*24));
        return $weekdays;
	} 
	
	
	public static function updatedata($table,$data,$where){
		return DB::table($table)->where($where)->update($data);
	}	
	
	public static function selectdata($table,$where="",$order="",$offset="",$limit=""){
		if($where!="" && $order=="")
		$result = DB::table($table)->select('*')->where($where);
		else if(!empty($order) && $where!=""){
			if(!empty($order)){
				if (is_array($order)) {
				    foreach ($order as $key => $value) {
				        $order = $order[$key]; // or $v
				        break;
				    }
				}
					// list($key, $value) = each($order);					
					//$this->db->order_by();
				}
		$result = DB::table($table)->select('*')->where($where)->orderby($key,$value);
		}
		else 
		$result = DB::table($table)->select('*');
	
	if(is_numeric($offset)){
		$offset = $offset * 10; //die;
		$result = $result->skip($offset)->take(10);
	}
	
	return $result->get();
	}	

	
	
	public static function getfirst($table,$where=""){
		if($where!="")
		return DB::table($table)->select('*')->where($where)->first();
		else 
		return DB::table($table)->select('*')->first();
	}
	
	
	public static function countdata($table,$where){
		return DB::table($table)->select('*')->where($where)->count();
	}		

	public static function deletedata($table,$data){
		return DB::table($table)->where($data)->delete();
	}
	
	public function getJoins($table1,$table2,$where,$fields){		
		 
	$data = DB::table($table1)
    ->join($table2, $where) //'cases.id', '=', 'contacts.id'
    ->selectRaw($fields)
    ->get();
	
	return $data;
	
	}
		
	public static function getdata($tbl,$conditiion = '',$orderby='',$ordertype='')
	{
		 $posts = DB::table($tbl);
			if($conditiion!= '')
			{
			  $posts->where($conditiion);
			}
			if($orderby!= '')
		    {
	           $posts->orderBy($orderby, $ordertype);
		    }
			$posts = $posts->get()->toArray();
			return $posts;
	}

	
	public static function get_field($tbl,$conditiion,$field,$orderby='',$ordertype='')
	{
	    $data = DB::table($tbl)->where($conditiion);
	    if($orderby!= '')
	    {
           $data->orderBy($orderby, $ordertype);
	    }
	     $data = $data->first();

	    if(!empty($data->$field))
	    {
	       return $data->$field;  
	    }else
	    {
	       return '';  
	    }
	}
			
		              
    
    public function store($array,$table)
    {
        $company = DB::table($table)->create($array);
        return $company;
    }

    
}
