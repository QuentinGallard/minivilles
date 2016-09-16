# Minivilles




## How to play ?
### Setup
- Each player has :
    -  The 2 starter building (Wheat Field + Bakery)
    - Its monuments not bought (4 in extension 0, 7 in extension 1)

- If extension 0 : 
    - 15 stacks of cards are availables to players. Each stack is made of the same building.
- If extension 1 : 
    - mix the cards and make 10 stacks of cards. Each stack is made of the same building.

- give 3 coins to each player. 
- The other coins are the bank.

- Each player send a dice, the higher start the game

### Playing the game
- Turns playing clockwise from the first player.
- A turn is when a player play.
A turn consist of : 
- The active player throw 1 or 2 dices. 
    - At the beginning of the game, the player can only throw 1 dice.
    - If the player has the _train station_, he can choose to throw 1 or 2 dices
- For every building in front of the players with the value on top is equal of the sum of the thrown dices : 
    - its owner receives eventually money.
    - When several buildings are activated at the same time, they are activated in this order : red > blue > green > violet (So payments are made before the revenues)
    - Transactions are perfomed counterclockwise
    - if a player can not payer all his debt, he pays what he can and is exempt from the rest. (Except if he is a Lannister who always pays his debt)
    - There is no compensation for the player who is not fully paid.
- The active player **CAN** buy a new _building_ from a stack or a _monument_ : 
    - he pays to the bank the value of the card
    - if the card is a monument, its effect is immediat.
    - A player may only have one VIOLET building of every kind.
    - A player may have the other building in several copies

### How to win ?
**the first player who has bought all of his monuments wins.**

## Components

### Building
- id
- dice : array
- cost : int
- gain : int
- receiveFrom : int (1 : bank, 2 : active player, 3 : other player)
- specialRule : boolean (if 1 -> call the service Rule and pass the id of the card)
- buildingTypeId : id
- picture : string
- extensionId : int (default: 0)

### Building Type
- id : int
- picture : string
- name : string (cereals, breeding, craft, sales, factory, maritime)
- colorId : id

### Color
- id : int (1,2,3,4)
- name : string (green, blue, red, violet)

### Dice (not an object, it is just 1 or 2 random 1:6)
- value 

### Monument
- id : int
- name : string
- cost : int
- condition : int (rules in a services)

### Player
- id : int
- rank : int
- name : string
- cards : array

### Game
- id : int
- startAt : datetime
- endAt : datetime
- max_players : int (4-6)
- extension (0-1-2-3) ("Minivilles", "Marina", "Green Valley", "5-6")
- cards : array
- players : array
- winBy : int (playerId), default : null (for stats)

### Turn
- id : int
- activePlayerId : int
- nextPlayerId : int
- previousPlayers : array, precedent is 0, then 1, then 2...

## Initial support
Extension 0 + 1



## Work in Project
- Design Patterns
    - Observer : to call the compute of the gain of each card
    - Strategy : to delegate the gain algorithm of each card
