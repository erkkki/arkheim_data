# Arkheim data in json

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
    "cost": {
      "wood": Int, "iron": Int, "crop": Int
    },
    "training_time": Int // Seconds
}, ...] 
```

## Warlords
```js
[{
    "name": String,
    "race": String,  // Dwarf / Elf
    "speed": Int,
    "morale": Int,
    "slots": { // Type: Infantry / Cavalry / Artillery
      "slot_1": { "type": String, "capacity": Int },
      "slot_2": { "type": String, "capacity": Int },
      "slot_3": { "type": String, "capacity": Int }
    },
    "special_ability": {
      "name": String, 
      "bonus": ???
    }
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
