# Arkheim data in json

Basic unit / warlord / mastery data from [arkheim](https://arkheim.com/) game. 

## Why?

Easy to load / access to basic data for everyone.
Most programming languages can easily convert json to array / object.

Making it easy to start simple calculators or anything.

## Units
```js
[{
    "name": String,
    "race": String, // dwarf / elf
    "type": String, // infantry / cavalry / artillery
    "fighting_strength": Int,
    "initiative": Int,
    "special_ability": {
      "name": String,
      "bonus": [
          false, // if attack bonus.
          false, // if defense bonus.
          false, // if unit type bonus.
          false, // if race bonus.
      ]
    },
    "cost": { "wood": Int, "iron": Int, "crop": Int },
    "training_time": Int // Seconds
}, ...] 
```

## Warlords
```js
[{
    "name": String,
    "race": String,  // dwarf / elf
    "level_needed": Int,
    "premium": Boolean,
    "price": Int,
    "speed": Int,
    "morale": Int,
    "slots": { // Type: infantry / cavalry / artillery
      "slot_1": { "type": String, "capacity": Int },
      "slot_2": { "type": String, "capacity": Int },
      "slot_3": { "type": String, "capacity": Int }
    },
    "special_ability": String
}, ...]
```

## Masteries
```js
[{
    "name": String,
    "race": String,  // dwarf / elf
    "info": String,
    "unlock_level": Int,
    "effect": {
      "value": Int,
      "type": String,  // int / percentage
      "levels": Int
    }
}, ...]
```

## Buildings
```js
[{
    "name": String,
    "info": String,
    "level_cap": Int,
    "levels": [
      {
        "level": Int,
        "build_time": Int, // Seconds
        "cost": { "wood": Int, "iron": Int, "crop": Int },
        "supply": Int,
        "bonus": { ??? }
      }, ...]      
}, ...]
```

## Realm
```js
[{ 
    "level": Int, 
    "bonus": { 
        "effect": String, 
        "value": Int, 
        "type": String // boost or percentage
    }    
}, ...]
```




### Todo

- [x] Units
    - [x] dwarf
    - [x] elf, unit cost missing.
- [ ] Warlords
    - [ ] dwarf
    - [x] elf
- [x] Masteries
    - [x] dwarf, Needs unlock_level values
    - [x] elf
- [ ] Buildings
    - [ ] Resources
    - [ ] Infastructure
    - [ ] Military
    - [ ] Resources

- [ ] Realm Bonuses
- [ ] Images
    - [ ] Units
    - [ ] Warlords
    - [ ] Masteries


