# Saving GPS Location to Database from Android Fused Location Provider API PHP Files
A project on how to get gps updates from android device using Android Fused Location Provider and save to a database using php and MySql.
To interact with MySQL database we need to build a REST API first. REST Api job is to get the request from client, interact with database and finally give the response back to client. So we’ll create a simple PHP, MySQL API first. Our API do’s below jobs.
⇒ Accepts requests in POST methods
⇒ Interact with database by inserting data.
⇒ Finally will give response back in JSON format

# 1. Downloading & Installing WAMP
Download & Install WAMP server from www.wampserver.com/en/. Once installed, launch the program from Start ⇒ All Programs ⇒ WampServer ⇒ StartWampServer. If you are on Mac, alternatively you can use MAMP for the same.
You can test your server by opening the address http://localhost/ in your browser. Also you can check phpmyadmin by opening http://localhost/phpmyadmin
Following is a screencast of Downloading and Installing WAMP Server.

# 2. Creating MySQL Database and Tables
Open phpmyadmin and create necessary database and table. Here we are creating only one table realtime to store users location information.

# 3. Creating PHP Project
Goto the location where wamp installed and open www folder. The default installation location of wamp would be C:/wamp.
1. Go into www folder and create a folder named realtimelocation. This will be the root directory of our project.
2. In realtimelocation, create another directory named include. In this folder, we keep all the helper classes.
3. Now inside include, create a php file named dbConnect.php and add below content. In this class we handle opening and closing of database connection. Replace the DB_USER and DB_PASSWORD values with your’s.
4. Create dbFunctions.php inside include. This file contains functions to store location data into database.

# 3.1 Registration Endpoint
This endpoint accepts uniqueId, latitude and longitude as POST parameters and store the users location data in MySQL database.
5. In realtimelocation root directory, create addlocation.php.

# 3.2 Types of JSON Responses
The following are the different types of JSON responses for registration and login endpoints.
3.3.1 Adding Location
URL: http://localhost/realtimelocation/addlocation.php
PARAMS: uniqueId, latitude, longitude
Success response
{
“error”: true
}
Failure response
{
“error”: false
}
Now we have completed the PHP part. Let’s start the android part.
