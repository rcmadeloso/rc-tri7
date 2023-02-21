
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

username: manager
password: password


Web Developer:

username: web_developer
password: password


Web Designer:

username: web_designer
password: password


-It will also generate 10 Employees


## Running the Application
- run php artisan serve
- go to chrome or any browser and access  [http://127.0.0.1:8000] or your localhost
- login to any of the account and you will be redirected to the dashboard