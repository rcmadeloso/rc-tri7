
## Installation and Setup
- clone this repo https://github.com/rcmadeloso/rc-tri7.git
- run composer install
- run npm install
- run npm run dev
- create your own .env file with your own database
- run php artisan migrate:fresh --seed 


## Seeder
- The seeder above will generate the following user accounts:

Manager Account:
<p>username: manager</p>
<p>password: password</p>

Web Developer:
<p>username: web_developer</p>
<p>password: password</p>


Web Designer:
<p>username: web_designer</p>
<p>password: password</p>


-It will also generate 10 Employees


## Running the Application
- run php artisan serve
- go to chrome or any browser and access  [http://127.0.0.1:8000] or your localhost
- login to any of the account and you will be redirected to the dashboard