
## Installation and Setup
- clone this repo https://github.com/rcmadeloso/rc-tri7.git
- run <strong>composer install</strong>
- run <strong>npm install</strong>
- run <strong>npm run dev</strong>
- create your own .env file with your own database
- run php artisan migrate:fresh --seed 


## Seeder
- The seeder above will generate the following user accounts:

Manager Account:
username: manager
<br>
password: password

Web Developer:
username: web_developer
<br>
password: password


Web Designer:
username: web_designer
<br>
password: password


- Seeder will also generate 10 Employees


## Running the Application
- run <strong>php artisan serve</strong> 
- go to chrome or any browser and access  [http://127.0.0.1:8000] or your localhost
- login to any of the account and you will be redirected to the dashboard