![Project image](https://lh3.googleusercontent.com/pw/ACtC-3e9XlFRqVmgYAkVSbSNUKFpbrd0rHX8-Au2Eeh3aZVrv1Ds4yt1HiyO8TMRXlyM3g7sNQl7CbvdU5YjnqKnNbDK44AI7oN_Jkqy6nYu6wbDpheNP8mU8IfxegWz0bUsLV-MVEGOU-YPkVFsqlUF-NVY=w1049-h640-no?authuser=0)

## Laravel (v7.27.0)

<p><b>Stack</b></p>

<p>Laravel (v7.27.0)</p>
<p>Laravel mix</p>
<p>Vuejs</p>

## Description

<p>Small project using domain driven design.</p>

## Git Repository

- [laravel_domain_driven_design](https://github.com/marcovie/laravel_domain_driven_design)

## Installation
<p>Step 1 - git clone https://github.com/marcovie/laravel_domain_driven_design </p>
<p>Step 2 - go to terminal/cmd to the project root folder, type: composer install, follow by npm install.</p>
<p>Step 3 - Make copy of the .env.example file and change the copy name to .env, open file and change settings required.</p>
<p>Step 3 - Make database same name as you stated in .env file.</p>
<p>Step 5 - Once .env file created you will need to run following commands that is between quotes:</p>

<p>"php artisan key:generate" - (generates security key for laravel)<br/>
"php artisan migrate --seed" - (creates all tables and data required)<br/></p>


## NB info if running on linux
<p>You will have to give certain folder rights for project to work, please run commands between the quotes below:</p>
<p>"sudo chgrp -R www-data storage boostrap/cache"</p>
<p>"sudo chmod -R ug+rwx storage boostrap/cache"</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
