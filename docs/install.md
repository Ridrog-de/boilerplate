[Home](index.md) | [Installation](install.md) | [Usage](usage.md) | [Config](config.md)  

# Installation

## Require it

```
composer require ridrog/boilerplate
```

## Include Service Provider 

```
'providers' => [
    ...
    Ridrog\Boilerplate\BoilerplateServiceProvider::class,
    ...
 ],
```

Register the Facade

```
'aliases' => [
    ...
    'Boilerplate' => Ridrog\Boilerplate\Facades\BoilerplateFacade::class,
    ...
];
```



