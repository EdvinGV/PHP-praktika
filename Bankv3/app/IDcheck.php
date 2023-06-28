<?php   

namespace Bank;
class IDcheck{
static public function validateAsmensKodas( $asmensKodas)
{
  
  if ($asmensKodas == null ) {
   
    return false;
  } else if (!preg_match('/^\d{11}$/', $asmensKodas)) {
  
    return false;
  }
  $skaitmenys = str_split($asmensKodas);
  $kontrolinisSkaitmuo = (int)$skaitmenys[10];

  $skaiciai = array_map('intval', str_split($asmensKodas, 1));

  $svarba = [1, 2, 3, 4, 5, 6, 7, 8, 9, 1];
  $suma = 0;

  for ($i = 0; $i < 10; $i++) {
    $suma += $svarba[$i] * $skaiciai[$i];
  }

  $liekana = $suma % 11;

  if ($liekana === 10) {
    $liekana = 0;
  }

  if ($liekana !== $kontrolinisSkaitmuo) {
   
    return false;
    
  }

  return true;
}}


 