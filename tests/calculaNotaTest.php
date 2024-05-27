<?php

use PHPUnit\Framework\TestCase;
use TemaTDD\CalculaNota;

class CalculaNotaTest extends TestCase
{
    public function testCalculaNotaAlumno()
    {
        $this->expectOutputString("Alumno obtuve 29% --> Reprovado<br>", CalculaNota::calculaNotaAlumno(29));
    }

    public function testPrimeraDivision()
    {
        $this->expectOutputString("Alumno obtuve 65% --> Grado de primera División<br>", CalculaNota::calculaNotaAlumno(65));
    }

    public function testSegundaDivision()
    {
        $this->expectOutputString("Alumno obtuve 50% --> Grado de segunda División<br>", CalculaNota::calculaNotaAlumno(50));
    }

    public function testTerceraDivision()
    {
        $this->expectOutputString("Alumno obtuve 40% --> Grado de tercera División<br>", CalculaNota::calculaNotaAlumno(40));;
    }
}
?>