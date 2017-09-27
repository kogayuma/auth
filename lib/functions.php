<?php
//xss:クロスサイトスクリプティング対策htmlspecialchars()
function h ($data){
  //配列の時は値を１づつ呼び出して再帰呼び出し:自身を呼び出すこと
  if (is_array($data)){
    return array_map(__METHOD__,$data);
    //__METHOD__は実行中のメソッド:es()を呼び出すマジック定数
  }else{
    return htmlspecialchars($data,ENT_QUOTES,'UTF-8');
  }
}

?>
