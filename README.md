# arkheim_data
Arkheim data in json


## Units
```json
[{
    "name": String,
    "race": String, ( Dwarf / Elf )
    "type": String, ( Infantry / Cavalry / Artillery )
    "fighting_strength": Int,
    "iniative": Int,
    "special_ability": {
      "name": String,
      "bonus": ???
    },
    "cost": {
      "wood": Int, "iron": Int, "crop": Int
    },
    "training_time": Int ( seconds )
}] 
```
