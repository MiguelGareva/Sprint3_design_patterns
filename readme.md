**<h1>Sprint3 tema 1: DESIGN PATTERNS.</h1>**

**<h3>#Tecnologías utilizadas:</h3>**
    · Xampp<br>
    · Php versión 8.2.12<br>
    · Git versión 2.47.0.windows.2<br>
    · IDE (visual studio code)

**<h3>#Requisitos:</h3>**
    · Entorno de servidor web local<br>
    . Navegador web

**<h3>#Instalacíon:</h3>**
    · Descargar e instalar un entorno de servidor web local(como XAMPP)<br>
    · Clonar o descargar el repositorio dentro de la carpeta htdocs, que se encuentra en la carpeta XAMPP una vez instalado.

**<h3>#Ejecución:</h3>**
    · Abrir navegador web de preferencia e introducir la url: localhost/"la dirección de la carpeta dónde se encuentra el ejercicio o proyecto"

**<h3>#Descripción ejercicios:</h3>**
    **<h4>·Nivel1:</h4>**
    · <a href="3.1.1_design_patterns_nivell1/">#Ejercicio 1</a>: *"**<h3>Singleton</h3>**
Tens la següent definició de classe que pretén modelar al famós personatge de Tigger dels llibres "Winnie The Pooh" d'A A. Milne:

Arxiu: tigger.php

class Tigger {

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;
       }

}

Sembla raonable esperar que només hi hagi un objecte Tigger (després de tot, ell és l'únic!), però la implementació actual permet tenir múltiples objectes Tigger diferents:

Refactoritzar la classe Tigger en un Singleton considerant els següents punts:

Defineix el mètode getInstance () que no tingui arguments. Aquesta funció és responsable de crear una instància de la classe Tigger només una vegada i tornar aquesta única instància cada vegada que es crida.
Imprimeix en pantalla múltiples vegades el rugit de Tigger.
Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger ha realitzat rugits."*<br>

· <a href="3.1.2_design_patterns_nivell1/">#Ejercicio 2</a>: **<h3>Dependency Injection</h3>**
*"Imagina que ets una persona que està a punt de sortir de casa per anar a estudiar/treballar. Abans de sortir de casa necessitaràs portar la cartera, les claus de casa, potser les claus del cotxe/moto o la targeta del transport públic, i l'smartphone.<br>Fes una programa que simuli aquesta lògica fent servir el patró d'injecció de dependències."*<br>
    