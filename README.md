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

## How can I use the package
As mentioned before, the package publishes two models `Wilaya` and `Daira`, use them just like any other model in your project.

#### Get all Wilayas
    Wilaya::all();

#### Get all Dairas
    Daira::all();

#### Get Dairas of a Wilaya
    Wilaya::findOrFail(15)->dairas

#### Get Wilaya of a Daira
    Daira::findOrFail(205)->wilaya;

**Note:** Don't forget to import the models first: 

    use App\Models\Wilaya;
    use App\Models\Daira;

### Helpers
You can also use the package using some Helpers I added that will make your life easier.
#### Helpers list:
```php
$wilayas     =   wilayas();           // Get all Wilayas in all languages
$ar_wilayas  =   wilayas('ar');       // Get all Wilayas in arabic
$ar_wilayas  =   wilayas('fr');       // Get all Wilayas in french

//

$wilaya      =   wilaya(15);          // Get individuel Wilaya in all languages
$ar_wilaya   =   wilaya(15, 'ar');    // Get individuel Wilaya in arabic
$wilaya      =   wilaya(15, 'fr');    // Get individuel Wilaya in french

//

$dairas      =   dairas();            // Get all Dairas in all languages             
$ar_dairas   =   dairas('ar');        // Get all Dairas in arabic 
$fr_dairas   =   dairas('fr');        // Get all Dairas in french

//

$dairas      =   dairasOf(15);        // Get all Dairas of a Wilaya in all languages
$dairas      =   dairasOf(15, 'ar');  // Get all Dairas of a Wilaya in arabic
$dairas      =   dairasOf(15, 'fr');  // Get all Dairas of a Wilaya in french
```
##### When specifying the language, to access the name attribute just do `->name` and it will automatically get the name in the correct language, so there is no need to do `->ar_name` to get the name in arabic.
#### Example
```php
$fr_wilaya  =  wilaya(15, 'fr');   // $fr_wilaya->name will be 'Tizi Ouzou' 
$ar_wilaya  =  wilaya(15, 'ar');   // $ar_wilaya->name will be 'تيزي وزو' 
```
How cool is that!

## Contributing
Thank you for considering contributing to Laravel-Algereography project! Feel free to contribute in any way, we welcome every contribution.

## License
Laravel-Algereography project is open-sourced software licensed under the [MIT license](https://github.com/theHocineSaad/laravel-algereography/blob/main/LICENSE.md "MIT license").