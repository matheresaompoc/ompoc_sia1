<?php
 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;
 class User extends Model{
    //public $timestamps=false;
    protected $table = 'tbluser';
    // column sa table
    protected $fillable = [
    'username', 'password','gender'
    ];
    //sa id nga column
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $hidden = [
        'password',
    ];

    /*
    public function add(Request $request ){
        $rules = [
        'username' => 'required|max:20',
        'password' => 'required|max:20',
        'gender' => 'required|in:male,female',
        ];
    $this->validate($request,$rules);
    $user = User::create($request->all());
   return $this->successResponse($user, Response::HTTP_CREATED);
    }
    */
 }