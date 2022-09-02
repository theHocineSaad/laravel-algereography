<p align="center"><img src="https://i.imgur.com/05tgtP5.png"></p>
<h1 align="center">Laravel-Algereography</h1>

**Laravel-Algereography** allows you to add Migrations, Seeders and Models of Algerian Wilayas and Dairas to your existing or new cool Laravel project .

**- 58 Wilayas.**  
**- 548 Dairas.**  
**- Support both Arabic and French languages.**  
**- Built in models relationships, so you can for example do: `Daira::find(1)->wilaya` to get the Wilaya of Daira with the id=1.**   


## Installation
#### Step 1 - Require the package
    composer require thehocinesaad/laravel-algereography

#### Step 2: Install the package
    php artisan algereography:install

This command will do those good stuff for you:
1. Publish two Models, **`Wilaya`** and **`Daira`** to **`app/Models`**.

2. Publish two Migrations, **`create_wilayas_table`** and **`create_dairas_table`** to **`database/migrations`**

3. Publish two Seeders, **`WilayaSeeder`** and **`DairaSeeder`** to **`database/seeders`**

3. Run the two Migrations (**`create_wilayas_table`** and **`create_dairas_table`**)  
**Note:** this operation will automatically overwrite any table with the name of **`wilayas`** and **`dairas`**

4. Run the two Seeders (**`WilayaSeeder`** and **`DairaSeeder`**)

5. Finally, it prints **Done!** to make you know that everything is succefully finished then it will print **1 2 3 Viva l'Algérie!** just to make you a little bit proud of your country :heart:

#### Step 3:
There is no step 3, you're done :wink:  
Check out your database and you will find two new tables, **`wilayas`** and **`dairas`**.

## Contributing
Thank you for considering contributing to Laravel-Algereography project! Feel free to contribute in any way, we welcome every contribution.

## License
Laravel-Algereography project is open-sourced software licensed under the [MIT license](https://github.com/theHocineSaad/laravel-algereography/blob/main/LICENSE.md "MIT license").