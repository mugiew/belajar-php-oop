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
