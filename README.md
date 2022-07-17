# Genius-Coding Laravel demo project
This project contains all the samples of my videos on <a href="https://www.youtube.com/channel/UC4TcEW7UPQTS8uAGS611BOg" target="_blank">my YouTube channel</a>.<br/>
It always contains the update of the last video, but i will never delete or refactor something. You will always be able to use it for each video.

## Setup
Docker and Docker-Compose are required to run this project. <br/>
Need help? <br/>
<ul>
    <li><a href="https://docs.docker.com/get-docker/">Install Docker</a></li>
    <li><a href="https://docs.docker.com/compose/install/">Install docker-compose</a></li>
</ul>

### Install and run the docker-containers 
1. Clone this project and cd into the directory
2. Copy and edit the .env.examle (APP_URL, databasesettings)
3. Run ``` docker-compose up -d genius-coding ``` 
4. Run ``` docker-ps ``` and you should see the container ```genius-coding``` and ```mysql-db``` up and running 
5. Open http://localhost:10500 in a browser. You should see the startpage of Laravel.
6. Done 

#### Database permissions
1. Run ``` docker-compose exec mysql-db bash ```
2. You are connected to the database container now
3. Run ``` mysql -uroot -p ```
4. Enter the password which is in your .env file and hit enter
5. Now you are connected to the database shell of mysql 
6. Run ``` GRANT ALL PRIVILEGES ON genius_coding.* TO 'genius_coding'@'%'; ``` where 'genius_coding' after the ON is the name of the database and 'genius_coding' after TO is the database user. Change it to fit the settings of your .env file if you changed it.
7. Run ``` FLUSH PRIVILEGES ;```
8. Run ``` EXIT;```
9. You are back on the shell of your database container now
10. Run ``` exit``` to disconnect from you container
11. Done

#### Final step - Migrations
1. Run ``` docker-compose exec genius-coding bash ```
2. Run ``` composer update ```
3. Run ``` php artisan migrate```
4. Run ``` exit``` to disconnect from you container
5. Done

<strong>You are now able to follow each of my videos marked with Laravel in the title. </strong> 

## License

The Laravel framework and this project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
