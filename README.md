## Command
##ส่วนนี้ต้องไปกำหนด attribute 
php artisan make:model Product
php artisan make:model User
php artisan make:model Cart

##ส่วนนี้ต้องไปกำหนด constrain
php artisan make:migration create_User_table
php artisan make:migration create_Product_table
php artisan make:migration create_Cart_table

#หลังจากนั้น
php artisan migrate

#ส่วนนี้คือกำหนดฟังชั่นให้ทำงานได้
php artisan make:controller HomeController
php artisan make:controller LoginController
php artisan make:controller LogoutController
php artisan make:controller RegisterController
php artisan make:controller ProductController
!---php artisan make:controller CartController---! อาจจะมีไม่จำเป็น

