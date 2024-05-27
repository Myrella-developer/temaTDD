<?php
   namespace TemaTDD;
   class CalculaNota{
        public static function calculaNotaAlumno(int $nota)
    {
        if ($nota >= 60) {
            print "Alumno obtuve $nota% --> Grado de primera División<br>";
        } else if ($nota >= 45 && $nota <= 59) {
            print "Alumno obtuve $nota% --> Grado de segunda División<br>";
        } else if ($nota >= 33 && $nota <= 44) {
            print "Alumno obtuve $nota% --> Grado de tercera División<br>";
        } else {
            print "Alumno obtuve $nota% --> Reprovado<br>";
        }
    }
}
?>