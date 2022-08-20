<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Sabaa Sanabel Project

Web-based system for fundraising management, linking between (Zakat committees, donors and beneficiaries) for the Ministry of Awqaf and Religious Affairs in Gaza Strip.

## Project Description

Achieving communication between beneficiaries and donors, in addition to providing a secure, local, official platform that is handed over to a third organization (the Ministry of Awqaf and Religious Affairs) that enjoys reliability and safety. The platform supports the Gaza Strip and works within it only to deliver and receive in-kind donations.

## Objectives

Establishing a platform for managing donations and distributing in-kind donations between three actors: The Ministry of Awqaf, the Zakat Committees, and donors, and the possibility of benefiting from this platform by the beneficiaries in the Gaza Strip.
1. Final determination of requirements.
2. Platform development and testing.
3. Acceptance testing and official approval of the Ministry of Awqaf to use the platform.
4. Launching the platform in cooperation with the Ministry of Awqaf.

## Technologies used

Laravel framework work version 8 has been used because of its advanced features and development tools that facilitate rapid web application development. Laravel also helps website developers simplify their development process with clean and reusable code.

### Packages and Libraries

- **[Laravel v8](https://laravel.com/docs/8.x/installation)**
- **[Bootstrap v5](https://getbootstrap.com/)**
- **[Spatie v5](https://spatie.be/docs/laravel-permission/v5/introduction)**
- **[jQuery v3.6.1](https://jquery.com/)**
- **[Laravel Jetstream v2](https://jetstream.laravel.com/2.x/introduction.html)**
- **[Laravel Livewire v2](https://laravel-livewire.com/)**


## How to Use this Project

1. Download the project from git using
git clone https://github.com/shamsnazli/Seven_Sanabile_Pro.git <br>2 . Download the libraries in the fendor file such as: livewire and Spatie.

## Setup
#### Database
.env file

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=seven_sanabil_project<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>

#### Remember: Create the database before run artisan command.

php artisan migrate<br>
php artisan db:seed --class=UserLevelsSeeder

#### Note:
##### Admin login in dashboard:
Email: admin@gmail.com<br>
Pass: 123456789
##### Committee login in dashboard:
Email: committee@gmail.com<br>
Pass: 123456789
##### Donor login in dashboard:
Email: donor@gmail.com<br>
Pass: 123456789

## Dashboard Screen
![1](https://user-images.githubusercontent.com/92631191/185757188-5cbdd102-68b4-44d7-a3cd-1c3e3eeee041.png)
![2](https://user-images.githubusercontent.com/92631191/185757192-12da063d-2cff-47c9-961d-b7587df3c54e.png)
![12](https://user-images.githubusercontent.com/92631191/185757320-6bc11f3c-7996-47ea-9e8f-314f6a8a263a.png)
![13](https://user-images.githubusercontent.com/92631191/185757322-6a4a5008-bed0-44df-b2f5-1e12efcb0ee5.png)
![15](https://user-images.githubusercontent.com/92631191/185757325-6fb0b0c8-3e74-4a9c-b7d9-29d8d686800e.png)
![9](https://user-images.githubusercontent.com/92631191/185757327-7ef73a60-4abb-4bb1-b196-8a5f2eae1e1b.png)

## Website Screen
![8](https://user-images.githubusercontent.com/92631191/185757217-3af3140a-8ac2-49bc-86dc-3b83a0168e2c.jpg)



