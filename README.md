# Laravel Web Installer

Laravel Web installer checks for the following things and install the application in one go.

1. Check For Server Requirements.
2. Check For Folders Permissions.
3. Ability to set database information.
4. Migrate The Database.
5. Seed The Tables.

## Note

You need to have `.env` to the root

## Installation

Require this package with composer:

```bash
composer require osenco/pledge-installer
```

After updating composer, add the ServiceProvider to the providers array in `config/app.php`.

```bash
'providers' => [
    Pledge\Installer\Providers\InstallerServiceProvider::class,
];
```

## Usage

Before using this package you need to run :

```bash
php artisan vendor:publish --provider="Pledge\Installer\Providers\InstallerServiceProvider"
```

You will notice additional files and folders appear in your project :

- `config/install.php` : Set the requirements along with the folders permissions for your application to run, by default the array contains the default requirements for a basic Laravel app.
- `public/install/assets` : This folder contains a css folder and inside it you will find a `main.css` file, this file is responsible for the styling of your installer, you can overide the default styling and add your own.
- `resources/views/vendor/install` : Contains the HTML code for your installer.
- `/lang/en/install.php` : This file holds all the messages/text.

## Installing your application

- **Install:** In order to install your application, go to the `/install` url and follow the instructions.

## Screenshots

![Laravel web installer](http://public.froid.works/knap1.png)

## Credits

[RachidLaasri Installer](https://github.com/RachidLaasri/install)
