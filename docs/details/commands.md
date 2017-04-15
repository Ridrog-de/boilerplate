[back](../index.md)  

# Commands

## boilerplate:command
```
boilerplate:command
```

### Arguments

1. **argument1**
    * required  
    * ```{argument1}```  
    * ```$this->argument('argument1');```
2. **argument2**
    * optional  
    * ```{argument2?}```  
    * ```$this->argument('argument2');```
3. **argument3**
   * optional with default value  
   * ```{argument3=default}```  
   * ```$this->argument('argument3');```
   

```
boilerplate:command argument1 argument2 argument3
```

### Options




## Help

```
php artisan help boilerplate:command
```