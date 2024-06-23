<p align="center"><a href="https://github.com/tawatesumit/diwali_sale.git" target="_blank">Download code</a></p>

1. Required PHP version is ^8.2 (8.2 or gretter)

2. Open project code in VS code tool.

3. In vs code go to Terminal => New Termional

4. Apply below command

    composer update

5. Then run command

    php artisan serve

6. Download POSTMAN for testing API

7. Project run and display local ip link after php artisan serve command, copy link paste in postman.

    (Ex. http://127.0.0.1:8001/api/orders)

8. Pass json array in postman using POST method.
   Ex.
   a. select (Body) type
   b. under body parameter select (row)
   c. add below json in row parameter

    {
    "\_token": "RiE2n3ZacoooEBOx4ODYWsjLzr6Taxwxg1wePrp0",
    "products": [10, 20, 30, 40, 50, 60]
    }

d. Kindly remove \ from \_token first parameter
e.change products values for another rules.

9. If csrf token create issue kindly go to browser and paste php artisan command given link.

Ex. http://127.0.0.1:8001

a. Right click on browser
b. click on last option Inspect
c. go to Elements dev tool.
d. go to <html><head> tage and copy csrf token from <b>meta</b> tag.
ex. <meta name="csrf-token" content="DQUOwAZXPjSUzth5nEVAzflCDhYapXeBbGCSRwht">

    For Database setup

1. Open local phpmyadmin

2. create new database <b>( raipur_test )</b>

3. run below command in vs code terminal

    Ex. php artisan migrate
