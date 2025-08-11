# 🧠 Belajar OOP di PHP

Halo, calon programmer masa depan! 🎓  
Di materi ini, kita akan belajar konsep **Object Oriented Programming (OOP)** di PHP.  
Bayangin kamu lagi main game RPG — karakter kamu itu object, punya class, skill (method), dan bisa diwariskan ke karakter lain. Seru, kan? Nah, OOP itu kurang lebih kayak gitu.

---

## 🧩 Materi yang Akan Dipelajari

### 📦 Class & Object
> Class itu blueprint-nya, Object itu realisasi-nya.
```php
class Hero {
    public $name;

    public function attack() {
        return "$this->name menyerang!";
    }
}

$hero1 = new Hero();
$hero1->name = "Mugiew";
echo $hero1->attack(); // Mugiew menyerang!
```

---

### 🧬 Constructor & Property
> Constructor dipanggil otomatis saat object dibuat.
```php
class Hero {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}
```

---

### 🏷️ Visibility (Access Modifier)
> `public`, `protected`, dan `private` itu kayak kunci pintu.
```php
class Hero {
    private $secret = "Aku suka PHP";

    public function getSecret() {
        return $this->secret;
    }
}
```

---

### 🧭 Inheritance (Pewarisan)
> Anak mewarisi sifat orang tua. Gitu juga di OOP.
```php
class Hero {
    public $name;
    public function greet() {
        return "Halo, aku $this->name";
    }
}

class Warrior extends Hero {
    public function slash() {
        return "$this->name melakukan tebasan!";
    }
}
```

---

### 🎭 Interface
> Menentukan kontrak yang harus dipenuhi class.
```php
interface CanAttack {
    public function attack();
}

class Mage implements CanAttack {
    public function attack() {
        return "Mage melempar fireball!";
    }
}
```

---

### 🧙‍♂️ Trait
> Fitur untuk berbagi method antar class tanpa inheritance.
```php
trait Logger {
    public function log($msg) {
        echo "[Log]: $msg";
    }
}

class Service {
    use Logger;
}
```

---

### 🌌 Static Property & Method
> Dipanggil langsung tanpa membuat object.
```php
class Math {
    public static function tambah($a, $b) {
        return $a + $b;
    }
}

echo Math::tambah(2, 3); // 5
```

---

## 💡 Tips Belajar
- Praktik langsung setiap materi
- Buat mini-project: Game sederhana, Aplikasi catatan, dsb
- Jangan takut error, karena error adalah teman 😁

---

## 🏁 Next Step
Lanjut ke:
- 🛢️ **Database (MySQL + PDO)**
- 🌐 **Membuat Aplikasi Web Dinamis**
- 🎼 **Laravel dan Framework OOP PHP lainnya**

---

## ❤️ Special Thanks
Untuk kamu yang sudah berani belajar dan mencoba. Dunia butuh lebih banyak coder kece kayak kamu.

---

> Dibuat dengan ❤️ oleh Mugiew Galeano  
> Versi PHP: 8.4  
> Materi ini bebas digunakan untuk belajar dan mengajar.