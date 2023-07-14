# Planty WordPress Site

Welcome to the Planty WordPress Site project! This project is part of my studies at Openclassrooms and aims to create a website for the Planty brand, which specializes in plant-based energy drinks.

## Prerequisites

Before installing the project, please ensure you have the following prerequisites:

- PHP 8.1+
- Composer 2.5+
- WP-CLI 2.8+
- MySQL 5.7+

## Installation

Follow the steps below to install the project:

1. Clone the repository using the following command:
```
git clone https://github.com/kent13n/oc-project-6.git
```
2. Install the project dependencies using Composer by running the following command:
```
composer install
```
3. Create the .env file by using the example file .env.example as a reference. Make sure to configure the environment variables accordingly.

4. Install the WordPress site by running the following command:
```
wp core install --title="Planty" --url=planty.local --admin_name=admin --admin_password=admin --admin_email=planty.drinks@gmail.com
```
5. Run the migrations to set up the necessary database tables and data by running the following command:
```
wp migrate
```

## Usage

To use the Planty WordPress site, simply navigate to the configured URL (e.g., `planty.local`) in your web browser. You can then access the WordPress admin dashboard using the provided admin credentials.

## License

This project is licensed under the [MIT License](LICENSE).

## Credits

The Planty WordPress Site project is developed and maintained by [Kent13n](https://github.com/kent13n/).