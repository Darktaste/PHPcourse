<?php


//5. Напишете вложени for цикли, които извеждат следното:
//    *
//    * *
//    * * *
//    * * * *
//    * * * * *
//    * * * * *
//    * * * *
//    * * *
//    * *
//    * 

for($i = 0; $i <= 5; $i++){ // определяме броя на редовете
    for ($j = 0; $j < $i; $j++){  // определяме броя на колоните и задаваме j < i за да ограничим сомвилите на ред.
    echo '* ';  // изобразяваме на екрана символите
  }
  echo '<br/>'; // след изпълнението на първия for пренасяме на нов ред, за да не се изобразяват символите само на 1 ред
}
for($i = 0; $i <= 5; $i++){ // определяме броя на редовете
    for ($j = $i; $j < 5; $j++){  // определяме броя на колоните и задаваме j = i за да обърнем фигурата, която построихме в горния цикъл
    echo '* ';  // изобразяваме на екрана символите
  }
  echo '<br/>'; // след изпълнението на първия for пренасяме на нов ред, за да не се изобразяват символите само на 1 ред
}
