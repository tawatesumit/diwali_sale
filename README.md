<p align="center"><a href="https://github.com/tawatesumit/diwali_sale.git" target="_blank">Download code</a></p>

1.  Required PHP version is ^8.2 (8.2 or gretter)

2.  Open project code in VS code tool.

3.  In vs code go to Terminal => New Termional

4.  Apply below command

    composer update

5.  Rename .env.example file to .env

6.  Run command for key genration => <b>php artisan key:generate</b>

7.  Then run command

    php artisan serve

8.  Download POSTMAN for testing API

9.  Project run and display local ip link after php artisan serve command, copy link paste in postman.

    (Ex. http://127.0.0.1:8001/api/orders)

10. Pass json array in postman using POST method.
    Ex.
    a. select (Body) type<br>
    b. under body parameter select (row)<br>
    c. add below json in row parameter<br>

        {
        "\_token": "RiE2n3ZacoooEBOx4ODYWsjLzr6Taxwxg1wePrp0",
        "products": [10, 20, 30, 40, 50, 60]
        }

    <br><br>
    d.change products values for another rules. <br>

11. If csrf token create issue kindly go to browser and paste php artisan command given link.

Ex. http://127.0.0.1:8001 <br>

a. Right click on browser <br>
b. click on last option Inspect <br>
c. go to Elements dev tool. <br>
d. go to <html><head> tage and copy csrf token from <b>meta</b> tag. <br>
ex. <meta name="csrf-token" content="DQUOwAZXPjSUzth5nEVAzflCDhYapXeBbGCSRwht"> <br>

    For Database setup

1. Open local phpmyadmin

2. create new database <b>( raipur_test )</b>

3. run below command in vs code terminal

    Ex. php artisan migrate
