<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>
    Namespace ( không gian tên )
    giải quyết vấn đề trùng tên class hoặc tên hàm trong PHP
</h1>

<pre>
    Khi 1 file không khai báo namespace như file index.php này
    thì được coi như nó đang ở trong GLOBAL NAMESPACE
    Để sử dụng được class trong namespace khác thì sẽ phải
    import namespace đó vào file hiện tại
    Quá trình import sẽ sử dụng cú pháp :
    use namespace;
    Ví dụ import namespace
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    * Cần chú ý : use bên trên class là import namespace
    còn use trong class là import trait cho mục đích đa kế thừa
    namespace App;

    // import namespace
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // import trait
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
    </pre>

<?php
include_once "app/controllers/backend/IndexController.php";
include_once "app/controllers/frontend/IndexController.php";
include_once "app/models/CommonModel.php";
include_once "vendor/duc/src/Console/Http.php";

// Không import Namespace thì khi khởi tạo class
// Phải sử dụng đầy đủ namespace
$backendController = new App\Controllers\Backend\IndexController();
$backendController->indexAction();





?>
</body>
</html>