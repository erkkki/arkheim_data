# Arkheim data in json

Basic unit / warlord / mastery data from [arkheim](https://arkheim.com/) game. 


[![Latest Stable Version](https://poser.pugx.org/phpunit/phpunit/v)](//packagist.org/packages/phpunit/phpunit)
[![Total Downloads](https://poser.pugx.org/phpunit/phpunit/downloads)](//packagist.org/packages/phpunit/phpunit)

## Why?

Easy to load / access to basic data for everyone.
Most programming languages can easily convert json to array / object.

Making it easy to start simple calculators or anything.
## Dist folder has minifield versions of main json data fiels
arkheim.json Combined data file.
```js
{
    "units": {
        "elf":    list of units
        "dwarf":  list of units
    },
    "masteries": {
        "elf":    list of masteries
        "dwarf":  list of masteries
    },
    "warlords": {
        "elf":    list of warlords
        "dwarf":  list of warlords
    }
}
```




## Units
```js
[{
    "name": String,
    "race": String, // dwarf / elf
    "type": String, // infantry / cavalry / artillery
    "fighting_strength": Number,
    "initiative": Number,
    "bonus": {
      "name": String,
      // Rest are optional
      "goblin": Number,
      "dwarf": Number,
      "elf": Number,
      "attack": Number,
      "deff": Number,
      "infantry": Number,
      "cavalry": Number,
      "artillery": Number
    },
    "cost": { "wood": Number, "iron": Number, "crop": Number },
    "training_time": Number // Seconds
}, ...] 
```

## Warlords
```js
[{
    "name": String,
    "level_needed": Number,
    "premium": Boolean,
    "price": Number,
    "speed": Number,
    "morale": Number,
    "army": {
      "slot_1": { "type": String, "capacity": Number },
      "slot_2": { "type": String, "capacity": Number },
      "slot_3": { "type": String, "capacity": Number }
    },
    "bonus": {
        "name": String,
        // Rest are optional.
        "dmg_decrease": Number,
        "xp": Number,
        "critical": Number,
        "army_strength": Number,
        "army_dmg": Number,
        "resurrect": Number,
        "poison": Number,
        "direct": Number,
        "burn": Number,
        "initiative": Number
    }
}, ...]
```

## Masteries
```js
[{
    "name": String,
    "info": String,
    "unlock_level": Number,
    "bonus": {
        // See masteries_bonus.json for all values.
    }
}, ...]
```

## Buildings
```js
[{
    "name": String,
    "info": String,
    "level_cap": Number,
    "levels": [
      {
        "level": Number,
        "build_time": Number, // Seconds
        "cost": { "wood": Number, "iron": Number, "crop": Number },
        "supply": Number,
        "bonus": { ??? }
      }, ...]      
}, ...]
```

## Realm
```js
[{ 
    "level": Number, 
    "bonus": { 
        "name": String, 
        // optional bonus 
        "xp": Number,
        "resource": Number,
        "construction_time": Number,
        "orbs": Boolean,
        "souls": Number,
        "infantry": Number,
        "cavalry": Number,
        "artillery": Number        
    }    
}, ...]
```




### Todo

- [x] Units
    - [x] dwarf
    - [x] elf, unit cost missing.
- [x] Warlords
    - [x] dwarf, Missing level needed, prizes.
    - [x] elf
- [x] Masteries
    - [x] dwarf, Needs level needed.
    - [x] elf
- [ ] Buildings
    - [ ] Resources
    - [ ] Infastructure
    - [ ] Military
    - [ ] Resources
- [ ] Realm Bonuses



