<?php
 function validFood($food){
     if (trim($food) == "") {
       return false;
     }
     if (!ctype_apha($food)){
         return false;
     }
     return true;
 }