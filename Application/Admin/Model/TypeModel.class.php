<?php
namespace Admin\Model;
use Think\Model;
class TypeModel extends Model{

protected $_validate = array(
     array('luxiangid','require','luxiangid can`t be null!'),  
   );


}