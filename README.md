# Arkheim data in json

Basic unit / warlord / mastery data from [arkheim](https://arkheim.com/) game. 

## Why?

Easy to load / access to basic data for everyone.
Most programming languages can easily convert json to array / object.

Making it easy to start simple calculators or anything.

## Units
```js
[{
    "name": string,
    "race": string, // dwarf / elf
    "type": string, // infantry / cavalry / artillery
    "fighting_strength": number,
    "initiative": number,
    "special_ability": {
      "name": string,
      "bonus": [
          false, // if attack bonus.
          false, // if defense bonus.
          false, // if unit type bonus.
          false, // if race bonus.
      ]
    },
    "cost": { "wood": number, "iron": number, "crop": number },
    "training_time": number // Seconds
}, ...] 
```

## Warlords
```js
[{
    "name": string,
    "level_needed": number,
    "premium": Boolean,
    "price": number,
    "speed": number,
    "morale": number,
    "slots": { // Type: infantry / cavalry / artillery
      "slot_1": { "type": string, "capacity": number },
      "slot_2": { "type": string, "capacity": number },
      "slot_3": { "type": string, "capacity": number }
    },
    "bonus": {
        "name": string,
        // Rest are optional.
        "dmg_decrease": number / percentage,
        "xp": number / percentage,
        "critical": number / percentage,
        "army_strength": number / percentage,
        "army_dmg": number / percentage,
        "resurrect": number / percentage,
        "poison": number / percentage,
        "direct": number / percentage,
        "burn": number,
        "initiative": number
    }
}, ...]
```

## Masteries
```js
[{
    "name": string,
    "info": string,
    "unlock_level": number,
    "bonus": {
        // See masteries_bonus.json for all values.
    }
}, ...]
```

## Buildings
```js
[{
    "name": string,
    "info": string,
    "level_cap": number,
    "levels": [
      {
        "level": number,
        "build_time": number, // Seconds
        "cost": { "wood": number, "iron": number, "crop": number },
        "supply": number,
        "bonus": { ??? }
      }, ...]      
}, ...]
```

## Realm
```js
[{ 
    "level": number, 
    "bonus": { 
        "effect": string, 
        "value": number, 
        "type": string // boost or percentage
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
- [ ] Images
    - [ ] Units
    - [ ] Warlords
    - [ ] Masteries


