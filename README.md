# Task Management

## Setup

1. Clone the repository:
    ```bash
    git clone https://github.com/ipshainu/user-management.git
    cd user-management
    ```

2. Install dependencies:
    ```bash
    composer install
    npm install
    npm run build
    ```

3. Set up the environment file:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Run the migrations:
    ```bash
    php artisan migrate:fresh
    This will migrate the tables and insert some fake datas
    ```