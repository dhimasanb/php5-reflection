<?php
class App {
    public static function make($class) {
        $reflector = new ReflectionClass($class);
        $constructor = $reflector->getConstructor();
        // Jika constructor tidak ada, artinya tidak ada dependensi.
        // Maka kita langsung membuat objek untuk kelas ini.
        if (is_null($constructor))
        {
            return new $class;
        }
        $dependencies = $constructor->getParameters();
        $args = [];
        foreach ($dependencies as $dependency) {
            // Jika getClass null, maka parameter/dependensi ini bukanlah sebuah
            // Class. Bisa jadi, ini adalah string atau integer. Maka kita
            // langsung mengambil nilai defaultnya.
            if (is_null($dependency->getClass())) {
                array_push($args, $dependency->getDefaultValue());
            } else {
                // Jika getClass ada hasilnya, maka kita perlu membuat object
                // dari class ini. Disini kita menggunakan teknik rekursif
                // untuk memanggil kembali method build().
                array_push($args, self::make($dependency->getClass()->name));
            }
        }
        // Membuat object dari class yang dipanggil dengan parameter yang sudah
        // dibuat diatas.
        return $reflector->newInstanceArgs($args);
    }
}
