# bike_serviceApplication


This application is for owners of Bike service stations. It helps the owners to list all the services
they offer. Customers can choose one or more services to book

please go through the instruction thoroughly, It'll guide you through the process step by step, ensuring you have your development environment ready and the project running smoothly.

Prerequisites

Before we begin, make sure you have the following installed on your system:

PHP version 8.2
Composer version 2.7
Git


Step 1: Clone the Repository
The first step is to clone the project repository to your local machine. Open your terminal and execute the following command:
```console
git clone (https://github.com/rajeshkalaiselvam/bike_serviceApplication.git)
cd project_directory
```

Step 2: Update Composer Dependencies
Next, we need to update Composer dependencies. Navigate to your project directory in the terminal and run:

```console
composer update
```
Step 3: Update Environment Variables
Change the .env.example to .env
Ensure that your .env file is properly configured with your database connection and any other necessary environment variables.

Step 4: Run Migrations
Now, let's migrate the database by running the following command:

```console
php artisan migrate
```

Step 5: Seed the Database
To populate the database with initial data, run the following command:

```console
php artisan db:seed
```

Admin credentials 
    UN:admin@gmail.com
    PWD:Admin@123
User Credentials
    UN:test@gmail.com
    PWD:Test@123

Step 6: Optimize the Application
Optimize the application for better performance using:

```console
php artisan optimize
```

Step 7: Serve the Application
Finally, let's serve the application locally:

```console
php artisan serve
```
Once the server is running, you can access your Laravel application by opening a web browser and navigating to http://localhost:8000.


Conclusion
Congratulations! You've successfully set up and run your Bike Service Application project. We hope the above guide helps to setup the project in your local system. Feel free to explore further and customize the application to fit your needs in future. If you encounter any issues or have questions, don't hesitate to reach out for support.
