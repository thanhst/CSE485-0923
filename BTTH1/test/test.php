<?php 
#[Attribute] // Khai báo khởi tạo attribute có tên là myAttribute;
class MyAttribute { // đây là một class thuộc tính thể hiện ra bằng #[Attribute];
    public $value; // Tạo biến value cục bộ lưu trữ giá trị;
    public function __construct($value) { // Sử dụng magic methods tạo một hàm khởi tạo tự động nhận giá trị value;
        $this->value = $value;
    }
}
#[MyAttribute("Hello, World!")] // áp dụng thuộc tính MyAttribute với đối số là "Hello, World!" gán cho class myClass
class MyClass { // khởi tạo class MyClass;
    #[MyAttribute(42)] // Một thuộc tính 42 được gán cho biến myProperty.
    public $myProperty;// chỉ có thể gán thuộc tính cho biến ở trong class or function
    #[MyAttribute("Some Method")]// lại gán metadata Some Method cho function myMethod()
    public function myMethod() {
    }
}
?>








<?php
$reflectionClass = new ReflectionClass('MyClass');//dùng API phản chiếu để láya class MyClass

$classAttributes = $reflectionClass->getAttributes();// lấy ra thuộc tính từ class myClass
foreach ($classAttributes as $attribute) { // với mỗi thuộc tính trong tập thuộc tính,lấy ra tạo thành một phiên bản 
//mới của thuộc tính đó , ở đây là Hello, World!
    $attributeInstance = $attribute->newInstance();
    echo $attributeInstance->value; // Output: Hello, World!    
}
?>
<br>
<?php
$reflectionProperty = $reflectionClass->getProperty('myProperty');// lấy ra thuộc tính của myClass-myProperty
$propertyAttributes = $reflectionProperty->getAttributes();// bắt đầu truy cập vào thuộc tính của myProperty
foreach ($propertyAttributes as $attribute) { // truy cập thuộc tính , in ra các thuộc tính.
    $attributeInstance = $attribute->newInstance();
    echo $attributeInstance->value; // Output: 42
}
?>
<br>
<?php
$reflectionMethod = $reflectionClass->getMethod('myMethod');// lấy ra phương thức myMethod
$methodAttributes = $reflectionMethod->getAttributes();// lấy ra thuộc tính của myMethod
foreach ($methodAttributes as $attribute) {
    $attributeInstance = $attribute->newInstance();
    echo $attributeInstance->value; // Output: Some Method
}
?>









<?php
  enum DayOfWeek {
    const MONDAY = 'MONDAY';
    const TUESDAY = 'TUESDAY';
    const WEDNESDAY = 'WEDNESDAY';
    const THURSDAY = 'THURSDAY';
    const FRIDAY = 'FRIDAY';
    const SATURDAY = 'SATURDAY';
    const SUNDAY = 'SUNDAY';
}

$today = DayOfWeek::MONDAY;
echo "Today is " . $today;
$today = DayOfWeek::FRIDAY;
echo "Today is ".$today;
?>