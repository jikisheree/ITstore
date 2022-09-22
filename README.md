## Command
composer update
composer install
##ส่วนนี้ต้องไปกำหนด attribute 
//-- php artisan make:model User --\\ Userตรงนี้มีอยู่แล้ว
php artisan make:model Product
php artisan make:model Category
php artisan make:model Cart
php artisan make:model Invoice

##ส่วนนี้ต้องไปกำหนด constrain
//-- php artisan make:migration create_User_table --\\ Userตรงนี้มีอยู่แล้ว
php artisan make:migration create_Product_table
php artisan make:migration create_Category_table
php artisan make:migration create_Cart_table
php artisan make:migration create_Invoice_table

#หลังจากนั้น
php artisan migrate

#ส่วนนี้คือกำหนดฟังชั่นให้ทำงานได้
php artisan make:controller HomeController
php artisan make:controller LoginController
php artisan make:controller LogoutController
php artisan make:controller RegisterController
php artisan make:controller ProductController
!---php artisan make:controller CartController---! อาจจะมีไม่จำเป็น

