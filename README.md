# Techathon_Prelims
Techathon Prelims Product Development (Multi Login Multi Role Login System with forgot password)
## Tech Stack used to build the system
1. PHP
2. My SQL
3. HTML , CSS and BOOTSTRAP
## Features of the System
- A portal where we have 2 roles students and teachers 
- They can Either Log in or Register
- In log in they can click forgot password and reset their password through email reset link
- When a teacher logs in , they can see a quote pertaining to teachers
- When a student logs in , they can see a gif image
- The username and logout option is displayed as header whenever they log in 
- When they log out , they are again redirected to the Login page
## Database
Mainly the system requires two databases one for users details and another one for password resetting where we store the md5 keys
## How to run the project
1. Open the xampp server and start MySql and Apache
2. Go to localhost/phpmyadmin and set the databases
3. Then go to google and type localhost/folder_name/index.php
4. In the forgot password php file give your mail id , password and pertaining server for sending mails like smtp.gmail.com
5. The project runs successfully
## Prerequisties
- Xaamp 
- compsure environment variable
- PHPMailer installed
## Screenshots of the system
![image](https://user-images.githubusercontent.com/65863923/143020431-9513c9b2-4a1d-452e-811d-68e9bf6f5fd6.png)
![image](https://user-images.githubusercontent.com/65863923/143020519-12a825de-68b4-407c-ad36-70b0ab11501b.png)
![image](https://user-images.githubusercontent.com/65863923/143020817-e7eb925d-d6f8-416a-b9b1-ab9f14e493ed.png)
![image](https://user-images.githubusercontent.com/65863923/143020895-700c4443-fcec-477d-800e-3b6da218e012.png)
![image](https://user-images.githubusercontent.com/65863923/143020968-8b0e609a-8a2c-4364-b3e0-b1fc22effac0.png)
![image](https://user-images.githubusercontent.com/65863923/143021021-ddce4bf2-0eb4-4f98-b458-e4d7d31b8689.png)
## Conclusion
Thus the project uses PHP and MySQL to build an authentication system
