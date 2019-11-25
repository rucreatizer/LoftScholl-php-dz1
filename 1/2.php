<?PHP
CONST PIC_ALL = 80;
CONST PIC_FLOM = 23;
CONST PIC_KAR = 40;
$pic_kras = 0;

echo "Всего рисунков: " . PIC_ALL . "</br>";
echo "Нарисовано фломастерами: " . PIC_FLOM . "</br>";
echo "Нарисовано карандашом: " . PIC_KAR . "</br>";
echo "Количество рисунков красками - ?</br>";
echo "===========</br>";
$pic_kras = PIC_ALL - PIC_FLOM - PIC_KAR;
echo "Количество рисунков красами = $pic_kras";
