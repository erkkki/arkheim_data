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
    "race": String, // Dwarf / Elf
    "type": String, // Infantry / Cavalry / Artillery
    "fighting_strength": Int,
    "iniative": Int,
    "special_ability": {
      "name": String,
      "bonus": ???
    },
    "cost": { "wood": Int, "iron": Int, "crop": Int },
    "training_time": Int // Seconds
}, ...] 
```

## Warlords
```js
[{
    "name": String,
    "race": String,  // Dwarf / Elf
    "level_needed": 96,
    "premium": false,
    "price": 0,
    "speed": Int,
    "morale": Int,
    "slots": { // Type: Infantry / Cavalry / Artillery
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
    "race": String,  // Dwarf / Elf
    "info": String,
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
        "cost": { "wood": Int, "iron": Int, "crop": Int },
        "build_time": Int, // Seconds
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
    - [x] Dwarf
    - [x] Elf, unit cost missing.
- [ ] Warlords
    - [ ] Dwarf
    - [x] Elf
- [x] Masteries
    - [x] Dwarf, Needs unlock_level values
    - [x] Elf
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


