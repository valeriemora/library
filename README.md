#Maniak library

## Installation


### Step 1: Clone repository
Clone with your credentials in your local enviroment.

cd into your projects folder, then:

    $git clone https://github.com/valeriemora/library.git
    or
    $git clone git@github.com:valeriemora/library.git

#### 1.1: File permissions
For Mac or Linux users, you might need to change permissions to the project folder.

    sudo chmod -R 775 stj-pet-project

### Step 2: Install packages and Generate Key
Run the next command in console:
	 $ composer install   
Rename /.env.example to /.env and run the next command:
	 $ php artisan key:generate

>_Note if in your .env file doesn't have any value on APP_KEY you must paste it there_

### Step 3: Configure database.
Configure your database credentials in “/.env”

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=library
	DB_USERNAME='<user>'
	DB_PASSWORD='<your-database-password>'

### Step 4: Migrate database
Run next command to migrate the database:
	$php artisan migrate


### Step 5: Configure your v-host or run next command to see your project in local
If you're using windows, you have to run the next command:
	$php artisan serve
Then open http://localhost:8000

If you're using Mac, use it on valet and open it http://library.dev

Up to you!
