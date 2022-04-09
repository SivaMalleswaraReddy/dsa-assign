<?php

 function ival(){
     $str = '((23)-4)';
$arr = array();
for($i=0;$i<strlen($str);$i++){
if($str[$i]=='('){
$this->push($str[$i]);
}
else if($str[$i]=='' || $str[$i]=='-'){
if($str[$i]=='-' && current($this->stack)=='*'){
while(current($this->stack)!='('){
array_push($arr,current($this->stack));
array_shift($this->stack);
}
$this->push($str[$i]);
}
else{
$this->push($str[$i]);
}

}
else if($str[$i]==')'){
while(current($this->stack)!='('){
array_push($arr,current($this->stack));
array_shift($this->stack);
}
array_shift($this->stack);
}
else{
array_push($arr,$str[$i]);
}

}
for($i=0;$i<count($arr);$i++){
echo $arr[$i];
}
}
