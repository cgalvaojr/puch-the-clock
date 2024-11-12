# Punch the clock app

## Description
This app will help you clock in and out. Once set up, the app automatically sends a request to the platform and logs your time, so you don’t have to remember to do it every time of the day.
## Requirements
- PHP
- Vue
- Composer
- Docker
- Laravel Sail

## Installation

1. **Install dependencies:**
    ```sh
    composer install
    ```

3. **Copy the `.env` file:**
    ```sh
    cp .env.example .env
    ```

4. **Generate application key:**
    ```sh
    ./vendor/bin/sail artisan key:generate
    ```

5. **Start the application using Sail:**
    ```sh
    ./vendor/bin/sail up -d
    ```

6. **Run migrations:**
    ```sh
    ./vendor/bin/sail artisan migrate
    ```

## Usage

### Access the application
Once the application is up and running, you can access it at `http://localhost`.

### Running Tests
To run the tests, use the following command:
```sh
./vendor/bin/sail artisan test
