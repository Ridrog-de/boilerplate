# Readme

<!--Delete this section-->
# How to use this laravel package boilerplate

## Setup

**Step 1**  
Clone or download this Repository into a laravel installtion.

**Step 2**  
- Rename all Files from "BoilplateXxxxx.php" to "YourPackageNameXxxxx.php"  
- Search and Replace "Boilerplate" with "YourPackageName" (case sensitive!)
- Search and Replace "boilerplate" with "yourpackagename" (case sensitive!)
- Replace the name in the LICENSE File

**Step 3**
- Use your terminal to cd to the root of this package
- Run ```` composer install ````
- Run the tests ```` composer test ````

**Step 4**
- Add the namespace and the path to the composer.json File of your laravel installation

```
"autoload": {
    "classmap": [
        "database/seeds",
        "database/factories"
        ],
    "psr-4": {
        "App\\": "app/",
        "{Vendor}\\{{PackageName}}\\": "packages/{vendor}/{packagename}/src/
    }
},
```

- Add the Service Provider to config/app.php

## Development
1. Update all the readme /docs files  
    Delete what you don't need  
    You also need to delete links from \docs\index.md to the not used/deleted files in \docs\details
    
2. Develop the package    


## Publish
1. Create a Github repository for your package
2. Push the package to github
3. Bonus: Enable Github Pages in the settings of the repository
4. Generate a Release
5. Add the package to packagist
6. Bonus: Add the github repository to travis to run test on every change that is pushed to the repository
7. Delete this section
8. DONE

<!--/Delete this section-->


[![Build Status](https://travis-ci.org/Ridrog-de/boilerplate.svg?branch=master)](https://travis-ci.org/Ridrog-de/boilerplate)
[![Latest Stable Version](https://poser.pugx.org/ridrog/boilerplate/v/stable)](https://packagist.org/packages/ridrog/boilerplate)
[![Total Downloads](https://poser.pugx.org/ridrog/boilerplate/downloads)](https://packagist.org/packages/ridrog/boilerplate)
[![Latest Unstable Version](https://poser.pugx.org/ridrog/boilerplate/v/unstable)](https://packagist.org/packages/ridrog/boilerplate)
[![License](https://poser.pugx.org/ridrog/boilerplate/license)](https://packagist.org/packages/ridrog/boilerplate)

 **[Full Documentation](https://ridrog-de.github.io/boilerplate/)**

## What is this

-----------------------------------------------
## Installation

-----------------------------------------------
## Usage

-----------------------------------------------
## Config

-----------------------------------------------
## Details

### Facade


### Routes


### Controllers


### Views


### Middleware


### Migrations


### Seeder


### Commands


### Translation

### Events and Listeners

### Notifications

-----------------------------------------------
## Tests

-----------------------------------------------

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

$ composer test

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email mail@ridrog.de instead of using the issue tracker.

## Credits



## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
